<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bc986aaac5035fdb46e4469a7c26d94eb0a76c6d22643d6554e812fff43401b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0228218df179fc536b154ccc31bc38da62afc1c6b032831bed242c4ab2469cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0228218df179fc536b154ccc31bc38da62afc1c6b032831bed242c4ab2469cc->enter($__internal_a0228218df179fc536b154ccc31bc38da62afc1c6b032831bed242c4ab2469cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b81e7191b0ac460ca51d255249345de33abc1f895065ff75a222f6b41c8da1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81e7191b0ac460ca51d255249345de33abc1f895065ff75a222f6b41c8da1c5->enter($__internal_b81e7191b0ac460ca51d255249345de33abc1f895065ff75a222f6b41c8da1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0228218df179fc536b154ccc31bc38da62afc1c6b032831bed242c4ab2469cc->leave($__internal_a0228218df179fc536b154ccc31bc38da62afc1c6b032831bed242c4ab2469cc_prof);

        
        $__internal_b81e7191b0ac460ca51d255249345de33abc1f895065ff75a222f6b41c8da1c5->leave($__internal_b81e7191b0ac460ca51d255249345de33abc1f895065ff75a222f6b41c8da1c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fbc5d34f17b907fafcc20d253209180223896dd7fb758552f3f6561b2461d848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc5d34f17b907fafcc20d253209180223896dd7fb758552f3f6561b2461d848->enter($__internal_fbc5d34f17b907fafcc20d253209180223896dd7fb758552f3f6561b2461d848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_72f95e111cc3fd78b2f71f558796c8ee7d87f7990d5c4c78910248976bd94228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f95e111cc3fd78b2f71f558796c8ee7d87f7990d5c4c78910248976bd94228->enter($__internal_72f95e111cc3fd78b2f71f558796c8ee7d87f7990d5c4c78910248976bd94228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_72f95e111cc3fd78b2f71f558796c8ee7d87f7990d5c4c78910248976bd94228->leave($__internal_72f95e111cc3fd78b2f71f558796c8ee7d87f7990d5c4c78910248976bd94228_prof);

        
        $__internal_fbc5d34f17b907fafcc20d253209180223896dd7fb758552f3f6561b2461d848->leave($__internal_fbc5d34f17b907fafcc20d253209180223896dd7fb758552f3f6561b2461d848_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_07b3a3b2fd13c739fad7fb87ac4f78a9089ddf61a714af06208a301a1e4ca8a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b3a3b2fd13c739fad7fb87ac4f78a9089ddf61a714af06208a301a1e4ca8a4->enter($__internal_07b3a3b2fd13c739fad7fb87ac4f78a9089ddf61a714af06208a301a1e4ca8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_51046f7f68ed87cbc8fa1e9b0e074ed41cf5e399a445701a7275bf07eae0657e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51046f7f68ed87cbc8fa1e9b0e074ed41cf5e399a445701a7275bf07eae0657e->enter($__internal_51046f7f68ed87cbc8fa1e9b0e074ed41cf5e399a445701a7275bf07eae0657e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_51046f7f68ed87cbc8fa1e9b0e074ed41cf5e399a445701a7275bf07eae0657e->leave($__internal_51046f7f68ed87cbc8fa1e9b0e074ed41cf5e399a445701a7275bf07eae0657e_prof);

        
        $__internal_07b3a3b2fd13c739fad7fb87ac4f78a9089ddf61a714af06208a301a1e4ca8a4->leave($__internal_07b3a3b2fd13c739fad7fb87ac4f78a9089ddf61a714af06208a301a1e4ca8a4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e62181d622a02c4b96c4dffc3777eb978d00115024a584b12c8a8e4b5cdf9b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e62181d622a02c4b96c4dffc3777eb978d00115024a584b12c8a8e4b5cdf9b9->enter($__internal_9e62181d622a02c4b96c4dffc3777eb978d00115024a584b12c8a8e4b5cdf9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6e870ea342870b18c99c3de4957d70389bbe72ba29b81ff94330521a6b9ba455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e870ea342870b18c99c3de4957d70389bbe72ba29b81ff94330521a6b9ba455->enter($__internal_6e870ea342870b18c99c3de4957d70389bbe72ba29b81ff94330521a6b9ba455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6e870ea342870b18c99c3de4957d70389bbe72ba29b81ff94330521a6b9ba455->leave($__internal_6e870ea342870b18c99c3de4957d70389bbe72ba29b81ff94330521a6b9ba455_prof);

        
        $__internal_9e62181d622a02c4b96c4dffc3777eb978d00115024a584b12c8a8e4b5cdf9b9->leave($__internal_9e62181d622a02c4b96c4dffc3777eb978d00115024a584b12c8a8e4b5cdf9b9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\ynovtravel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
