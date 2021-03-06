<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/2cd4855')) {
                // _assetic_2cd4855
                if ($pathinfo === '/css/2cd4855.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2cd4855',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2cd4855',);
                }

                if (0 === strpos($pathinfo, '/css/2cd4855_part_1_')) {
                    if (0 === strpos($pathinfo, '/css/2cd4855_part_1_bootstrap')) {
                        // _assetic_2cd4855_0
                        if ($pathinfo === '/css/2cd4855_part_1_bootstrap-responsive_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2cd4855',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2cd4855_0',);
                        }

                        // _assetic_2cd4855_1
                        if ($pathinfo === '/css/2cd4855_part_1_bootstrap_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2cd4855',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_2cd4855_1',);
                        }

                        // _assetic_2cd4855_2
                        if ($pathinfo === '/css/2cd4855_part_1_bootstrap.min_3.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2cd4855',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_2cd4855_2',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/css/2cd4855_part_1_innerPage_')) {
                        // _assetic_2cd4855_3
                        if ($pathinfo === '/css/2cd4855_part_1_innerPage_4.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2cd4855',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_2cd4855_3',);
                        }

                        // _assetic_2cd4855_4
                        if ($pathinfo === '/css/2cd4855_part_1_innerPage_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2cd4855',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_2cd4855_4',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/css/2cd4855_part_1_styles_')) {
                        // _assetic_2cd4855_5
                        if ($pathinfo === '/css/2cd4855_part_1_styles_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2cd4855',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_2cd4855_5',);
                        }

                        // _assetic_2cd4855_6
                        if ($pathinfo === '/css/2cd4855_part_1_styles_7.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2cd4855',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_2cd4855_6',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/4f9dc43')) {
                // _assetic_4f9dc43
                if ($pathinfo === '/css/4f9dc43.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4f9dc43',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4f9dc43',);
                }

                if (0 === strpos($pathinfo, '/css/4f9dc43_part_1_')) {
                    // _assetic_4f9dc43_0
                    if ($pathinfo === '/css/4f9dc43_part_1_bootstrap.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4f9dc43',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4f9dc43_0',);
                    }

                    if (0 === strpos($pathinfo, '/css/4f9dc43_part_1_innerPage_')) {
                        // _assetic_4f9dc43_1
                        if ($pathinfo === '/css/4f9dc43_part_1_innerPage_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4f9dc43',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_4f9dc43_1',);
                        }

                        // _assetic_4f9dc43_2
                        if ($pathinfo === '/css/4f9dc43_part_1_innerPage_3.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4f9dc43',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_4f9dc43_2',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/css/4f9dc43_part_1_styles_')) {
                        // _assetic_4f9dc43_3
                        if ($pathinfo === '/css/4f9dc43_part_1_styles_4.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4f9dc43',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_4f9dc43_3',);
                        }

                        // _assetic_4f9dc43_4
                        if ($pathinfo === '/css/4f9dc43_part_1_styles_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4f9dc43',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_4f9dc43_4',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/8b11947')) {
                // _assetic_8b11947
                if ($pathinfo === '/css/8b11947.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8b11947',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8b11947',);
                }

                if (0 === strpos($pathinfo, '/css/8b11947_part_1_')) {
                    // _assetic_8b11947_0
                    if ($pathinfo === '/css/8b11947_part_1_bootstrap.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8b11947',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8b11947_0',);
                    }

                    if (0 === strpos($pathinfo, '/css/8b11947_part_1_li')) {
                        if (0 === strpos($pathinfo, '/css/8b11947_part_1_life_styles_')) {
                            // _assetic_8b11947_1
                            if ($pathinfo === '/css/8b11947_part_1_life_styles_2.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '8b11947',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_8b11947_1',);
                            }

                            // _assetic_8b11947_2
                            if ($pathinfo === '/css/8b11947_part_1_life_styles_3.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '8b11947',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_8b11947_2',);
                            }

                        }

                        // _assetic_8b11947_3
                        if ($pathinfo === '/css/8b11947_part_1_liquid-slider_4.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8b11947',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_8b11947_3',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/css/8b11947_part_1_styles_')) {
                        // _assetic_8b11947_4
                        if ($pathinfo === '/css/8b11947_part_1_styles_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8b11947',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_8b11947_4',);
                        }

                        // _assetic_8b11947_5
                        if ($pathinfo === '/css/8b11947_part_1_styles_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8b11947',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_8b11947_5',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // healthuser_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'healthuser_homepage')), array (  '_controller' => 'health\\userBundle\\Controller\\DefaultController::indexAction',));
            }

            // health_resources_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'health_resources_homepage')), array (  '_controller' => 'health\\ResourcesBundle\\Controller\\DefaultController::indexAction',));
            }

            // health_admin_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'health_admin_homepage')), array (  '_controller' => 'health\\AdminBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // health_detox_homepage
        if ($pathinfo === '/detox') {
            return array (  '_controller' => 'health\\DetoxBundle\\Controller\\DefaultController::indexAction',  '_route' => 'health_detox_homepage',);
        }

        // health_lifestyle_homepage
        if ($pathinfo === '/lifestyle') {
            return array (  '_controller' => 'health\\LifestyleBundle\\Controller\\DefaultController::indexAction',  '_route' => 'health_lifestyle_homepage',);
        }

        // healthforum_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'healthforum_homepage')), array (  '_controller' => 'health\\forumBundle\\Controller\\DefaultController::indexAction',));
        }

        // healthhealth_user
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'healthhealth_user');
            }

            return array (  '_controller' => 'health\\healthUserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'healthhealth_user',);
        }

        // Contest
        if ($pathinfo === '/contest') {
            return array (  '_controller' => 'health\\healthUserBundle\\Controller\\ContestController::showAction',  '_route' => 'Contest',);
        }

        // life
        if ($pathinfo === '/lifestyle') {
            return array (  '_controller' => 'healthhealthUserBundle:Life:show',  '_route' => 'life',);
        }

        // Exercise
        if ($pathinfo === '/exercise') {
            return array (  '_controller' => 'health\\healthUserBundle\\Controller\\ExerciseController::showAction',  '_route' => 'Exercise',);
        }

        // Upper
        if ($pathinfo === '/upperbody') {
            return array (  '_controller' => 'health\\healthUserBundle\\Controller\\UpperController::showAction',  '_route' => 'Upper',);
        }

        // Lower
        if ($pathinfo === '/lowerbody') {
            return array (  '_controller' => 'health\\healthUserBundle\\Controller\\LowerController::showAction',  '_route' => 'Lower',);
        }

        // Midsection
        if ($pathinfo === '/midsection') {
            return array (  '_controller' => 'health\\healthUserBundle\\Controller\\MidsectionController::showAction',  '_route' => 'Midsection',);
        }

        // Detox
        if ($pathinfo === '/detox') {
            return array (  '_controller' => 'health\\DetoxBundle\\Controller\\DetoxController::showAction',  '_route' => 'Detox',);
        }

        // Flush
        if ($pathinfo === '/flush') {
            return array (  '_controller' => 'health\\DetoxBundle\\Controller\\flushController::showAction',  '_route' => 'Flush',);
        }

        // Liquid
        if ($pathinfo === '/liquid') {
            return array (  '_controller' => 'health\\DetoxBundle\\Controller\\liquidController::showAction',  '_route' => 'Liquid',);
        }

        // Vegan
        if ($pathinfo === '/vegan') {
            return array (  '_controller' => 'health\\DetoxBundle\\Controller\\veganController::showAction',  '_route' => 'Vegan',);
        }

        // Forum
        if ($pathinfo === '/forum') {
            return array (  '_controller' => 'health\\forumBundle\\Controller\\ForumController::showAction',  '_route' => 'Forum',);
        }

        // Create
        if ($pathinfo === '/newpost') {
            return array (  '_controller' => 'health\\forumBundle\\Controller\\CreateController::createAction',  '_route' => 'Create',);
        }

        // Resource
        if ($pathinfo === '/resource') {
            return array (  '_controller' => 'health\\ResourcesBundle\\Controller\\ResourceController::showAction',  '_route' => 'Resource',);
        }

        // Finder
        if ($pathinfo === '/findgym') {
            return array (  '_controller' => 'health\\ResourcesBundle\\Controller\\GymController::showAction',  '_route' => 'Finder',);
        }

        // Video
        if ($pathinfo === '/videos') {
            return array (  '_controller' => 'health\\ResourcesBundle\\Controller\\VideoController::showAction',  '_route' => 'Video',);
        }

        // Sample
        if ($pathinfo === '/healthsample') {
            return array (  '_controller' => 'health\\LifestyleBundle\\Controller\\SampleController::showAction',  '_route' => 'Sample',);
        }

        // Greens
        if ($pathinfo === '/greenlean') {
            return array (  '_controller' => 'health\\LifestyleBundle\\Controller\\GreensController::showAction',  '_route' => 'Greens',);
        }

        // Cheat
        if ($pathinfo === '/cheat-generator') {
            return array (  '_controller' => 'health\\LifestyleBundle\\Controller\\CheatController::showAction',  '_route' => 'Cheat',);
        }

        if (0 === strpos($pathinfo, '/register')) {
            // register_register
            if ($pathinfo === '/register') {
                return array (  '_controller' => 'health\\userBundle\\Controller\\RegisterController::registerAction',  '_route' => 'register_register',);
            }

            // account_create
            if ($pathinfo === '/register/create') {
                return array (  '_controller' => 'health\\userBundle\\Controller\\RegisterController::createAction',  '_route' => 'account_create',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // Login_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'health\\userBundle\\Controller\\LoginController::indexAction',  '_route' => 'Login_login',);
            }

            // Login_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'health\\userBundle\\Controller\\LoginController::logoutAction',  '_route' => 'Login_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/recover')) {
            // Recover_recover
            if ($pathinfo === '/recover') {
                return array (  '_controller' => 'health\\userBundle\\Controller\\RecoverController::recoverAction',  '_route' => 'Recover_recover',);
            }

            // Recover_security
            if ($pathinfo === '/recover/security') {
                return array (  '_controller' => 'health\\userBundle\\Controller\\RecoverController::securityAction',  '_route' => 'Recover_security',);
            }

            // Recover_password
            if ($pathinfo === '/recover/password') {
                return array (  '_controller' => 'health\\userBundle\\Controller\\RecoverController::passwordAction',  '_route' => 'Recover_password',);
            }

        }

        // User_cpassword
        if ($pathinfo === '/cpassword') {
            return array (  '_controller' => 'health\\userBundle\\Controller\\UserController::cpasswordAction',  '_route' => 'User_cpassword',);
        }

        // Recipe_addrecipe
        if ($pathinfo === '/addrecipe') {
            return array (  '_controller' => 'health\\userBundle\\Controller\\RecipeController::addrecipeAction',  '_route' => 'Recipe_addrecipe',);
        }

        // Recipe_showrecipe
        if ($pathinfo === '/showrecipe') {
            return array (  '_controller' => 'health\\userBundle\\Controller\\RecipeController::showrecipeAction',  '_route' => 'Recipe_showrecipe',);
        }

        // Recipe_editrecipe
        if ($pathinfo === '/editrecipe') {
            return array (  '_controller' => 'health\\userBundle\\Controller\\RecipeController::editrecipeAction',  '_route' => 'Recipe_editrecipe',);
        }

        // Recipe_updaterecipe
        if ($pathinfo === '/updaterecipe') {
            return array (  '_controller' => 'health\\userBundle\\Controller\\RecipeController::updaterecipeAction',  '_route' => 'Recipe_updaterecipe',);
        }

        // Recipe_deleterecipe
        if ($pathinfo === '/deleterecipe') {
            return array (  '_controller' => 'health\\userBundle\\Controller\\RecipeController::deleterecipeAction',  '_route' => 'Recipe_deleterecipe',);
        }

        // Profile_edit
        if ($pathinfo === '/editprofile') {
            return array (  '_controller' => 'health\\userBundle\\Controller\\ProfileController::editAction',  '_route' => 'Profile_edit',);
        }

        // Profile_addprofile
        if ($pathinfo === '/addprofile') {
            return array (  '_controller' => 'health\\userBundle\\Controller\\ProfileController::addprofileAction',  '_route' => 'Profile_addprofile',);
        }

        // Profile_updateprofile
        if ($pathinfo === '/updateprofile') {
            return array (  '_controller' => 'health\\userBundle\\Controller\\ProfileController::updateprofileAction',  '_route' => 'Profile_updateprofile',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
