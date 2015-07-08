<?php
include_once '../../verificaLogin.php';
include_once '../../ControllerAudit/ControllerGrafico.php';
include_once '../../Model/AnaliseDeProduto.php';
include_once '../../Fachada/Fachada.php';
$fachada = new Fachada();
$obj1 = new ControllerGrafico();
$obj1->abrirBD();
?>
<script src="Chart.min.js"></script>
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
                                    <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    Widget settings form goes here
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn blue">Save changes</button>
                                    <button type="button" class="btn default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                    <!-- BEGIN STYLE CUSTOMIZER -->
                    <div class="theme-panel hidden-xs hidden-sm">
                        <div class="toggler">
                        </div>
                        <div class="toggler-close">
                        </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span>
                                    THEME COLOR </span>
                                <ul>
                                    <li class="color-black current color-default" data-style="default">
                                    </li>
                                    <li class="color-blue" data-style="blue">
                                    </li>
                                    <li class="color-brown" data-style="brown">
                                    </li>
                                    <li class="color-purple" data-style="purple">
                                    </li>
                                    <li class="color-grey" data-style="grey">
                                    </li>
                                    <li class="color-white color-light" data-style="light">
                                    </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span>
                                    Layout </span>
                                <select class="layout-option form-control input-small">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span>
                                    Header </span>
                                <select class="page-header-option form-control input-small">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span>
                                    Sidebar </span>
                                <select class="sidebar-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span>
                                    Footer </span>
                                <select class="page-footer-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END BEGIN STYLE CUSTOMIZER -->
                    <!-- BEGIN PAGE HEADER-->
                    <h3 class="page-title">
                        Visual Charts <small>visual charts & graphs</small>
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Visual Charts</a>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                    Actions <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#">Action</a>
                                    </li>
                                    <li>
                                        <a href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">Something else here</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN CHART PORTLETS-->
                    <div class="row">
                        <div class="col-md-12">
                            <form method="GET" action="">
                                <select name="subcategoria">
                                    <?php
                                    $lista = $obj1->listSubCategoria()->fetchAll();
                                    foreach ($lista AS $linha) {
                                        ?>
                                        <option value = '<?php echo $linha['id']; ?>'><?php echo $linha['descricao']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <input type="submit" value="Gerar Gráfico"/>
                            </form>
                            <!-- GRAFICO MODELO! -->
                            <div class="box-chart">
                                <?php
                                if (!empty($_GET)) {
                                    $subCategoria = $_GET['subcategoria'];
                                    $resultado = $obj1->listProduto($subCategoria);
                                    foreach ($resultado->fetchAll() as $linha) {
                                        $array = $obj1->graficoConcorrencia($linha['id']);
                                        if(!empty($array[0]->descricao) && $array[0]->descricao == 0 && $array[0]->descricao != null){
                                        ?>
                                        <canvas id="GraficoBarra<?php echo $linha['id']; ?>" style="width:80%;"></canvas>
                                        <br/>
                                        <br/>
                                        <div style="text-align: center">
                                        <i class="fa fa-square" style="color: #F7464A"></i> Pontos de Venda
                                        <i class="fa fa-square" style="color: #006dcc"></i> Media
                                        <i class="fa fa-square" style="color: #00ff00"></i> Presença
                                        <i class="fa fa-square" style="color: #22cfc6"></i> Cobertura
                                        </div>

                                        <script type="text/javascript">
                                            var info = <?php echo json_encode($array); ?>;
                                            if((info[0]['descricao'] != null && info[0]['descricao'] !== undefined && info[0]['descricao'] != 0)){
                                              var nomes = [];
                                              var dados1 = [];
                                              var dados2 = [];
                                              var dados3 = [];
                                              var dados4 = [];

                                              nomes.push(info[0]['descricao']);
                                              dados1.push(info[0]['pdv']);
                                              dados2.push(info[0]['media']);
                                              dados3.push(info[0]['presenca']);
                                              dados4.push(info[0]['cobertura']);

                                              count = info[1].length;
                                              for (i = 0; i < count; i++) {
                                                  nomes.push(info[1][i]['descricao']);
                                                  dados1.push(info[1][i]['pdv']);
                                                  dados2.push(info[1][i]['media']);
                                                  dados3.push(info[1][i]['presenca']);
                                                  dados4.push(info[1][i]['cobertura']);
                                              }

                                              var options = {
                                                  responsive: true
                                              };

                                              var data = {
                                                  labels: nomes,
                                                  datasets: [
                                                      {
                                                          label: "Pontos de Venda",
                                                          fillColor: "rgba(255,0,0,0.5)",
                                                          strokeColor: "rgba(255,0,0,0.8)",
                                                          highlightFill: "rgba(255,0,0,0.75)",
                                                          highlightStroke: "rgba(255,0,0,1)",
                                                          data: dados1
                                                      },
                                                      {
                                                          label: "Media dos Precos",
                                                          fillColor: "rgba(0,0,255,1)",
                                                          strokeColor: "rgba(0,0,255,0.8)",
                                                          highlightFill: "rgba(0,0,255,0.75)",
                                                          highlightStroke: "rgba(0,0,255,1)",
                                                          data: dados2
                                                      },
                                                      {
                                                          label: "Presenca",
                                                          fillColor: "rgba(0,255,0,0.5)",
                                                          strokeColor: "rgba(0,255,0,0.8)",
                                                          highlightFill: "rgba(0,255,0,0.75)",
                                                          highlightStroke: "rgba(0,255,0,1)",
                                                          data: dados3
                                                      },
                                                      {
                                                          label: "Cobertura",
                                                          fillColor: "rgba(151,187,205,0.5)",
                                                          strokeColor: "rgba(151,187,205,0.8)",
                                                          highlightFill: "rgba(151,187,205,0.75)",
                                                          highlightStroke: "rgba(151,187,205,1)",
                                                          data: dados4
                                                      }
                                                  ]
                                              };
                                          }


                                        </script>
                                        </body>
                                        <script>
                                        if((info[0]['descricao'] != null && info[0]['descricao'] !== undefined && info[0]['descricao'] != 0)){
                                            var ctx<?php echo $linha['id']; ?> = document.getElementById("GraficoBarra<?php echo $linha['id']; ?>").getContext("2d");
                                            var BarChart<?php echo $linha['id']; ?> = new Chart(ctx<?php echo $linha['id']; ?>).Bar(data, options);
                                          }
                                        </script>
                                        <?php
                                      }
                                    }
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
        </div>
        <!-- END CONTAINER -->
        <?php
          $fachada->footer();
        ?>
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
        <script src="../../assets/global/plugins/flot/jquery.flot.min.js"></script>
        <script src="../../assets/global/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="../../assets/global/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="../../assets/global/plugins/flot/jquery.flot.stack.min.js"></script>
        <script src="../../assets/global/plugins/flot/jquery.flot.crosshair.min.js"></script>
        <script src="../../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
        <script src="../../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
        <script src="../../assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
        <script src="../../assets/admin/layout/scripts/demo.js" type="text/javascript"></script>


        <!-- código para criar o grafico usando o plugin! -->
        <!-- FIM DO CÓDIGO QUE EU CRIO O GRÁFICO! -->
        <script>
                                            jQuery(document).ready(function () {
                                                // initiate layout and plugins
                                                Metronic.init(); // init metronic core components
                                                Layout.init(); // init current layout
                                                QuickSidebar.init(); // init quick sidebar
                                                Demo.init(); // init demo features
                                                //Charts.init();
                                                //Charts.initCharts();
                                                //Charts.initPieCharts();
                                                //Charts.initBarCharts();
                                            });
        </script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-37564768-1', 'keenthemes.com');
            ga('send', 'pageview');
        </script>
    </body>
    <?php
    $obj1->fecharBD();
    ?>
</html>
