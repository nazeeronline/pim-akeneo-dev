<?php

/* PimDataGridBundle::macros.html.twig */
class __TwigTemplate_4293c7b9491daf9d3d0fd5c89935d73a669595bc8fcb5245208a2cb6f14e205b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 20
        echo "
";
        // line 192
        echo "
";
    }

    // line 4
    public function getrenderGrid($__name__ = null, $__params__ = array(), $__renderParams__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "params" => $__params__,
            "renderParams" => $__renderParams__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    ";
            $context["metaData"] = call_user_func_array($this->env->getFunction('oro_datagrid_metadata')->getCallable(), array(($context["name"] ?? null), ($context["params"] ?? null)));
            // line 6
            echo "
    <div id=\"grid-";
            // line 7
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-type=\"datagrid\" data-data=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('oro_datagrid_data')->getCallable(), array(($context["name"] ?? null), ($context["params"] ?? null))));
            echo "\"
         ";
            // line 8
            if ($this->getAttribute(($context["renderParams"] ?? null), "cssClass", array(), "any", true, true)) {
                echo " class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["renderParams"] ?? null), "cssClass", array()), "html", null, true);
                echo "\" ";
            }
            // line 9
            echo "         data-metadata=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["metaData"] ?? null)), "html", null, true);
            echo "\"></div>
    <script type=\"text/javascript\">
        require(['jquery', 'oro/datagrid-builder', 'underscore'].concat(";
            // line 11
            echo twig_jsonencode_filter($this->getAttribute(($context["metaData"] ?? null), "requireJSModules", array()));
            echo "),
        function (\$, datagridBuilder, _) {
            var builders = _.toArray(arguments).slice(3);
            \$(function () {
                datagridBuilder(builders);
            });
        });
    </script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getrenderStatefulGrid($__name__ = null, $__params__ = array(), $__renderParams__ = array(), $__defaultView__ = array(), $__categoryBaseRoute__ = null, $__includeFilters__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "params" => $__params__,
            "renderParams" => $__renderParams__,
            "defaultView" => $__defaultView__,
            "categoryBaseRoute" => $__categoryBaseRoute__,
            "includeFilters" => $__includeFilters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "    <div id=\"grid-";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-type=\"datagrid\" ";
            if ($this->getAttribute(($context["renderParams"] ?? null), "cssClass", array(), "any", true, true)) {
                echo " class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["renderParams"] ?? null), "cssClass", array()), "html", null, true);
                echo "\" ";
            }
            echo "></div>
    <script type=\"text/javascript\">
        require(
            [
                'underscore',
                'jquery',
                'pim/router',
                'oro/datagrid-builder',
                'oro/pageable-collection',
                'pim/datagrid/state',
                'oro/datafilter/product_category-filter'
            ],
            function (
                _,
                \$,
                Routing,
                datagridBuilder,
                PageableCollection,
                DatagridState,
                CategoryFilter
            ) {
                'use strict';

                \$(function() {

                    var defaultColumnsRoute = Routing.generate(
                            'pim_datagrid_view_rest_default_columns',
                            {alias: '";
            // line 52
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "' }
                    );

                    \$.get(defaultColumnsRoute, function (defaultColumns) {
                        initDatagrid(defaultColumns);
                    });

                    var initDatagrid = function (defaultColumns) {
                        var urlParams    = ";
            // line 60
            echo twig_jsonencode_filter(($context["params"] ?? null));
            echo ";
                        urlParams.alias  = '";
            // line 61
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "';
                        urlParams.params = ";
            // line 62
            echo twig_jsonencode_filter(($context["params"] ?? null));
            echo ";

                        ";
            // line 64
            $context["hasDefaultView"] =  !twig_test_empty(($context["defaultView"] ?? null));
            // line 65
            echo "                        var viewStored = DatagridState.get('";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "', ['view']);
                        if (!viewStored.view) {
                            DatagridState.refreshFiltersFromUrl('";
            // line 67
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "');
                        }

                        var hasDefaultView = ";
            // line 70
            if (($context["hasDefaultView"] ?? null)) {
                echo "true";
            } else {
                echo "false";
            }
            echo ";
                        var state          = DatagridState.get('";
            // line 71
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "', ['view', 'filters', 'columns']);

                        var applyView = function (viewId) {
                            urlParams['";
            // line 74
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "[_parameters][view][id]'] = viewId;

                            DatagridState.set('";
            // line 76
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "', {
                                view: viewId
                            });
                        };

                        var applyFilters = function (rawFilters) {
                            var filters = PageableCollection.prototype.decodeStateData(rawFilters);
                            var options = {};

                            if (!_.isEmpty(filters.filters)) {
                                options = {
                                    state: {
                                        filters: _.omit(filters.filters, 'scope')
                                    }
                                };
                            }

                            var collection = new PageableCollection(null, options);
                            collection.processFiltersParams(urlParams, filters, '";
            // line 94
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "[_filter]');

                            for (var column in filters.sorters) {
                                urlParams['";
            // line 97
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "[_sort_by][' + column + ']'] =
                                        1 === parseInt(filters.sorters[column]) ?
                                                'DESC' :
                                                'ASC';
                            }

                            if (undefined !== filters.pageSize) {
                                urlParams['";
            // line 104
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "[_pager][_per_page]'] = filters.pageSize;
                            }

                            if (undefined !== filters.currentPage) {
                                urlParams['";
            // line 108
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "[_pager][_page]'] = filters.currentPage;
                            }

                            DatagridState.set('";
            // line 111
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "', {
                                filters: rawFilters
                            });
                        };

                        var applyColumns = function (columns) {
                            if (_.isArray(columns)) {
                                columns = columns.join();
                            }
                            urlParams['";
            // line 120
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "[_parameters][view][columns]'] = columns;

                            DatagridState.set('";
            // line 122
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "', {
                                columns: columns
                            });
                        };

                        if (hasDefaultView && ('0' === state.view || null === state.view)) {
                            ";
            // line 128
            if (($context["hasDefaultView"] ?? null)) {
                // line 129
                echo "                            applyView(";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["defaultView"] ?? null), "id", array()), "html", null, true);
                echo ");
                            applyFilters('";
                // line 130
                echo $this->getAttribute(($context["defaultView"] ?? null), "filters", array());
                echo "');
                            applyColumns(";
                // line 131
                echo twig_jsonencode_filter($this->getAttribute(($context["defaultView"] ?? null), "columns", array()));
                echo ");
                            ";
            }
            // line 133
            echo "                        } else {
                            if (state.view) {
                                applyView(state.view);
                            }

                            if (state.filters) {
                                applyFilters(state.filters);
                            }

                            if (state.columns) {
                                applyColumns(state.columns);
                            } else {
                                applyColumns(defaultColumns);
                            }
                        }

                        ";
            // line 149
            if ( !(null === ($context["categoryBaseRoute"] ?? null))) {
                // line 150
                echo "                        var categoryFilter = new CategoryFilter(
                            urlParams,
                            '";
                // line 152
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "',
                            '";
                // line 153
                echo twig_escape_filter($this->env, ($context["categoryBaseRoute"] ?? null), "html", null, true);
                echo "',
                            '#tree'
                        );
                        ";
            }
            // line 157
            echo "
                        state = DatagridState.get('";
            // line 158
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "', ['view', 'filters', 'columns']);

                        \$.get(Routing.generate('pim_datagrid_load', urlParams), function(resp) {
                            if (state.columns) {
                                resp.metadata.state.parameters = _.extend({}, resp.metadata.state.parameters, {
                                    view: {
                                        columns: state.columns,
                                        id: state.view
                                    }
                                });
                            }
                            \$('#grid-";
            // line 169
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "').data({ 'metadata': resp.metadata, 'data': JSON.parse(resp.data) });

                            var modules = resp.metadata.requireJSModules;
                            modules.push('pim/datagrid/state-listener');

                            // Will be removed in TIP-733-2
                            ";
            // line 175
            if (($context["includeFilters"] ?? null)) {
                // line 176
                echo "                                modules.push('oro/datafilter-builder');
                            ";
            }
            // line 178
            echo "
                            var resolvedModules = []
                            _.each(modules, function(module) {
                              var resolvedModule = require(module)
                              resolvedModules.push(resolvedModule)
                            })
                            datagridBuilder(resolvedModules);
                        });
                    };
                });
            }
        );
    </script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 196
    public function getrenderHistoryGrid($__entity__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 197
            echo "    ";
            echo $this->getAttribute($this, "renderGrid", array(0 => "history-grid", 1 => array("object_class" => $this->env->getExtension('Akeneo\Platform\Bundle\UIBundle\Twig\ObjectClassExtension')->getClass(($context["entity"] ?? null)), "object_id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PimDataGridBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 197,  387 => 196,  359 => 178,  355 => 176,  353 => 175,  344 => 169,  330 => 158,  327 => 157,  320 => 153,  316 => 152,  312 => 150,  310 => 149,  292 => 133,  287 => 131,  283 => 130,  278 => 129,  276 => 128,  267 => 122,  262 => 120,  250 => 111,  244 => 108,  237 => 104,  227 => 97,  221 => 94,  200 => 76,  195 => 74,  189 => 71,  181 => 70,  175 => 67,  169 => 65,  167 => 64,  162 => 62,  158 => 61,  154 => 60,  143 => 52,  106 => 25,  89 => 24,  65 => 11,  59 => 9,  53 => 8,  47 => 7,  44 => 6,  41 => 5,  27 => 4,  22 => 192,  19 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimDataGridBundle::macros.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Oro/Bundle/PimDataGridBundle/Resources/views/macros.html.twig");
    }
}
