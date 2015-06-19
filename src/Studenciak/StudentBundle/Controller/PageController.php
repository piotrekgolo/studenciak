<?php

namespace Studenciak\StudentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Studenciak\StudentBundle\Entity\Osoba;

class PageController extends Controller
{

	public function indexAction()
	{
		return $this->render('StudenciakBundle:Page:base.html.twig');
	}

	public function courseAction()
	{
		return $this->render('StudenciakBundle:Page:extend/course.html.twig');
	}

	public function repoAction()
	{
		return $this->render('StudenciakBundle:Page:extend/repo.html.twig');
	}

	public function groupsAction()
	{
		return $this->render('StudenciakBundle:Page:extend/groups.html.twig');
	}

	public function personsAction()
	{
		$repo = $this->getDoctrine()->getRepository('StudenciakBundle:Osoba');
		$osoby = $repo->findAll();

		return $this->render('StudenciakBundle:Page:extend/persons.html.twig', array('osoby' => $osoby));
	}

	public function diaryAction()
	{
		return $this->render('StudenciakBundle:Page:extend/diary.html.twig');
	}

	public function profileAction()
	{
		$session = $this->getRequest()->getSession();
		if (!$session->get('email'))
			return $this->redirect($this->generateUrl('course'));

		return $this->render('StudenciakBundle:Page:extend/profile.html.twig');
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
		return $this->redirect($this->generateUrl('course'));
	}

	public function usunAction($id)
	{
		$repo = $this->getDoctrine()->getRepository('StudenciakBundle:Osoba');
		$osoba = $repo->find($id);

		return $this->render('StudenciakBundle:Page:extend/usun.html.twig', array('osoba' => $osoba));
	}

	public function usuwanieAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$repo = $this->getDoctrine()->getRepository('StudenciakBundle:Osoba');
		$osoba = $repo->find($id);
		$em->remove($osoba);
		$em->flush();

		return $this->redirect($this->generateUrl('persons'));
	}

	public function aktywujAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$osoba = $em->getRepository('StudenciakBundle:Osoba')->find($id);

		if (!$osoba) {
			return $this->redirect($this->generateUrl('persons'));
		}

		$osoba->setAktywny(1);
		$em->flush();

		return $this->redirect($this->generateUrl('persons'));
	}

}
