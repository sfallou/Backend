<?php

/* DoctrineBundle:Collector:db.html.twig */
class __TwigTemplate_cf0ff9b7e93328d53b8063eca101aa3a22b14f3aefa9048b21a5e97f6104192c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "isXmlHttpRequest", array())) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "DoctrineBundle:Collector:db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        ob_start();
        // line 7
        echo "        ";
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 8
            echo "
            <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
                <span class=\"sf-toolbar-value sf-toolbar-status ";
            // line 10
            if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", array()) > 50)) {
                echo "sf-toolbar-status-yellow";
            }
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", array()), "html", null, true);
            echo "</span>
                ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", array()) > 0)) {
                // line 12
                echo "                    <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
                echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", array()) * 1000)), "html", null, true);
                echo " ms</span>
                ";
            }
            // line 14
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", array()) > 0)) {
                // line 15
                echo "                    <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", array()), "html", null, true);
                echo "</span>
                ";
            }
            // line 17
            echo "
        ";
        } else {
            // line 19
            echo "
            ";
            // line 20
            if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", array()) > 0) || (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", array()) > 0))) {
                // line 21
                echo "                ";
                $context["status"] = (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", array()) > 0)) ? ("red") : ((((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", array()) > 50)) ? ("yellow") : (""))));
                // line 22
                echo "
                ";
                // line 23
                echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
                echo "

                ";
                // line 25
                if (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", array()) == 0) && (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", array()) > 0))) {
                    // line 26
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", array()), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-label\">errors</span>
                ";
                } else {
                    // line 29
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", array()), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">";
                    // line 32
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", array()) * 1000)), "html", null, true);
                    echo "</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
                ";
                }
                // line 36
                echo "            ";
            }
            // line 37
            echo "
        ";
        }
        // line 39
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 40
        echo "
    ";
        // line 41
        ob_start();
        // line 42
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Database Queries</b>
            <span class=\"sf-toolbar-status\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 48
        echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Invalid entities</b>
            <span class=\"sf-toolbar-status ";
        // line 52
        echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", array()) > 0)) ? ("sf-toolbar-status-red") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", array()), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", array())) {
            // line 55
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Cache hits</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheHitsCount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Cache misses</b>
                <span class=\"sf-toolbar-status ";
            // line 61
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", array()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheMissesCount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Cache puts</b>
                <span class=\"sf-toolbar-status ";
            // line 65
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", array()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cachePutsCount", array()), "html", null, true);
            echo "</span>
            </div>
        ";
        } else {
            // line 68
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Second Level Cache</b>
                <span class=\"sf-toolbar-status\">disabled</span>
            </div>
        ";
        }
        // line 73
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 74
        echo "
    ";
        // line 75
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null), "status" => (((isset($context["status"]) || array_key_exists("status", $context))) ? (_twig_default_filter(($context["status"] ?? null), "")) : (""))));
        echo "
";
    }

    // line 78
    public function block_menu($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 80
        echo "
    ";
        // line 81
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 82
            echo "
        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>Doctrine</strong>
            <span class=\"count\">
                <span>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", array()), "html", null, true);
            echo "</span>
                <span>";
            // line 88
            echo twig_escape_filter($this->env, sprintf("%0.0f", (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </span>
        </span>

    ";
        } else {
            // line 93
            echo "
        <span class=\"label ";
            // line 94
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", array()) > 0)) ? ("label-status-error") : (""));
            echo " ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "querycount", array()) == 0)) ? ("disabled") : (""));
            echo "\">
            <span class=\"icon\">";
            // line 95
            echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
            echo "</span>
            <strong>Doctrine</strong>
            ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", array())) {
                // line 98
                echo "                <span class=\"count\">
                    <span>";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "invalidEntityCount", array()), "html", null, true);
                echo "</span>
                </span>
            ";
            }
            // line 102
            echo "        </span>

    ";
        }
    }

    // line 107
    public function block_panel($context, array $blocks = array())
    {
        // line 108
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 109
        echo "
    ";
        // line 110
        if (("explain" == ($context["page"] ?? null))) {
            // line 111
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctrineBundle:Profiler:explain", array("token" =>             // line 112
($context["token"] ?? null), "panel" => "db", "connectionName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 114
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "connection"), "method"), "query" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 115
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "query"), "method"))));
            // line 116
            echo "
    ";
        } else {
            // line 118
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
    }

    // line 122
    public function block_queries($context, array $blocks = array())
    {
        // line 123
        echo "    ";
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 124
            echo "        <style>
            .hidden { display: none; }
            .queries-table td, .queries-table th { vertical-align: top; }
            .queries-table td > div { margin-bottom: 6px; }
            .highlight pre { margin: 0; white-space: pre-wrap; }
            .highlight .keyword   { color: #8959A8; font-weight: bold; }
            .highlight .word      { color: #222222; }
            .highlight .variable  { color: #916319; }
            .highlight .symbol    { color: #222222; }
            .highlight .comment   { color: #999999; }
            .highlight .backtick  { color: #718C00; }
            .highlight .string    { color: #718C00; }
            .highlight .number    { color: #F5871F; font-weight: bold; }
            .highlight .error     { color: #C82829; }
        </style>
    ";
        }
        // line 140
        echo "
    <h2>Queries</h2>

    ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "queries", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 144
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", array())) > 1)) {
                // line 145
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo " <small>connection</small></h3>
        ";
            }
            // line 147
            echo "
        ";
            // line 148
            if (twig_test_empty($context["queries"])) {
                // line 149
                echo "            <div class=\"empty\">
                <p>No database queries were performed.</p>
            </div>
        ";
            } else {
                // line 153
                echo "            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "\">
                    ";
                // line 162
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["queries"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 163
                    echo "                        <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                            <td>";
                    // line 164
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                    echo "</td>
                            <td class=\"nowrap\">";
                    // line 165
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["query"], "executionMS", array()) * 1000)), "html", null, true);
                    echo "&nbsp;ms</td>
                            <td>
                                ";
                    // line 167
                    echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatQuery(twig_get_attribute($this->env, $this->source, $context["query"], "sql", array()), true);
                    echo "

                                <div>
                                    <strong class=\"font-normal text-small\">Parameters</strong>: ";
                    // line 170
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\YamlExtension']->encode(twig_get_attribute($this->env, $this->source, $context["query"], "params", array())), "html", null, true);
                    echo "
                                </div>

                                <div class=\"text-small font-normal\">
                                    <a href=\"#\" ";
                    // line 174
                    echo (((($context["profiler_markup_version"] ?? null) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                    &nbsp;&nbsp;

                                    <a href=\"#\" ";
                    // line 178
                    echo (((($context["profiler_markup_version"] ?? null) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>

                                    ";
                    // line 180
                    if (twig_get_attribute($this->env, $this->source, $context["query"], "explainable", array())) {
                        // line 181
                        echo "                                        &nbsp;&nbsp;
                                        <a class=\"link-inverse\" href=\"";
                        // line 182
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", array("panel" => "db", "token" => ($context["token"] ?? null), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"])), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\">Explain query</a>
                                    ";
                    }
                    // line 184
                    echo "                                </div>

                                <div id=\"formatted-query-";
                    // line 186
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 187
                    echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatQuery(twig_get_attribute($this->env, $this->source, $context["query"], "sql", array()));
                    echo "
                                </div>

                                <div id=\"original-query-";
                    // line 190
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 191
                    echo $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatQuery($this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->replaceQueryParameters((twig_get_attribute($this->env, $this->source, $context["query"], "sql", array()) . ";"), twig_get_attribute($this->env, $this->source, $context["query"], "params", array())), true);
                    echo "
                                </div>

                                ";
                    // line 194
                    if (twig_get_attribute($this->env, $this->source, $context["query"], "explainable", array())) {
                        // line 195
                        echo "                                    <div id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\"></div>
                                ";
                    }
                    // line 197
                    echo "                            </td>
                        </tr>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "                </tbody>
            </table>
        ";
            }
            // line 203
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "
    <h2>Database Connections</h2>

    ";
        // line 207
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", array())) {
            // line 208
            echo "        <div class=\"empty\">
            <p>There are no configured database connections.</p>
        </div>
    ";
        } else {
            // line 212
            echo "        ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "connections", array()), "labels" => array(0 => "Name", 1 => "Service")), false);
            echo "
    ";
        }
        // line 214
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 217
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", array())) {
            // line 218
            echo "        <div class=\"empty\">
            <p>There are no configured entity managers.</p>
        </div>
    ";
        } else {
            // line 222
            echo "        ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", array()), "labels" => array(0 => "Name", 1 => "Service")), false);
            echo "
    ";
        }
        // line 224
        echo "
    <h2>Second Level Cache</h2>

    ";
        // line 227
        if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheEnabled", array())) {
            // line 228
            echo "        <div class=\"empty\">
            <p>Second Level Cache is not enabled.</p>
        </div>
    ";
        } else {
            // line 232
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", array())) {
                // line 233
                echo "            <div class=\"empty\">
                <p>Second level cache information is not available.</p>
            </div>
        ";
            } else {
                // line 237
                echo "            ";
                if ((($context["profiler_markup_version"] ?? null) == 1)) {
                    // line 238
                    echo "                ";
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", array())), false);
                    echo "
            ";
                } else {
                    // line 240
                    echo "                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 242
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", array()), "hits", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Hits</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 247
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", array()), "misses", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Misses</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 252
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheCounts", array()), "puts", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Puts</span>
                    </div>
                </div>
            ";
                }
                // line 257
                echo "
            ";
                // line 258
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", array()), "hits", array())) {
                    // line 259
                    echo "                <h3>Number of cache hits</h3>
                ";
                    // line 260
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", array()), "hits", array())), false);
                    echo "
            ";
                }
                // line 262
                echo "
            ";
                // line 263
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", array()), "misses", array())) {
                    // line 264
                    echo "                <h3>Number of cache misses</h3>
                ";
                    // line 265
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", array()), "misses", array())), false);
                    echo "
            ";
                }
                // line 267
                echo "
            ";
                // line 268
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", array()), "puts", array())) {
                    // line 269
                    echo "                <h3>Number of cache puts</h3>
                ";
                    // line 270
                    echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "cacheRegions", array()), "puts", array())), false);
                    echo "
            ";
                }
                // line 272
                echo "        ";
            }
            // line 273
            echo "    ";
        }
        // line 274
        echo "
    <h2>Entities Mapping</h2>

    ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "entities", array()));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 278
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "managers", array())) > 1)) {
                // line 279
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
                echo " <small>entity manager</small></h3>
        ";
            }
            // line 281
            echo "
        ";
            // line 282
            if (twig_test_empty($context["classes"])) {
                // line 283
                echo "            <div class=\"empty\">
                <p>No loaded entities.</p>
            </div>
        ";
            } else {
                // line 287
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 295
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["classes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 296
                    echo "                    ";
                    $context["contains_errors"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", false, true), $context["class"], array(), "array", true, true));
                    // line 297
                    echo "                    <tr class=\"";
                    echo ((($context["contains_errors"] ?? null)) ? ("status-error") : (""));
                    echo "\">
                        <td>";
                    // line 298
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                        <td class=\"font-normal\">
                            ";
                    // line 300
                    if (($context["contains_errors"] ?? null)) {
                        // line 301
                        echo "                                <ul>
                                    ";
                        // line 302
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[$context["manager"]] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[$context["class"]] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 303
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 305
                        echo "                                </ul>
                            ";
                    } else {
                        // line 307
                        echo "                                No errors.
                            ";
                    }
                    // line 309
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 312
                echo "                </tbody>
            </table>
        ";
            }
            // line 315
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        ";
        // line 374
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 375
            echo "            function toggleRunnableQuery(target) {
                var targetSelector = target.getAttribute('data-toggle-selector');
                var targetElement = document.querySelector(targetSelector);

                if (targetElement.style.display != 'block') {
                    targetElement.style.display = 'block';
                    target.innerHTML = 'Hide runnable query';
                } else {
                    targetElement.style.display = 'none';
                    target.innerHTML = 'View runnable query';
                }

                return false;
            }
        ";
        }
        // line 390
        echo "
        //]]></script>
";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  861 => 390,  844 => 375,  842 => 374,  782 => 316,  776 => 315,  771 => 312,  763 => 309,  759 => 307,  755 => 305,  746 => 303,  742 => 302,  739 => 301,  737 => 300,  732 => 298,  727 => 297,  724 => 296,  720 => 295,  710 => 287,  704 => 283,  702 => 282,  699 => 281,  693 => 279,  690 => 278,  686 => 277,  681 => 274,  678 => 273,  675 => 272,  670 => 270,  667 => 269,  665 => 268,  662 => 267,  657 => 265,  654 => 264,  652 => 263,  649 => 262,  644 => 260,  641 => 259,  639 => 258,  636 => 257,  628 => 252,  620 => 247,  612 => 242,  608 => 240,  602 => 238,  599 => 237,  593 => 233,  590 => 232,  584 => 228,  582 => 227,  577 => 224,  571 => 222,  565 => 218,  563 => 217,  558 => 214,  552 => 212,  546 => 208,  544 => 207,  539 => 204,  525 => 203,  520 => 200,  504 => 197,  496 => 195,  494 => 194,  488 => 191,  482 => 190,  476 => 187,  470 => 186,  466 => 184,  457 => 182,  454 => 181,  452 => 180,  443 => 178,  432 => 174,  425 => 170,  419 => 167,  414 => 165,  410 => 164,  403 => 163,  386 => 162,  382 => 161,  375 => 157,  371 => 156,  366 => 153,  360 => 149,  358 => 148,  355 => 147,  349 => 145,  346 => 144,  329 => 143,  324 => 140,  306 => 124,  303 => 123,  300 => 122,  292 => 118,  288 => 116,  286 => 115,  285 => 114,  284 => 112,  282 => 111,  280 => 110,  277 => 109,  274 => 108,  271 => 107,  264 => 102,  258 => 99,  255 => 98,  253 => 97,  248 => 95,  242 => 94,  239 => 93,  231 => 88,  227 => 87,  220 => 82,  218 => 81,  215 => 80,  212 => 79,  209 => 78,  203 => 75,  200 => 74,  197 => 73,  190 => 68,  182 => 65,  173 => 61,  166 => 57,  162 => 55,  160 => 54,  153 => 52,  146 => 48,  139 => 44,  135 => 42,  133 => 41,  130 => 40,  127 => 39,  123 => 37,  120 => 36,  113 => 32,  106 => 29,  99 => 26,  97 => 25,  92 => 23,  89 => 22,  86 => 21,  84 => 20,  81 => 19,  77 => 17,  71 => 15,  68 => 14,  62 => 12,  60 => 11,  52 => 10,  48 => 8,  45 => 7,  43 => 6,  40 => 5,  37 => 4,  34 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DoctrineBundle:Collector:db.html.twig", "/home/u657659556/public_html/sfallou/Backend/vendor/doctrine/doctrine-bundle/Resources/views/Collector/db.html.twig");
    }
}
