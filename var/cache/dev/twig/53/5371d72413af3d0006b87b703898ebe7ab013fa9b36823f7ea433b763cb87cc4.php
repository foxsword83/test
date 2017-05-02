<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d1b1366034bbb21ae068b63aa0980f98d48b3e9fa416a297295a0fdc77208685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_21e6ff9ba27fc4109b2a614cf200001f800c43ae5b0c82d092e9bad23b638444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e6ff9ba27fc4109b2a614cf200001f800c43ae5b0c82d092e9bad23b638444->enter($__internal_21e6ff9ba27fc4109b2a614cf200001f800c43ae5b0c82d092e9bad23b638444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_df2e897ad6947257635e437c7ecbe348b4671663e8d1b5c9c80163174c86dc4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2e897ad6947257635e437c7ecbe348b4671663e8d1b5c9c80163174c86dc4f->enter($__internal_df2e897ad6947257635e437c7ecbe348b4671663e8d1b5c9c80163174c86dc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21e6ff9ba27fc4109b2a614cf200001f800c43ae5b0c82d092e9bad23b638444->leave($__internal_21e6ff9ba27fc4109b2a614cf200001f800c43ae5b0c82d092e9bad23b638444_prof);

        
        $__internal_df2e897ad6947257635e437c7ecbe348b4671663e8d1b5c9c80163174c86dc4f->leave($__internal_df2e897ad6947257635e437c7ecbe348b4671663e8d1b5c9c80163174c86dc4f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33cd4a5e87b575ecd058ce4c5b8a302e6a91618911b878ce2b2963306e0650e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33cd4a5e87b575ecd058ce4c5b8a302e6a91618911b878ce2b2963306e0650e9->enter($__internal_33cd4a5e87b575ecd058ce4c5b8a302e6a91618911b878ce2b2963306e0650e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fc8102f3f44f3dd4efdeef572507041b8cb60d0b0aadabd6ca4778fe78204082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8102f3f44f3dd4efdeef572507041b8cb60d0b0aadabd6ca4778fe78204082->enter($__internal_fc8102f3f44f3dd4efdeef572507041b8cb60d0b0aadabd6ca4778fe78204082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fc8102f3f44f3dd4efdeef572507041b8cb60d0b0aadabd6ca4778fe78204082->leave($__internal_fc8102f3f44f3dd4efdeef572507041b8cb60d0b0aadabd6ca4778fe78204082_prof);

        
        $__internal_33cd4a5e87b575ecd058ce4c5b8a302e6a91618911b878ce2b2963306e0650e9->leave($__internal_33cd4a5e87b575ecd058ce4c5b8a302e6a91618911b878ce2b2963306e0650e9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e74647f530741c4d894498b0e352eb4ceef3228cccdafb9d1caeb0d81c1b6122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e74647f530741c4d894498b0e352eb4ceef3228cccdafb9d1caeb0d81c1b6122->enter($__internal_e74647f530741c4d894498b0e352eb4ceef3228cccdafb9d1caeb0d81c1b6122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_762121bb3f539f5552b817f3323c8079870cddcb3cb220b0fdc518d505ca3d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762121bb3f539f5552b817f3323c8079870cddcb3cb220b0fdc518d505ca3d23->enter($__internal_762121bb3f539f5552b817f3323c8079870cddcb3cb220b0fdc518d505ca3d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_762121bb3f539f5552b817f3323c8079870cddcb3cb220b0fdc518d505ca3d23->leave($__internal_762121bb3f539f5552b817f3323c8079870cddcb3cb220b0fdc518d505ca3d23_prof);

        
        $__internal_e74647f530741c4d894498b0e352eb4ceef3228cccdafb9d1caeb0d81c1b6122->leave($__internal_e74647f530741c4d894498b0e352eb4ceef3228cccdafb9d1caeb0d81c1b6122_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fd264d1e421da888c5e68af5d592e50caf66dde7d97913f144bfcacf8c68be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd264d1e421da888c5e68af5d592e50caf66dde7d97913f144bfcacf8c68be3->enter($__internal_8fd264d1e421da888c5e68af5d592e50caf66dde7d97913f144bfcacf8c68be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_434a8da283a46e2f77f4d5d8099571191c5294e2c229cfe165a9d12514a77441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434a8da283a46e2f77f4d5d8099571191c5294e2c229cfe165a9d12514a77441->enter($__internal_434a8da283a46e2f77f4d5d8099571191c5294e2c229cfe165a9d12514a77441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_434a8da283a46e2f77f4d5d8099571191c5294e2c229cfe165a9d12514a77441->leave($__internal_434a8da283a46e2f77f4d5d8099571191c5294e2c229cfe165a9d12514a77441_prof);

        
        $__internal_8fd264d1e421da888c5e68af5d592e50caf66dde7d97913f144bfcacf8c68be3->leave($__internal_8fd264d1e421da888c5e68af5d592e50caf66dde7d97913f144bfcacf8c68be3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\ynovtravel\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
