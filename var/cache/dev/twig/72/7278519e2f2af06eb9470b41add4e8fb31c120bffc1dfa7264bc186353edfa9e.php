<?php

/* base.html.twig */
class __TwigTemplate_b86e9f7a511a763042c29b9d741ffd87fe1350995e8f47bf47ec08c4c5900a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7bc1be3fa0b0fe2f39e7344e57ce1352dce96c3e47fd9fa6e0abf0e75e07f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7bc1be3fa0b0fe2f39e7344e57ce1352dce96c3e47fd9fa6e0abf0e75e07f93->enter($__internal_f7bc1be3fa0b0fe2f39e7344e57ce1352dce96c3e47fd9fa6e0abf0e75e07f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_91e9bc005f85cbf22f6a4d118d6749f2c6f2df4b91f87710ea523c891af6cd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e9bc005f85cbf22f6a4d118d6749f2c6f2df4b91f87710ea523c891af6cd81->enter($__internal_91e9bc005f85cbf22f6a4d118d6749f2c6f2df4b91f87710ea523c891af6cd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f7bc1be3fa0b0fe2f39e7344e57ce1352dce96c3e47fd9fa6e0abf0e75e07f93->leave($__internal_f7bc1be3fa0b0fe2f39e7344e57ce1352dce96c3e47fd9fa6e0abf0e75e07f93_prof);

        
        $__internal_91e9bc005f85cbf22f6a4d118d6749f2c6f2df4b91f87710ea523c891af6cd81->leave($__internal_91e9bc005f85cbf22f6a4d118d6749f2c6f2df4b91f87710ea523c891af6cd81_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2277c9feb9268cf6947bb9986aa1f046290b745034e9eb4b3c917f95251f8a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2277c9feb9268cf6947bb9986aa1f046290b745034e9eb4b3c917f95251f8a0d->enter($__internal_2277c9feb9268cf6947bb9986aa1f046290b745034e9eb4b3c917f95251f8a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_548fa364727848be6a1688ebb264f6cb37af8b0cb55687e2958ca1cb1b4bf8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548fa364727848be6a1688ebb264f6cb37af8b0cb55687e2958ca1cb1b4bf8f0->enter($__internal_548fa364727848be6a1688ebb264f6cb37af8b0cb55687e2958ca1cb1b4bf8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_548fa364727848be6a1688ebb264f6cb37af8b0cb55687e2958ca1cb1b4bf8f0->leave($__internal_548fa364727848be6a1688ebb264f6cb37af8b0cb55687e2958ca1cb1b4bf8f0_prof);

        
        $__internal_2277c9feb9268cf6947bb9986aa1f046290b745034e9eb4b3c917f95251f8a0d->leave($__internal_2277c9feb9268cf6947bb9986aa1f046290b745034e9eb4b3c917f95251f8a0d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d758f3e2b3298fb719bb8706dc734e47eb424f3cdc513f42024fa2807dd6c848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d758f3e2b3298fb719bb8706dc734e47eb424f3cdc513f42024fa2807dd6c848->enter($__internal_d758f3e2b3298fb719bb8706dc734e47eb424f3cdc513f42024fa2807dd6c848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5187457981736c389250304c9e979be4ad894376ea4f20adcd0fd5a2db8bd7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5187457981736c389250304c9e979be4ad894376ea4f20adcd0fd5a2db8bd7df->enter($__internal_5187457981736c389250304c9e979be4ad894376ea4f20adcd0fd5a2db8bd7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5187457981736c389250304c9e979be4ad894376ea4f20adcd0fd5a2db8bd7df->leave($__internal_5187457981736c389250304c9e979be4ad894376ea4f20adcd0fd5a2db8bd7df_prof);

        
        $__internal_d758f3e2b3298fb719bb8706dc734e47eb424f3cdc513f42024fa2807dd6c848->leave($__internal_d758f3e2b3298fb719bb8706dc734e47eb424f3cdc513f42024fa2807dd6c848_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf3526734f4691ac95f5114b91f17f052baa4defa4bad2c669ec41e175d1a379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3526734f4691ac95f5114b91f17f052baa4defa4bad2c669ec41e175d1a379->enter($__internal_bf3526734f4691ac95f5114b91f17f052baa4defa4bad2c669ec41e175d1a379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43448b52741462891e8b4be46873937d686b83bf51980046bb632110bc72b22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43448b52741462891e8b4be46873937d686b83bf51980046bb632110bc72b22c->enter($__internal_43448b52741462891e8b4be46873937d686b83bf51980046bb632110bc72b22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_43448b52741462891e8b4be46873937d686b83bf51980046bb632110bc72b22c->leave($__internal_43448b52741462891e8b4be46873937d686b83bf51980046bb632110bc72b22c_prof);

        
        $__internal_bf3526734f4691ac95f5114b91f17f052baa4defa4bad2c669ec41e175d1a379->leave($__internal_bf3526734f4691ac95f5114b91f17f052baa4defa4bad2c669ec41e175d1a379_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d5668cf8b591fcd2c394afda24c4159f7a72e8d445a446716350e6c7c1bf262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5668cf8b591fcd2c394afda24c4159f7a72e8d445a446716350e6c7c1bf262->enter($__internal_0d5668cf8b591fcd2c394afda24c4159f7a72e8d445a446716350e6c7c1bf262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_530d9db4995c2f61f4f718a74677811bb2d7ef7d1842d00885569d052aa2bc33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530d9db4995c2f61f4f718a74677811bb2d7ef7d1842d00885569d052aa2bc33->enter($__internal_530d9db4995c2f61f4f718a74677811bb2d7ef7d1842d00885569d052aa2bc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_530d9db4995c2f61f4f718a74677811bb2d7ef7d1842d00885569d052aa2bc33->leave($__internal_530d9db4995c2f61f4f718a74677811bb2d7ef7d1842d00885569d052aa2bc33_prof);

        
        $__internal_0d5668cf8b591fcd2c394afda24c4159f7a72e8d445a446716350e6c7c1bf262->leave($__internal_0d5668cf8b591fcd2c394afda24c4159f7a72e8d445a446716350e6c7c1bf262_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Symfony\\ynovtravel\\app\\Resources\\views\\base.html.twig");
    }
}
