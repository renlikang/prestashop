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

/* @Modules/psxdesign/views/templates/admin/themes/index.html.twig */
class __TwigTemplate_31ff9746fc90f628bc5849b27d4ef27459bfda14e402098a171564c9051e501f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'current_theme' => [$this, 'block_current_theme'],
            'current_theme_description' => [$this, 'block_current_theme_description'],
            'current_theme_content' => [$this, 'block_current_theme_content'],
            'theme_library' => [$this, 'block_theme_library'],
            'theme_library_description' => [$this, 'block_theme_library_description'],
            'theme_library_content' => [$this, 'block_theme_library_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/components/alert_eol.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 29)->display($context);
        // line 30
        echo "  <div class=\"container\">
    ";
        // line 31
        $this->displayBlock('current_theme', $context, $blocks);
        // line 41
        echo "    ";
        $this->displayBlock('theme_library', $context, $blocks);
        // line 51
        echo "  </div>
  ";
        // line 52
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_computer_modal.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 52)->display($context);
        // line 53
        echo "  ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_web_modal.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 53)->display($context);
        // line 54
        echo "  ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/import_theme_from_ftp_modal.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 54)->display($context);
        // line 55
        echo "  ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/delete_theme_modal.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 55)->display($context);
        // line 56
        echo "  ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/Modals/use_theme_modal.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 56)->display(twig_array_merge($context, ($context["currentlyUsedTheme"] ?? null)));
    }

    // line 31
    public function block_current_theme($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "      <div class=\"row\">
        ";
        // line 33
        $this->displayBlock('current_theme_description', $context, $blocks);
        // line 36
        echo "        ";
        $this->displayBlock('current_theme_content', $context, $blocks);
        // line 39
        echo "      </div>
    ";
    }

    // line 33
    public function block_current_theme_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "          ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/CurrentTheme/current_theme_description.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 34)->display($context);
        // line 35
        echo "        ";
    }

    // line 36
    public function block_current_theme_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "          ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/CurrentTheme/current_theme_content.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 37)->display($context);
        // line 38
        echo "        ";
    }

    // line 41
    public function block_theme_library($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "      <div class=\"row\">
        ";
        // line 43
        $this->displayBlock('theme_library_description', $context, $blocks);
        // line 46
        echo "        ";
        $this->displayBlock('theme_library_content', $context, $blocks);
        // line 49
        echo "      </div>
    ";
    }

    // line 43
    public function block_theme_library_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "          ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_description.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 44)->display($context);
        // line 45
        echo "        ";
    }

    // line 46
    public function block_theme_library_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "          ";
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/themes/Blocks/ThemeLibrary/theme_library_content.html.twig", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", 47)->display($context);
        // line 48
        echo "        ";
    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/themes.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 61,  169 => 60,  165 => 59,  161 => 48,  158 => 47,  154 => 46,  150 => 45,  147 => 44,  143 => 43,  138 => 49,  135 => 46,  133 => 43,  130 => 42,  126 => 41,  122 => 38,  119 => 37,  115 => 36,  111 => 35,  108 => 34,  104 => 33,  99 => 39,  96 => 36,  94 => 33,  91 => 32,  87 => 31,  82 => 56,  79 => 55,  76 => 54,  73 => 53,  71 => 52,  68 => 51,  65 => 41,  63 => 31,  60 => 30,  57 => 29,  53 => 28,  42 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/index.html.twig", "/home/app/PrestaShop/modules/psxdesign/views/templates/admin/themes/index.html.twig");
    }
}
