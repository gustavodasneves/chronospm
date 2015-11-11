<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <!-- Bootstrap Core CSS -->
    <?= $this->Html->css('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>
    <!-- MetisMenu CSS -->
    <?= $this->Html->css('bower_components/metisMenu/dist/metisMenu.min.css') ?>
    <!-- Timeline CSS -->
    <?= $this->Html->css('timeline.css') ?>
    <!-- Custom CSS -->
    <?= $this->Html->css('sb-admin-2.css') ?>
    <!-- Morris Charts CSS -->
    <?= $this->Html->css('bower_components/morrisjs/morris.css') ?>
    <!-- Custom Fonts -->
    <?= $this->Html->css('bower_components/font-awesome/css/font-awesome.min.css') ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?= $this->Html->script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js',['block' => 'headJs']) ?>
    <?= $this->Html->script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js',['block' => 'headJs']) ?>
    <![endif]-->
    <?= $this->Html->script('bower_components/jquery/dist/jquery.min.js',['block' => 'footerJs']) ?>
    <?= $this->Html->script('bower_components/bootstrap/dist/js/bootstrap.min.js',['block' => 'footerJs']) ?>
    <?= $this->Html->script('bower_components/metisMenu/dist/metisMenu.min.js',['block' => 'footerJs']) ?>
    <?= $this->Html->script('bower_components/raphael/raphael-min.js',['block' => 'footerJs']) ?>
    <?= $this->Html->script('bower_components/morrisjs/morris.min.js',['block' => 'footerJs']) ?>
    <?= $this->Html->script('morris-data.js',['block' => 'footerJs']) ?>
    <?= $this->Html->script('sb-admin-2.js',['block' => 'footerJs']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('headJs') ?>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">ChronosPM</a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Membro 1</strong>
                                    <span class="pull-right text-muted">40% Alocado</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Alocado (success)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Membro 2</strong>
                                    <span class="pull-right text-muted">20% Alocado</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Alocado</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Membro 3</strong>
                                    <span class="pull-right text-muted">60% Alocado</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Alocado (Cuidado)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Membro 4</strong>
                                    <span class="pull-right text-muted">80% Alocado</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Alocado (Perigo)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Ver todos os membros</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Pesquisar...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </li>
                    <li>
                        <?php
                        echo $this->Html->link(
                        'Dashboard',
                        ['controller' => 'Importacao', 'action' => 'index', '_full' => true]
                        );
                        ?>
                        <!-- <a href="/importacao"><i class="fa fa-dashboard fa-fw"></i> Dashboard - Projeto X</a>-->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $this->fetch('title') ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?= $this->Flash->render() ?>
                <div class="row">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->fetch('footerJs') ?>
</body>
</html>