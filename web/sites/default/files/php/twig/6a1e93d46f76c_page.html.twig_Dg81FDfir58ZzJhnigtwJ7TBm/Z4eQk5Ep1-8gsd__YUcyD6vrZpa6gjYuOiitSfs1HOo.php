<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/honey/templates/layout/page.html.twig */
class __TwigTemplate_342bc0742d0e3fb7924da9975ec8bae0 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "<div class=\"honey-page layout-container\">
  <header class=\"honey-page__header\" role=\"banner\">
    <div class=\"honey-page__header-top\">
      ";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 49), "html", null, true);
        yield "
      <button class=\"honey-page__toggle-button\"
        onclick=\"this.getAttribute(\x27aria-expanded\x27)===\x27true\x27 ? this.setAttribute(\x27aria-expanded\x27, false) : this.setAttribute(\x27aria-expanded\x27, true)\"
        role=\"button\" aria-expanded=\"false\">
          <span class=\"visually-hidden\">";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open menu"));
        yield "</span>
          <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 28\">
            <rect width=\"32\" height=\"4\" rx=\"2\"/>
            <rect width=\"32\" height=\"4\" rx=\"2\" transform=\"translate(0 12)\"/>
            <rect width=\"32\" height=\"4\" rx=\"2\" transform=\"translate(0 24)\"/>
          </svg>
        </button>
      ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 60), "html", null, true);
        yield "
    </div>
    <div class=\"honey-page__header-bottom\">
      <div class=\"honey-page__header-bottom-inner\">
        ";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 64), "html", null, true);
        yield "
        ";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 65), "html", null, true);
        yield "
      </div>
    </div>
  </header>
  <div class=\"honey-page__content-wrapper\">
    <main role=\"main\" class=\"honey-page__content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 72
        yield "      <div class=\"honey-page__highlighted\">
        ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 73), "html", null, true);
        yield "
        ";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 74), "html", null, true);
        yield "
      </div>
      <div class=\"layout-content\">
        ";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 77), "html", null, true);
        yield "
      </div>";
        // line 79
        yield "    </main>
    <aside class=\"honey-page__sidebar\" role=\"complementary\">
      ";
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 81), "html", null, true);
        yield "
      ";
        // line 82
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 82), "html", null, true);
        yield "
    </aside>
  </div>
  ";
        // line 85
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "    <footer class=\"honey-page__footer\" role=\"contentinfo\">
      ";
            // line 87
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 87), "html", null, true);
            yield "
    </footer>
  ";
        }
        // line 90
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/honey/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  128 => 90,  122 => 87,  119 => 86,  117 => 85,  111 => 82,  107 => 81,  103 => 79,  99 => 77,  93 => 74,  89 => 73,  86 => 72,  77 => 65,  73 => 64,  66 => 60,  56 => 53,  49 => 49,  44 => 46,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/honey/templates/layout/page.html.twig", "/home/karnven/drupal/web/themes/contrib/honey/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 85];
        static $filters = ["escape" => 49, "t" => 53];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
