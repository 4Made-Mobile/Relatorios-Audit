<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerLayout
 *
 * @author berg
 */
class ControllerLayout {

    public function __construct() {
        //Opa!
    }

    public function header() {
        ?>
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
        <?php
    }

    public function navbar() {
        ?>
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
        <?php
    }

    public function footer() {
        ?>
        <div class="page-footer">
            <div class="page-footer-inner">
                2014 &copy; Audit - 4made.
            </div>
            <div class="page-footer-tools">
                <span class="go-top">
                    <i class="fa fa-angle-up"></i>
                </span>
            </div>
        </div>
        <?php
    }

}
