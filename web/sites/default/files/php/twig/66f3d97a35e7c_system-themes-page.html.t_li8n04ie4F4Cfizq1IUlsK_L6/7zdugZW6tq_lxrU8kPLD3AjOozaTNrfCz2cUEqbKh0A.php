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

/* themes/contrib/gin/templates/system/system-themes-page.html.twig */
class __TwigTemplate_d3e7a7c1eed01f3bd0a08e7bff3f1724 extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 36, $this->source), "html", null, true);
        yield ">
  ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["theme_groups"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 38
            yield "    ";
            // line 39
            $context["theme_group_classes"] = ["system-themes-list", ("system-themes-list--" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 41
$context["theme_group"], "state", [], "any", false, false, true, 41), 41, $this->source)), "clearfix", "gin-layer-wrapper"];
            // line 46
            yield "
    ";
            // line 48
            $context["card_alignment"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["theme_group"], "state", [], "any", false, false, true, 48) == "installed")) ? ("horizontal") : ("vertical"));
            // line 50
            yield "
    ";
            // line 51
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 51)) {
                // line 52
                yield "      <hr>
    ";
            }
            // line 54
            yield "
    <div";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["theme_group"], "attributes", [], "any", false, false, true, 55), "addClass", [($context["theme_group_classes"] ?? null)], "method", false, false, true, 55), 55, $this->source), "html", null, true);
            yield ">
      <h2 class=\"system-themes-list__header\">";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme_group"], "title", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            yield "</h2>
      <div class=\"card-list ";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["card_alignment"] ?? null) == "horizontal")) ? ("card-list--two-cols") : ("card-list--four-cols")));
            yield "\">
        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["theme_group"], "themes", [], "any", false, false, true, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 59
                yield "          ";
                // line 60
                $context["theme_classes"] = [((CoreExtension::getAttribute($this->env, $this->source,                 // line 61
$context["theme"], "is_default", [], "any", false, false, true, 61)) ? ("theme-default") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                 // line 62
$context["theme"], "is_admin", [], "any", false, false, true, 62)) ? ("theme-admin") : ("")), "card", ("card--" . $this->sandbox->ensureToStringAllowed(                // line 64
($context["card_alignment"] ?? null), 64, $this->source)), "card-list__item"];
                // line 68
                yield "          ";
                // line 69
                $context["theme_title_classes"] = ["card__content-item", "heading-f"];
                // line 74
                yield "          ";
                // line 75
                $context["theme_description_classes"] = ["card__content-item"];
                // line 79
                yield "          <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "attributes", [], "any", false, false, true, 79), "addClass", [($context["theme_classes"] ?? null)], "method", false, false, true, 79), "setAttribute", ["aria-labelledby", CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "title_id", [], "any", false, false, true, 79)], "method", false, false, true, 79), "setAttribute", ["aria-describedby", ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "description_id", [], "any", false, false, true, 79)) ?: (null))], "method", false, false, true, 79), 79, $this->source), "html", null, true);
                yield ">
            ";
                // line 80
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "screenshot", [], "any", false, false, true, 80)) {
                    // line 81
                    yield "              <div class=\"card__image\">
                ";
                    // line 82
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "screenshot", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                    yield "
              </div>
            ";
                }
                // line 85
                yield "            <div class=\"card__content-wrapper\">
              <div class=\"card__content\">
                <h3";
                // line 87
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "title_id", [], "any", false, false, true, 87)]), "addClass", [($context["theme_title_classes"] ?? null)], "method", false, false, true, 87), 87, $this->source), "html", null, true);
                yield " id=";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "title_id", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                yield ">";
                // line 88
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "version", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                // line 89
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "notes", [], "any", false, false, true, 89)) {
                    // line 90
                    yield "                    (";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "notes", [], "any", false, false, true, 90), 90, $this->source), ", "));
                    yield ")";
                }
                // line 92
                yield "</h3>

                ";
                // line 94
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "description", [], "any", false, false, true, 94) && CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "description_id", [], "any", false, false, true, 94))) {
                    // line 95
                    yield "                  <div";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "description_id", [], "any", false, false, true, 95)) ?: (null))]), "addClass", [($context["theme_description_classes"] ?? null)], "method", false, false, true, 95), 95, $this->source), "html", null, true);
                    yield ">
                    ";
                    // line 96
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "description", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                    yield "
                  </div>";
                }
                // line 99
                yield "</div>

              <div class=\"card__footer\">
                ";
                // line 102
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "module_dependencies", [], "any", false, false, true, 102)) {
                    // line 103
                    yield "                  <div class=\"theme-info__requires\">
                    ";
                    // line 104
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Requires: @module_dependencies", ["@module_dependencies" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "module_dependencies", [], "any", false, false, true, 104), 104, $this->source))]));
                    yield "
                  </div>
                ";
                }
                // line 107
                yield "                ";
                // line 108
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "incompatible", [], "any", false, false, true, 108)) {
                    // line 109
                    yield "                  <small class=\"incompatible\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "incompatible", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                    yield "</small>
                ";
                } else {
                    // line 111
                    yield "                    ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "operations", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                    yield "
                ";
                }
                // line 113
                yield "              </div>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "      </div>
    </div>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "theme_groups", "loop"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/system/system-themes-page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  225 => 120,  209 => 117,  200 => 113,  194 => 111,  188 => 109,  185 => 108,  183 => 107,  177 => 104,  174 => 103,  172 => 102,  167 => 99,  162 => 96,  157 => 95,  155 => 94,  151 => 92,  146 => 90,  144 => 89,  140 => 88,  135 => 87,  131 => 85,  125 => 82,  122 => 81,  120 => 80,  115 => 79,  113 => 75,  111 => 74,  109 => 69,  107 => 68,  105 => 64,  104 => 62,  103 => 61,  102 => 60,  100 => 59,  96 => 58,  92 => 57,  88 => 56,  84 => 55,  81 => 54,  77 => 52,  75 => 51,  72 => 50,  70 => 48,  67 => 46,  65 => 41,  64 => 39,  62 => 38,  45 => 37,  40 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/system/system-themes-page.html.twig", "/app/web/themes/contrib/gin/templates/system/system-themes-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 37, "set" => 39, "if" => 51);
        static $filters = array("escape" => 36, "safe_join" => 90, "t" => 104, "render" => 104);
        static $functions = array("create_attribute" => 87);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'safe_join', 't', 'render'],
                ['create_attribute'],
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