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

/* themes/custom/blog/templates/views-view-unformatted.html.twig */
class __TwigTemplate_9c95f4a7e19de66d9b74a82b7f093e10518b9c747febf6a2472d5aa1e8beae2f extends \Twig\Template
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
        $tags = array("if" => 22, "for" => 25, "set" => 27);
        $filters = array("escape" => 23);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
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
        // line 20
        echo "<div class=\"container-md\">
      <div class=\"row d-block d-md-flex\" id=\"div-center\">
";
        // line 22
        if (($context["title"] ?? null)) {
            // line 23
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 23, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 26
            echo "  ";
            // line 27
            $context["row_classes"] = [0 => ((            // line 28
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 31
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 31), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
            echo ">";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            // line 34
            echo "</div>
  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/blog/templates/views-view-unformatted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 37,  89 => 34,  87 => 33,  83 => 31,  81 => 28,  80 => 27,  78 => 26,  74 => 25,  68 => 23,  66 => 22,  62 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/blog/templates/views-view-unformatted.html.twig", "C:\\Users\\rghir\\Desktop\\Drupal\\The-Blog-files\\The-Profile\\src\\web\\themes\\custom\\blog\\templates\\views-view-unformatted.html.twig");
    }
}
