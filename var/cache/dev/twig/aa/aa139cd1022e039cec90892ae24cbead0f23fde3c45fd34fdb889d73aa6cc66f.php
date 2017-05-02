<?php

/* TravellerTravelAdvisorBundle:Default:voyage.html.twig */
class __TwigTemplate_4a2b2c5c70954a06ef33fb59e7fe978a7de4ce253759604bca41346fbfbbac2b extends Twig_Template
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
        $__internal_71644df7be9eded17d48f263d7672ea4523f0145c279ba14e486063014d12c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71644df7be9eded17d48f263d7672ea4523f0145c279ba14e486063014d12c36->enter($__internal_71644df7be9eded17d48f263d7672ea4523f0145c279ba14e486063014d12c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TravellerTravelAdvisorBundle:Default:voyage.html.twig"));

        $__internal_01dfe71ced99ae58b29b997c04e9bc9935ef5e3643b110945a8c4305c57751be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01dfe71ced99ae58b29b997c04e9bc9935ef5e3643b110945a8c4305c57751be->enter($__internal_01dfe71ced99ae58b29b997c04e9bc9935ef5e3643b110945a8c4305c57751be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TravellerTravelAdvisorBundle:Default:voyage.html.twig"));

        // line 1
        echo "<html>
<body>
  Bienvenue sur TravelAdvisor ";
        // line 3
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo "
</body>
</html>
";
        
        $__internal_71644df7be9eded17d48f263d7672ea4523f0145c279ba14e486063014d12c36->leave($__internal_71644df7be9eded17d48f263d7672ea4523f0145c279ba14e486063014d12c36_prof);

        
        $__internal_01dfe71ced99ae58b29b997c04e9bc9935ef5e3643b110945a8c4305c57751be->leave($__internal_01dfe71ced99ae58b29b997c04e9bc9935ef5e3643b110945a8c4305c57751be_prof);

    }

    public function getTemplateName()
    {
        return "TravellerTravelAdvisorBundle:Default:voyage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<body>
  Bienvenue sur TravelAdvisor {{nom}}
</body>
</html>
", "TravellerTravelAdvisorBundle:Default:voyage.html.twig", "C:\\wamp64\\www\\Symfony\\ynovtravel\\src\\Traveller\\TravelAdvisorBundle/Resources/views/Default/voyage.html.twig");
    }
}
