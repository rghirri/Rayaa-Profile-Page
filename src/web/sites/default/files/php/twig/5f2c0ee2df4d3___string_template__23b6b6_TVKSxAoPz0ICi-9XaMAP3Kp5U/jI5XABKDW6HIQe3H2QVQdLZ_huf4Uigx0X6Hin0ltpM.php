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

/* __string_template__23b6b63de5f18985531633078c6a534accffa63ac0493f50392a65894a405301 */
class __TwigTemplate_0c66f04b05d4e91a819ed3384ed3d22646e820e3d214b8eabed7b38bba403646 extends \Twig\Template
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
        $filters = array("escape" => 6);
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
        echo "<div class=\"container-md ml-3 ml-md-0 bg-hero\">
      <div class=\"row d-md-flex\" id=\"div-center\">
  
<div class= \"col-md-7 d-flex align-items-center\">
        <div class= \"d-flex ml-10\">
          <div class=\"hero-text-box-title\"><h1>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_hero_title"] ?? null), 6, $this->source), "html", null, true);
        echo "</h1>
             <div class= \"hero-text-box\"><p class=\"lead\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 7, $this->source), "html", null, true);
        echo "</p></div>
           </div>
         </div>
 </div>

<div class=\"col-md-5\"> 
         <div class=\"hero-image\"> 
             ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_hero_image"] ?? null), 14, $this->source), "html", null, true);
        echo "
        </div>
</div>
       
     </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__23b6b63de5f18985531633078c6a534accffa63ac0493f50392a65894a405301";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__23b6b63de5f18985531633078c6a534accffa63ac0493f50392a65894a405301", "");
    }
}
