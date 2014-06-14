<?php
//src/health/userBundle/Controller/RecoverController.php

namespace health\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use health\userBundle\Entity\UsersInfo;

class RecoverController extends Controller
{
	public function recoverAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $em->getRepository('healthuserBundle:UsersInfo');
		if($request->getMethod() == 'POST')
		{
			$session->clear();
			$username = $request->get('username');
			$user = $repository->findOneBy(array('email' => $username));
			if($user)
			{
				$session->set('userName', $user->getEmail());
				return $this->render('healthuserBundle:Recover:security.html.twig', array('squestion'=>$user->getSQuestion()));
			}
			else
			{
				return $this->render('healthuserBundle:Recover:recover.html.twig', array('name'=>'Username does not exist. Please enter valid username.') );
			}
		}
		return $this->render('healthuserBundle:Recover:recover.html.twig');

	}


	public function securityAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $em->getRepository('healthuserBundle:UsersInfo');
		$users = $repository->findOneBy(array('email' => $session->get('userName')));
		if($request->getMethod() == 'POST')
		{
			if($session->has('userName'))
			{
				$email = $session->get('userName');
				$sanswer = $request->get('sanswer');
				$user = $repository->findOneBy(array('email' => $email, 'sAnswer'=> $sanswer));
				if($user)
				{
					return $this->render('healthuserBundle:Recover:password.html.twig');
				}
				else
				{
					return $this->render('healthuserBundle:Recover:security.html.twig', array('name'=>'Please enter the correct Security answer', 'squestion'=>$users->getSQuestion()));
				}
			}
			return $this->render('healthuserBundle:Recover:recover.html.twig', array('name'=>'Sorry, your session expires'));
		}
		return $this->render('healthuserBundle:Recover:security.html.twig', array('squestion'=>$users->getSQuestion()));
	}

	public function passwordAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getEntityManager();
		$email = $session->get('userName');
		$user = $em->getRepository('healthuserBundle:UsersInfo')->findOneBy(array('email' => $email));
		if($user)
		{
			$password = $request->get('password');
			$cpassword = $request->get('cpassword');
			if($password == $cpassword)
			{
				$user->setPassword($password);
				$em->flush();
				return $this->render('healthuserBundle:Login:login.html.twig');

			}
			else
			{
				return $this->render('healthuserBundle:Recover:password.html.twig', array('name'=>'Password does not match'));
	
			}

		}
		return $this->render('healthuserBundle:Recover:recover.html.twig', array('name'=>'Your session expired'));
	}
}

?>