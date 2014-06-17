<?php
//src/health/userBundle/Controller/RecipeController

namespace health\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use health\userBundle\Entity\Recipe;

class RecipeController extends Controller
{
	public function addrecipeAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $em->getRepository('healthuserBundle:Recipe');
		if($session->has('userid'))
		{
			if($request->getMethod() == 'POST')
			{
				$title = $request->get('title');
				$category = $request->get('category');
				$ingredients = $request->get('ingredients');
				$procedure = $request->get('procedure');
				$image = $request->get('image');
				$postedBy = $session->get('userid');

				$recipe = new Recipe();
				$recipe->setTitle($title);
				$recipe->setCategory($category);
				$recipe->setIngredients($ingredients);
				$recipe->setRProcedure($procedure);
				$recipe->setImage($image);
				$recipe->updatedTimes();
				$recipe->setPostedBy($postedBy);

				$em->persist($recipe);
				$em->flush();
				return $this->render('healthuserBundle:Recipe:addrecipe.html.twig', array('name'=>'Recipe has been successfully added'));
			}
			else
			{
				return $this->render('healthuserBundle:Recipe:addrecipe.html.twig');
			}	
		}
		else
		{
			return $this->render('healthuserBundle:Login:login.html.twig');
		}
	}


	public function showrecipeAction()
	{
		$session = $this->getRequest()->getSession();
		
		if($session->has('userid'))
		{			
			$repository = $this->getDoctrine()
				->getRepository('healthuserBundle:Recipe');
			$query = $repository->createQueryBuilder('r')
				->where("r.postedBy = :postedBy")
				->setParameter('postedBy', $session->get('userid'))
				->getQuery();
			$recipes = $query->getResult();

			return $this->render('healthuserBundle:Recipe:editrecipe.html.twig', array('recipe'=>$recipes));
		}
		else
		{
			return $this->render('healthuserBundle:Login:login.html.twig');
		}
	}

	public function editrecipeAction(Request $request)
	{
		$session = $this->getRequest()->getSession();
		
		if($session->has('userid'))
		{			
			if($request->getMethod() == 'POST')
			{
			$repository = $this->getDoctrine()
				->getRepository('healthuserBundle:Recipe');
			$query = $repository->createQueryBuilder('r')
				->where("r.id = :Id")
				->setParameter('Id', $request->get('id'))
				->getQuery();
			$recipes = $query->getResult();

			return $this->render('healthuserBundle:Recipe:showrecipe.html.twig', array('recipe'=>$recipes));
			}
			return $this->render('healthuserBundle:Recipe:editrecipe.html.twig');
		}
		else
		{
			return $this->render('healthuserBundle:Login:login.html.twig');
		}
	}

		public function updaterecipeAction(Request $request)
		{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getEntityManager();
		
		if($session->has('userid'))
		{
			if($request->getMethod() == 'POST')
			{
				$id = $request->get('id');
				$title = $request->get('title');
				$category = $request->get('category');
				$ingredients = $request->get('ingredients');
				$procedure = $request->get('procedure');
				$image = $request->get('image');
				$postedBy = $session->get('userid');

				$recipe = $em->getRepository('healthuserBundle:Recipe')->find($id);
				$recipe->setTitle($title);
				$recipe->setCategory($category);
				$recipe->setIngredients($ingredients);
				$recipe->setRProcedure($procedure);
				$recipe->setImage($image);
				$recipe->updatedTimes();
				$recipe->setPostedBy($postedBy);

				
				$em->flush();
				return $this->redirect($this->generateUrl('Recipe_showrecipe'));
			}
			else
			{
				return $this->redirect($this->generateUrl('Recipe_updaterecipe'));
			}	
		}
		else
		{
			return $this->render('healthuserBundle:Login:login.html.twig');
		}
	}

	public function deleterecipeAction(Request $request)
		{
		$session = $this->getRequest()->getSession();
		$em = $this->getDoctrine()->getEntityManager();
		
		if($session->has('userid'))
		{
			if($request->getMethod() == 'POST')
			{
				$id = $request->get('id');
				

				$recipe = $em->getRepository('healthuserBundle:Recipe')->find($id);
				$em->remove($recipe);
				$em->flush();
				return $this->redirect($this->generateUrl('Recipe_showrecipe'));
			}
			else
			{
				return $this->redirect($this->generateUrl('Recipe_updaterecipe'));
			}	
		}
		else
		{
			return $this->render('healthuserBundle:Login:login.html.twig');
		}
	}

}
?>