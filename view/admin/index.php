<?php
include_once '../../verificaLogin.php';
include_once '../../Fachada/Fachada.php';
$fachada = new Fachada();
?>
<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.1.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="pt-br" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="pt-br" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt-br" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Audit | Painel Administrador</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        <link href="../../assets/global/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/global/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- BEGIN PAGE STYLES -->
        <link href="../../assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="../../assets/global/css/components.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="../../assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
    <!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
    <!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
    <!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
    <!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
    <!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
    <!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
    <body class="page-header-fixed page-quick-sidebar-over-content">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.php">
                        <img src="../../assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
                    </a>
                    <div class="menu-toggler sidebar-toggler hide">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown dropdown-user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span class="username username-hide-on-mobile">
                                    <?php echo $_SESSION['login']; ?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="http://www.auditmais.com.br">
                                        <i class="icon-lock"></i> Voltar para o site </a>
                                </li>
                                <li>
                                    <a href="deslogar.php">
                                        <i class="icon-key"></i> Sair </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix">
        </div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                            </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <li class="start active open">
                            <a href="javascript:;">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Gráficos</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="active">
                                    <a href="grafico.php">
                                        <i class="icon-graph"></i>
                                        Gerar Gráfico</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-briefcase"></i>
                                <span class="title">Tabelas</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="listaAnaliseProduto.php">
                                        <i class="icon-arrow-right"></i>
                                        Analise de Produto
                                    </a>
                                </li>
                                <li>
                                    <a href="listaAnalisePreco.php">
                                        <i class="icon-arrow-right"></i>
                                        Analise de Preço
                                    </a>
                                </li>
                                <li>
                                    <a href="listaRoteiros.php">
                                        <i class="icon-arrow-right"></i>
                                        Roteiros</a>
                                </li>
                                <li>
                                    <a href="listaVisitas.php">
                                        <i class="icon-arrow-right"></i>
                                        Visitas</a>
                                </li>
                                <li>
                                    <a href="listaProdutos.php">
                                        <i class="icon-arrow-right"></i>
                                        Produtos</a>
                                </li>
                                <li>

                                    <a href="listaCliente.php">
                                        <i class="icon-arrow-right"></i>
                                        Clientes</a>
                                </li>
                            </ul>
                        </li>
                        <!-- END SIDEBAR MENU -->
                </div>
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title"></h4>
                                </div>
                                <div class="modal-body">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn blue">Salvar mudanças</button>
                                    <button type="button" class="btn default" data-dismiss="modal">fechar</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- BEGIN PAGE HEADER-->
                    <h3 class="page-title">
                        Painel de Controle <small>Gráficos e Tabelas</small>
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="index.php">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Painel de Controle</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat blue-madison">
                                <div class="visual">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <?php echo $fachada->countCliente(); ?>
                                    </div>
                                    <div class="desc">
                                        Total de Clientes
                                    </div>
                                </div>
                                <a class="more" href="listaCliente.php">
                                    Lista Geral <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat red-intense">
                                <div class="visual">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        1000
                                    </div>
                                    <div class="desc">
                                        Produtos Pesquisados
                                    </div>
                                </div>
                                <a class="more" href="#">
                                  Pesquisa de Produtos <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat green-haze">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        500
                                    </div>
                                    <div class="desc">
                                        Produtos Concorrencia
                                    </div>
                                </div>
                                <a class="more" href="#">
                                    Pesquisa de Produtos <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat purple-plum">
                                <div class="visual">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        100
                                    </div>
                                    <div class="desc">
                                        Meta de Visitas
                                    </div>
                                </div>
                                <a class="more" href="#">
                                    Lista da Semana <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END DASHBOARD STATS -->
                    <div class="clearfix">
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet solid bordered grey-cararra">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-bar-chart-o"></i>Visitas do mês
                                    </div>
                                    <div class="page-toolbar">
                                        <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-placement="top" data-original-title="Change dashboard date range">
                                            <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- Gráfico PIZZA! -->
                                <div class="box-chart">
                                    <canvas id="GraficoPizza"></canvas>
                                    <br>
                                    Clientes Visitados <i class="fa fa-square" style="color: #F7464A"></i>
                                    <br>
                                    Clientes não visitados <i class="fa fa-square" style="color: #46BFBD"></i>

                                </div>
                                <?php
                                $array = $fachada->visitaMes(null);
                                if (true) {
                                    ?>
                                    <script type="text/javascript">
                                        var info = <?php echo json_encode($array); ?>;
                                        var options = {
                                            responsive: true
                                        };

                                        var data = [
                                            {
                                                value: info[0],
                                                color: "#F7464A",
                                                highlight: "#FF5A5E",
                                                label: "Clientes vistados"
                                            },
                                            {
                                                value: info[1] - info[0],
                                                color: "#46BFBD",
                                                highlight: "#5AD3D1",
                                                label: "Clientes não vistados"
                                            }
                                        ];

                                    </script>
                                    <?php
                                }
                                ?>
                            </div>
                            <!-- Gráfico Pizza, AGAIN! -->
                        </div>
                        <?php
                          $visitas = $fachada->visitaMes(1);
                          $totalVisitas = $visitas[0];
                          $totalClientes = $visitas[1];
                        ?>
                        <div class="col-md-6 col-sm-6">
                            <!-- BEGIN PORTLET-->
                            <div class="portlet solid grey-cararra bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-bullhorn"></i>Dias de visitas
                                    </div>
                                </div>
                                <div class="portlet-body">
                                  <div class="box-chart">
                                    <canvas id="GraficoLine"></canvas>
                                  </div>
                                    <div style="margin: 20px 0 10px 30px">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                <span class="label label-sm label-success">
                                                     Visitas realizadas   </span>
                                                <h3><?php echo "200"; ?></h3>
                                            </div>

                                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                <span class="label label-sm label-danger">
                                                     Visitas não realizadas </span>
                                                <h3><?php echo "10"; ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                var options1 = {
                                    responsive:true
                                };

                                var data1 = {
                                    //Treta, Pegar a data atual, faz um for regressivo de 30 a 1 e ir substraindo na data atual
                                    labels: ["01/JUL", "02/JUL", "03/JUL", "04/JUL", "05/JUL", "06/JUL", "07/JUL", "08/JUL", "09/JUL", "10/JUL", "11/JUL", "12/JUL"],
                                    datasets: [
                                        {
                                            label: "visitas realizadas",
                                            fillColor: "rgba(220,220,220,0.2)",
                                            strokeColor: "rgba(220,220,220,1)",
                                            pointColor: "rgba(220,220,220,1)",
                                            pointStrokeColor: "#fff",
                                            pointHighlightFill: "#fff",
                                            pointHighlightStroke: "rgba(220,220,220,1)",
                                            data: [20, 15, 21, 29, 28, 27, 18, 19, 19, 19, 24, 10]
                                        },
                                        {
                                            label: "Não realizadas",
                                            fillColor: "rgba(151,187,205,0.2)",
                                            strokeColor: "rgba(151,187,205,1)",
                                            pointColor: "rgba(151,187,205,1)",
                                            pointStrokeColor: "#fff",
                                            pointHighlightFill: "#fff",
                                            pointHighlightStroke: "rgba(151,187,205,1)",
                                            data: [1, 3, 0, 0, 0, 1, 2, 3, 4, 6, 1, 12]
                                        }
                                    ]
                                };
                            </script>
                            <script type="text/javascript">
                              window.onload = function(){
                                 //Gráfico Pizza
                                  var grafico = document.getElementById("GraficoPizza").getContext("2d");
                                  var PizzaChart = new Chart(grafico).Pie(data, options);
                                  //Gráfico Line
                                  var line = document.getElementById("GraficoLine").getContext("2d");
                                  var LineChart = new Chart(line).Line(data1, options1);
                              }
                          </script>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <br/>
                <br/>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php
            $fachada->footer();
        ?>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="../../assets/global/plugins/respond.min.js"></script>
        <script src="../../assets/global/plugins/excanvas.min.js"></script>
        <![endif]-->
        <script src="../../assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="../../assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
        <script src="../../assets/global/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
        <script src="../../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
        <script src="../../assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
        <script src="../../assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
        <script src="../../assets/admin/pages/scripts/index.js" type="text/javascript"></script>
        <script src="../../assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <script src="Chart.min.js"></script>
        <script>
                                        jQuery(document).ready(function () {
                                            Metronic.init(); // init metronic core componets
                                            Layout.init(); // init layout
                                            QuickSidebar.init(); // init quick sidebar
                                            Demo.init(); // init demo features
                                            Index.init();
                                            Index.initDashboardDaterange();
                                            //Index.initJQVMAP(); // init index page's custom scripts
                                            Index.initCalendar(); // init index page's custom scripts
                                            Index.initCharts(); // init index page's custom scripts
                                            Index.initChat();
                                            Index.initMiniCharts();
                                            Index.initIntro();
                                            Tasks.initDashboardWidget();
                                        });
        </script>
    </body>

    <!-- END BODY -->
</html>
