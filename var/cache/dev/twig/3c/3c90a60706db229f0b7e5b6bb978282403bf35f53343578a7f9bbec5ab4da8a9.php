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

/* @ControlPanel/cp_base.html.twig */
class __TwigTemplate_40758f27b9c68b7330cc41b7cd967de68965960e2e9f71acfe193e6283e27991 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'container' => [$this, 'block_container'],
            'cp_logo' => [$this, 'block_cp_logo'],
            'cp_sidebar' => [$this, 'block_cp_sidebar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ControlPanel/layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ControlPanel/cp_base.html.twig"));

        $this->parent = $this->loadTemplate("@ControlPanel/layouts/base.html.twig", "@ControlPanel/cp_base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <div id=\"global-container\">

        <header id=\"global-sidebar\">
            ";
        // line 7
        $this->displayBlock('cp_logo', $context, $blocks);
        // line 10
        echo "
            <section>
                ";
        // line 12
        $this->displayBlock('cp_sidebar', $context, $blocks);
        // line 15
        echo "            </section>
        </header>

        <div id=\"page-container\">
            <div id=\"global-header\">

                <div id=\"global-header-left\">
                    <button id=\"nav-toggle\" data-action=\"braunstetter--control-panel--toggle#toggle\">
                        <span class=\"sr-only\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open sidebar"), "html", null, true);
        echo "</span>
                        ";
        // line 24
        echo twig_source($this->env, "@ControlPanel/images/burger.svg");
        echo "
                    </button>s

                    ";
        // line 27
        echo call_user_func_array($this->env->getFunction('hook')->getCallable(), [$context, "rock.cp.global-header-left"]);
        echo "
                </div>

                <div id=\"global-header-right\">
                    ";
        // line 31
        echo call_user_func_array($this->env->getFunction('hook')->getCallable(), [$context, "rock.cp.global-header-right"]);
        echo "
";
        // line 33
        echo "                </div>

            </div>

            <main id=\"main-container\">
                <div id=\"header-container\">
                    <header id=\"header\">
                        <h1>Dashboard</h1>
                    </header>
                </div>

                <div id=\"main-content\">
                    <div id=\"content-container\">
                        <div id=\"content\">
                            ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_cp_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cp_logo"));

        // line 8
        echo "                <logo>";
        echo call_user_func_array($this->env->getFunction('hook')->getCallable(), [$context, "rock.cp.logo"]);
        echo "</logo>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_cp_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cp_sidebar"));

        // line 13
        echo "                    ";
        echo call_user_func_array($this->env->getFunction('hook')->getCallable(), [$context, "rock.cp.sidebar"]);
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ControlPanel/cp_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 47,  161 => 13,  154 => 12,  144 => 8,  137 => 7,  124 => 48,  122 => 47,  106 => 33,  102 => 31,  95 => 27,  89 => 24,  85 => 23,  75 => 15,  73 => 12,  69 => 10,  67 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ControlPanel/layouts/base.html.twig' %}

{% block container %}
    <div id=\"global-container\">

        <header id=\"global-sidebar\">
            {% block cp_logo %}
                <logo>{{ hook('rock.cp.logo') }}</logo>
            {% endblock %}

            <section>
                {% block cp_sidebar %}
                    {{ hook('rock.cp.sidebar') }}
                {% endblock %}
            </section>
        </header>

        <div id=\"page-container\">
            <div id=\"global-header\">

                <div id=\"global-header-left\">
                    <button id=\"nav-toggle\" data-action=\"braunstetter--control-panel--toggle#toggle\">
                        <span class=\"sr-only\">{{ 'Open sidebar'|trans }}</span>
                        {{ source('@ControlPanel/images/burger.svg') }}
                    </button>s

                    {{ hook('rock.cp.global-header-left') }}
                </div>

                <div id=\"global-header-right\">
                    {{ hook('rock.cp.global-header-right') }}
{#                    {% include '@Rock/cp/menu/user-menu.html.twig' %}#}
                </div>

            </div>

            <main id=\"main-container\">
                <div id=\"header-container\">
                    <header id=\"header\">
                        <h1>Dashboard</h1>
                    </header>
                </div>

                <div id=\"main-content\">
                    <div id=\"content-container\">
                        <div id=\"content\">
                            {% block content %}{% endblock %}
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
{% endblock %}
", "@ControlPanel/cp_base.html.twig", "/Users/michaelbrauner/Bundles/Symfony/ControlPanelBundle/Bundle/Resources/views/cp_base.html.twig");
    }
}
