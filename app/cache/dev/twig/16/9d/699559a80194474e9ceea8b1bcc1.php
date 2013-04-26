<?php

/* PXTasksBundle::taskInsert.html.twig */
class __TwigTemplate_169d699559a80194474e9ceea8b1bcc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PXTasksBundle::layout.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PXTasksBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row\">

        <div class=\"span4\">
            <div class=\"alert alert-block\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <h4>Warning!</h4>
                Best check yo self, you're not...
            </div>
        </div>
        <div class=\"span8\">
            <h2>Latest News</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
        </div>
        <div class=\"span12\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>Task #</th>
                    <th>Title</th>
                    <th><i class=\"icon-time\"></i> Date</th>
                    <th>Status</th>
                    <th>Priority</th>
                    <th>Assigned</th>
                    <th>Section</th>
                    <th>Project</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Fix header for mobile</td>
                    <td>2013-04-25</td>
                    <td><span class=\"label label-success\">Done</span></td>
                    <td><i class=\"icon-flag\"></i></td>
                    <td>@Kendra</td>
                    <td>Home page</td>
                    <td>Vericant</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Fix mobile</td>
                    <td>2013-04-25</td>
                    <td><span class=\"label label-important\">Overdue</span></td>
                    <td><i class=\"icon-flag\"></i></td>
                    <td>@Kendra</td>
                    <td>Home page</td>
                    <td>
                        <div class=\"progress progress-info\">
                            <div class=\"bar\" style=\"width: 20%\"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>mobile</td>
                    <td>2013-04-25</td>
                    <td>Done</td>
                    <td><i class=\"icon-flag\"></i></td>
                    <td>@Kendra</td>
                    <td>Home page</td>
                    <td>Vericant</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Fix header for mobile</td>
                    <td>2013-04-25</td>
                    <td><span class=\"label label-inverse\">stopped</span></td>
                    <td><span class=\"badge badge-warning\">4</span></td>
                    <td>@Kendra</td>
                    <td>Home page</td>
                    <td>Vericant</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Fix header for mobile</td>
                    <td>2013-04-25</td>
                    <td><span class=\"label label-info\">started</span></td>
                    <td><i class=\"icon-flag\"></i></td>
                    <td>@Kendra</td>
                    <td>Home page</td>
                    <td>Vericant</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Fix header for mobile</td>
                    <td>2013-04-25</td>
                    <td><span class=\"label label-warning\">waiting...</span></td>
                    <td><span class=\"badge badge-warning\">2</span></td>
                    <td>@Kendra</td>
                    <td>Home page</td>
                    <td>Vericant</td>
                </tr>
                </tbody>
            </table>

            <div class=\"pagination pagination-centered\">
                <ul>
                    <li><a href=\"#\">«</a></li>
                    <li><a href=\"#\">1</a></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">»</a></li>
                </ul>
            </div>

        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "PXTasksBundle::taskInsert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}