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

/* tet/index.html.twig */
class __TwigTemplate_0008807cb773d40cf3ddfdc5908a4647b95b8481bb5c5cda675be02ea98e1a65 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tet/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tet/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tet/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello Tet!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>

    <div class=\"example-wrapper\">
        ";
        // line 12
        if (((isset($context["isErrorShow"]) || array_key_exists("isErrorShow", $context) ? $context["isErrorShow"] : (function () { throw new RuntimeError('Variable "isErrorShow" does not exist.', 12, $this->source); })()) == false)) {
            // line 13
            echo "            <div class=\"container\">
                <div class=\"row m-1 p-1 tick-border\">
                    <div class=\"col-12 text-md-left\">
                        <button onclick=\"runWeatherForecast()\" class=\"btn btn-sm btn-primary\">Atjaunotus datus</button>
                    </div>
                </div>
                <div class=\"row bg-light\" style=\"margin-left: 0px; margin-right: 0px;\">
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-right\">
                        Valsts nosaukums:
                    </lable>
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-left\">
                        <b>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 24, $this->source); })()), "countryname", [], "any", false, false, false, 24), "html", null, true);
            echo "</b>
                    </lable>
                </div>

                <div class=\"row bg-light my-1\" style=\"margin-left: 0px; margin-right: 0px;\">
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-right\">
                        Reģiona nosaukums:
                    </lable>
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-left\">
                        <b>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 33, $this->source); })()), "regionname", [], "any", false, false, false, 33), "html", null, true);
            echo "</b>
                    </lable>
                </div>

                <div class=\"row bg-light my-1\" style=\"margin-left: 0px; margin-right: 0px;\">
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-right\">
                        Valsts kods:
                    </lable>
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-left\">
                        <b>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 42, $this->source); })()), "coutrycode", [], "any", false, false, false, 42), "html", null, true);
            echo "</b>
                    </lable>
                </div>

                <div class=\"row bg-light my-1\" style=\"margin-left: 0px; margin-right: 0px;\">
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-right\">
                        Pasta indekss:
                    </lable>
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-left\">
                        <b>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 51, $this->source); })()), "zip", [], "any", false, false, false, 51), "html", null, true);
            echo "</b>
                    </lable>
                </div>

                <div class=\"row bg-light my-1\" style=\"margin-left: 0px; margin-right: 0px;\">
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-right\">
                        IP adrese:
                    </lable>
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-left\">
                        <b>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 60, $this->source); })()), "ip", [], "any", false, false, false, 60), "html", null, true);
            echo "</b>
                    </lable>
                </div>

                <div class=\"row bg-light my-1\" style=\"margin-left: 0px; margin-right: 0px;\">
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-right\">
                        Кoordinātas:
                    </lable>
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-left\">
                        Platuma grādos: <b>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 69, $this->source); })()), "latitude", [], "any", false, false, false, 69), "html", null, true);
            echo "</b> <br/>
                        Garums grādos: <b>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 70, $this->source); })()), "longitude", [], "any", false, false, false, 70), "html", null, true);
            echo "</b>
                    </lable>
                </div>

                <span id=\"weatherForecast\"></span>
            </div>

            <input type=\"hidden\" id=\"lat\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 77, $this->source); })()), "latitude", [], "any", false, false, false, 77), "html", null, true);
            echo "\" />
            <input type=\"hidden\" id=\"lon\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 78, $this->source); })()), "longitude", [], "any", false, false, false, 78), "html", null, true);
            echo "\" />
        ";
        }
        // line 80
        echo "    </div>
    <input type=\"hidden\" id=\"isRunWeatherForecast\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["isErrorShow"]) || array_key_exists("isErrorShow", $context) ? $context["isErrorShow"] : (function () { throw new RuntimeError('Variable "isErrorShow" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "    <script type=\"text/javascript\">
        \$(function() {
            var isRunWeatherForecast = \$('#isRunWeatherForecast').val();
            if (!isRunWeatherForecast) {
                runWeatherForecast();
            }
        });

        function runWeatherForecast() {
            var lat = \$('#lat').val();
            var lon = \$('#lon').val();
            var url = 'weather/forecast/'+lat+'/'+lon;
            \$.getJSON (
                url,
                function(result) {
                    var form = '';
                    if (result == 1) {
                        form += '<div class=\"alert alert-danger\">';
                        form += 'Laika prognoze pieejamais limits 60/min ir iztērēts';
                        form += '</div>';
                    } else {
                        \$.each(result, function(key, row) {
                            form += '<div class=\"row bg-light my-1\" style=\"margin-left: 0px; margin-right: 0px;\">';
                            form += '<lable class=\"col-6 col-form-label-sm col-form-label text-md-right\">';
                            form += row.title+':';
                            form += '</lable>';
                            form += '<lable class=\"col-6 col-form-label-sm col-form-label text-md-left\">';
                            form += row.data;
                            form += '</lable>';
                            form += '</div>';
                        });
                    }
                    \$('#weatherForecast').html(form);
                }
            );
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tet/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 85,  210 => 84,  198 => 81,  195 => 80,  190 => 78,  186 => 77,  176 => 70,  172 => 69,  160 => 60,  148 => 51,  136 => 42,  124 => 33,  112 => 24,  99 => 13,  97 => 12,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello Tet!{% endblock %}

{% block body %}
    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>

    <div class=\"example-wrapper\">
        {% if isErrorShow == false %}
            <div class=\"container\">
                <div class=\"row m-1 p-1 tick-border\">
                    <div class=\"col-12 text-md-left\">
                        <button onclick=\"runWeatherForecast()\" class=\"btn btn-sm btn-primary\">Atjaunotus datus</button>
                    </div>
                </div>
                <div class=\"row bg-light\" style=\"margin-left: 0px; margin-right: 0px;\">
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-right\">
                        Valsts nosaukums:
                    </lable>
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-left\">
                        <b>{{ userData.countryname }}</b>
                    </lable>
                </div>

                <div class=\"row bg-light my-1\" style=\"margin-left: 0px; margin-right: 0px;\">
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-right\">
                        Reģiona nosaukums:
                    </lable>
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-left\">
                        <b>{{ userData.regionname }}</b>
                    </lable>
                </div>

                <div class=\"row bg-light my-1\" style=\"margin-left: 0px; margin-right: 0px;\">
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-right\">
                        Valsts kods:
                    </lable>
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-left\">
                        <b>{{ userData.coutrycode }}</b>
                    </lable>
                </div>

                <div class=\"row bg-light my-1\" style=\"margin-left: 0px; margin-right: 0px;\">
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-right\">
                        Pasta indekss:
                    </lable>
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-left\">
                        <b>{{ userData.zip }}</b>
                    </lable>
                </div>

                <div class=\"row bg-light my-1\" style=\"margin-left: 0px; margin-right: 0px;\">
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-right\">
                        IP adrese:
                    </lable>
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-left\">
                        <b>{{ userData.ip }}</b>
                    </lable>
                </div>

                <div class=\"row bg-light my-1\" style=\"margin-left: 0px; margin-right: 0px;\">
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-right\">
                        Кoordinātas:
                    </lable>
                    <lable class=\"col-6 col-form-label-sm col-form-label text-md-left\">
                        Platuma grādos: <b>{{ userData.latitude }}</b> <br/>
                        Garums grādos: <b>{{ userData.longitude }}</b>
                    </lable>
                </div>

                <span id=\"weatherForecast\"></span>
            </div>

            <input type=\"hidden\" id=\"lat\" value=\"{{ userData.latitude }}\" />
            <input type=\"hidden\" id=\"lon\" value=\"{{ userData.longitude }}\" />
        {% endif %}
    </div>
    <input type=\"hidden\" id=\"isRunWeatherForecast\" value=\"{{ isErrorShow }}\" />
{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\">
        \$(function() {
            var isRunWeatherForecast = \$('#isRunWeatherForecast').val();
            if (!isRunWeatherForecast) {
                runWeatherForecast();
            }
        });

        function runWeatherForecast() {
            var lat = \$('#lat').val();
            var lon = \$('#lon').val();
            var url = 'weather/forecast/'+lat+'/'+lon;
            \$.getJSON (
                url,
                function(result) {
                    var form = '';
                    if (result == 1) {
                        form += '<div class=\"alert alert-danger\">';
                        form += 'Laika prognoze pieejamais limits 60/min ir iztērēts';
                        form += '</div>';
                    } else {
                        \$.each(result, function(key, row) {
                            form += '<div class=\"row bg-light my-1\" style=\"margin-left: 0px; margin-right: 0px;\">';
                            form += '<lable class=\"col-6 col-form-label-sm col-form-label text-md-right\">';
                            form += row.title+':';
                            form += '</lable>';
                            form += '<lable class=\"col-6 col-form-label-sm col-form-label text-md-left\">';
                            form += row.data;
                            form += '</lable>';
                            form += '</div>';
                        });
                    }
                    \$('#weatherForecast').html(form);
                }
            );
        }
    </script>
{% endblock %}", "tet/index.html.twig", "/var/www/html/tet/templates/tet/index.html.twig");
    }
}
