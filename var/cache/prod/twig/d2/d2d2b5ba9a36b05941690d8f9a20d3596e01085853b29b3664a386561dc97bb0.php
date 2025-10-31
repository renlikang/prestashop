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

/* @Modules/psxdesign/views/templates/components/alert_eol.html.twig */
class __TwigTemplate_3b6a187cfc4d8570c207c9a32a628d0679a655187f7413b6ffc454f2f5c5e701 extends Template
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
        echo "<div class=\"alert alert-info\" role=\"alert\">
    <p>Please note that the <b>PrestaShop Design</b> module is entering its <b>End-of-Life (EOL)</b> phase. While it is compatible with PrestaShop v9, its status is deprecated, and it will no longer be supported with the release of PrestaShop 10.</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/components/alert_eol.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/components/alert_eol.html.twig", "/home/app/PrestaShop/modules/psxdesign/views/templates/components/alert_eol.html.twig");
    }
}
