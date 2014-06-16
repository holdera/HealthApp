<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'healthuser_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'health\\userBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'health_resources_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'health\\ResourcesBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'health_admin_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'health\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'health_detox_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\DetoxBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/detox',    ),  ),  4 =>   array (  ),),
        'health_lifestyle_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\LifestyleBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lifestyle',    ),  ),  4 =>   array (  ),),
        'healthforum_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'health\\forumBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'healthhealth_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\healthUserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'Contest' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\healthUserBundle\\Controller\\ContestController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contest',    ),  ),  4 =>   array (  ),),
        'life' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'healthhealthUserBundle:Life:show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lifestyle',    ),  ),  4 =>   array (  ),),
        'Exercise' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\healthUserBundle\\Controller\\ExerciseController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exercise',    ),  ),  4 =>   array (  ),),
        'Upper' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\healthUserBundle\\Controller\\UpperController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/upperbody',    ),  ),  4 =>   array (  ),),
        'Lower' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\healthUserBundle\\Controller\\LowerController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lowerbody',    ),  ),  4 =>   array (  ),),
        'Midsection' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\healthUserBundle\\Controller\\MidsectionController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/midsection',    ),  ),  4 =>   array (  ),),
        'Detox' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\DetoxBundle\\Controller\\DetoxController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/detox',    ),  ),  4 =>   array (  ),),
        'Flush' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\DetoxBundle\\Controller\\flushController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/flush',    ),  ),  4 =>   array (  ),),
        'Liquid' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\DetoxBundle\\Controller\\liquidController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liquid',    ),  ),  4 =>   array (  ),),
        'Vegan' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\DetoxBundle\\Controller\\veganController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vegan',    ),  ),  4 =>   array (  ),),
        'Forum' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\forumBundle\\Controller\\ForumController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forum',    ),  ),  4 =>   array (  ),),
        'Create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\forumBundle\\Controller\\CreateController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newpost',    ),  ),  4 =>   array (  ),),
        'Resource' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\ResourcesBundle\\Controller\\ResourceController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resource',    ),  ),  4 =>   array (  ),),
        'Finder' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\ResourcesBundle\\Controller\\GymController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/findgym',    ),  ),  4 =>   array (  ),),
        'Video' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\ResourcesBundle\\Controller\\VideoController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/videos',    ),  ),  4 =>   array (  ),),
        'Sample' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\LifestyleBundle\\Controller\\SampleController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/healthsample',    ),  ),  4 =>   array (  ),),
        'Greens' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\LifestyleBundle\\Controller\\GreensController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/greenlean',    ),  ),  4 =>   array (  ),),
        'Cheat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\LifestyleBundle\\Controller\\CheatController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cheat-generator',    ),  ),  4 =>   array (  ),),
        'register_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\userBundle\\Controller\\RegisterController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),),
        'account_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\userBundle\\Controller\\RegisterController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/create',    ),  ),  4 =>   array (  ),),
        'Login_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\userBundle\\Controller\\LoginController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'Login_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\userBundle\\Controller\\LoginController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'Recover_recover' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\userBundle\\Controller\\RecoverController::recoverAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recover',    ),  ),  4 =>   array (  ),),
        'Recover_security' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\userBundle\\Controller\\RecoverController::securityAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recover/security',    ),  ),  4 =>   array (  ),),
        'Recover_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\userBundle\\Controller\\RecoverController::passwordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recover/password',    ),  ),  4 =>   array (  ),),
        'User_cpassword' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\userBundle\\Controller\\UserController::cpasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cpassword',    ),  ),  4 =>   array (  ),),
        'Recipe_addrecipe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\userBundle\\Controller\\RecipeController::addrecipeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addrecipe',    ),  ),  4 =>   array (  ),),
        'Recipe_showrecipe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\userBundle\\Controller\\RecipeController::showrecipeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/showrecipe',    ),  ),  4 =>   array (  ),),
        'Upload_upload' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'health\\userBundle\\Controller\\UploadController::uploadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/upload',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
