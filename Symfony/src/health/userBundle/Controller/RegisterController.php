<?php
//src/health/userBundle/Controller/RegisterController.php
namespace health\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use health\userBundle\Entity\UsersInfo;

class RegisterController extends Controller
{
	public function registerAction(Request $request)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $em->getRepository('healthuserBundle:UsersInfo');
		$user = $repository->findOneBy(array('email' => $request->get('email')));

		if($request->getMethod() == 'POST')
		{
			if($user)
			{
				return $this->render('healthuserBundle:Register:register.html.twig', array('name'=>'email already exists'));
			}
			else
			{
				$firstname = $request->get('firstname');
				$lastname = $request->get('lastname');
				$email = $request->get('email');
				$password = $request->get('password');
				$squestion = $request->get('squestion');
				$sanswer = $request->get('sanswer');

				$user = new UsersInfo();
				$user->setFirstName($firstname);
				$user->setLastName($lastname);
				$user->setEmail($email);
				$user->setPassword($password);
				$user->setSQuestion($squestion);
				$user->setSAnswer($sanswer);

				$em->persist($user);
				$em->flush();
				return new Response('Your account has been created.');
			}
		}

		return $this->render('healthuserBundle:Register:register.html.twig');
	}
}
?>