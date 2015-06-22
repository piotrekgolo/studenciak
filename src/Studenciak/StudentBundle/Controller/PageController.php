<?php

namespace Studenciak\StudentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\ChoiceList\ObjectChoiceList;

use Studenciak\StudentBundle\Entity\Osoba;
use Studenciak\StudentBundle\Entity\Przedmiot;
use Studenciak\StudentBundle\Entity\Kurs;


class PageController extends Controller
{

	public function indexAction()
	{
		return $this->render('StudenciakBundle:Page:base.html.twig');
	}

	public function przedmiotAction()
	{

		$em = $this->getDoctrine()->getRepository('StudenciakBundle:Przedmiot');
		$przedmioty = $em->findAll();

		return $this->render('StudenciakBundle:Page:extend/przedmiot.html.twig', array('przedmioty' => $przedmioty));
	}

	public function repoAction()
	{
		return $this->render('StudenciakBundle:Page:extend/repo.html.twig');
	}

	public function grupyAction()
	{
		return $this->render('StudenciakBundle:Page:extend/grupy.html.twig');
	}

	public function osobyAction()
	{
		$session = $this->getRequest()->getSession();
		if ($session->get('admin'))
		{
			$em = $this->getDoctrine()->getRepository('StudenciakBundle:Osoba');
			$osoby = $em->findAll();

			return $this->render('StudenciakBundle:Page:extend/osoby.html.twig', array('osoby' => $osoby));
		}
		else
		{
			return $this->redirect($this->generateUrl('login'));
		}
	}

	public function dziennikAction()
	{
		return $this->render('StudenciakBundle:Page:extend/dziennik.html.twig');
	}

	public function profilAction()
	{
		$session = $this->getRequest()->getSession();
		if (!$session->get('email'))
			return $this->redirect($this->generateUrl('course'));

		return $this->render('StudenciakBundle:Page:extend/profil.html.twig');
	}

	public function logoutAction()
	{
		$session = $this->getRequest()->getSession();
		if (!$session->get('email'))
			return $this->redirect($this->generateUrl('login'));

		return $this->render('StudenciakBundle:Page:extend/logout.html.twig');
	}

	public function loginAction()
	{
		$session = $this->getRequest()->getSession();
		if ($session->get('email'))
			return $this->redirect($this->generateUrl('profile'));

		return $this->render('StudenciakBundle:Page:extend/login.html.twig');
	}

	public function AjaxUpdateDataAction()
	{
		$request = $this->container->get('request');
		$name = $request->request->get('name');
		$image = $request->request->get('image');
		$email = $request->request->get('email');


		$akceptowany = $this->getDoctrine()->getRepository('StudenciakBundle:Osoba')->findOneByEmail($email);

		if (!$akceptowany)
		{
			$response = array("code" => 'niezarejestrowany');

			$osoba = new Osoba();

			$osoba->SetNazwisko($name);
			$osoba->SetEmail($email);
			$osoba->SetZdjecie($image);
			$osoba->SetAdmin(0);
			$osoba->SetAktywny(0);

			$em = $this->getDoctrine()->getManager();
			$em->persist($osoba);
			$em->flush();
		}

		else
		{
			if ($akceptowany->getAktywny() == 0)
				$response = array("code" => 'niezaakceptowany');
			else
			{
				$response = array("code" => 'akceptowany');

				$session = $this->getRequest()->getSession();
				$session->set('name', $name);
				$session->set('image', $image);
				$session->set('email', $email);
				$session->set('admin', $akceptowany->getAdmin());

			}
		}
		return new Response(json_encode($response));
	}

	public function logoutSessionAction()
	{
		$session = $this->getRequest()->getSession();
		if ($session->get('email'))
		{
			$session->remove('name');
			$session->remove('image');
			$session->remove('email');
			$session->remove('admin');
		}
		return $this->redirect($this->generateUrl('przedmiot'));
	}

	public function osobaUsunAction($id)
	{
		$repo = $this->getDoctrine()->getRepository('StudenciakBundle:Osoba');
		$osoba = $repo->find($id);

		return $this->render('StudenciakBundle:Page:extend/usun.html.twig', array('osoba' => $osoba));
	}

	public function osobaUsuwanieAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$repo = $this->getDoctrine()->getRepository('StudenciakBundle:Osoba');
		$osoba = $repo->find($id);
		$em->remove($osoba);
		$em->flush();

		return $this->redirect($this->generateUrl('osoby'));
	}

	public function osobaAdminAction($tryb, $id)
	{
		$em = $this->getDoctrine()->getManager();
		$osoba = $em->getRepository('StudenciakBundle:Osoba')->find($id);

		if (!$osoba) {
			return $this->redirect($this->generateUrl('osoby'));
		}

		$osoba->setAdmin($tryb);
		$em->flush();

		return $this->redirect($this->generateUrl('osoby'));
	}

	public function aktywujAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$osoba = $em->getRepository('StudenciakBundle:Osoba')->find($id);

		if (!$osoba) {
			return $this->redirect($this->generateUrl('osoby'));
		}

		$osoba->setAktywny(1);
		$em->flush();

		return $this->redirect($this->generateUrl('osoby'));
	}

	public function przedmiotDodajAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();

		$session = $this->getRequest()->getSession();
		if ($session->get('admin'))
		{
			$osoba = $em->getRepository('StudenciakBundle:Osoba')->findOneByEmail($session->get('email'));	//pobieramy siebie z bazy

			$przedmiot = new Przedmiot();
			$przedmiot->setIdOsoby($osoba);			//dodajemy siebie jako prowadzącego przedmiot

			$form = $this->createFormBuilder($przedmiot)
			->add('nazwa', 'text', array('label'  => 'Nazwa przedmiotu', 'max_length' => 255))
			->add('haslo', 'text', array('label'  => 'Hasło do przedmiotu', 'max_length' => 255))
			->add('semestr', 'integer', array('label'  => 'Semestr', 'data' => 1))
			->getForm();

			$form->handleRequest($request);
			if ($form->isValid()) {

				$task = $form->getData();
				$em->persist($task);
				$em->flush();

				return $this->redirect($this->generateUrl('przedmiotPokaz', array('id' => $przedmiot->getIdPrzedmiotu())));
			}

			return $this->render('StudenciakBundle:Page:extend/przedmiotDodaj.html.twig', array('form' => $form->createView()));
		}

		else
			return $this->redirect($this->generateUrl('przedmiot'));
	}

	public function przedmiotPokazAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$przedmiot = $em->getRepository('StudenciakBundle:Przedmiot')->find($id);
		$kursy = $em->getRepository('StudenciakBundle:Kurs')->findBy(array('id_przedmiotu' => $id));

		return $this->render('StudenciakBundle:Page:extend/przedmiotPokaz.html.twig', array('przedmiot'=>$przedmiot, 'kursy' => $kursy));
	}



	public function przedmiotKursDodajAction(Request $request, $id_przedmiotu)
	{
		$em = $this->getDoctrine()->getManager();

		$session = $this->getRequest()->getSession();
		if ($session->get('admin'))
		{
			$przedmiot = $em->getRepository('StudenciakBundle:Przedmiot')->find($id_przedmiotu);
			$nauczyciele = $em->getRepository('StudenciakBundle:Osoba')->findBy(array('admin' => 1));	//pobieramy nauczycieli

			$wybor_nauczycieli = new ObjectChoiceList($nauczyciele, 'nazwisko', array(), null, 'id_osoby');	//lista wyboru nauczycieli

			$kurs = new Kurs();
			$kurs->setIdPrzedmiotu($przedmiot);			//id przedmiotu do ktorego dodajemy

			$form = $this->createFormBuilder($kurs)
			->add('id_osoby', 'choice', array('label'  => 'Prowadzący', 
				'choice_list' => $wybor_nauczycieli))
			->add('typ_zajec', 'choice', array('label'  => 'Typ zajęć', 
				'choices' => array('w' => 'wykład','c' => 'ćwiczenia', 'l' => 'laboratorium', 'p'=> 'projekt')))
			->add('sala', 'text', array('label'  => 'Sala', 'max_length' => 45))
			->add('termin', 'datetime', array('label'  => 'Pierwsze zajęcia'))
			->getForm();



			$form->handleRequest($request);
			if ($form->isValid()) {
			
				$task = $form->getData();
				$em->persist($task);
				$em->flush();

				return $this->redirect($this->generateUrl('przedmiotPokaz', array('id' => $id_przedmiotu)));
			}

			return $this->render('StudenciakBundle:Page:extend/przedmiotKursDodaj.html.twig', array('form' => $form->createView()));
		}

		else
			return $this->redirect($this->generateUrl('przedmiot'));
	}

}
