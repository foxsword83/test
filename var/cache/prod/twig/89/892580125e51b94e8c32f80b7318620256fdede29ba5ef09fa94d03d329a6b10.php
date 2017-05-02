<?php

/* TravellerTravelAdvisorBundle:Default:voyage.html.twig */
class __TwigTemplate_a40b4b9d7feb46e7d98edba92f0dcd60c3612c79d38c017315c2d6681ffe9e7a extends Twig_Template
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
        // line 1
        echo "<html>
<body>
  Bienvenue sur TravelAdvisor
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TravellerTravelAdvisorBundle:Default:voyage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TravellerTravelAdvisorBundle:Default:voyage.html.twig", "C:\\wamp64\\www\\Symfony\\ynovtravel\\src\\Traveller\\TravelAdvisorBundle/Resources/views/Default/voyage.html.twig");
    }
}
