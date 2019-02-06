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


        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/co')) {
                if (0 === strpos($pathinfo, '/configuration')) {
                    if (0 === strpos($pathinfo, '/configuration/locale')) {
                        // pim_enrich_locale_index
                        if ('/configuration/locale' === $trimmedPathinfo) {
                            $ret = array('_route' => 'pim_enrich_locale_index');
                            if (substr($pathinfo, -1) !== '/') {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_locale_index'));
                            }

                            return $ret;
                        }

                        // pim_enrich_locale_rest_index
                        if ('/configuration/locale/rest' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_enrich_locale_rest_index;
                            }

                            return array (  '_controller' => 'pim_enrich.controller.rest.locale:indexAction',  '_route' => 'pim_enrich_locale_rest_index',);
                        }
                        not_pim_enrich_locale_rest_index:

                    }

                    elseif (0 === strpos($pathinfo, '/configuration/channel')) {
                        // pim_enrich_channel_index
                        if ('/configuration/channel' === $trimmedPathinfo) {
                            $ret = array('_route' => 'pim_enrich_channel_index');
                            if (substr($pathinfo, -1) !== '/') {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_channel_index'));
                            }

                            return $ret;
                        }

                        // pim_enrich_channel_create
                        if ('/configuration/channel/create' === $pathinfo) {
                            return array('_route' => 'pim_enrich_channel_create');
                        }

                        // pim_enrich_channel_edit
                        if (preg_match('#^/configuration/channel/(?P<code>[a-zA-Z0-9_]+)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_channel_edit')), array ());
                        }

                        if (0 === strpos($pathinfo, '/configuration/channel/rest')) {
                            // pim_enrich_channel_rest_index
                            if ('/configuration/channel/rest' === $pathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_pim_enrich_channel_rest_index;
                                }

                                return array (  '_controller' => 'pim_enrich.controller.rest.channel:indexAction',  '_route' => 'pim_enrich_channel_rest_index',);
                            }
                            not_pim_enrich_channel_rest_index:

                            // pim_enrich_channel_rest_get
                            if (preg_match('#^/configuration/channel/rest/(?P<identifier>[^/]++)$#s', $pathinfo, $matches)) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_pim_enrich_channel_rest_get;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_channel_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.channel:getAction',));
                            }
                            not_pim_enrich_channel_rest_get:

                            // pim_enrich_channel_rest_post
                            if ('/configuration/channel/rest' === $pathinfo) {
                                if ('POST' !== $canonicalMethod) {
                                    $allow[] = 'POST';
                                    goto not_pim_enrich_channel_rest_post;
                                }

                                return array (  '_controller' => 'pim_enrich.controller.rest.channel:postAction',  '_route' => 'pim_enrich_channel_rest_post',);
                            }
                            not_pim_enrich_channel_rest_post:

                            // pim_enrich_channel_rest_put
                            if (preg_match('#^/configuration/channel/rest/(?P<code>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                                if ('PUT' !== $canonicalMethod) {
                                    $allow[] = 'PUT';
                                    goto not_pim_enrich_channel_rest_put;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_channel_rest_put')), array (  '_controller' => 'pim_enrich.controller.rest.channel:putAction',));
                            }
                            not_pim_enrich_channel_rest_put:

                            // pim_enrich_channel_rest_remove
                            if (preg_match('#^/configuration/channel/rest/(?P<code>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                                if ('DELETE' !== $canonicalMethod) {
                                    $allow[] = 'DELETE';
                                    goto not_pim_enrich_channel_rest_remove;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_channel_rest_remove')), array (  '_controller' => 'pim_enrich.controller.rest.channel:removeAction',));
                            }
                            not_pim_enrich_channel_rest_remove:

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/configuration/currency')) {
                        // pim_enrich_currency_rest_index
                        if ('/configuration/currency/rest' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_enrich_currency_rest_index;
                            }

                            return array (  '_controller' => 'pim_enrich.controller.rest.currency:indexAction',  '_route' => 'pim_enrich_currency_rest_index',);
                        }
                        not_pim_enrich_currency_rest_index:

                        // pim_enrich_currency_index
                        if ('/configuration/currency' === $trimmedPathinfo) {
                            $ret = array('_route' => 'pim_enrich_currency_index');
                            if (substr($pathinfo, -1) !== '/') {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_currency_index'));
                            }

                            return $ret;
                        }

                        // pim_enrich_currency_toggle
                        if (preg_match('#^/configuration/currency/(?P<id>\\d+)/toggle$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_currency_toggle')), array (  '_controller' => 'pim_enrich.controller.currency:toggleAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/configuration/family')) {
                        if (0 === strpos($pathinfo, '/configuration/family/rest')) {
                            // pim_enrich_family_rest_create
                            if ('/configuration/family/rest' === $pathinfo) {
                                if ('POST' !== $canonicalMethod) {
                                    $allow[] = 'POST';
                                    goto not_pim_enrich_family_rest_create;
                                }

                                return array (  '_controller' => 'pim_enrich.controller.rest.family:createAction',  '_route' => 'pim_enrich_family_rest_create',);
                            }
                            not_pim_enrich_family_rest_create:

                            // pim_enrich_family_rest_index
                            if ('/configuration/family/rest' === $pathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_pim_enrich_family_rest_index;
                                }

                                return array (  '_controller' => 'pim_enrich.controller.rest.family:indexAction',  '_route' => 'pim_enrich_family_rest_index',);
                            }
                            not_pim_enrich_family_rest_index:

                            // pim_enrich_family_index_get_variants
                            if ('/configuration/family/rest/variants' === $pathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_pim_enrich_family_index_get_variants;
                                }

                                return array (  '_controller' => 'pim_enrich.controller.rest.family:getWithVariantsAction',  '_route' => 'pim_enrich_family_index_get_variants',);
                            }
                            not_pim_enrich_family_index_get_variants:

                            // pim_enrich_family_rest_get
                            if (preg_match('#^/configuration/family/rest/(?P<identifier>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_pim_enrich_family_rest_get;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.family:getAction',));
                            }
                            not_pim_enrich_family_rest_get:

                            // pim_enrich_family_rest_put
                            if (preg_match('#^/configuration/family/rest/(?P<code>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                                if ('PUT' !== $canonicalMethod) {
                                    $allow[] = 'PUT';
                                    goto not_pim_enrich_family_rest_put;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_rest_put')), array (  '_controller' => 'pim_enrich.controller.rest.family:putAction',));
                            }
                            not_pim_enrich_family_rest_put:

                            // pim_enrich_family_rest_remove
                            if (preg_match('#^/configuration/family/rest/(?P<code>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                                if ('DELETE' !== $canonicalMethod) {
                                    $allow[] = 'DELETE';
                                    goto not_pim_enrich_family_rest_remove;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_rest_remove')), array (  '_controller' => 'pim_enrich.controller.rest.family:removeAction',));
                            }
                            not_pim_enrich_family_rest_remove:

                            // pim_enrich_family_variant_rest_get
                            if (0 === strpos($pathinfo, '/configuration/family/rest/family_variant') && preg_match('#^/configuration/family/rest/family_variant/(?P<identifier>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_pim_enrich_family_variant_rest_get;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_variant_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.family_variant:getAction',));
                            }
                            not_pim_enrich_family_variant_rest_get:

                            // pim_enrich_family_rest_get_available_axes
                            if (preg_match('#^/configuration/family/rest/(?P<code>[a-zA-Z0-9_]+)/available_axes$#s', $pathinfo, $matches)) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_pim_enrich_family_rest_get_available_axes;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_rest_get_available_axes')), array (  '_controller' => 'pim_enrich.controller.rest.family:getAvailableAxesAction',));
                            }
                            not_pim_enrich_family_rest_get_available_axes:

                        }

                        elseif (0 === strpos($pathinfo, '/configuration/family-variant/rest')) {
                            // pim_enrich_family_variant_rest_index
                            if ('/configuration/family-variant/rest' === $pathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_pim_enrich_family_variant_rest_index;
                                }

                                return array (  '_controller' => 'pim_enrich.controller.rest.family_variant:indexAction',  '_route' => 'pim_enrich_family_variant_rest_index',);
                            }
                            not_pim_enrich_family_variant_rest_index:

                            // pim_enrich_family_variant_rest_create
                            if ('/configuration/family-variant/rest' === $pathinfo) {
                                if ('POST' !== $canonicalMethod) {
                                    $allow[] = 'POST';
                                    goto not_pim_enrich_family_variant_rest_create;
                                }

                                return array (  '_controller' => 'pim_enrich.controller.rest.family_variant:createAction',  '_route' => 'pim_enrich_family_variant_rest_create',);
                            }
                            not_pim_enrich_family_variant_rest_create:

                            // pim_enrich_family_variant_rest_put
                            if (preg_match('#^/configuration/family\\-variant/rest/(?P<identifier>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                                if ('PUT' !== $canonicalMethod) {
                                    $allow[] = 'PUT';
                                    goto not_pim_enrich_family_variant_rest_put;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_variant_rest_put')), array (  '_controller' => 'pim_enrich.controller.rest.family_variant:putAction',));
                            }
                            not_pim_enrich_family_variant_rest_put:

                            // pim_enrich_family_variant_rest_remove
                            if (preg_match('#^/configuration/family\\-variant/rest/(?P<familyVariantCode>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                                if ('DELETE' !== $canonicalMethod) {
                                    $allow[] = 'DELETE';
                                    goto not_pim_enrich_family_variant_rest_remove;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_variant_rest_remove')), array (  '_controller' => 'pim_enrich.controller.rest.family_variant:removeAction',));
                            }
                            not_pim_enrich_family_variant_rest_remove:

                        }

                        // pim_enrich_family_index
                        if ('/configuration/family' === $trimmedPathinfo) {
                            $ret = array('_route' => 'pim_enrich_family_index');
                            if (substr($pathinfo, -1) !== '/') {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_family_index'));
                            }

                            return $ret;
                        }

                        // pim_enrich_family_edit
                        if (preg_match('#^/configuration/family/(?P<code>[a-zA-Z0-9_]+)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_edit')), array ());
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/configuration/attribute')) {
                        if (0 === strpos($pathinfo, '/configuration/attribute-option')) {
                            // pim_enrich_attributeoption_index
                            if (preg_match('#^/configuration/attribute\\-option/(?P<attributeId>\\d+)$#s', $pathinfo, $matches)) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_pim_enrich_attributeoption_index;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_index')), array (  '_controller' => 'pim_enrich.controller.attribute_option:indexAction',  '_format' => 'json',));
                            }
                            not_pim_enrich_attributeoption_index:

                            // pim_enrich_attributeoption_create
                            if (preg_match('#^/configuration/attribute\\-option/(?P<attributeId>\\d+)$#s', $pathinfo, $matches)) {
                                if ('POST' !== $canonicalMethod) {
                                    $allow[] = 'POST';
                                    goto not_pim_enrich_attributeoption_create;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_create')), array (  '_controller' => 'pim_enrich.controller.attribute_option:createAction',  '_format' => 'json',));
                            }
                            not_pim_enrich_attributeoption_create:

                            // pim_enrich_attributeoption_update
                            if (preg_match('#^/configuration/attribute\\-option/(?P<attributeId>\\d+)/(?P<attributeOptionId>\\d+)$#s', $pathinfo, $matches)) {
                                if ('PUT' !== $canonicalMethod) {
                                    $allow[] = 'PUT';
                                    goto not_pim_enrich_attributeoption_update;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_update')), array (  '_controller' => 'pim_enrich.controller.attribute_option:updateAction',  '_format' => 'json',));
                            }
                            not_pim_enrich_attributeoption_update:

                            // pim_enrich_attributeoption_delete
                            if (preg_match('#^/configuration/attribute\\-option/(?P<attributeId>\\d+)/(?P<attributeOptionId>\\d+)$#s', $pathinfo, $matches)) {
                                if ('DELETE' !== $canonicalMethod) {
                                    $allow[] = 'DELETE';
                                    goto not_pim_enrich_attributeoption_delete;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_delete')), array (  '_controller' => 'pim_enrich.controller.attribute_option:deleteAction',  '_format' => 'json',));
                            }
                            not_pim_enrich_attributeoption_delete:

                            // pim_enrich_attributeoption_update_sorting
                            if (preg_match('#^/configuration/attribute\\-option/(?P<attributeId>\\d+)/update\\-sorting$#s', $pathinfo, $matches)) {
                                if ('PUT' !== $canonicalMethod) {
                                    $allow[] = 'PUT';
                                    goto not_pim_enrich_attributeoption_update_sorting;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_update_sorting')), array (  '_controller' => 'pim_enrich.controller.attribute_option:updateSortingAction',  '_format' => 'json',));
                            }
                            not_pim_enrich_attributeoption_update_sorting:

                            // pim_enrich_attributeoption_get
                            if (0 === strpos($pathinfo, '/configuration/attribute-option/attribute') && preg_match('#^/configuration/attribute\\-option/attribute/(?P<identifier>[a-zA-Z0-9_]+)/option$#s', $pathinfo, $matches)) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_pim_enrich_attributeoption_get;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_get')), array (  '_controller' => 'pim_enrich.controller.attribute_option:getAction',  '_format' => 'json',));
                            }
                            not_pim_enrich_attributeoption_get:

                        }

                        // pim_enrich_attribute_index
                        if ('/configuration/attribute' === $trimmedPathinfo) {
                            $ret = array('_route' => 'pim_enrich_attribute_index');
                            if (substr($pathinfo, -1) !== '/') {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_attribute_index'));
                            }

                            return $ret;
                        }

                        // pim_enrich_attribute_create
                        if ('/configuration/attribute/create' === $pathinfo) {
                            return array('_route' => 'pim_enrich_attribute_create');
                        }

                        // pim_enrich_attribute_edit
                        if (preg_match('#^/configuration/attribute/(?P<code>[a-zA-Z0-9_]+)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attribute_edit')), array ());
                        }

                        if (0 === strpos($pathinfo, '/configuration/attribute-group')) {
                            // pim_enrich_attributegroup_index
                            if ('/configuration/attribute-group' === $trimmedPathinfo) {
                                $ret = array('_route' => 'pim_enrich_attributegroup_index');
                                if (substr($pathinfo, -1) !== '/') {
                                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_attributegroup_index'));
                                }

                                return $ret;
                            }

                            // pim_enrich_attributegroup_create
                            if ('/configuration/attribute-group/create' === $pathinfo) {
                                return array('_route' => 'pim_enrich_attributegroup_create');
                            }

                            // pim_enrich_attributegroup_edit
                            if (preg_match('#^/configuration/attribute\\-group/(?P<identifier>[a-zA-Z0-9_]+)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributegroup_edit')), array ());
                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/configuration/association-type')) {
                        // pim_enrich_associationtype_index
                        if ('/configuration/association-type' === $trimmedPathinfo) {
                            $ret = array('_route' => 'pim_enrich_associationtype_index');
                            if (substr($pathinfo, -1) !== '/') {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_associationtype_index'));
                            }

                            return $ret;
                        }

                        if (0 === strpos($pathinfo, '/configuration/association-type/rest')) {
                            // pim_enrich_associationtype_rest_create
                            if ('/configuration/association-type/rest' === $pathinfo) {
                                if ('POST' !== $canonicalMethod) {
                                    $allow[] = 'POST';
                                    goto not_pim_enrich_associationtype_rest_create;
                                }

                                return array (  '_controller' => 'pim_enrich.controller.rest.association_type:createAction',  '_route' => 'pim_enrich_associationtype_rest_create',);
                            }
                            not_pim_enrich_associationtype_rest_create:

                            // pim_enrich_associationtype_rest_index
                            if ('/configuration/association-type/rest' === $pathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_pim_enrich_associationtype_rest_index;
                                }

                                return array (  '_controller' => 'pim_enrich.controller.rest.association_type:indexAction',  '_route' => 'pim_enrich_associationtype_rest_index',);
                            }
                            not_pim_enrich_associationtype_rest_index:

                            // pim_enrich_associationtype_rest_get
                            if (preg_match('#^/configuration/association\\-type/rest/(?P<identifier>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_pim_enrich_associationtype_rest_get;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_associationtype_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.association_type:getAction',));
                            }
                            not_pim_enrich_associationtype_rest_get:

                            // pim_enrich_associationtype_rest_post
                            if (preg_match('#^/configuration/association\\-type/rest/(?P<identifier>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                                if ('POST' !== $canonicalMethod) {
                                    $allow[] = 'POST';
                                    goto not_pim_enrich_associationtype_rest_post;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_associationtype_rest_post')), array (  '_controller' => 'pim_enrich.controller.rest.association_type:postAction',));
                            }
                            not_pim_enrich_associationtype_rest_post:

                            // pim_enrich_associationtype_rest_remove
                            if (preg_match('#^/configuration/association\\-type/rest/(?P<code>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                                if ('DELETE' !== $canonicalMethod) {
                                    $allow[] = 'DELETE';
                                    goto not_pim_enrich_associationtype_rest_remove;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_associationtype_rest_remove')), array (  '_controller' => 'pim_enrich.controller.rest.association_type:removeAction',));
                            }
                            not_pim_enrich_associationtype_rest_remove:

                        }

                        // pim_enrich_associationtype_edit
                        if (preg_match('#^/configuration/association\\-type/(?P<code>[a-zA-Z0-9_]+)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_associationtype_edit')), array (  '_controller' => 'pim_enrich.controller.association_type:editAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/configuration/group-type')) {
                        if (0 === strpos($pathinfo, '/configuration/group-type/rest')) {
                            // pim_enrich_grouptype_rest_create
                            if ('/configuration/group-type/rest' === $pathinfo) {
                                if ('POST' !== $canonicalMethod) {
                                    $allow[] = 'POST';
                                    goto not_pim_enrich_grouptype_rest_create;
                                }

                                return array (  '_controller' => 'pim_enrich.controller.rest.group_type:createAction',  '_route' => 'pim_enrich_grouptype_rest_create',);
                            }
                            not_pim_enrich_grouptype_rest_create:

                            // pim_enrich_grouptype_rest_index
                            if ('/configuration/group-type/rest' === $pathinfo) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_pim_enrich_grouptype_rest_index;
                                }

                                return array (  '_controller' => 'pim_enrich.controller.rest.group_type:indexAction',  '_route' => 'pim_enrich_grouptype_rest_index',);
                            }
                            not_pim_enrich_grouptype_rest_index:

                            // pim_enrich_grouptype_rest_get
                            if (preg_match('#^/configuration/group\\-type/rest/(?P<identifier>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                                if ('GET' !== $canonicalMethod) {
                                    $allow[] = 'GET';
                                    goto not_pim_enrich_grouptype_rest_get;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_grouptype_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.group_type:getAction',));
                            }
                            not_pim_enrich_grouptype_rest_get:

                            // pim_enrich_grouptype_rest_post
                            if (preg_match('#^/configuration/group\\-type/rest/(?P<identifier>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                                if ('POST' !== $canonicalMethod) {
                                    $allow[] = 'POST';
                                    goto not_pim_enrich_grouptype_rest_post;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_grouptype_rest_post')), array (  '_controller' => 'pim_enrich.controller.rest.group_type:postAction',));
                            }
                            not_pim_enrich_grouptype_rest_post:

                            // pim_enrich_grouptype_rest_remove
                            if (preg_match('#^/configuration/group\\-type/rest/(?P<code>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                                if ('DELETE' !== $canonicalMethod) {
                                    $allow[] = 'DELETE';
                                    goto not_pim_enrich_grouptype_rest_remove;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_grouptype_rest_remove')), array (  '_controller' => 'pim_enrich.controller.rest.group_type:removeAction',));
                            }
                            not_pim_enrich_grouptype_rest_remove:

                        }

                        // pim_enrich_grouptype_index
                        if ('/configuration/group-type' === $trimmedPathinfo) {
                            $ret = array('_route' => 'pim_enrich_grouptype_index');
                            if (substr($pathinfo, -1) !== '/') {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_grouptype_index'));
                            }

                            return $ret;
                        }

                        // pim_enrich_grouptype_edit
                        if (preg_match('#^/configuration/group\\-type/(?P<code>[a-zA-Z0-9_]+)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_grouptype_edit')), array ());
                        }

                    }

                    // pim_enrich_measures_rest_index
                    if ('/configuration/measures/rest' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_enrich_measures_rest_index;
                        }

                        return array (  '_controller' => 'akeneo_measure.controller.rest.measures:indexAction',  '_route' => 'pim_enrich_measures_rest_index',);
                    }
                    not_pim_enrich_measures_rest_index:

                }

                elseif (0 === strpos($pathinfo, '/comment')) {
                    // pim_comment_comment_create
                    if ('/comment/create' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_pim_comment_comment_create;
                        }

                        return array (  '_controller' => 'pim_comment.controller.comment:createAction',  '_route' => 'pim_comment_comment_create',);
                    }
                    not_pim_comment_comment_create:

                    // pim_comment_comment_reply
                    if ('/comment/reply' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_pim_comment_comment_reply;
                        }

                        return array (  '_controller' => 'pim_comment.controller.comment:replyAction',  '_route' => 'pim_comment_comment_reply',);
                    }
                    not_pim_comment_comment_reply:

                    // pim_comment_comment_delete
                    if (preg_match('#^/comment/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_pim_comment_comment_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_comment_comment_delete')), array (  '_controller' => 'pim_comment.controller.comment:deleteAction',));
                    }
                    not_pim_comment_comment_delete:

                }

                elseif (0 === strpos($pathinfo, '/collect/import')) {
                    // pim_importexport_import_profile_index
                    if ('/collect/import' === $trimmedPathinfo) {
                        $ret = array('_route' => 'pim_importexport_import_profile_index');
                        if (substr($pathinfo, -1) !== '/') {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_importexport_import_profile_index'));
                        }

                        return $ret;
                    }

                    // pim_importexport_import_profile_create
                    if ('/collect/import/create' === $pathinfo) {
                        return array (  '_controller' => 'pim_import_export.controller.import_profile:createAction',  '_route' => 'pim_importexport_import_profile_create',);
                    }

                    // pim_importexport_import_profile_show
                    if (preg_match('#^/collect/import/(?P<code>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_show')), array (  '_controller' => 'pim_import_export.controller.import_profile:showAction',));
                    }

                    // pim_importexport_import_profile_edit
                    if (preg_match('#^/collect/import/(?P<code>[a-zA-Z0-9_]+)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_edit')), array (  '_controller' => 'pim_import_export.controller.import_profile:editAction',));
                    }

                    // pim_importexport_import_profile_report
                    if (preg_match('#^/collect/import/(?P<code>[a-zA-Z0-9_]+)/reports$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_report')), array (  '_controller' => 'pim_import_export.controller.import_profile:reportAction',));
                    }

                    if (0 === strpos($pathinfo, '/collect/import_execution')) {
                        // pim_importexport_import_execution_index
                        if ('/collect/import_execution' === $trimmedPathinfo) {
                            $ret = array('_route' => 'pim_importexport_import_execution_index');
                            if (substr($pathinfo, -1) !== '/') {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_importexport_import_execution_index'));
                            }

                            return $ret;
                        }

                        // pim_importexport_import_execution_download_log
                        if (preg_match('#^/collect/import_execution/(?P<id>\\d+)/download$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_execution_download_log')), array (  '_controller' => 'pim_import_export.controller.import_execution:downloadLogFileAction',));
                        }

                        // pim_importexport_import_execution_show
                        if (preg_match('#^/collect/import_execution/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_execution_show')), array (  '_controller' => 'pim_import_export.controller.import_execution:showAction',));
                        }

                        // pim_importexport_import_execution_download_file
                        if (preg_match('#^/collect/import_execution/(?P<id>\\d+)/download/(?P<archiver>[^/]++)/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_execution_download_file')), array (  '_controller' => 'pim_import_export.controller.import_execution:downloadFilesAction',));
                        }

                    }

                }

            }

            // pim_enrich_api_connection_index
            if ('/client' === $trimmedPathinfo) {
                $ret = array('_route' => 'pim_enrich_api_connection_index');
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_api_connection_index'));
                }

                return $ret;
            }

            if (0 === strpos($pathinfo, '/client/rest')) {
                // pim_enrich_api_connection_rest_create
                if ('/client/rest' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_pim_enrich_api_connection_rest_create;
                    }

                    return array (  '_controller' => 'pim_enrich.controller.rest.api_client:createAction',  '_route' => 'pim_enrich_api_connection_rest_create',);
                }
                not_pim_enrich_api_connection_rest_create:

                // pim_enrich_api_connection_rest_revoke
                if (preg_match('#^/client/rest/(?P<publicId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_api_connection_rest_revoke;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_api_connection_rest_revoke')), array (  '_controller' => 'pim_enrich.controller.rest.api_client:revokeAction',));
                }
                not_pim_enrich_api_connection_rest_revoke:

            }

            // pim_enrich_catalog_volume_index
            if ('/catalog-volumes' === $pathinfo) {
                return array('_route' => 'pim_enrich_catalog_volume_index');
            }

            // pim_volume_monitoring_get_volumes
            if ('/catalog-volume-monitoring/volumes' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_pim_volume_monitoring_get_volumes;
                }

                return array (  '_controller' => 'pim_volume_monitoring.controller.volume_monitoring:getVolumesAction',  '_format' => 'json',  '_route' => 'pim_volume_monitoring_get_volumes',);
            }
            not_pim_volume_monitoring_get_volumes:

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/api/rest/v1')) {
                if (0 === strpos($pathinfo, '/api/rest/v1/locales')) {
                    // pim_api_locale_list
                    if ('/api/rest/v1/locales' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_api_locale_list;
                        }

                        return array (  '_controller' => 'pim_api.controller.locale:listAction',  '_format' => 'json',  '_route' => 'pim_api_locale_list',);
                    }
                    not_pim_api_locale_list:

                    // pim_api_locale_get
                    if (preg_match('#^/api/rest/v1/locales/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_api_locale_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_locale_get')), array (  '_controller' => 'pim_api.controller.locale:getAction',  '_format' => 'json',));
                    }
                    not_pim_api_locale_get:

                }

                elseif (0 === strpos($pathinfo, '/api/rest/v1/c')) {
                    if (0 === strpos($pathinfo, '/api/rest/v1/channels')) {
                        // pim_api_channel_list
                        if ('/api/rest/v1/channels' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_api_channel_list;
                            }

                            return array (  '_controller' => 'pim_api.controller.channel:listAction',  '_format' => 'json',  '_route' => 'pim_api_channel_list',);
                        }
                        not_pim_api_channel_list:

                        // pim_api_channel_get
                        if (preg_match('#^/api/rest/v1/channels/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_api_channel_get;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_channel_get')), array (  '_controller' => 'pim_api.controller.channel:getAction',  '_format' => 'json',));
                        }
                        not_pim_api_channel_get:

                        // pim_api_channel_create
                        if ('/api/rest/v1/channels' === $pathinfo) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_pim_api_channel_create;
                            }

                            return array (  '_controller' => 'pim_api.controller.channel:createAction',  '_format' => 'json',  '_route' => 'pim_api_channel_create',);
                        }
                        not_pim_api_channel_create:

                        // pim_api_channel_partial_update
                        if (preg_match('#^/api/rest/v1/channels/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('PATCH' !== $canonicalMethod) {
                                $allow[] = 'PATCH';
                                goto not_pim_api_channel_partial_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_channel_partial_update')), array (  '_controller' => 'pim_api.controller.channel:partialUpdateAction',  '_format' => 'json',));
                        }
                        not_pim_api_channel_partial_update:

                        // pim_api_channel_partial_update_list
                        if ('/api/rest/v1/channels' === $pathinfo) {
                            if ('PATCH' !== $canonicalMethod) {
                                $allow[] = 'PATCH';
                                goto not_pim_api_channel_partial_update_list;
                            }

                            return array (  '_controller' => 'pim_api.controller.channel:partialUpdateListAction',  '_format' => 'json',  '_route' => 'pim_api_channel_partial_update_list',);
                        }
                        not_pim_api_channel_partial_update_list:

                    }

                    elseif (0 === strpos($pathinfo, '/api/rest/v1/currencies')) {
                        // pim_api_currency_list
                        if ('/api/rest/v1/currencies' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_api_currency_list;
                            }

                            return array (  '_controller' => 'pim_api.controller.currency:listAction',  '_format' => 'json',  '_route' => 'pim_api_currency_list',);
                        }
                        not_pim_api_currency_list:

                        // pim_api_currency_get
                        if (preg_match('#^/api/rest/v1/currencies/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_api_currency_get;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_currency_get')), array (  '_controller' => 'pim_api.controller.currency:getAction',  '_format' => 'json',));
                        }
                        not_pim_api_currency_get:

                    }

                    elseif (0 === strpos($pathinfo, '/api/rest/v1/categories')) {
                        // pim_api_category_list
                        if ('/api/rest/v1/categories' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_api_category_list;
                            }

                            return array (  '_controller' => 'pim_api.controller.category:listAction',  '_format' => 'json',  '_route' => 'pim_api_category_list',);
                        }
                        not_pim_api_category_list:

                        // pim_api_category_get
                        if (preg_match('#^/api/rest/v1/categories/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_api_category_get;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_category_get')), array (  '_controller' => 'pim_api.controller.category:getAction',  '_format' => 'json',));
                        }
                        not_pim_api_category_get:

                        // pim_api_category_create
                        if ('/api/rest/v1/categories' === $pathinfo) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_pim_api_category_create;
                            }

                            return array (  '_controller' => 'pim_api.controller.category:createAction',  '_format' => 'json',  '_route' => 'pim_api_category_create',);
                        }
                        not_pim_api_category_create:

                        // pim_api_category_partial_update
                        if (preg_match('#^/api/rest/v1/categories/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('PATCH' !== $canonicalMethod) {
                                $allow[] = 'PATCH';
                                goto not_pim_api_category_partial_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_category_partial_update')), array (  '_controller' => 'pim_api.controller.category:partialUpdateAction',  '_format' => 'json',));
                        }
                        not_pim_api_category_partial_update:

                        // pim_api_category_partial_update_list
                        if ('/api/rest/v1/categories' === $pathinfo) {
                            if ('PATCH' !== $canonicalMethod) {
                                $allow[] = 'PATCH';
                                goto not_pim_api_category_partial_update_list;
                            }

                            return array (  '_controller' => 'pim_api.controller.category:partialUpdateListAction',  '_format' => 'json',  '_route' => 'pim_api_category_partial_update_list',);
                        }
                        not_pim_api_category_partial_update_list:

                    }

                }

                elseif (0 === strpos($pathinfo, '/api/rest/v1/a')) {
                    if (0 === strpos($pathinfo, '/api/rest/v1/attributes')) {
                        // pim_api_attribute_list
                        if ('/api/rest/v1/attributes' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_api_attribute_list;
                            }

                            return array (  '_controller' => 'pim_api.controller.attribute:listAction',  '_format' => 'json',  '_route' => 'pim_api_attribute_list',);
                        }
                        not_pim_api_attribute_list:

                        // pim_api_attribute_create
                        if ('/api/rest/v1/attributes' === $pathinfo) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_pim_api_attribute_create;
                            }

                            return array (  '_controller' => 'pim_api.controller.attribute:createAction',  '_format' => 'json',  '_route' => 'pim_api_attribute_create',);
                        }
                        not_pim_api_attribute_create:

                        // pim_api_attribute_partial_update
                        if (preg_match('#^/api/rest/v1/attributes/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('PATCH' !== $canonicalMethod) {
                                $allow[] = 'PATCH';
                                goto not_pim_api_attribute_partial_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_attribute_partial_update')), array (  '_controller' => 'pim_api.controller.attribute:partialUpdateAction',  '_format' => 'json',));
                        }
                        not_pim_api_attribute_partial_update:

                        // pim_api_attribute_get
                        if (preg_match('#^/api/rest/v1/attributes/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_api_attribute_get;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_attribute_get')), array (  '_controller' => 'pim_api.controller.attribute:getAction',  '_format' => 'json',));
                        }
                        not_pim_api_attribute_get:

                        // pim_api_attribute_partial_update_list
                        if ('/api/rest/v1/attributes' === $pathinfo) {
                            if ('PATCH' !== $canonicalMethod) {
                                $allow[] = 'PATCH';
                                goto not_pim_api_attribute_partial_update_list;
                            }

                            return array (  '_controller' => 'pim_api.controller.attribute:partialUpdateListAction',  '_format' => 'json',  '_route' => 'pim_api_attribute_partial_update_list',);
                        }
                        not_pim_api_attribute_partial_update_list:

                        // pim_api_attribute_option_list
                        if (preg_match('#^/api/rest/v1/attributes/(?P<attributeCode>[^/]++)/options$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_api_attribute_option_list;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_attribute_option_list')), array (  '_controller' => 'pim_api.controller.attribute_option:listAction',  '_format' => 'json',));
                        }
                        not_pim_api_attribute_option_list:

                        // pim_api_attribute_option_create
                        if (preg_match('#^/api/rest/v1/attributes/(?P<attributeCode>[^/]++)/options$#s', $pathinfo, $matches)) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_pim_api_attribute_option_create;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_attribute_option_create')), array (  '_controller' => 'pim_api.controller.attribute_option:createAction',  '_format' => 'json',));
                        }
                        not_pim_api_attribute_option_create:

                        // pim_api_attribute_option_partial_update
                        if (preg_match('#^/api/rest/v1/attributes/(?P<attributeCode>[^/]++)/options/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('PATCH' !== $canonicalMethod) {
                                $allow[] = 'PATCH';
                                goto not_pim_api_attribute_option_partial_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_attribute_option_partial_update')), array (  '_controller' => 'pim_api.controller.attribute_option:partialUpdateAction',  '_format' => 'json',));
                        }
                        not_pim_api_attribute_option_partial_update:

                        // pim_api_attribute_option_partial_update_list
                        if (preg_match('#^/api/rest/v1/attributes/(?P<attributeCode>[^/]++)/options$#s', $pathinfo, $matches)) {
                            if ('PATCH' !== $canonicalMethod) {
                                $allow[] = 'PATCH';
                                goto not_pim_api_attribute_option_partial_update_list;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_attribute_option_partial_update_list')), array (  '_controller' => 'pim_api.controller.attribute_option:partialUpdateListAction',  '_format' => 'json',));
                        }
                        not_pim_api_attribute_option_partial_update_list:

                        // pim_api_attribute_option_get
                        if (preg_match('#^/api/rest/v1/attributes/(?P<attributeCode>[^/]++)/options/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_api_attribute_option_get;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_attribute_option_get')), array (  '_controller' => 'pim_api.controller.attribute_option:getAction',  '_format' => 'json',));
                        }
                        not_pim_api_attribute_option_get:

                    }

                    elseif (0 === strpos($pathinfo, '/api/rest/v1/attribute-groups')) {
                        // pim_api_attribute_group_list
                        if ('/api/rest/v1/attribute-groups' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_api_attribute_group_list;
                            }

                            return array (  '_controller' => 'pim_api.controller.attribute_group:listAction',  '_format' => 'json',  '_route' => 'pim_api_attribute_group_list',);
                        }
                        not_pim_api_attribute_group_list:

                        // pim_api_attribute_group_create
                        if ('/api/rest/v1/attribute-groups' === $pathinfo) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_pim_api_attribute_group_create;
                            }

                            return array (  '_controller' => 'pim_api.controller.attribute_group:createAction',  '_format' => 'json',  '_route' => 'pim_api_attribute_group_create',);
                        }
                        not_pim_api_attribute_group_create:

                        // pim_api_attribute_group_get
                        if (preg_match('#^/api/rest/v1/attribute\\-groups/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_api_attribute_group_get;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_attribute_group_get')), array (  '_controller' => 'pim_api.controller.attribute_group:getAction',  '_format' => 'json',));
                        }
                        not_pim_api_attribute_group_get:

                        // pim_api_attribute_group_partial_update
                        if (preg_match('#^/api/rest/v1/attribute\\-groups/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('PATCH' !== $canonicalMethod) {
                                $allow[] = 'PATCH';
                                goto not_pim_api_attribute_group_partial_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_attribute_group_partial_update')), array (  '_controller' => 'pim_api.controller.attribute_group:partialUpdateAction',  '_format' => 'json',));
                        }
                        not_pim_api_attribute_group_partial_update:

                        // pim_api_attribute_group_partial_update_list
                        if ('/api/rest/v1/attribute-groups' === $pathinfo) {
                            if ('PATCH' !== $canonicalMethod) {
                                $allow[] = 'PATCH';
                                goto not_pim_api_attribute_group_partial_update_list;
                            }

                            return array (  '_controller' => 'pim_api.controller.attribute_group:partialUpdateListAction',  '_format' => 'json',  '_route' => 'pim_api_attribute_group_partial_update_list',);
                        }
                        not_pim_api_attribute_group_partial_update_list:

                    }

                    elseif (0 === strpos($pathinfo, '/api/rest/v1/association-types')) {
                        // pim_api_association_type_list
                        if ('/api/rest/v1/association-types' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_api_association_type_list;
                            }

                            return array (  '_controller' => 'pim_api.controller.association_type:listAction',  '_format' => 'json',  '_route' => 'pim_api_association_type_list',);
                        }
                        not_pim_api_association_type_list:

                        // pim_api_association_type_get
                        if (preg_match('#^/api/rest/v1/association\\-types/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_api_association_type_get;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_association_type_get')), array (  '_controller' => 'pim_api.controller.association_type:getAction',  '_format' => 'json',));
                        }
                        not_pim_api_association_type_get:

                        // pim_api_association_type_create
                        if ('/api/rest/v1/association-types' === $pathinfo) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_pim_api_association_type_create;
                            }

                            return array (  '_controller' => 'pim_api.controller.association_type:createAction',  '_format' => 'json',  '_route' => 'pim_api_association_type_create',);
                        }
                        not_pim_api_association_type_create:

                        // pim_api_association_type_partial_update
                        if (preg_match('#^/api/rest/v1/association\\-types/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('PATCH' !== $canonicalMethod) {
                                $allow[] = 'PATCH';
                                goto not_pim_api_association_type_partial_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_association_type_partial_update')), array (  '_controller' => 'pim_api.controller.association_type:partialUpdateAction',  '_format' => 'json',));
                        }
                        not_pim_api_association_type_partial_update:

                        // pim_api_association_type_partial_update_list
                        if ('/api/rest/v1/association-types' === $pathinfo) {
                            if ('PATCH' !== $canonicalMethod) {
                                $allow[] = 'PATCH';
                                goto not_pim_api_association_type_partial_update_list;
                            }

                            return array (  '_controller' => 'pim_api.controller.association_type:partialUpdateListAction',  '_format' => 'json',  '_route' => 'pim_api_association_type_partial_update_list',);
                        }
                        not_pim_api_association_type_partial_update_list:

                    }

                }

                elseif (0 === strpos($pathinfo, '/api/rest/v1/families')) {
                    // pim_api_family_list
                    if ('/api/rest/v1/families' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_api_family_list;
                        }

                        return array (  '_controller' => 'pim_api.controller.family:listAction',  '_format' => 'json',  '_route' => 'pim_api_family_list',);
                    }
                    not_pim_api_family_list:

                    // pim_api_family_get
                    if (preg_match('#^/api/rest/v1/families/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_api_family_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_family_get')), array (  '_controller' => 'pim_api.controller.family:getAction',  '_format' => 'json',));
                    }
                    not_pim_api_family_get:

                    // pim_api_family_create
                    if ('/api/rest/v1/families' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_pim_api_family_create;
                        }

                        return array (  '_controller' => 'pim_api.controller.family:createAction',  '_format' => 'json',  '_route' => 'pim_api_family_create',);
                    }
                    not_pim_api_family_create:

                    // pim_api_family_partial_update
                    if (preg_match('#^/api/rest/v1/families/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('PATCH' !== $canonicalMethod) {
                            $allow[] = 'PATCH';
                            goto not_pim_api_family_partial_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_family_partial_update')), array (  '_controller' => 'pim_api.controller.family:partialUpdateAction',  '_format' => 'json',));
                    }
                    not_pim_api_family_partial_update:

                    // pim_api_family_partial_update_list
                    if ('/api/rest/v1/families' === $pathinfo) {
                        if ('PATCH' !== $canonicalMethod) {
                            $allow[] = 'PATCH';
                            goto not_pim_api_family_partial_update_list;
                        }

                        return array (  '_controller' => 'pim_api.controller.family:partialUpdateListAction',  '_format' => 'json',  '_route' => 'pim_api_family_partial_update_list',);
                    }
                    not_pim_api_family_partial_update_list:

                    // pim_api_family_variant_list
                    if (preg_match('#^/api/rest/v1/families/(?P<familyCode>[^/]++)/variants$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_api_family_variant_list;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_family_variant_list')), array (  '_controller' => 'pim_api.controller.family_variant:listAction',  '_format' => 'json',));
                    }
                    not_pim_api_family_variant_list:

                    // pim_api_family_variant_get
                    if (preg_match('#^/api/rest/v1/families/(?P<familyCode>[^/]++)/variants/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_api_family_variant_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_family_variant_get')), array (  '_controller' => 'pim_api.controller.family_variant:getAction',  '_format' => 'json',));
                    }
                    not_pim_api_family_variant_get:

                    // pim_api_family_variant_create
                    if (preg_match('#^/api/rest/v1/families/(?P<familyCode>[^/]++)/variants$#s', $pathinfo, $matches)) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_pim_api_family_variant_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_family_variant_create')), array (  '_controller' => 'pim_api.controller.family_variant:createAction',  '_format' => 'json',));
                    }
                    not_pim_api_family_variant_create:

                    // pim_api_family_variant_partial_update
                    if (preg_match('#^/api/rest/v1/families/(?P<familyCode>[^/]++)/variants/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('PATCH' !== $canonicalMethod) {
                            $allow[] = 'PATCH';
                            goto not_pim_api_family_variant_partial_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_family_variant_partial_update')), array (  '_controller' => 'pim_api.controller.family_variant:partialUpdateAction',  '_format' => 'json',));
                    }
                    not_pim_api_family_variant_partial_update:

                    // pim_api_family_variant_partial_update_list
                    if (preg_match('#^/api/rest/v1/families/(?P<familyCode>[^/]++)/variants$#s', $pathinfo, $matches)) {
                        if ('PATCH' !== $canonicalMethod) {
                            $allow[] = 'PATCH';
                            goto not_pim_api_family_variant_partial_update_list;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_family_variant_partial_update_list')), array (  '_controller' => 'pim_api.controller.family_variant:partialUpdateListAction',  '_format' => 'json',));
                    }
                    not_pim_api_family_variant_partial_update_list:

                }

                elseif (0 === strpos($pathinfo, '/api/rest/v1/product-models')) {
                    // pim_api_product_model_list
                    if ('/api/rest/v1/product-models' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_api_product_model_list;
                        }

                        return array (  '_controller' => 'pim_api.controller.product_model:listAction',  '_format' => 'json',  '_route' => 'pim_api_product_model_list',);
                    }
                    not_pim_api_product_model_list:

                    // pim_api_product_model_get
                    if (preg_match('#^/api/rest/v1/product\\-models/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_api_product_model_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_product_model_get')), array (  '_controller' => 'pim_api.controller.product_model:getAction',  '_format' => 'json',));
                    }
                    not_pim_api_product_model_get:

                    // pim_api_product_model_create
                    if ('/api/rest/v1/product-models' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_pim_api_product_model_create;
                        }

                        return array (  '_controller' => 'pim_api.controller.product_model:createAction',  '_format' => 'json',  '_route' => 'pim_api_product_model_create',);
                    }
                    not_pim_api_product_model_create:

                    // pim_api_product_model_partial_update
                    if (preg_match('#^/api/rest/v1/product\\-models/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('PATCH' !== $canonicalMethod) {
                            $allow[] = 'PATCH';
                            goto not_pim_api_product_model_partial_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_product_model_partial_update')), array (  '_controller' => 'pim_api.controller.product_model:partialUpdateAction',  '_format' => 'json',));
                    }
                    not_pim_api_product_model_partial_update:

                    // pim_api_product_model_partial_update_list
                    if ('/api/rest/v1/product-models' === $pathinfo) {
                        if ('PATCH' !== $canonicalMethod) {
                            $allow[] = 'PATCH';
                            goto not_pim_api_product_model_partial_update_list;
                        }

                        return array (  '_controller' => 'pim_api.controller.product_model:partialUpdateListAction',  '_format' => 'json',  '_route' => 'pim_api_product_model_partial_update_list',);
                    }
                    not_pim_api_product_model_partial_update_list:

                }

                elseif (0 === strpos($pathinfo, '/api/rest/v1/products')) {
                    // pim_api_product_list
                    if ('/api/rest/v1/products' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_api_product_list;
                        }

                        return array (  '_controller' => 'pim_api.controller.product:listAction',  '_format' => 'json',  '_route' => 'pim_api_product_list',);
                    }
                    not_pim_api_product_list:

                    // pim_api_product_get
                    if (preg_match('#^/api/rest/v1/products/(?P<code>(.+$)(?<!/draft|/proposal))$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_api_product_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_product_get')), array (  '_controller' => 'pim_api.controller.product:getAction',  '_format' => 'json',));
                    }
                    not_pim_api_product_get:

                    // pim_api_product_create
                    if ('/api/rest/v1/products' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_pim_api_product_create;
                        }

                        return array (  '_controller' => 'pim_api.controller.product:createAction',  '_format' => 'json',  '_route' => 'pim_api_product_create',);
                    }
                    not_pim_api_product_create:

                    // pim_api_product_partial_update
                    if (preg_match('#^/api/rest/v1/products/(?P<code>(.+$)(?<!/draft|/proposal))$#s', $pathinfo, $matches)) {
                        if ('PATCH' !== $canonicalMethod) {
                            $allow[] = 'PATCH';
                            goto not_pim_api_product_partial_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_product_partial_update')), array (  '_controller' => 'pim_api.controller.product:partialUpdateAction',  '_format' => 'json',));
                    }
                    not_pim_api_product_partial_update:

                    // pim_api_product_partial_update_list
                    if ('/api/rest/v1/products' === $pathinfo) {
                        if ('PATCH' !== $canonicalMethod) {
                            $allow[] = 'PATCH';
                            goto not_pim_api_product_partial_update_list;
                        }

                        return array (  '_controller' => 'pim_api.controller.product:partialUpdateListAction',  '_format' => 'json',  '_route' => 'pim_api_product_partial_update_list',);
                    }
                    not_pim_api_product_partial_update_list:

                    // pim_api_product_delete
                    if (preg_match('#^/api/rest/v1/products/(?P<code>(.+$)(?<!/draft|/proposal))$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_pim_api_product_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_product_delete')), array (  '_controller' => 'pim_api.controller.product:deleteAction',  '_format' => 'json',));
                    }
                    not_pim_api_product_delete:

                }

                elseif (0 === strpos($pathinfo, '/api/rest/v1/media-files')) {
                    // pim_api_media_file_list
                    if ('/api/rest/v1/media-files' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_api_media_file_list;
                        }

                        return array (  '_controller' => 'pim_api.controller.media_file:listAction',  '_format' => 'json',  '_route' => 'pim_api_media_file_list',);
                    }
                    not_pim_api_media_file_list:

                    // pim_api_media_file_download
                    if (preg_match('#^/api/rest/v1/media\\-files/(?P<code>([a-zA-Z0-9_./]+))/download$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_api_media_file_download;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_media_file_download')), array (  '_controller' => 'pim_api.controller.media_file:downloadAction',  '_format' => 'json',));
                    }
                    not_pim_api_media_file_download:

                    // pim_api_media_file_get
                    if (preg_match('#^/api/rest/v1/media\\-files/(?P<code>([a-zA-Z0-9_./]+))$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_api_media_file_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_media_file_get')), array (  '_controller' => 'pim_api.controller.media_file:getAction',  '_format' => 'json',));
                    }
                    not_pim_api_media_file_get:

                    // pim_api_media_file_create
                    if ('/api/rest/v1/media-files' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_pim_api_media_file_create;
                        }

                        return array (  '_controller' => 'pim_api.controller.media_file:createAction',  '_format' => 'json',  '_route' => 'pim_api_media_file_create',);
                    }
                    not_pim_api_media_file_create:

                }

                // pim_api_root_endpoint
                if ('/api/rest/v1' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_api_root_endpoint;
                    }

                    return array (  '_controller' => 'pim_api.controller.root_endpoint:getAction',  '_format' => 'json',  '_route' => 'pim_api_root_endpoint',);
                }
                not_pim_api_root_endpoint:

                if (0 === strpos($pathinfo, '/api/rest/v1/measure-families')) {
                    // pim_api_measure_family_list
                    if ('/api/rest/v1/measure-families' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_api_measure_family_list;
                        }

                        return array (  '_controller' => 'pim_api.controller.measure_family:listAction',  '_format' => 'json',  '_route' => 'pim_api_measure_family_list',);
                    }
                    not_pim_api_measure_family_list:

                    // pim_api_measure_family_get
                    if (preg_match('#^/api/rest/v1/measure\\-families/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_api_measure_family_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_api_measure_family_get')), array (  '_controller' => 'pim_api.controller.measure_family:getAction',  '_format' => 'json',));
                    }
                    not_pim_api_measure_family_get:

                }

            }

            // fos_oauth_server_token
            if ('/api/oauth/v1/token' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_oauth_server_token;
                }

                return array (  '_controller' => 'pim_api.controller.token:tokenAction',  '_route' => 'fos_oauth_server_token',);
            }
            not_fos_oauth_server_token:

            // pim_analytics_data_collect
            if ('/analytics/collect_data' === $pathinfo) {
                return array (  '_controller' => 'pim_analytics.controller.data:collectAction',  '_format' => 'json',  '_route' => 'pim_analytics_data_collect',);
            }

        }

        elseif (0 === strpos($pathinfo, '/rest')) {
            if (0 === strpos($pathinfo, '/rest/attribute')) {
                // pim_enrich_attribute_rest_index
                if ('/rest/attribute' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_pim_enrich_attribute_rest_index;
                    }

                    $ret = array (  '_controller' => 'pim_enrich.controller.rest.attribute:indexAction',  '_route' => 'pim_enrich_attribute_rest_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_attribute_rest_index'));
                    }

                    return $ret;
                }
                not_pim_enrich_attribute_rest_index:

                // pim_enrich_attribute_rest_create
                if ('/rest/attribute/' === $pathinfo) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_pim_enrich_attribute_rest_create;
                    }

                    return array (  '_controller' => 'pim_enrich.controller.rest.attribute:createAction',  '_route' => 'pim_enrich_attribute_rest_create',);
                }
                not_pim_enrich_attribute_rest_create:

                // pim_enrich_attribute_rest_get
                if (preg_match('#^/rest/attribute/(?P<identifier>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_enrich_attribute_rest_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attribute_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.attribute:getAction',));
                }
                not_pim_enrich_attribute_rest_get:

                // pim_enrich_attribute_rest_post
                if (preg_match('#^/rest/attribute/(?P<identifier>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_pim_enrich_attribute_rest_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attribute_rest_post')), array (  '_controller' => 'pim_enrich.controller.rest.attribute:postAction',));
                }
                not_pim_enrich_attribute_rest_post:

                // pim_enrich_attribute_rest_remove
                if (preg_match('#^/rest/attribute/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_attribute_rest_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attribute_rest_remove')), array (  '_controller' => 'pim_enrich.controller.rest.attribute:removeAction',));
                }
                not_pim_enrich_attribute_rest_remove:

                // pim_enrich_attribute_axes_index
                if ('/rest/attribute/axes' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_enrich_attribute_axes_index;
                    }

                    return array (  '_controller' => 'pim_enrich.controller.rest.attribute:listAxesAction',  '_route' => 'pim_enrich_attribute_axes_index',);
                }
                not_pim_enrich_attribute_axes_index:

                if (0 === strpos($pathinfo, '/rest/attribute-group')) {
                    // pim_enrich_attributegroup_rest_index
                    if ('/rest/attribute-group' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_enrich_attributegroup_rest_index;
                        }

                        $ret = array (  '_controller' => 'pim_enrich.controller.rest.attribute_group:indexAction',  '_route' => 'pim_enrich_attributegroup_rest_index',);
                        if (substr($pathinfo, -1) !== '/') {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_attributegroup_rest_index'));
                        }

                        return $ret;
                    }
                    not_pim_enrich_attributegroup_rest_index:

                    // pim_enrich_attributegroup_rest_search
                    if ('/rest/attribute-group/' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_pim_enrich_attributegroup_rest_search;
                        }

                        return array (  '_controller' => 'pim_enrich.controller.rest.attribute_group:searchAction',  '_route' => 'pim_enrich_attributegroup_rest_search',);
                    }
                    not_pim_enrich_attributegroup_rest_search:

                    // pim_enrich_attributegroup_rest_create
                    if ('/rest/attribute-group/' === $pathinfo) {
                        if ('PUT' !== $canonicalMethod) {
                            $allow[] = 'PUT';
                            goto not_pim_enrich_attributegroup_rest_create;
                        }

                        return array (  '_controller' => 'pim_enrich.controller.rest.attribute_group:createAction',  '_route' => 'pim_enrich_attributegroup_rest_create',);
                    }
                    not_pim_enrich_attributegroup_rest_create:

                    // pim_enrich_attributegroup_rest_sort
                    if ('/rest/attribute-group/' === $pathinfo) {
                        if ('PATCH' !== $canonicalMethod) {
                            $allow[] = 'PATCH';
                            goto not_pim_enrich_attributegroup_rest_sort;
                        }

                        return array (  '_controller' => 'pim_enrich.controller.rest.attribute_group:sortAction',  '_route' => 'pim_enrich_attributegroup_rest_sort',);
                    }
                    not_pim_enrich_attributegroup_rest_sort:

                    // pim_enrich_attributegroup_rest_get
                    if (preg_match('#^/rest/attribute\\-group/(?P<identifier>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_enrich_attributegroup_rest_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributegroup_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.attribute_group:getAction',));
                    }
                    not_pim_enrich_attributegroup_rest_get:

                    // pim_enrich_attributegroup_rest_post
                    if (preg_match('#^/rest/attribute\\-group/(?P<identifier>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_pim_enrich_attributegroup_rest_post;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributegroup_rest_post')), array (  '_controller' => 'pim_enrich.controller.rest.attribute_group:postAction',));
                    }
                    not_pim_enrich_attributegroup_rest_post:

                    // pim_enrich_attributegroup_rest_remove
                    if (preg_match('#^/rest/attribute\\-group/(?P<identifier>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_pim_enrich_attributegroup_rest_remove;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributegroup_rest_remove')), array (  '_controller' => 'pim_enrich.controller.rest.attribute_group:removeAction',));
                    }
                    not_pim_enrich_attributegroup_rest_remove:

                }

                // pim_enrich_attribute_type_index
                if ('/rest/attribute-type' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_enrich_attribute_type_index;
                    }

                    $ret = array (  '_controller' => 'pim_enrich.controller.rest.attribute_type:indexAction',  '_route' => 'pim_enrich_attribute_type_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_attribute_type_index'));
                    }

                    return $ret;
                }
                not_pim_enrich_attribute_type_index:

            }

            // pim_reference_data_configuration_rest_get
            if ('/rest/reference-data-configuration' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_pim_reference_data_configuration_rest_get;
                }

                $ret = array (  '_controller' => 'pim_reference_data.controller.configuration_rest:indexAction',  '_route' => 'pim_reference_data_configuration_rest_get',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_reference_data_configuration_rest_get'));
                }

                return $ret;
            }
            not_pim_reference_data_configuration_rest_get:

            // pim_enrich_sequential_edit_rest_get_ids
            if ('/rest/sequential_edit' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_pim_enrich_sequential_edit_rest_get_ids;
                }

                $ret = array (  '_controller' => 'pim_enrich.controller.rest.sequential_edit:getIdsAction',  '_route' => 'pim_enrich_sequential_edit_rest_get_ids',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_sequential_edit_rest_get_ids'));
                }

                return $ret;
            }
            not_pim_enrich_sequential_edit_rest_get_ids:

            // pim_user_security_rest_get
            if ('/rest/security' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'pim_user.controller.security_rest:getAction',  '_route' => 'pim_user_security_rest_get',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_user_security_rest_get'));
                }

                return $ret;
            }

            // pim_enrich_value_rest_validate
            if ('/rest/value/validate' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_pim_enrich_value_rest_validate;
                }

                return array (  '_controller' => 'pim_enrich.controller.rest.value:validateAction',  '_route' => 'pim_enrich_value_rest_validate',);
            }
            not_pim_enrich_value_rest_validate:

            if (0 === strpos($pathinfo, '/rest/mass_edit')) {
                // pim_enrich_mass_edit_rest_get_filter
                if ('/rest/mass_edit' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_enrich_mass_edit_rest_get_filter;
                    }

                    $ret = array (  '_controller' => 'pim_enrich.controller.rest.mass_edit:getFilterAction',  '_route' => 'pim_enrich_mass_edit_rest_get_filter',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_mass_edit_rest_get_filter'));
                    }

                    return $ret;
                }
                not_pim_enrich_mass_edit_rest_get_filter:

                // pim_enrich_mass_edit_rest_launch
                if ('/rest/mass_edit/' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_pim_enrich_mass_edit_rest_launch;
                    }

                    return array (  '_controller' => 'pim_enrich.controller.rest.mass_edit:launchAction',  '_route' => 'pim_enrich_mass_edit_rest_launch',);
                }
                not_pim_enrich_mass_edit_rest_launch:

            }

            elseif (0 === strpos($pathinfo, '/rest/user')) {
                // pim_user_user_rest_get_current
                if ('/rest/user' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_user_user_rest_get_current;
                    }

                    $ret = array (  '_controller' => 'pim_user.controller.user_rest:getCurrentAction',  '_route' => 'pim_user_user_rest_get_current',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_user_user_rest_get_current'));
                    }

                    return $ret;
                }
                not_pim_user_user_rest_get_current:

                // pim_user_user_rest_get
                if (preg_match('#^/rest/user/(?P<identifier>\\d+)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_user_user_rest_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_user_user_rest_get')), array (  '_controller' => 'pim_user.controller.user_rest:getAction',));
                }
                not_pim_user_user_rest_get:

                // pim_user_user_rest_post
                if (preg_match('#^/rest/user/(?P<identifier>\\d+)$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_pim_user_user_rest_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_user_user_rest_post')), array (  '_controller' => 'pim_user.controller.user_rest:postAction',));
                }
                not_pim_user_user_rest_post:

                // pim_user_user_rest_create
                if ('/rest/user/' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_pim_user_user_rest_create;
                    }

                    return array (  '_controller' => 'pim_user.controller.user_rest:createAction',  '_route' => 'pim_user_user_rest_create',);
                }
                not_pim_user_user_rest_create:

                // pim_user_user_rest_delete
                if (preg_match('#^/rest/user/(?P<identifier>\\d+)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_pim_user_user_rest_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_user_user_rest_delete')), array (  '_controller' => 'pim_user.controller.user_rest:deleteAction',));
                }
                not_pim_user_user_rest_delete:

                // pim_user_user_group_rest_index
                if ('/rest/user_group' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'pim_user.controller.user_group_rest:indexAction',  '_route' => 'pim_user_user_group_rest_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_user_user_group_rest_index'));
                    }

                    return $ret;
                }

                // pim_user_user_role_rest_index
                if ('/rest/user_role' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'pim_user.controller.user_role_rest:indexAction',  '_route' => 'pim_user_user_role_rest_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_user_user_role_rest_index'));
                    }

                    return $ret;
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/localization/format')) {
            // pim_localization_format_index
            if ('/localization/format' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_pim_localization_format_index;
                }

                return array (  '_controller' => 'pim_localization.controller.format:indexAction',  '_route' => 'pim_localization_format_index',);
            }
            not_pim_localization_format_index:

            // pim_localization_format_date
            if ('/localization/format/date' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_pim_localization_format_date;
                }

                return array (  '_controller' => 'pim_localization.controller.format:dateAction',  '_route' => 'pim_localization_format_date',);
            }
            not_pim_localization_format_date:

        }

        // pim_ui_ajaxentity_list
        if ('/list.json' === $pathinfo) {
            return array (  '_controller' => 'pim_ui.controller.ajax_option:listAction',  '_route' => 'pim_ui_ajaxentity_list',);
        }

        if (0 === strpos($pathinfo, '/enrich')) {
            if (0 === strpos($pathinfo, '/enrich/category/rest')) {
                // pim_enrich_category_rest_list_selected_children
                if (preg_match('#^/enrich/category/rest/(?P<identifier>[^/]++)/selected\\-children$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_pim_enrich_category_rest_list_selected_children;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_category_rest_list_selected_children')), array (  '_controller' => 'pim_enrich.controller.rest.category:listSelectedChildrenAction',));
                }
                not_pim_enrich_category_rest_list_selected_children:

                // pim_enrich_category_rest_list
                if ('/enrich/category/rest' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_enrich_category_rest_list;
                    }

                    return array (  '_controller' => 'pim_enrich.controller.rest.category:listAction',  '_route' => 'pim_enrich_category_rest_list',);
                }
                not_pim_enrich_category_rest_list:

                // pim_enrich_category_rest_get
                if (preg_match('#^/enrich/category/rest/(?P<identifier>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_enrich_category_rest_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_category_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.category:getAction',));
                }
                not_pim_enrich_category_rest_get:

            }

            elseif (0 === strpos($pathinfo, '/enrich/product')) {
                if (0 === strpos($pathinfo, '/enrich/product/rest')) {
                    // pim_enrich_product_category_rest_list
                    if (preg_match('#^/enrich/product/rest/(?P<id>[0-9a-f]+)/categories$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_enrich_product_category_rest_list;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_category_rest_list')), array (  '_controller' => 'pim_enrich.controller.rest.product_category:listAction',));
                    }
                    not_pim_enrich_product_category_rest_list:

                    // pim_enrich_product_rest_index
                    if ('/enrich/product/rest' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_enrich_product_rest_index;
                        }

                        $ret = array (  '_controller' => 'pim_enrich.controller.rest.product:indexAction',  '_route' => 'pim_enrich_product_rest_index',);
                        if (substr($pathinfo, -1) !== '/') {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_product_rest_index'));
                        }

                        return $ret;
                    }
                    not_pim_enrich_product_rest_index:

                    // pim_enrich_product_rest_get
                    if (preg_match('#^/enrich/product/rest/(?P<id>[0-9a-f]+)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_enrich_product_rest_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.product:getAction',));
                    }
                    not_pim_enrich_product_rest_get:

                    // pim_enrich_product_rest_create
                    if ('/enrich/product/rest' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_pim_enrich_product_rest_create;
                        }

                        return array (  '_controller' => 'pim_enrich.controller.rest.product:createAction',  '_route' => 'pim_enrich_product_rest_create',);
                    }
                    not_pim_enrich_product_rest_create:

                    // pim_enrich_product_rest_post
                    if (preg_match('#^/enrich/product/rest/(?P<id>[0-9a-f]+)$#s', $pathinfo, $matches)) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_pim_enrich_product_rest_post;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_rest_post')), array (  '_controller' => 'pim_enrich.controller.rest.product:postAction',));
                    }
                    not_pim_enrich_product_rest_post:

                    // pim_enrich_product_rest_remove
                    if (preg_match('#^/enrich/product/rest/(?P<id>[0-9a-f]+)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_pim_enrich_product_rest_remove;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_rest_remove')), array (  '_controller' => 'pim_enrich.controller.rest.product:removeAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_product_rest_remove:

                    // pim_enrich_product_remove_attribute_rest
                    if (preg_match('#^/enrich/product/rest/(?P<id>[0-9a-f]+)/(?P<attributeId>\\d+)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_pim_enrich_product_remove_attribute_rest;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_remove_attribute_rest')), array (  '_controller' => 'pim_enrich.controller.rest.product:removeAttributeAction',));
                    }
                    not_pim_enrich_product_remove_attribute_rest:

                }

                // pim_enrich_product_comments_rest_get
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/comments$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_enrich_product_comments_rest_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_comments_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.product_comment:getAction',));
                }
                not_pim_enrich_product_comments_rest_get:

                // pim_enrich_product_comments_rest_post
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/comments$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_pim_enrich_product_comments_rest_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_comments_rest_post')), array (  '_controller' => 'pim_enrich.controller.rest.product_comment:postAction',));
                }
                not_pim_enrich_product_comments_rest_post:

                // pim_enrich_product_comment_reply_rest_post
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/comments/(?P<commentId>[0-9a-f]+)$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_pim_enrich_product_comment_reply_rest_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_comment_reply_rest_post')), array (  '_controller' => 'pim_enrich.controller.rest.product_comment:postReplyAction',));
                }
                not_pim_enrich_product_comment_reply_rest_post:

                // pim_enrich_product_history_rest_get
                if (0 === strpos($pathinfo, '/enrich/product/rest/product') && preg_match('#^/enrich/product/rest/product/(?P<entityId>[0-9a-f]+)/history$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_enrich_product_history_rest_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_history_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.versioning:getAction',  'entityType' => 'product',));
                }
                not_pim_enrich_product_history_rest_get:

                // pim_pdf_generator_download_product_pdf
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/download\\-pdf$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_pdf_generator_download_product_pdf;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_pdf_generator_download_product_pdf')), array (  '_controller' => 'pim_pdf_generator.controller.product:downloadPdfAction',));
                }
                not_pim_pdf_generator_download_product_pdf:

                if (0 === strpos($pathinfo, '/enrich/product-model')) {
                    if (0 === strpos($pathinfo, '/enrich/product-model/rest')) {
                        // pim_enrich_product_model_category_rest_list
                        if (preg_match('#^/enrich/product\\-model/rest/(?P<id>[0-9a-f]+)/categories$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_enrich_product_model_category_rest_list;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_model_category_rest_list')), array (  '_controller' => 'pim_enrich.controller.rest.product_model_category:listAction',));
                        }
                        not_pim_enrich_product_model_category_rest_list:

                        // pim_enrich_product_model_rest_get
                        if (preg_match('#^/enrich/product\\-model/rest/(?P<id>[0-9a-f]+)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_enrich_product_model_rest_get;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_model_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.product_model:getAction',));
                        }
                        not_pim_enrich_product_model_rest_get:

                        // pim_enrich_product_model_rest_get_by_code
                        if (0 === strpos($pathinfo, '/enrich/product-model/rest-code') && preg_match('#^/enrich/product\\-model/rest\\-code/(?P<identifier>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_enrich_product_model_rest_get_by_code;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_model_rest_get_by_code')), array (  '_controller' => 'pim_enrich.controller.rest.product_model:getByCodeAction',));
                        }
                        not_pim_enrich_product_model_rest_get_by_code:

                        // pim_enrich_product_model_rest_index
                        if ('/enrich/product-model/rest' === $trimmedPathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_enrich_product_model_rest_index;
                            }

                            $ret = array (  '_controller' => 'pim_enrich.controller.rest.product_model:indexAction',  '_route' => 'pim_enrich_product_model_rest_index',);
                            if (substr($pathinfo, -1) !== '/') {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_product_model_rest_index'));
                            }

                            return $ret;
                        }
                        not_pim_enrich_product_model_rest_index:

                        // pim_enrich_product_model_rest_post
                        if (preg_match('#^/enrich/product\\-model/rest/(?P<id>[0-9a-f]+)$#s', $pathinfo, $matches)) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_pim_enrich_product_model_rest_post;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_model_rest_post')), array (  '_controller' => 'pim_enrich.controller.rest.product_model:postAction',));
                        }
                        not_pim_enrich_product_model_rest_post:

                        // pim_enrich_product_model_rest_children_list
                        if ('/enrich/product-model/rest/children' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_enrich_product_model_rest_children_list;
                            }

                            return array (  '_controller' => 'pim_enrich.controller.rest.product_model:childrenAction',  '_route' => 'pim_enrich_product_model_rest_children_list',);
                        }
                        not_pim_enrich_product_model_rest_children_list:

                        // pim_enrich_product_model_family_variant_leaf
                        if ('/enrich/product-model/rest/family-variant-leaf' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_enrich_product_model_family_variant_leaf;
                            }

                            return array (  '_controller' => 'pim_enrich.controller.rest.product_model:searchLastLevelProductModelByCode',  '_route' => 'pim_enrich_product_model_family_variant_leaf',);
                        }
                        not_pim_enrich_product_model_family_variant_leaf:

                        // pim_enrich_product_model_for_family_variant_rest_list
                        if ('/enrich/product-model/rest/product-model/family-variant' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_enrich_product_model_for_family_variant_rest_list;
                            }

                            return array (  '_controller' => 'pim_enrich.controller.rest.product_model:listFamilyVariantProductModels',  '_route' => 'pim_enrich_product_model_for_family_variant_rest_list',);
                        }
                        not_pim_enrich_product_model_for_family_variant_rest_list:

                        // pim_enrich_product_model_rest_remove
                        if (preg_match('#^/enrich/product\\-model/rest/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if ('DELETE' !== $canonicalMethod) {
                                $allow[] = 'DELETE';
                                goto not_pim_enrich_product_model_rest_remove;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_model_rest_remove')), array (  '_controller' => 'pim_enrich.controller.rest.product_model:removeAction',  '_format' => 'json',));
                        }
                        not_pim_enrich_product_model_rest_remove:

                        // pim_enrich_product_model_history_rest_get
                        if (0 === strpos($pathinfo, '/enrich/product-model/rest/product-model') && preg_match('#^/enrich/product\\-model/rest/product\\-model/(?P<entityId>[0-9a-f]+)/history$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_enrich_product_model_history_rest_get;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_model_history_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.versioning:getAction',  'entityType' => 'product_model',));
                        }
                        not_pim_enrich_product_model_history_rest_get:

                    }

                    // pim_enrich_product_model_edit
                    if (preg_match('#^/enrich/product\\-model/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_pim_enrich_product_model_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_model_edit')), array ());
                    }
                    not_pim_enrich_product_model_edit:

                    // pim_enrich_product_model_rest_create
                    if ('/enrich/product-model/rest/create' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_pim_enrich_product_model_rest_create;
                        }

                        return array (  '_controller' => 'pim_enrich.controller.rest.product_model:createAction',  '_route' => 'pim_enrich_product_model_rest_create',);
                    }
                    not_pim_enrich_product_model_rest_create:

                    // pim_enrich_product_model_listcategories
                    if (0 === strpos($pathinfo, '/enrich/product-model/list-categories/product-model') && preg_match('#^/enrich/product\\-model/list\\-categories/product\\-model/(?P<id>[0-9a-f]+)/parent/(?P<categoryId>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_model_listcategories')), array (  '_controller' => 'pim_enrich.controller.product_model:listCategoriesAction',  '_format' => 'json',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/enrich/product-category-tree')) {
                    // pim_enrich_product_grid_category_tree_listtree
                    if (0 === strpos($pathinfo, '/enrich/product-category-tree/product-grid/list-tree.') && preg_match('#^/enrich/product\\-category\\-tree/product\\-grid/list\\-tree\\.(?P<_format>json)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_grid_category_tree_listtree')), array (  '_controller' => 'akeneo.pim.enrichment.controller.product_grid_category_tree:listTreeAction',));
                    }

                    // pim_enrich_product_grid_category_tree_children
                    if (0 === strpos($pathinfo, '/enrich/product-category-tree/product-grid/children.') && preg_match('#^/enrich/product\\-category\\-tree/product\\-grid/children\\.(?P<_format>json)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_grid_category_tree_children')), array (  '_controller' => 'akeneo.pim.enrichment.controller.product_grid_category_tree:listChildrenAction',));
                    }

                    // pim_enrich_categorytree_listtree
                    if (0 === strpos($pathinfo, '/enrich/product-category-tree/list-tree.') && preg_match('#^/enrich/product\\-category\\-tree/list\\-tree\\.(?P<_format>json)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_categorytree_listtree')), array (  '_controller' => 'pim_enrich.controller.category_tree.product:listTreeAction',));
                    }

                    // pim_enrich_categorytree_movenode
                    if ('/enrich/product-category-tree/move-node' === $pathinfo) {
                        return array (  '_controller' => 'pim_enrich.controller.category_tree.product:moveNodeAction',  '_route' => 'pim_enrich_categorytree_movenode',);
                    }

                    // pim_enrich_categorytree_children
                    if (0 === strpos($pathinfo, '/enrich/product-category-tree/children.') && preg_match('#^/enrich/product\\-category\\-tree/children\\.(?P<_format>json)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_categorytree_children')), array (  '_controller' => 'pim_enrich.controller.category_tree.product:childrenAction',));
                    }

                    // pim_enrich_categorytree_index
                    if ('/enrich/product-category-tree' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'pim_enrich.controller.category_tree.product:indexAction',  '_route' => 'pim_enrich_categorytree_index',);
                        if (substr($pathinfo, -1) !== '/') {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_categorytree_index'));
                        }

                        return $ret;
                    }

                    if (0 === strpos($pathinfo, '/enrich/product-category-tree/create')) {
                        // pim_enrich_categorytree_create
                        if (preg_match('#^/enrich/product\\-category\\-tree/create(?:/(?P<parent>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_categorytree_create')), array (  '_controller' => 'pim_enrich.controller.category_tree.product:createAction',  'parent' => NULL,));
                        }

                        // pim_enrich_categorytree_create_tree
                        if ('/enrich/product-category-tree/create' === $pathinfo) {
                            return array (  '_controller' => 'pim_enrich.controller.category_tree.product:createAction',  '_route' => 'pim_enrich_categorytree_create_tree',);
                        }

                    }

                    // pim_enrich_categorytree_edit
                    if (preg_match('#^/enrich/product\\-category\\-tree/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_categorytree_edit')), array (  '_controller' => 'pim_enrich.controller.category_tree.product:editAction',));
                    }

                    // pim_enrich_categorytree_remove
                    if (preg_match('#^/enrich/product\\-category\\-tree/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_pim_enrich_categorytree_remove;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_categorytree_remove')), array (  '_controller' => 'pim_enrich.controller.category_tree.product:removeAction',));
                    }
                    not_pim_enrich_categorytree_remove:

                }

                // pim_enrich_product_index
                if ('/enrich/product' === $trimmedPathinfo) {
                    $ret = array('_route' => 'pim_enrich_product_index');
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_product_index'));
                    }

                    return $ret;
                }

                // pim_enrich_product_edit
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_pim_enrich_product_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_edit')), array ());
                }
                not_pim_enrich_product_edit:

                // pim_enrich_product_toggle_status
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/toggle\\-status$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_pim_enrich_product_toggle_status;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_toggle_status')), array (  '_controller' => 'pim_enrich.controller.product:toggleStatusAction',));
                }
                not_pim_enrich_product_toggle_status:

                // pim_enrich_product_listcategories
                if (0 === strpos($pathinfo, '/enrich/product/list-categories/product') && preg_match('#^/enrich/product/list\\-categories/product/(?P<id>[0-9a-f]+)/parent/(?P<categoryId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_listcategories')), array (  '_controller' => 'pim_enrich.controller.product:listCategoriesAction',  '_format' => 'json',));
                }

                // pim_enrich_product_grid_filters
                if ('/enrich/product-grid-filter' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'akeneo.pim.enrichment.controller.product_grid_filter:listAction',  '_route' => 'pim_enrich_product_grid_filters',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_product_grid_filters'));
                    }

                    return $ret;
                }

            }

            elseif (0 === strpos($pathinfo, '/enrich/group')) {
                if (0 === strpos($pathinfo, '/enrich/group/rest')) {
                    // pim_enrich_group_rest_index
                    if ('/enrich/group/rest' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_enrich_group_rest_index;
                        }

                        return array (  '_controller' => 'pim_enrich.controller.rest.group:indexAction',  '_route' => 'pim_enrich_group_rest_index',);
                    }
                    not_pim_enrich_group_rest_index:

                    // pim_enrich_group_rest_search
                    if ('/enrich/group/rest/search' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_enrich_group_rest_search;
                        }

                        return array (  '_controller' => 'pim_enrich.controller.rest.group:searchAction',  '_route' => 'pim_enrich_group_rest_search',);
                    }
                    not_pim_enrich_group_rest_search:

                    // pim_enrich_group_rest_get
                    if (preg_match('#^/enrich/group/rest/(?P<identifier>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_enrich_group_rest_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.group:getAction',));
                    }
                    not_pim_enrich_group_rest_get:

                    // pim_enrich_group_rest_list_products
                    if (preg_match('#^/enrich/group/rest/(?P<identifier>[a-zA-Z0-9_]+)/products$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_enrich_group_rest_list_products;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_rest_list_products')), array (  '_controller' => 'pim_enrich.controller.rest.group:listProductsAction',));
                    }
                    not_pim_enrich_group_rest_list_products:

                    // pim_enrich_group_rest_post
                    if (preg_match('#^/enrich/group/rest/(?P<code>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_pim_enrich_group_rest_post;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_rest_post')), array (  '_controller' => 'pim_enrich.controller.rest.group:postAction',));
                    }
                    not_pim_enrich_group_rest_post:

                    // pim_enrich_group_rest_remove
                    if (preg_match('#^/enrich/group/rest/(?P<code>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_pim_enrich_group_rest_remove;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_rest_remove')), array (  '_controller' => 'pim_enrich.controller.rest.group:removeAction',));
                    }
                    not_pim_enrich_group_rest_remove:

                    // pim_enrich_group_rest_create
                    if ('/enrich/group/rest' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_pim_enrich_group_rest_create;
                        }

                        return array (  '_controller' => 'pim_enrich.controller.rest.group:createAction',  '_route' => 'pim_enrich_group_rest_create',);
                    }
                    not_pim_enrich_group_rest_create:

                }

                // pim_enrich_group_index
                if ('/enrich/group' === $trimmedPathinfo) {
                    $ret = array('_route' => 'pim_enrich_group_index');
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_group_index'));
                    }

                    return $ret;
                }

                // pim_enrich_group_edit
                if (preg_match('#^/enrich/group/(?P<code>[a-zA-Z0-9_]+)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_edit')), array ());
                }

            }

            // pim_enrich_mass_edit_action
            if ('/enrich/mass-edit-action/mass_action' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_pim_enrich_mass_edit_action;
                }

                return array('_route' => 'pim_enrich_mass_edit_action');
            }
            not_pim_enrich_mass_edit_action:

        }

        elseif (0 === strpos($pathinfo, '/media')) {
            // pim_enrich_media_rest_post
            if ('/media/' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_pim_enrich_media_rest_post;
                }

                return array (  '_controller' => 'pim_enrich.controller.rest.media:postAction',  '_route' => 'pim_enrich_media_rest_post',);
            }
            not_pim_enrich_media_rest_post:

            // pim_enrich_media_show
            if (0 === strpos($pathinfo, '/media/show') && preg_match('#^/media/show/(?P<filename>[^/]++)(?:/(?P<filter>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_pim_enrich_media_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_media_show')), array (  '_controller' => 'pim_enrich.controller.file:showAction',  'filter' => NULL,));
            }
            not_pim_enrich_media_show:

            // pim_enrich_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<filename>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_pim_enrich_media_download;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_media_download')), array (  '_controller' => 'pim_enrich.controller.file:downloadAction',  'filter' => NULL,));
            }
            not_pim_enrich_media_download:

            // pim_enrich_default_thumbnail
            if (0 === strpos($pathinfo, '/media/default-thumbnail') && preg_match('#^/media/default\\-thumbnail/(?P<mimeType>[a-z-]+/[a-z0-9.-]+)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_pim_enrich_default_thumbnail;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_default_thumbnail')), array (  '_controller' => 'pim_enrich.controller.file:defaultThumbnailAction',  'filter' => 'thumbnail',));
            }
            not_pim_enrich_default_thumbnail:

            if (0 === strpos($pathinfo, '/media/cache')) {
                // pim_enrich_media_cache_resolve
                if (0 === strpos($pathinfo, '/media/cache/resolve') && preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_enrich_media_cache_resolve;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_media_cache_resolve')), array (  '_controller' => 'pim_enrich.controller.file:cacheAction',));
                }
                not_pim_enrich_media_cache_resolve:

                // pim_enrich_media_cache
                if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_enrich_media_cache;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_media_cache')), array (  '_controller' => 'pim_enrich.controller.file:cacheAction',));
                }
                not_pim_enrich_media_cache:

                if (0 === strpos($pathinfo, '/media/cache/resolve')) {
                    // liip_imagine_filter_runtime
                    if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_liip_imagine_filter_runtime;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
                    }
                    not_liip_imagine_filter_runtime:

                    // liip_imagine_filter
                    if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_liip_imagine_filter;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
                    }
                    not_liip_imagine_filter:

                }

            }

        }

        elseif (0 === strpos($pathinfo, '/system')) {
            if (0 === strpos($pathinfo, '/system_info')) {
                // pim_analytics_system_info_index
                if ('/system_info' === $pathinfo) {
                    return array (  '_controller' => 'pim_analytics.controller.system_info:indexAction',  '_format' => 'html',  '_route' => 'pim_analytics_system_info_index',);
                }

                // pim_analytics_system_info_download
                if ('/system_info/download' === $pathinfo) {
                    return array (  '_controller' => 'pim_analytics.controller.system_info:indexAction',  '_format' => 'txt',  '_route' => 'pim_analytics_system_info_download',);
                }

            }

            // pim_localization_locale_index
            if ('/system/locale/ui' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_pim_localization_locale_index;
                }

                return array (  '_controller' => 'pim_localization.controller.locale:indexAction',  '_route' => 'pim_localization_locale_index',);
            }
            not_pim_localization_locale_index:

            // oro_config_configuration_system
            if ('/system' === $trimmedPathinfo) {
                $ret = array('_route' => 'oro_config_configuration_system');
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'oro_config_configuration_system'));
                }

                return $ret;
            }

            if (0 === strpos($pathinfo, '/system/rest')) {
                // oro_config_configuration_system_get
                if ('/system/rest' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_oro_config_configuration_system_get;
                    }

                    return array (  '_controller' => 'oro_config.controller.configuration:getAction',  '_route' => 'oro_config_configuration_system_get',);
                }
                not_oro_config_configuration_system_get:

                // oro_config_configuration_system_post
                if ('/system/rest' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_oro_config_configuration_system_post;
                    }

                    return array (  '_controller' => 'oro_config.controller.configuration:postAction',  '_route' => 'oro_config_configuration_system_post',);
                }
                not_oro_config_configuration_system_post:

            }

        }

        elseif (0 === strpos($pathinfo, '/spread/export')) {
            // pim_importexport_export_profile_index
            if ('/spread/export' === $trimmedPathinfo) {
                $ret = array('_route' => 'pim_importexport_export_profile_index');
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_importexport_export_profile_index'));
                }

                return $ret;
            }

            // pim_importexport_export_profile_create
            if ('/spread/export/create' === $pathinfo) {
                return array (  '_controller' => 'pim_import_export.controller.export_profile:createAction',  '_route' => 'pim_importexport_export_profile_create',);
            }

            // pim_importexport_export_profile_show
            if (preg_match('#^/spread/export/(?P<code>[a-zA-Z0-9_]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_profile_show')), array (  '_controller' => 'pim_import_export.controller.export_profile:showAction',));
            }

            // pim_importexport_export_profile_edit
            if (preg_match('#^/spread/export/(?P<code>[a-zA-Z0-9_]+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_profile_edit')), array (  '_controller' => 'pim_import_export.controller.export_profile:editAction',));
            }

            // pim_importexport_export_profile_report
            if (preg_match('#^/spread/export/(?P<code>[a-zA-Z0-9_]+)/reports$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_profile_report')), array (  '_controller' => 'pim_import_export.controller.export_profile:reportAction',));
            }

            if (0 === strpos($pathinfo, '/spread/export_execution')) {
                // pim_importexport_export_execution_index
                if ('/spread/export_execution' === $trimmedPathinfo) {
                    $ret = array('_route' => 'pim_importexport_export_execution_index');
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_importexport_export_execution_index'));
                    }

                    return $ret;
                }

                // pim_importexport_export_execution_download_log
                if (preg_match('#^/spread/export_execution/(?P<id>\\d+)/download$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_execution_download_log')), array (  '_controller' => 'pim_import_export.controller.export_execution:downloadLogFileAction',));
                }

                // pim_importexport_export_execution_show
                if (preg_match('#^/spread/export_execution/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_execution_show')), array (  '_controller' => 'pim_import_export.controller.export_execution:showAction',));
                }

                // pim_importexport_export_execution_download_file
                if (preg_match('#^/spread/export_execution/(?P<id>\\d+)/download/(?P<archiver>[^/]++)/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_execution_download_file')), array (  '_controller' => 'pim_import_export.controller.export_execution:downloadFilesAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/datagrid')) {
            // pim_datagrid_load
            if (preg_match('#^/datagrid/(?P<alias>[^/]++)/load$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_pim_datagrid_load;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_load')), array (  '_controller' => 'pim_datagrid.controller.datagrid:loadAction',));
            }
            not_pim_datagrid_load:

            // pim_datagrid_productgrid_attributes_filters
            if ('/datagrid/product-grid/attributes-filters' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_pim_datagrid_productgrid_attributes_filters;
                }

                return array (  '_controller' => 'pim_datagrid.controller.productgrid:getAttributesFiltersAction',  '_route' => 'pim_datagrid_productgrid_attributes_filters',);
            }
            not_pim_datagrid_productgrid_attributes_filters:

            if (0 === strpos($pathinfo, '/datagrid/product-grid/available-columns')) {
                // pim_datagrid_productgrid_available_columns
                if ('/datagrid/product-grid/available-columns' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_datagrid_productgrid_available_columns;
                    }

                    return array (  '_controller' => 'pim_datagrid.controller.productgrid:getAvailableColumnsAction',  '_route' => 'pim_datagrid_productgrid_available_columns',);
                }
                not_pim_datagrid_productgrid_available_columns:

                // pim_datagrid_productgrid_available_columns_groups
                if ('/datagrid/product-grid/available-columns-groups' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_datagrid_productgrid_available_columns_groups;
                    }

                    return array (  '_controller' => 'pim_datagrid.controller.productgrid:getAvailableColumnsGroupsAction',  '_route' => 'pim_datagrid_productgrid_available_columns_groups',);
                }
                not_pim_datagrid_productgrid_available_columns_groups:

            }

            // pim_datagrid_export_index
            if ('/datagrid/export/index' === $pathinfo) {
                return array (  '_controller' => 'pim_datagrid.controller.export:indexAction',  '_route' => 'pim_datagrid_export_index',);
            }

            // pim_datagrid_export_product_index
            if ('/datagrid/export/product/index' === $pathinfo) {
                return array (  '_controller' => 'pim_datagrid.controller.product_export:indexAction',  '_route' => 'pim_datagrid_export_product_index',);
            }

            if (0 === strpos($pathinfo, '/datagrid_view/rest')) {
                // pim_datagrid_view_rest_types
                if ('/datagrid_view/rest/types' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_datagrid_view_rest_types;
                    }

                    return array (  '_controller' => 'pim_datagrid.controller.rest.datagrid_view:typesAction',  '_route' => 'pim_datagrid_view_rest_types',);
                }
                not_pim_datagrid_view_rest_types:

                // pim_datagrid_view_rest_index
                if (preg_match('#^/datagrid_view/rest/(?P<alias>[^/]++)/views$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_datagrid_view_rest_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_view_rest_index')), array (  '_controller' => 'pim_datagrid.controller.rest.datagrid_view:indexAction',));
                }
                not_pim_datagrid_view_rest_index:

                // pim_datagrid_view_rest_default_columns
                if (preg_match('#^/datagrid_view/rest/(?P<alias>[^/]++)/default\\-columns$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_datagrid_view_rest_default_columns;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_view_rest_default_columns')), array (  '_controller' => 'pim_datagrid.controller.rest.datagrid_view:defaultViewColumnsAction',));
                }
                not_pim_datagrid_view_rest_default_columns:

                // pim_datagrid_view_list_available_columns
                if (preg_match('#^/datagrid_view/rest/(?P<alias>[^/]++)/available\\-columns$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_datagrid_view_list_available_columns;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_view_list_available_columns')), array (  '_controller' => 'pim_datagrid.controller.rest.datagrid_view:listColumnsAction',));
                }
                not_pim_datagrid_view_list_available_columns:

                // pim_datagrid_view_rest_default_user_view
                if (preg_match('#^/datagrid_view/rest/(?P<alias>[^/]++)/default$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_datagrid_view_rest_default_user_view;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_view_rest_default_user_view')), array (  '_controller' => 'pim_datagrid.controller.rest.datagrid_view:getUserDefaultDatagridViewAction',));
                }
                not_pim_datagrid_view_rest_default_user_view:

                // pim_datagrid_view_rest_save
                if (preg_match('#^/datagrid_view/rest/(?P<alias>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_pim_datagrid_view_rest_save;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_view_rest_save')), array (  '_controller' => 'pim_datagrid.controller.rest.datagrid_view:saveAction',));
                }
                not_pim_datagrid_view_rest_save:

                // pim_datagrid_view_rest_remove
                if (preg_match('#^/datagrid_view/rest/(?P<identifier>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_pim_datagrid_view_rest_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_view_rest_remove')), array (  '_controller' => 'pim_datagrid.controller.rest.datagrid_view:removeAction',));
                }
                not_pim_datagrid_view_rest_remove:

                // pim_datagrid_view_rest_get
                if (preg_match('#^/datagrid_view/rest/(?P<identifier>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_datagrid_view_rest_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_view_rest_get')), array (  '_controller' => 'pim_datagrid.controller.rest.datagrid_view:getAction',));
                }
                not_pim_datagrid_view_rest_get:

            }

            // pim_datagrid_mass_action
            if (preg_match('#^/datagrid/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_mass_action')), array (  '_controller' => 'pim_datagrid.controller.mass_action:massActionAction',));
            }

            // oro_datagrid_index
            if (preg_match('#^/datagrid/(?P<gridName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_index')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::getAction',));
            }

            // oro_datagrid_mass_action
            if (preg_match('#^/datagrid/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_mass_action')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::massActionAction',));
            }

        }

        // pim_dashboard_index
        if ('/dashboard' === $pathinfo) {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'PimDashboardBundle:Dashboard:index.html.twig',  '_route' => 'pim_dashboard_index',);
        }

        // pim_dashboard_widget_data
        if (0 === strpos($pathinfo, '/widget') && preg_match('#^/widget/(?P<alias>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_pim_dashboard_widget_data;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_dashboard_widget_data')), array (  '_controller' => 'pim_dashboard.controller.widget:dataAction',));
        }
        not_pim_dashboard_widget_data:

        // pim_enrich_form_extension_rest_index
        if ('/form/extensions' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_pim_enrich_form_extension_rest_index;
            }

            return array (  '_controller' => 'pim_enrich.controller.rest.form_extension:getAction',  '_route' => 'pim_enrich_form_extension_rest_index',);
        }
        not_pim_enrich_form_extension_rest_index:

        if (0 === strpos($pathinfo, '/user')) {
            // pim_user_index
            if ('/user' === $trimmedPathinfo) {
                $ret = array('_route' => 'pim_user_index');
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_user_index'));
                }

                return $ret;
            }

            // pim_user_edit
            if (preg_match('#^/user/(?P<identifier>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_user_edit')), array ());
            }

            if (0 === strpos($pathinfo, '/user/logout')) {
                // pim_user_logout_redirect
                if ('/user/logout/redirect' === $pathinfo) {
                    return array (  '_controller' => 'Akeneo\\UserManagement\\Bundle\\Controller\\SecurityController::logoutRedirectAction',  '_route' => 'pim_user_logout_redirect',);
                }

                // pim_user_security_logout
                if ('/user/logout' === $pathinfo) {
                    return array (  '_controller' => 'Akeneo\\UserManagement\\Bundle\\Controller\\SecurityController::logoutAction',  '_route' => 'pim_user_security_logout',);
                }

            }

            elseif (0 === strpos($pathinfo, '/user/login')) {
                // pim_user_security_login
                if ('/user/login' === $pathinfo) {
                    return array (  '_controller' => 'Akeneo\\UserManagement\\Bundle\\Controller\\SecurityController::loginAction',  '_route' => 'pim_user_security_login',);
                }

                // pim_user_security_check
                if ('/user/login-check' === $pathinfo) {
                    return array (  '_controller' => 'Akeneo\\UserManagement\\Bundle\\Controller\\SecurityController::checkAction',  '_route' => 'pim_user_security_check',);
                }

            }

            elseif (0 === strpos($pathinfo, '/user/group')) {
                // pim_user_group_create
                if ('/user/group/create' === $pathinfo) {
                    return array (  '_controller' => 'Akeneo\\UserManagement\\Bundle\\Controller\\GroupController::createAction',  '_route' => 'pim_user_group_create',);
                }

                // pim_user_group_update
                if (0 === strpos($pathinfo, '/user/group/update') && preg_match('#^/user/group/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_user_group_update')), array (  '_controller' => 'Akeneo\\UserManagement\\Bundle\\Controller\\GroupController::updateAction',  'id' => 0,));
                }

                // pim_user_group_index
                if ('/user/group' === $trimmedPathinfo) {
                    $ret = array('_route' => 'pim_user_group_index');
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_user_group_index'));
                    }

                    return $ret;
                }

                // pim_user_group_delete
                if (0 === strpos($pathinfo, '/user/group/delete') && preg_match('#^/user/group/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_pim_user_group_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_user_group_delete')), array (  '_controller' => 'Akeneo\\UserManagement\\Bundle\\Controller\\GroupController::deleteAction',));
                }
                not_pim_user_group_delete:

            }

            elseif (0 === strpos($pathinfo, '/user/reset')) {
                // pim_user_reset_request
                if ('/user/reset-request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_user_reset_request;
                    }

                    return array (  '_controller' => 'Akeneo\\UserManagement\\Bundle\\Controller\\ResetController::requestAction',  '_route' => 'pim_user_reset_request',);
                }
                not_pim_user_reset_request:

                // pim_user_reset_reset
                if (preg_match('#^/user/reset/(?P<token>\\w+)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_pim_user_reset_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_user_reset_reset')), array (  '_controller' => 'Akeneo\\UserManagement\\Bundle\\Controller\\ResetController::resetAction',));
                }
                not_pim_user_reset_reset:

            }

            elseif (0 === strpos($pathinfo, '/user/role')) {
                // pim_user_role_create
                if ('/user/role/create' === $pathinfo) {
                    return array (  '_controller' => 'Akeneo\\UserManagement\\Bundle\\Controller\\RoleController::createAction',  '_route' => 'pim_user_role_create',);
                }

                // pim_user_role_update
                if (0 === strpos($pathinfo, '/user/role/update') && preg_match('#^/user/role/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_user_role_update')), array (  '_controller' => 'Akeneo\\UserManagement\\Bundle\\Controller\\RoleController::updateAction',  'id' => 0,));
                }

                // pim_user_role_index
                if ('/user/role' === $trimmedPathinfo) {
                    $ret = array('_route' => 'pim_user_role_index');
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_user_role_index'));
                    }

                    return $ret;
                }

                // pim_user_role_delete
                if (0 === strpos($pathinfo, '/user/role/delete') && preg_match('#^/user/role/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_pim_user_role_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_user_role_delete')), array (  '_controller' => 'Akeneo\\UserManagement\\Bundle\\Controller\\RoleController::deleteAction',));
                }
                not_pim_user_role_delete:

            }

            // pim_user_reset_send_email
            if ('/user/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_pim_user_reset_send_email;
                }

                return array (  '_controller' => 'Akeneo\\UserManagement\\Bundle\\Controller\\ResetController::sendEmailAction',  '_route' => 'pim_user_reset_send_email',);
            }
            not_pim_user_reset_send_email:

            // pim_user_reset_check_email
            if ('/user/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_pim_user_reset_check_email;
                }

                return array (  '_controller' => 'Akeneo\\UserManagement\\Bundle\\Controller\\ResetController::checkEmailAction',  '_route' => 'pim_user_reset_check_email',);
            }
            not_pim_user_reset_check_email:

        }

        elseif (0 === strpos($pathinfo, '/j')) {
            if (0 === strpos($pathinfo, '/job')) {
                if (0 === strpos($pathinfo, '/job-instance/rest')) {
                    if (0 === strpos($pathinfo, '/job-instance/rest/import')) {
                        // pim_enrich_job_instance_rest_import_get
                        if (preg_match('#^/job\\-instance/rest/import/(?P<identifier>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_enrich_job_instance_rest_import_get;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_instance_rest_import_get')), array (  '_controller' => 'pim_enrich.controller.rest.job_instance:getImportAction',));
                        }
                        not_pim_enrich_job_instance_rest_import_get:

                        // pim_enrich_job_instance_rest_import_create
                        if ('/job-instance/rest/import' === $pathinfo) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_pim_enrich_job_instance_rest_import_create;
                            }

                            return array (  '_controller' => 'pim_enrich.controller.rest.job_instance:createImportAction',  '_route' => 'pim_enrich_job_instance_rest_import_create',);
                        }
                        not_pim_enrich_job_instance_rest_import_create:

                        // pim_enrich_job_instance_rest_import_put
                        if (preg_match('#^/job\\-instance/rest/import/(?P<identifier>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($requestMethod, array('PUT', 'POST'))) {
                                $allow = array_merge($allow, array('PUT', 'POST'));
                                goto not_pim_enrich_job_instance_rest_import_put;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_instance_rest_import_put')), array (  '_controller' => 'pim_enrich.controller.rest.job_instance:putImportAction',));
                        }
                        not_pim_enrich_job_instance_rest_import_put:

                        // pim_enrich_job_instance_rest_import_delete
                        if (preg_match('#^/job\\-instance/rest/import/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('DELETE' !== $canonicalMethod) {
                                $allow[] = 'DELETE';
                                goto not_pim_enrich_job_instance_rest_import_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_instance_rest_import_delete')), array (  '_controller' => 'pim_enrich.controller.rest.job_instance:deleteImportAction',));
                        }
                        not_pim_enrich_job_instance_rest_import_delete:

                        // pim_enrich_job_instance_rest_import_launch
                        if (preg_match('#^/job\\-instance/rest/import/(?P<code>[^/]++)/launch$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                                $allow = array_merge($allow, array('POST', 'GET'));
                                goto not_pim_enrich_job_instance_rest_import_launch;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_instance_rest_import_launch')), array (  '_controller' => 'pim_enrich.controller.rest.job_instance:launchImportAction',));
                        }
                        not_pim_enrich_job_instance_rest_import_launch:

                    }

                    elseif (0 === strpos($pathinfo, '/job-instance/rest/export')) {
                        // pim_enrich_job_instance_rest_export_create
                        if ('/job-instance/rest/export' === $pathinfo) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_pim_enrich_job_instance_rest_export_create;
                            }

                            return array (  '_controller' => 'pim_enrich.controller.rest.job_instance:createExportAction',  '_route' => 'pim_enrich_job_instance_rest_export_create',);
                        }
                        not_pim_enrich_job_instance_rest_export_create:

                        // pim_enrich_job_instance_rest_export_get
                        if (preg_match('#^/job\\-instance/rest/export/(?P<identifier>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_pim_enrich_job_instance_rest_export_get;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_instance_rest_export_get')), array (  '_controller' => 'pim_enrich.controller.rest.job_instance:getExportAction',));
                        }
                        not_pim_enrich_job_instance_rest_export_get:

                        // pim_enrich_job_instance_rest_export_put
                        if (preg_match('#^/job\\-instance/rest/export/(?P<identifier>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($requestMethod, array('PUT', 'POST'))) {
                                $allow = array_merge($allow, array('PUT', 'POST'));
                                goto not_pim_enrich_job_instance_rest_export_put;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_instance_rest_export_put')), array (  '_controller' => 'pim_enrich.controller.rest.job_instance:putExportAction',));
                        }
                        not_pim_enrich_job_instance_rest_export_put:

                        // pim_enrich_job_instance_rest_export_delete
                        if (preg_match('#^/job\\-instance/rest/export/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('DELETE' !== $canonicalMethod) {
                                $allow[] = 'DELETE';
                                goto not_pim_enrich_job_instance_rest_export_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_instance_rest_export_delete')), array (  '_controller' => 'pim_enrich.controller.rest.job_instance:deleteExportAction',));
                        }
                        not_pim_enrich_job_instance_rest_export_delete:

                        // pim_enrich_job_instance_rest_export_launch
                        if (preg_match('#^/job\\-instance/rest/export/(?P<code>[^/]++)/launch$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                                $allow = array_merge($allow, array('POST', 'GET'));
                                goto not_pim_enrich_job_instance_rest_export_launch;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_instance_rest_export_launch')), array (  '_controller' => 'pim_enrich.controller.rest.job_instance:launchExportAction',));
                        }
                        not_pim_enrich_job_instance_rest_export_launch:

                    }

                    // pim_enrich_job_instance_rest_jobs_get
                    if ('/job-instance/rest/jobs' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pim_enrich_job_instance_rest_jobs_get;
                        }

                        return array (  '_controller' => 'pim_enrich.controller.rest.job_instance:getJobNamesAction',  '_route' => 'pim_enrich_job_instance_rest_jobs_get',);
                    }
                    not_pim_enrich_job_instance_rest_jobs_get:

                }

                // pim_enrich_job_execution_rest_get
                if (0 === strpos($pathinfo, '/job-execution/rest') && preg_match('#^/job\\-execution/rest/(?P<identifier>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pim_enrich_job_execution_rest_get;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_execution_rest_get')), array (  '_controller' => 'pim_enrich.controller.rest.job_execution:getAction',));
                }
                not_pim_enrich_job_execution_rest_get:

                // pim_enrich_job_tracker_index
                if ('/job' === $trimmedPathinfo) {
                    $ret = array('_route' => 'pim_enrich_job_tracker_index');
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pim_enrich_job_tracker_index'));
                    }

                    return $ret;
                }

                // pim_enrich_job_tracker_download_log
                if (preg_match('#^/job/(?P<id>\\d+)/download$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_tracker_download_log')), array (  '_controller' => 'pim_enrich.controller.job_tracker:downloadLogFileAction',));
                }

                // pim_enrich_job_tracker_show
                if (0 === strpos($pathinfo, '/job/show') && preg_match('#^/job/show/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_tracker_show')), array (  '_controller' => 'pim_enrich.controller.job_tracker:showAction',));
                }

                // pim_enrich_job_tracker_download_file
                if (preg_match('#^/job/(?P<id>\\d+)/download/(?P<archiver>[^/]++)/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_job_tracker_download_file')), array (  '_controller' => 'pim_enrich.controller.job_tracker:downloadFilesAction',));
                }

            }

            // oro_translation_jstranslation
            if (0 === strpos($pathinfo, '/js/translation') && preg_match('#^/js/translation/(?P<_locale>[^/\\.]++)\\.js$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_translation_jstranslation')), array (  '_controller' => 'oro_translation.controller:indexAction',));
            }

            // fos_js_routing_js
            if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
            }

        }

        elseif (0 === strpos($pathinfo, '/notification')) {
            // pim_notification_notification_list
            if ('/notification/list' === $pathinfo) {
                return array (  '_controller' => 'pim_notification.controller.notification:listAction',  '_route' => 'pim_notification_notification_list',);
            }

            // pim_notification_notification_count_unread
            if ('/notification/count_unread' === $pathinfo) {
                return array (  '_controller' => 'pim_notification.controller.notification:countUnreadAction',  '_route' => 'pim_notification_notification_count_unread',);
            }

            // pim_notification_notification_mark_viewed
            if (0 === strpos($pathinfo, '/notification/mark_viewed') && preg_match('#^/notification/mark_viewed(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_pim_notification_notification_mark_viewed;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_notification_notification_mark_viewed')), array (  '_controller' => 'pim_notification.controller.notification:markAsViewedAction',  'id' => NULL,));
            }
            not_pim_notification_notification_mark_viewed:

            // pim_notification_notification_remove
            if (0 === strpos($pathinfo, '/notification/remove') && preg_match('#^/notification/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_pim_notification_notification_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_notification_notification_remove')), array (  '_controller' => 'pim_notification.controller.notification:removeAction',));
            }
            not_pim_notification_notification_remove:

        }

        // oro_default
        if ('' === $trimmedPathinfo) {
            $ret = array (  'template' => 'PimUIBundle::index.html.twig',  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  '_route' => 'oro_default',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'oro_default'));
            }

            return $ret;
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
