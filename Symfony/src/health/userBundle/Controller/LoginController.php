<?php
//src/health/userBundle/Controller/LoginController.php

namespace health\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use health\userBundle\Entity\UsersInfo;
use health\userBundle\Modals\Login;

class LoginController extends Controller
{
	public function indexAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $em->getRepository('healthuserBundle:UsersInfo');
		if($request->getMethod() == 'POST')
		{
			$session->clear();
			$username = $request->get('username');
			$password = $request->get('password');
			$remember = $request->get('remember');
			$user = $repository->findOneBy(array('email' => $username, 'password' => $password));
			if($user)
			{
				if($remember == 'remember-me')
				{
					$login = new Login();
					$login->setUsername($username);
					$login->setPassword($password);
					$session->set('login', $login);
				}
				return $this->render('healthuserBundle:Login:welcome.html.twig', array('name' => $user->getFirstName(), $session->set('userid', $user->getEmail())));
			}
			else
			{
				return $this->render('healthuserBundle:Login:login.html.twig', array('name' => 'Invalid username or password'));				
			}
			
		}
		else
		{
			if($session->has('login'))
			{
				$login = $session->get('login');
				$username = $login->getUsername();
				$password = $login->getPassword();
				$user = $repository->findOneBy(array('email' => $username, 'password' => $password));
				if($user)
				{
					return $this->render('healthuserBundle:Login:welcome.html.twig', array('name' => $user->getFirstName()));
				}
				else
				{
					return $this->render('healthuserBundle:Login:login.html.twig', array('name' =>'Invalid username or password'));
				}
			}
			return $this->render('healthuserBundle:Login:login.html.twig');
		}
	}


	public function logoutAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
		$session->clear();
		return $this->render('healthuserBundle:Login:login.html.twig');
	}
}

?>