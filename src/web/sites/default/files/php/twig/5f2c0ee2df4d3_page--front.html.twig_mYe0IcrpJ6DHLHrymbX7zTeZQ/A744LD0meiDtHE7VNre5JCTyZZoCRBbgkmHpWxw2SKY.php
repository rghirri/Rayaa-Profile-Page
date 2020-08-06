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

/* themes/custom/blog/templates/page--front.html.twig */
class __TwigTemplate_446eb7d99174cb950cad192e63b9d66bfce4fed2844628fd4940734969b1a606 extends \Twig\Template
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
        $tags = array("if" => 89);
        $filters = array("escape" => 54);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 48
        echo "<div class=\"layout-container\">

   <header class=\"header bg-hero\" role=\"banner\">
    <div class=\"header-top\">
     
        <div class=\"container-lg\">
              ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "
        </div>
      
     </div>
  </header>


    <Section class=\"hero bg-hero\">
        ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "headline", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "
    </Section>

  <Section class=\"index bg-index\">
      <div class=\"container-lg\">
        <div class=\"row\">
            ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content_title", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "
            ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
        </div>
      </div>
  </Section>

  ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "

  ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "

  ";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "

  ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 84
        echo "
    <div class=\"layout-content\">
      ";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
        echo "
    </div>";
        // line 88
        echo "
    ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 89)) {
            // line 90
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 94
        echo "
    ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 95)) {
            // line 96
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 100
        echo "
  </main>

  <Section id=\"footer-top\"class=\"bg-hero\">
    <div class=\"container-sm px-0 px-sm-1 px-md-3\">
      <div class=\"row\">

        <div class=\"col-12 col-md-6 col-lg-6\">
            ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 108)) {
            // line 109
            echo "              <footer role=\"contentinfo\">
                ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo "
              </footer>
            ";
        }
        // line 113
        echo "         </div>

          <div class=\"col-12 col-sm-6 col-md-3 col-lg-3 mt-md-3\">
            ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 116)) {
            // line 117
            echo "              <footer role=\"contentinfo\">
                ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "
              </footer>
            ";
        }
        // line 121
        echo "          </div>

          <div class=\"col-12 col-sm-6 col-md-3 col-lg-3 mt-md-3\">
            ";
        // line 124
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 124)) {
            // line 125
            echo "              <footer role=\"contentinfo\">
                ";
            // line 126
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
            echo "
              </footer>
            ";
        }
        // line 129
        echo "          </div>

        </div>
    </div>
  </div>
</Section>

<Section id=\"footer-bottom\"class=\"bg-hero\">
    <div class=\"container\">
      <div class=\"row justify-content-center\">

         ";
        // line 140
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 140)) {
            // line 141
            echo "            <footer role=\"contentinfo\">
              ";
            // line 142
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
            echo "
            </footer>
        ";
        }
        // line 145
        echo "
        </div>
    </div>

</Section>


</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/blog/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 145,  230 => 142,  227 => 141,  225 => 140,  212 => 129,  206 => 126,  203 => 125,  201 => 124,  196 => 121,  190 => 118,  187 => 117,  185 => 116,  180 => 113,  174 => 110,  171 => 109,  169 => 108,  159 => 100,  153 => 97,  150 => 96,  148 => 95,  145 => 94,  139 => 91,  136 => 90,  134 => 89,  131 => 88,  127 => 86,  123 => 84,  117 => 80,  112 => 78,  107 => 76,  102 => 74,  94 => 69,  90 => 68,  81 => 62,  70 => 54,  62 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/blog/templates/page--front.html.twig", "C:\\Users\\rghir\\Desktop\\Drupal\\The-Blog-files\\The-Profile\\src\\web\\themes\\custom\\blog\\templates\\page--front.html.twig");
    }
}
