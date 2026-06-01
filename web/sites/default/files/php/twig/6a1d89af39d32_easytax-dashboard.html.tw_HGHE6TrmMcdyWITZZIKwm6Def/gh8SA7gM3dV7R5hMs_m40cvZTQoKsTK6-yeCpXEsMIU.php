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

/* modules/custom/easytax_dashboard/templates/easytax-dashboard.html.twig */
class __TwigTemplate_6978b93e72c2555f7ade003169e36d47 extends Template
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
        // line 1
        yield "<div class=\"easytax-dashboard-wrapper\">
  <div class=\"easytax-dashboard-header\">
    <h1>Welcome back, Admin</h1>
    <p>Here\x27s what\x27s happening with your applications today.</p>
  </div>

  <div class=\"easytax-stats-grid\">
    <div class=\"easytax-stat-card\">
      <div class=\"easytax-stat-title\">Total Users</div>
      <div class=\"easytax-stat-value\">";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_users", [], "any", false, false, true, 10)), "html", null, true);
        yield "</div>
    </div>
    <div class=\"easytax-stat-card\">
      <div class=\"easytax-stat-title\">Active Applications</div>
      <div class=\"easytax-stat-value\">";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_applications", [], "any", false, false, true, 14)), "html", null, true);
        yield "</div>
    </div>
    <div class=\"easytax-stat-card\">
      <div class=\"easytax-stat-title\">Pending Services</div>
      <div class=\"easytax-stat-value\">";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending_services", [], "any", false, false, true, 18)), "html", null, true);
        yield "</div>
    </div>
    <div class=\"easytax-stat-card\">
      <div class=\"easytax-stat-title\">Revenue</div>
      <div class=\"easytax-stat-value\">";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "revenue", [], "any", false, false, true, 22), "html", null, true);
        yield "</div>
    </div>
  </div>

  <div class=\"easytax-applications-section\">
    <h2>Recent Applications</h2>
    <div class=\"table-responsive\">
      <table class=\"easytax-table\">
        <thead>
          <tr>
            <th>ID</th>
            <th>User</th>
            <th>Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["recent_applications"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 40
            yield "            <tr>
              <td><strong>";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["app"], "id", [], "any", false, false, true, 41), "html", null, true);
            yield "</strong></td>
              <td>";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["app"], "user", [], "any", false, false, true, 42), "html", null, true);
            yield "</td>
              <td>";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["app"], "date", [], "any", false, false, true, 43), "M d, Y"), "html", null, true);
            yield "</td>
              <td>
                <span class=\"status-badge ";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["app"], "status", [], "any", false, false, true, 45)), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["app"], "status", [], "any", false, false, true, 45), "html", null, true);
            yield "</span>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 48
        if (!$context['_iterated']) {
            // line 49
            yield "            <tr>
              <td colspan=\"4\">No recent applications found.</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['app'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "        </tbody>
      </table>
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["stats", "recent_applications"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/easytax_dashboard/templates/easytax-dashboard.html.twig";
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
        return array (  138 => 53,  129 => 49,  127 => 48,  117 => 45,  112 => 43,  108 => 42,  104 => 41,  101 => 40,  96 => 39,  76 => 22,  69 => 18,  62 => 14,  55 => 10,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/easytax_dashboard/templates/easytax-dashboard.html.twig", "/home/karnven/drupal/web/modules/custom/easytax_dashboard/templates/easytax-dashboard.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 39];
        static $filters = ["escape" => 10, "number_format" => 10, "date" => 43, "lower" => 45];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'number_format', 'date', 'lower'],
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
