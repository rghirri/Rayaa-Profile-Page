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

/* themes/custom/blog/templates/menu--main.html.twig */
class __TwigTemplate_7fcb223a65e5ea602fa0f6b76cbdb4d4540eea60ca517ab6ad8149f5baf056cb extends \Twig\Template
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
        $tags = array("import" => 26, "macro" => 34, "if" => 36, "for" => 44);
        $filters = array("escape" => 39);
        $functions = array("link" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
                ['escape'],
                ['link']
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
        // line 23
        echo " <div class=\"collapse navbar-collapse\" id=\"mainLink\">
   
       <div class=\"row justify-content-center ml-auto\">
";
        // line 26
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 27
        echo "
";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 32, $context, $this->getSourceContext()));
        echo "

";
        // line 56
        echo "
  </div>
</div>

 ";
    }

    // line 34
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 35
            echo "  ";
            $macros["menus"] = $this;
            // line 36
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 37
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 38
                    echo "  
      <ul";
                    // line 39
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "navbar-nav"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 41
                    echo "      <ul ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "navbar-nav"], "method", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo ">
    ";
                }
                // line 43
                echo "
    ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 45
                    echo "         <li ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 45), "addClass", [0 => "nav-item pl-md-2 pb-md-2 mt-3 mt-md-0 pl-lg-3 pb-lg-3"], "method", false, false, true, 45), 45, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 46
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 46), 46, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 46), 46, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 46), "addClass", [0 => "nav-link"], "method", false, false, true, 46), 46, $this->source)), "html", null, true);
                    echo "
        ";
                    // line 47
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 47)) {
                        // line 48
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 48), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 48, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 50
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "
    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/blog/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 52,  147 => 50,  141 => 48,  139 => 47,  135 => 46,  130 => 45,  126 => 44,  123 => 43,  117 => 41,  112 => 39,  109 => 38,  106 => 37,  103 => 36,  100 => 35,  85 => 34,  77 => 56,  72 => 32,  69 => 27,  67 => 26,  62 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/blog/templates/menu--main.html.twig", "C:\\Users\\rghir\\Desktop\\Drupal\\The-Blog-files\\The-Profile\\src\\web\\themes\\custom\\blog\\templates\\menu--main.html.twig");
    }
}
