<?php
//src/health/userBundle/Controller/UserController.php

namespace health\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use health\userBundle\Entity\UsersInfo;

class UserController extends Controller
{
	public function cpasswordAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $em->getRepository('healthuserBundle:UsersInfo');
		if($session->has('userid'))
		{
			if($request->getMethod() == 'POST')
			{
				$oldpassword = $request->get('oldpassword');
				$newpassword = $request->get('newpassword');
				$cpassword = $request->get('cpassword');
				$user = $repository->findOneBy(array('email' => $session->get('userid'), 'password' => $oldpassword));
				if($user)
				{
					if($newpassword == $cpassword)
					{
						$user->setPassword($newpassword);
						$em->flush();

						return $this->render('healthuserBundle:User:cpassword.html.twig', array('name' => 'Password has been changed successfully.'));
					}
					else
					{
						return $this->render('healthuserBundle:User:cpassword.html.twig', array('name' => 'Password mismatch.'));
					}
				}
				else
				{
					return $this->render('healthuserBundle:User:cpassword.html.twig', array('name' => 'Please enter the correct password.'));
				}
			}
			else
			{
				return $this->render('healthuserBundle:User:cpassword.html.twig');
			}
		}
		return $this->render('healthuserBundle:Login:login.html.twig');
	}

	public function profileAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $em->getRepository('healthuserBundle:UsersInfo');
		if($session->has('userid'))
		{
			if($request->getMethod() == 'POST')
			{

			}
		}
	}
}
?>