<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/list-')) {
                // list_company
                if ('/list-company' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::listAction',  '_route' => 'list_company',);
                }

                // list_client
                if ('/list-client' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::listClientAction',  '_route' => 'list_client',);
                }

                // list_drawee
                if ('/list-drawee' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::listDraweeAction',  '_route' => 'list_drawee',);
                }

                // list_finantial
                if ('/list-finantial' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::listFinantialAction',  '_route' => 'list_finantial',);
                }

                // list_files
                if (0 === strpos($pathinfo, '/list-files') && preg_match('#^/list\\-files/(?P<company>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_files')), array (  '_controller' => 'AppBundle\\Controller\\CompanyController::listFilesAction',));
                }

                // list_proposal
                if ('/list-proposal' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ProposalController::listAction',  '_route' => 'list_proposal',);
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/create-c')) {
                // create_company
                if ('/create-company' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::createAction',  '_route' => 'create_company',);
                }

                // create_contact
                if ('/create-contact' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CompanyController::createContactAction',  '_route' => 'create_contact',);
                }

                // create_calculator
                if (0 === strpos($pathinfo, '/create-calculator') && preg_match('#^/create\\-calculator/(?P<proposal>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_calculator')), array (  '_controller' => 'AppBundle\\Controller\\ProposalController::createCalculatorAction',));
                }

            }

            // create_proposal
            if ('/create-proposal' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProposalController::createProposalAction',  '_route' => 'create_proposal',);
            }

            // calendar
            if ('/calendar' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ReportController::calendarAction',  '_route' => 'calendar',);
            }

        }

        // edit_company
        if (0 === strpos($pathinfo, '/edit-company') && preg_match('#^/edit\\-company/(?P<company>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_company')), array (  '_controller' => 'AppBundle\\Controller\\CompanyController::editAction',));
        }

        // edit_proposal
        if (0 === strpos($pathinfo, '/edit-proposal') && preg_match('#^/edit\\-proposal/(?P<proposal>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_proposal')), array (  '_controller' => 'AppBundle\\Controller\\ProposalController::editProposalAction',));
        }

        // add_file
        if (0 === strpos($pathinfo, '/add-file') && preg_match('#^/add\\-file/(?P<company>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_file')), array (  '_controller' => 'AppBundle\\Controller\\CompanyController::addFileAction',));
        }

        if (0 === strpos($pathinfo, '/delete-')) {
            // delete_company
            if (0 === strpos($pathinfo, '/delete-company') && preg_match('#^/delete\\-company/(?P<company>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_company')), array (  '_controller' => 'AppBundle\\Controller\\CompanyController::deleteAction',));
            }

            // delete_file
            if (0 === strpos($pathinfo, '/delete-file') && preg_match('#^/delete\\-file/(?P<file>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_file')), array (  '_controller' => 'AppBundle\\Controller\\CompanyController::deleteFileAction',));
            }

            // delete_proposal
            if (0 === strpos($pathinfo, '/delete-proposal') && preg_match('#^/delete\\-proposal/(?P<proposal>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_proposal')), array (  '_controller' => 'AppBundle\\Controller\\ProposalController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/show-')) {
            // show_company
            if (0 === strpos($pathinfo, '/show-company') && preg_match('#^/show\\-company/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_company')), array (  '_controller' => 'AppBundle\\Controller\\CompanyController::showAction',));
            }

            // show_proposal
            if (0 === strpos($pathinfo, '/show-proposal') && preg_match('#^/show\\-proposal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_proposal')), array (  '_controller' => 'AppBundle\\Controller\\ProposalController::showAction',));
            }

            // show_report
            if (0 === strpos($pathinfo, '/show-report') && preg_match('#^/show\\-report/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_report')), array (  '_controller' => 'AppBundle\\Controller\\ReportController::showAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            // report_list
            if ('/report-list' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ReportController::indexAction',  '_route' => 'report_list',);
            }

            // report_create
            if ('/report-create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ReportController::createAction',  '_route' => 'report_create',);
            }

            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

        }

        // default
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\StaticController::listAction',  '_route' => 'default',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'default'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
