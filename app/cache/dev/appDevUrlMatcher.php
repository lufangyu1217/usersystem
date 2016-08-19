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

            return array (  '_controller' => 'AppBundle\\Controller\\AuthController::homepageAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AuthController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AuthController::checkAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\AuthController::logoutAction',  '_route' => 'logout',);
            }

        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\AuthController::registerAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/user')) {
                if (0 === strpos($pathinfo, '/admin/users')) {
                    // admin_user_present_list
                    if ($pathinfo === '/admin/users/present') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdminController::listPresentAction',  '_route' => 'admin_user_present_list',);
                    }

                    // admin_user_demission_list
                    if ($pathinfo === '/admin/users/demission') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdminController::listDemissionAction',  '_route' => 'admin_user_demission_list',);
                    }

                }

                // admin_user_status_change
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/change/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_status_change')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::changeJobStatusAction',));
                }

                // admin_user_entry_job
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/entry$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_entry_job')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::entryJobAction',));
                }

                // admin_user_exit_job
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/exit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_exit_job')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::exitJobAction',));
                }

                // admin_user_add
                if ($pathinfo === '/admin/user/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::createUserAction',  '_route' => 'admin_user_add',);
                }

                // admin_user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::editUserAction',));
                }

                // admin_user_certificate
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/certificate/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_certificate')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::certificateAction',));
                }

                // admin_user_family_info_add
                if ($pathinfo === '/admin/user/family/info/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::addUserFamilyInfoAction',  '_route' => 'admin_user_family_info_add',);
                }

                // admin_user_learn_info_add
                if ($pathinfo === '/admin/user/learn/info/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::addUserLearnInfoAction',  '_route' => 'admin_user_learn_info_add',);
                }

                // admin_user_work_info_add
                if ($pathinfo === '/admin/user/work/info/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::addUserWorkInfoAction',  '_route' => 'admin_user_work_info_add',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/department')) {
                // admin_list_department
                if ($pathinfo === '/admin/department/list') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::listAction',  '_route' => 'admin_list_department',);
                }

                // admin_add_department
                if ($pathinfo === '/admin/department/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::createAction',  '_route' => 'admin_add_department',);
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
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::checkNumberForCreateAction',  '_route' => 'admin_user_number_check',);
                }

                // admin_user_role_change
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/role/change$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_role_change')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::changeUserRoleAction',));
                }

                // admin_user_import
                if ($pathinfo === '/admin/user/import') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::importAction',  '_route' => 'admin_user_import',);
                }

                // admin_user_export
                if (0 === strpos($pathinfo, '/admin/user/export') && preg_match('#^/admin/user/export/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_export')), array (  '_controller' => 'AppBundle\\Controller\\ExportController::exportUserListAction',));
                }

                // admin_file_download
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/download/(?P<fileName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_file_download')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::downloadAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_present_list
            if ($pathinfo === '/users/present') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::listPresentAction',  '_route' => 'user_present_list',);
            }

            // user_edit_person
            if (preg_match('#^/user/(?P<id>[^/]++)/edit/person$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit_person')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editPersonAction',));
            }

            // user_upload
            if (preg_match('#^/user/(?P<id>[^/]++)/image/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_upload')), array (  '_controller' => 'AppBundle\\Controller\\UserController::uploadImagesAction',));
            }

            // user_basic_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show/basic$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_basic_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showBasicAction',));
            }

            // file_download
            if (0 === strpos($pathinfo, '/user/file/download') && preg_match('#^/user/file/download/(?P<fileName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'file_download')), array (  '_controller' => 'AppBundle\\Controller\\UserController::downloadAction',));
            }

        }

        if (0 === strpos($pathinfo, '/leader')) {
            if (0 === strpos($pathinfo, '/leader/department')) {
                // department_personnel_list
                if ($pathinfo === '/leader/department/personnel/list') {
                    return array (  '_controller' => 'AppBundle\\Controller\\LeaderController::listPresentAction',  '_route' => 'department_personnel_list',);
                }

                // department_demission_list
                if ($pathinfo === '/leader/department/demission/list') {
                    return array (  '_controller' => 'AppBundle\\Controller\\LeaderController::listDemissionAction',  '_route' => 'department_demission_list',);
                }

                // department_user_basic_show
                if (0 === strpos($pathinfo, '/leader/department/user') && preg_match('#^/leader/department/user/(?P<id>[^/]++)/show/basic$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'department_user_basic_show')), array (  '_controller' => 'AppBundle\\Controller\\LeaderController::showBasicAction',));
                }

            }

            if (0 === strpos($pathinfo, '/leader/user')) {
                // leader_user_family_show
                if (preg_match('#^/leader/user/(?P<id>[^/]++)/show/family$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'leader_user_family_show')), array (  '_controller' => 'AppBundle\\Controller\\LeaderController::showFamilyMembersAction',));
                }

                // leader_user_learn_show
                if (preg_match('#^/leader/user(?P<id>[^/]++)/show/learn$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'leader_user_learn_show')), array (  '_controller' => 'AppBundle\\Controller\\LeaderController::showEduExperiencesAction',));
                }

                // leader_user_other_show
                if (preg_match('#^/leader/user/(?P<id>[^/]++)/show/other$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'leader_user_other_show')), array (  '_controller' => 'AppBundle\\Controller\\LeaderController::showOtherInfoAction',));
                }

                // leader_user_work_show
                if (preg_match('#^/leader/user/(?P<id>[^/]++)/show/work$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'leader_user_work_show')), array (  '_controller' => 'AppBundle\\Controller\\LeaderController::showWorkExperiencesAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
