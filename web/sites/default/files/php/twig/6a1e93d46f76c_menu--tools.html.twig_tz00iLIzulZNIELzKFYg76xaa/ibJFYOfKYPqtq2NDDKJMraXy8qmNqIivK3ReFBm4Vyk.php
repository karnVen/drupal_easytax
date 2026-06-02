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

/* themes/contrib/honey/templates/navigation/menu--tools.html.twig */
class __TwigTemplate_316c6f88c3eb304623697da957de496b extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        yield "
";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 27, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 29
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 30
            yield "  ";
            $macros["menus"] = $this;
            // line 31
            yield "  ";
            if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    yield "      <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu"], "method", false, false, true, 33), "addClass", ["honey-tools"], "method", false, false, true, 33), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 35
                    yield "      <ul class=\"menu\">
    ";
                }
                // line 37
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    yield "      ";
                    // line 39
                    $context["classes"] = ["menu-item", "honey-tools__menu-item", (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 42
$context["item"], "is_expanded", [], "any", false, false, true, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("menu-item--expanded") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 43
$context["item"], "is_collapsed", [], "any", false, false, true, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("menu-item--collapsed") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 44
$context["item"], "in_active_trail", [], "any", false, false, true, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("menu-item--active-trail") : (""))];
                    // line 47
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 47), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 47), "html", null, true);
                    yield ">
        <svg class=\"honey-tools__icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 29.734\">
          <path d=\"M31.761 19.313a.791.791 0 10-1.51.471 2.517 2.517 0 01-.867 2.986c-1.593 1.169-4.565 1.121-7.4-.119a11.856 11.856 0 01-1.723-.928c-.178-.115-.355-.237-.525-.362-1.848-1.355-2.951-3.037-2.951-4.5a2.354 2.354 0 011.03-1.98 3.608 3.608 0 01.447-.278c2.26-1.179 6.3-.438 9.2 1.686a.79124459.79124459 0 10.936-1.276 13.548 13.548 0 00-5.608-2.39 10.606 10.606 0 00-2.506-.142 4.842 4.842 0 00-1.492-6.194l1.493-5.282a.791.791 0 00-1.522-.43l-1.417 5.011a4.809 4.809 0 00-2.646-.014l-1.413-5a.7914054.7914054 0 00-1.523.431l1.483 5.244a4.849 4.849 0 00-1.547 6.235 10.615 10.615 0 00-2.5.143 13.547 13.547 0 00-5.6 2.389C1.345 16.666 0 18.825 0 20.791a3.96 3.96 0 001.677 3.256 6.819 6.819 0 004.049 1.151 12.069 12.069 0 004.088-.765 10.457 10.457 0 00.617 1.428c1.277 2.425 3.357 3.873 5.564 3.873s4.289-1.449 5.566-3.875a10.475 10.475 0 00.617-1.428 12.067 12.067 0 004.094.767 6.819 6.819 0 004.049-1.151 4.057 4.057 0 001.44-4.734zM17.6 21.626h-3.205A9.1 9.1 0 0016 19.591a9.09 9.09 0 001.6 2.035zm-3.075-14.3A3.219 3.219 0 0116 6.972a3.259 3.259 0 011.5 6.152 3.264 3.264 0 01-3 0 3.26 3.26 0 01.03-5.806zM10 22.654c-2.828 1.237-5.8 1.284-7.39.116a2.354 2.354 0 01-1.03-1.98c0-1.463 1.1-3.146 2.951-4.5a11.634 11.634 0 016.569-2.247 5.721 5.721 0 012.631.558 3.6 3.6 0 01.45.279 2.354 2.354 0 011.03 1.98c0 1.464-1.1 3.146-2.951 4.5-.178.131-.363.258-.548.377l-.022.014a11.906 11.906 0 01-1.69.903zm6 5.498a4.4 4.4 0 01-3.429-1.88h6.842A4.465 4.465 0 0116 28.152zm4.37-3.46h-8.75a9.165 9.165 0 01-.348-.887c.367-.183.726-.383 1.072-.6h7.309c.345.214.7.412 1.067.6a9.17 9.17 0 01-.35.887z\"/>
          <path d=\"M29.704 16.636c-.118-.142-.242-.286-.37-.428a1.11865991 1.11865991 0 00-1.66 1.5c.107.119.211.239.309.357a1.1175765 1.1175765 0 101.722-1.425z\"/>
        </svg>
        ";
                    // line 52
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 52), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 52)), "html", null, true);
                    yield "
        ";
                    // line 53
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 54
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 54, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 54), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                        yield "
        ";
                    }
                    // line 56
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                yield "    </ul>
  ";
            }
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/honey/templates/navigation/menu--tools.html.twig";
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
        return array (  131 => 58,  124 => 56,  118 => 54,  116 => 53,  112 => 52,  103 => 47,  101 => 44,  100 => 43,  99 => 42,  98 => 39,  96 => 38,  91 => 37,  87 => 35,  81 => 33,  78 => 32,  75 => 31,  72 => 30,  58 => 29,  49 => 27,  46 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/honey/templates/navigation/menu--tools.html.twig", "/home/karnven/drupal/web/themes/contrib/honey/templates/navigation/menu--tools.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 21, "macro" => 29, "if" => 31, "for" => 37, "set" => 39];
        static $filters = ["escape" => 33];
        static $functions = ["link" => 52];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link'],
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
