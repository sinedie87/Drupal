<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/charity_zymphonies_theme/templates/navigation/menu--main.html.twig */
class __TwigTemplate_9854d41eb0362c67cf5d48d8a34acd2421df5d5dfa6ab23c1d5139ab8a39c27f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 18, "macro" => 29, "if" => 31, "for" => 37];
        $filters = ["escape" => 33];
        $functions = ["link" => 43];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
                ['escape'],
                ['link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 18
        $context["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo "
<span class=\"navbar-toggle-close\"><i class=\"fas fa-times\"></i></span>

";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 30
            echo "  ";
            $context["menus"] = $this;
            // line 31
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    echo "      <ul class=\"sm menu-base-theme\" id=\"main-menu\" ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "menu", 1 => "nav", 2 => "navbar-nav"], "method")), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 35
                    echo "      <ul>
    ";
                }
                // line 37
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", []))) {
                        // line 39
                        echo "        <li>
        <a href=\"";
                        // line 40
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                        echo "\" data-target=\"#\" data-toggle=\"dropdown\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo "</a>
      ";
                    } else {
                        // line 42
                        echo "        <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                        echo ">
        ";
                        // line 43
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                        echo "
      ";
                    }
                    // line 45
                    echo "      ";
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 46
                        echo "        ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => "nav", 1 => "navbar-nav"], "method"), (($context["menu_level"] ?? null) + 1)));
                        echo "
      ";
                    }
                    // line 48
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "    </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/charity_zymphonies_theme/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 50,  142 => 48,  136 => 46,  133 => 45,  128 => 43,  123 => 42,  116 => 40,  113 => 39,  110 => 38,  105 => 37,  101 => 35,  95 => 33,  92 => 32,  89 => 31,  86 => 30,  72 => 29,  65 => 27,  60 => 24,  57 => 19,  55 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *
 * @ingroup templates
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}

<span class=\"navbar-toggle-close\"><i class=\"fas fa-times\"></i></span>

{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul class=\"sm menu-base-theme\" id=\"main-menu\" {{ attributes.addClass('menu', 'nav', 'navbar-nav') }}>
    {% else %}
      <ul>
    {% endif %}
    {% for item in items %}
      {% if menu_level == 0 and item.is_expanded %}
        <li>
        <a href=\"{{ item.url }}\" data-target=\"#\" data-toggle=\"dropdown\">{{ item.title }}</a>
      {% else %}
        <li{{ item.attributes }}>
        {{ link(item.title, item.url) }}
      {% endif %}
      {% if item.below %}
        {{ menus.menu_links(item.below, attributes.removeClass('nav', 'navbar-nav'), menu_level + 1) }}
      {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
", "themes/charity_zymphonies_theme/templates/navigation/menu--main.html.twig", "/Users/ludovic/Desktop/Code/Drupal/Test/themes/charity_zymphonies_theme/templates/navigation/menu--main.html.twig");
    }
}
