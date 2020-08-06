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

/* __string_template__9c1f5c3f3c8fa7bce7280a8d068f98fd34db5806c6be9aa8584ca79796d82315 */
class __TwigTemplate_4a45cb6b213a9af57981c811fe8f99162bc2e161ebc17a7d0db1b358586fc860 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("escape" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"card h-100\">
            <div class=\"card-header\">
              <div class=\"row pl-3 mx-auto\">
                <div class=\"col-4 col-sm-3 pr-0\">";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_index_icon"] ?? null), 4, $this->source), "html", null, true);
        echo "</div>
                <div class=\"col-8 col-sm-9 pl-3\"><h2 id=\"heading-two\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_index_title"] ?? null), 5, $this->source), "html", null, true);
        echo "</h2></div>
              </div>
            </div>

            <div class=\"card-body px-3 pt-3 py-0\" id=\"paragraph\">
              ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 10, $this->source), "html", null, true);
        echo "
            </div>

            <div class=\"card-footer pb-3 pt-2 justify-content-center\">
             <div class=\"row justify-content-center\">
              <p>";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_index_link"] ?? null), 15, $this->source), "html", null, true);
        echo "</p>
            </div>
            </div>
          </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__9c1f5c3f3c8fa7bce7280a8d068f98fd34db5806c6be9aa8584ca79796d82315";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  79 => 10,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9c1f5c3f3c8fa7bce7280a8d068f98fd34db5806c6be9aa8584ca79796d82315", "");
    }
}
