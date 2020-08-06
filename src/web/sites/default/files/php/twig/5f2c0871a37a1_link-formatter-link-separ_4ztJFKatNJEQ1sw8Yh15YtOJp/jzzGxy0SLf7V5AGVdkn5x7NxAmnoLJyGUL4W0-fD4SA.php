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

/* core/modules/link/templates/link-formatter-link-separate.html.twig */
class __TwigTemplate_cf22e9633bd7bc164e83d664d343513d0929d762e2430f4fa4e84d7b9315900b extends \Twig\Template
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
        $tags = array("apply" => 17);
        $filters = array("escape" => 18, "spaceless" => 17);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply'],
                ['escape', 'spaceless'],
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
        // line 17
        ob_start(function () { return ''; });
        // line 18
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 18, $this->source), "html", null, true);
        echo "
  ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 19, $this->source), "html", null, true);
        echo "
";
        $___internal_c9c779a6fafeae33395960ae2571389d2d19b68b2cd47f24e5e2120aabd0f411_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_c9c779a6fafeae33395960ae2571389d2d19b68b2cd47f24e5e2120aabd0f411_));
    }

    public function getTemplateName()
    {
        return "core/modules/link/templates/link-formatter-link-separate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  69 => 19,  64 => 18,  62 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/link/templates/link-formatter-link-separate.html.twig", "C:\\Users\\rghir\\Desktop\\Drupal\\The-Blog-files\\The-Profile\\src\\web\\core\\modules\\link\\templates\\link-formatter-link-separate.html.twig");
    }
}
