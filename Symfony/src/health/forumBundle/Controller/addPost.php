<?php
namespace health\forumBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AddController extends controller
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('topic', 'content');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'helath\forumBundle\Entity\forum'
        ));
    }

    public function redirect()
    {
        header('Location: /HealthApp/Symfony/web/app_dev.php/newpost');
    }

}
/**
 * Created by PhpStorm.
 * User: alannahholder
 * Date: 2014-06-16
 * Time: 9:01 AM
 */ 