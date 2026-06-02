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

/* themes/contrib/honey/templates/block/block--system-powered-by-block.html.twig */
class __TwigTemplate_08537d59cea9b7382fce2fdb1332d98e extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("block.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "  <a href=\"https://www.drupal.org/\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100px\" viewBox=\"0 0 391.688 96.728\">
      <path id=\"Path_3\" data-name=\"Path 3\" d=\"M467,79.643H454.908l.02,22.631c0,6.613-2.835,11.963-9.449,11.963S436,108.887,436,102.273V79.664H423.937l0,22.609c0,13.069,8.4,23.66,21.471,23.66S467,115.342,467,102.273Z\" transform=\"translate(-228.32 -42.894)\" />
      <rect id=\"Rectangle_2\" data-name=\"Rectangle 2\" width=\"12.036\" height=\"58.914\" transform=\"translate(347.745 22.959)\" />
      <path id=\"Path_4\" data-name=\"Path 4\" d=\"M798.974,52V49.88h9.379V52h-3.431v9.329h-2.516V52Z\" transform=\"translate(-430.307 -26.864)\" />
      <path id=\"Path_5\" data-name=\"Path 5\" d=\"M825.692,49.88l2.677,7.87h.031l2.531-7.87h3.546V61.325h-2.356V53.214h-.033l-2.8,8.111h-1.941l-2.8-8.031h-.033v8.031h-2.355V49.88Z\" transform=\"translate(-442.79 -26.864)\" />
      <path id=\"Path_6\" data-name=\"Path 6\" d=\"M367.275,78.156c-10.375-2.395-16.919,7.913-17.192,8.465-.133.271-.138.429-.6.418-.38-.008-.423-.418-.423-.418l-1.288-7.884H336.993v45H349.08V99.377c0-1.99,5.358-11.532,15.743-9.077,5.251,1.243,7.48,3.472,7.48,3.472V80.064a19.311,19.311,0,0,0-5.028-1.908\" transform=\"translate(-181.496 -41.899)\" />
      <path id=\"Path_7\" data-name=\"Path 7\" d=\"M550.386,89.552a12.06,12.06,0,1,1-12.057,12.058,12.06,12.06,0,0,1,12.057-12.058m-11.712,49v-16.19l0,0,0-6.064s.018-.485.456-.49c.39,0,.477.253.572.49a14.333,14.333,0,0,0,17.139,8.243,23.824,23.824,0,1,0-30.291-22.932v36.939Z\" transform=\"translate(-283.588 -41.894)\" />
      <path id=\"Path_8\" data-name=\"Path 8\" d=\"M675.655,101.61A12.06,12.06,0,1,1,663.6,89.553a12.06,12.06,0,0,1,12.058,12.057m-.344,22.142h12.118V101.61a23.823,23.823,0,1,0-30.292,22.93,14.333,14.333,0,0,0,17.139-8.241c.1-.237.181-.5.572-.492.437.007.456.492.456.492\" transform=\"translate(-344.569 -41.895)\" />
      <path id=\"Path_9\" data-name=\"Path 9\" d=\"M242.18,59.9h-4.858V98.323l4.99.128c10.235,0,16.827-.931,16.827-19.335,0-17.647-5.819-19.215-16.958-19.215M238.9,108.53H225.151V49.705H239.9c17.861,0,31.408,3.278,31.408,29.412,0,25.884-14.35,29.413-32.411,29.413\" transform=\"translate(-121.261 -26.77)\" />
      <path id=\"Path_10\" data-name=\"Path 10\" d=\"M52.251,20.6C45.444,13.8,38.95,7.315,37.017,0c-1.933,7.315-8.428,13.8-15.234,20.6C11.574,30.806,0,42.369,0,59.71a37.018,37.018,0,1,0,74.036,0c0-17.341-11.573-28.9-21.785-39.106M15.734,68.336c-2.27-.077-10.647-14.516,4.894-29.889L30.911,49.68a.879.879,0,0,1-.069,1.312C28.389,53.509,17.929,64,16.629,67.624c-.268.749-.66.72-.9.712m21.284,19.03A12.731,12.731,0,0,1,24.287,74.634a13.266,13.266,0,0,1,3.173-8.409c2.3-2.807,9.556-10.7,9.556-10.7s7.15,8.011,9.539,10.676a12.451,12.451,0,0,1,3.194,8.436A12.731,12.731,0,0,1,37.018,87.366M61.386,66.72c-.274.6-.9,1.6-1.737,1.633-1.5.055-1.658-.713-2.764-2.351-2.43-3.6-23.637-25.76-27.6-30.047-3.489-3.77-.491-6.428.9-7.821,1.745-1.748,6.837-6.837,6.837-6.837S52.2,35.7,58.526,45.547s4.145,18.362,2.86,21.172\" />
    </svg>
  </a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/honey/templates/block/block--system-powered-by-block.html.twig";
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
        return array (  60 => 30,  53 => 29,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/honey/templates/block/block--system-powered-by-block.html.twig", "/home/karnven/drupal/web/themes/contrib/honey/templates/block/block--system-powered-by-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['extends'],
                [],
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
