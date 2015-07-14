<?php
include_once "../../ControllerAudit/ControllerAnaliseProduto.php";
include_once "../../Model/AnaliseDeProduto.php";
include_once "../../verificaLogin.php";
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
                                        Gerar Gráfico
                                    </a>
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
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Informações</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-placement="top" data-original-title="Change dashboard date range">
                                <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue-hoki">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-globe"></i>Estatisticas dos produtos
                                    </div>
                                    <div class="tools">
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <form action="" method="GET">
                                        <?php if (empty($_GET['categoria'])) { ?>
                                            Categoria : <select name="categoria">
                                                <?php
                                                $bd = new ControllerAnaliseProduto();
                                                $lista = $bd->listCategoria();
                                                while ($linha = $lista->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                    <option value="<?php echo $linha['id']; ?>"><?php echo $linha['descricao']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                            <?php
                                        } else {
                                            ?>
                                            SubCategoria : <select name="subcategoria">
                                                <?php
                                                $bd = new ControllerAnaliseProduto();
                                                $lista = $bd->listSubCategoria($_GET['categoria']);
                                                while ($linha = $lista->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                    <option value="<?php echo $linha['id']; ?>"><?php echo $linha['descricao']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        <?php } ?>
                                        <input type="submit" value="filtrar"/>
                                    </form>
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    ID Produto
                                                </th>
                                                <th>
                                                    ID Pesquisa Preço
                                                </th>
                                                <th>
                                                    Skus
                                                </th>
                                                <th>
                                                    Quantidade de PDV's
                                                </th>
                                                <th>
                                                    Média $
                                                </th>
                                                <th>
                                                    Presença
                                                </th>
                                                <th>
                                                    Cobertura
                                                </th>
                                                <th>
                                                    Diferença %
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!empty($_GET['subcategoria'])) {
                                                $bd = new ControllerAnaliseProduto();
                                                $bd->abrirBD();
                                                $lista = $bd->listProduto($_GET['subcategoria']);
                                                while ($linha = $lista->fetch(PDO::FETCH_OBJ)) {
                                                    $query = $bd->listAnaliseProduto($linha->id);
                                                    if (!empty($query->descricao)) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $query->idProduto; ?></td>
                                                            <td><?php echo $query->idPesquisaPreco; ?></td>
                                                            <td><?php echo $query->descricao; ?></td>
                                                            <td><?php echo $query->pdv; ?></td>
                                                            <td><?php echo $query->media; ?></td>
                                                            <td><?php echo $query->presenca; ?></td>
                                                            <td><?php echo $query->cobertura . "%"; ?></td>
                                                            <td><?php echo $query->diferenca; ?></td>
                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                            <!-- END DASHBOARD STATS -->
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
                        <script>
                            jQuery(document).ready(function () {
                                Metronic.init(); // init metronic core componets
                                Layout.init(); // init layout
                                QuickSidebar.init(); // init quick sidebar
                                Demo.init(); // init demo features
                                Index.init();
                                Index.initDashboardDaterange();
                                Index.initJQVMAP(); // init index page's custom scripts
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
