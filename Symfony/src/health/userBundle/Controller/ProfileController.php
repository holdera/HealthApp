<?php
//src/health/userBundle/Controller/ProfileController

namespace health\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use health\userBundle\Entity\UserProfile;

class ProfileController extends Controller
{
	public function editAction()
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $em->getRepository('healthuserBundle:UserProfile');
		$user = $repository->findOneBy(array('email' => $session->get('userid')));

		
			if($user)
			{

			$query = $repository->createQueryBuilder('p')
				->where("p.email = :Id")
				->setParameter('Id', $session->get('userid'))
				->getQuery();
			$profiles = $query->getResult();

			return $this->render('healthuserBundle:Profile:editprofiles.html.twig', array('profile'=>$profiles));
			}

			else
			{
				$repository = $this->getDoctrine()
					->getRepository('healthuserBundle:UsersInfo');
				$query = $repository->createQueryBuilder('p')
				->where("p.email = :Id")
				->setParameter('Id', $session->get('userid'))
				->getQuery();
			$profiles = $query->getResult();

			return $this->render('healthuserBundle:Profile:editprofile.html.twig', array('profile'=>$profiles));
			}
		
	}

	public function addprofileAction(Request $request)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $em->getRepository('healthuserBundle:UserProfile');
		$user = $repository->findOneBy(array('email' => $request->get('email')));

		if($request->getMethod() == 'POST')
		{
			if($user)
			{
				return $this->redirect($this->generateUrl('Profile_edit'));;
			}
			else
			{
				$firstname = $request->get('firstname');
				$lastname = $request->get('lastname');
				$gender = $request->get('gender');
				$dob = $request->get('dob');
				$email = $request->get('email');
				$cnumber = $request->get('cnumber');
				$city = $request->get('city');
				$country = $request->get('country');
				$province = $request->get('province');
				$height = $request->get('height');
				$weight = $request->get('weight');
				$body_type = $request->get('bodyType');
				$dweight = $request->get('dweight');
				$hproblem = $request->get('hproblem');
				$alevel = $request->get('alevel');
				

				$user = new UserPrfile();
				$user->setFirstName($firstname);
				$user->setLastName($lastname);
				$user->setGender($gender);
				$user->setDob($dob);
				$user->setEmail($email);
				$user->setCnumber($cnumber);
				$user->setCity($city);
				$user->setCountry($country);
				$user->setProvince($province);
				$user->setHeight($height);
				$user->setWeight($weight);
				$user->setBodyType($body_type);
				$user->setDweight($dweight);
				$user->setHproblem($hproblem);
				$user->setAlevel($alevel);
				
				$em->persist($user);
				$em->flush();
				return new Response('Your Profile has been created.');
			}
		}

		return $this->redirect($this->generateUrl('Profile_edit'));;
	}

	public function updateprofileAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $em->getRepository('healthuserBundle:UserProfile');

	if($session->has('userid'))
	{
		if($request->getMethod() == 'POST')
		{
			
				$firstname = $request->get('firstname');
				$lastname = $request->get('lastname');
				$gender = $request->get('gender');
				$dob = $request->get('dob');
				$email = $request->get('email');
				$cnumber = $request->get('cnumber');
				$city = $request->get('city');
				$country = $request->get('country');
				$province = $request->get('province');
				$height = $request->get('height');
				$weight = $request->get('weight');
				$body_type = $request->get('bodyType');
				$dweight = $request->get('dweight');
				$hproblem = $request->get('hproblem');
				$alevel = $request->get('alevel');
				$id = $session->get('userid');

				$user = $em->getRepository('healthuserBundle:UserProfile')->find($id);
				$user->setFirstName($firstname);
				$user->setLastName($lastname);
				$user->setGender($gender);
				$user->setDob($dob);
				$user->setEmail($email);
				$user->setCnumber($cnumber);
				$user->setCity($city);
				$user->setCountry($country);
				$user->setProvince($province);
				$user->setHeight($height);
				$user->setWeight($weight);
				$user->setBodyType($body_type);
				$user->setDweight($dweight);
				$user->setHproblem($hproblem);
				$user->setAlevel($alevel);
				
				$em->persist($user);
				$em->flush();
				return new Response('Your Profile has been updated.');
			
		}

		return $this->redirect($this->generateUrl('Profile_edit'));;
	}
	else
		{
			return $this->render('healthuserBundle:Login:login.html.twig');
		}
	}
}