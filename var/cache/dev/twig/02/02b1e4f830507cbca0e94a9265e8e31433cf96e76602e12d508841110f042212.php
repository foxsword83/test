<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_cb27ba34ee8fad19bde9b64259d0471460b2571606f26e32a164c9b01153d2ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0a4c106b4e987672fc8c01c3d8305ac099c0e90f1af11980e6b6a38d2bfa319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0a4c106b4e987672fc8c01c3d8305ac099c0e90f1af11980e6b6a38d2bfa319->enter($__internal_f0a4c106b4e987672fc8c01c3d8305ac099c0e90f1af11980e6b6a38d2bfa319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3fb48ea06b51e0fa4845c71ebbbdaa84260c4322ef9b0108f361c99eeec6e12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb48ea06b51e0fa4845c71ebbbdaa84260c4322ef9b0108f361c99eeec6e12a->enter($__internal_3fb48ea06b51e0fa4845c71ebbbdaa84260c4322ef9b0108f361c99eeec6e12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0a4c106b4e987672fc8c01c3d8305ac099c0e90f1af11980e6b6a38d2bfa319->leave($__internal_f0a4c106b4e987672fc8c01c3d8305ac099c0e90f1af11980e6b6a38d2bfa319_prof);

        
        $__internal_3fb48ea06b51e0fa4845c71ebbbdaa84260c4322ef9b0108f361c99eeec6e12a->leave($__internal_3fb48ea06b51e0fa4845c71ebbbdaa84260c4322ef9b0108f361c99eeec6e12a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b670c60ed4cf5564311a9d6fc06925b58a3a9fddf2660e08ee1414c7183569e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b670c60ed4cf5564311a9d6fc06925b58a3a9fddf2660e08ee1414c7183569e->enter($__internal_4b670c60ed4cf5564311a9d6fc06925b58a3a9fddf2660e08ee1414c7183569e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6cc5d3a4c5595cfe601428e0aea439b17a7a501843b600302e069dd15fd02e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc5d3a4c5595cfe601428e0aea439b17a7a501843b600302e069dd15fd02e04->enter($__internal_6cc5d3a4c5595cfe601428e0aea439b17a7a501843b600302e069dd15fd02e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_6cc5d3a4c5595cfe601428e0aea439b17a7a501843b600302e069dd15fd02e04->leave($__internal_6cc5d3a4c5595cfe601428e0aea439b17a7a501843b600302e069dd15fd02e04_prof);

        
        $__internal_4b670c60ed4cf5564311a9d6fc06925b58a3a9fddf2660e08ee1414c7183569e->leave($__internal_4b670c60ed4cf5564311a9d6fc06925b58a3a9fddf2660e08ee1414c7183569e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Symfony\\ynovtravel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
