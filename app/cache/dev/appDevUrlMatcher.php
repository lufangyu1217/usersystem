<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UserController::listPresentAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/user')) {
                if (0 === strpos($pathinfo, '/admin/users')) {
                    // admin_user_present_list
                    if ($pathinfo === '/admin/users/present') {
                        return array (  '_controller' => 'AppBundle\\Controller\\UserController::listPresentAction',  '_route' => 'admin_user_present_list',);
                    }

                    // admin_user_demission_list
                    if ($pathinfo === '/admin/users/demission') {
                        return array (  '_controller' => 'AppBundle\\Controller\\UserController::listDemissionAction',  '_route' => 'admin_user_demission_list',);
                    }

                }

                // admin_user_status_change
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/change/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_status_change')), array (  '_controller' => 'AppBundle\\Controller\\UserController::changeJobStatusAction',));
                }

                // admin_user_add
                if ($pathinfo === '/admin/user/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::createUserAction',  '_route' => 'admin_user_add',);
                }

                // admin_user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editUserAction',));
                }

                // admin_user_basic_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/show/basic$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_basic_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showBasicAction',));
                }

                // admin_user_family_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/show/family$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_family_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showFamilyMembersAction',));
                }

                // admin_user_learn_show
                if (preg_match('#^/admin/user(?P<id>[^/]++)/show/learn$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_learn_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showEduExperiencesAction',));
                }

                // admin_user_other_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/show/other$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_other_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showOtherInfoAction',));
                }

                // admin_user_work_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/show/work$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_work_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showWorkExperiencesAction',));
                }

                // admin_user_family_info_add
                if ($pathinfo === '/admin/user/family/info/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::addUserFamilyInfoAction',  '_route' => 'admin_user_family_info_add',);
                }

                // admin_user_learn_info_add
                if ($pathinfo === '/admin/user/learn/info/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::addUserLearnInfoAction',  '_route' => 'admin_user_learn_info_add',);
                }

                // admin_user_work_info_add
                if ($pathinfo === '/admin/user/work/info/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::addUserWorkInfoAction',  '_route' => 'admin_user_work_info_add',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/department')) {
                // admin_list_department
                if ($pathinfo === '/admin/department/list') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::listAction',  '_route' => 'admin_list_department',);
                }

                // admin_add_department
                if ($pathinfo === '/admin/department/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::addAction',  '_route' => 'admin_add_department',);
                }

                // admin_delete_department
                if (preg_match('#^/admin/department/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_department')), array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::deleteAction',));
                }

                // admin_edit_department
                if (preg_match('#^/admin/department/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit_department')), array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user_number_check
                if ($pathinfo === '/admin/user/number/check') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::checkNumberForCreateAction',  '_route' => 'admin_user_number_check',);
                }

                // admin_user_role_change
                if ($pathinfo === '/admin/user/role/change') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::changeUserRoleAction',  '_route' => 'admin_user_role_change',);
                }

                // admin_user_import
                if ($pathinfo === '/admin/user/improt') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::improtAction',  '_route' => 'admin_user_import',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
