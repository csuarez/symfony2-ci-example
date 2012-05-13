<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * apptestUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class apptestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'AcmeDemoBundle:Welcome:index',  '_route' => '_welcome',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // csuarez_simplemathfrontend_calculator_add
        if (0 === strpos($pathinfo, '/add') && preg_match('#^/add/(?P<a>[^/]+?)/(?P<b>[^/]+?)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'csuarez_simplemathfrontend_calculator_add');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Csuarez\\SimpleMathFrontendBundle\\Controller\\CalculatorController::addAction',)), array('_route' => 'csuarez_simplemathfrontend_calculator_add'));
        }

        // csuarez_simplemathfrontend_calculator_subtract
        if (0 === strpos($pathinfo, '/subtract') && preg_match('#^/subtract/(?P<a>[^/]+?)/(?P<b>[^/]+?)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'csuarez_simplemathfrontend_calculator_subtract');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Csuarez\\SimpleMathFrontendBundle\\Controller\\CalculatorController::subtractAction',)), array('_route' => 'csuarez_simplemathfrontend_calculator_subtract'));
        }

        // csuarez_simplemathfrontend_calculator_multiply
        if (0 === strpos($pathinfo, '/multiply') && preg_match('#^/multiply/(?P<a>[^/]+?)/(?P<b>[^/]+?)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'csuarez_simplemathfrontend_calculator_multiply');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Csuarez\\SimpleMathFrontendBundle\\Controller\\CalculatorController::multiplyAction',)), array('_route' => 'csuarez_simplemathfrontend_calculator_multiply'));
        }

        // csuarez_simplemathfrontend_calculator_divide
        if (0 === strpos($pathinfo, '/divide') && preg_match('#^/divide/(?P<a>[^/]+?)/(?P<b>[^/]+?)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'csuarez_simplemathfrontend_calculator_divide');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Csuarez\\SimpleMathFrontendBundle\\Controller\\CalculatorController::divideAction',)), array('_route' => 'csuarez_simplemathfrontend_calculator_divide'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
