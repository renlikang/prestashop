<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/psxdesign/views/templates/components/dashboard_notification.html.twig */
class __TwigTemplate_0bcf7f5170a40df4dd0dcd716d01fb69975f6605297b9b05cfd3856ea747080e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
<div class=\"psxdesign-notification\">
  1
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/components/dashboard_notification.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/components/dashboard_notification.html.twig", "/home/app/PrestaShop/modules/psxdesign/views/templates/components/dashboard_notification.html.twig");
    }
}
