<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>后台管理系统</title>

    <!-- Bootstrap Core CSS -->
    <link href="/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/public/metisMenu/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/public/admin/css/sb-admin-2.css" rel="stylesheet">
    <link href="/public/admin/css/default.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- jQuery -->
    <script src="/public/js/jquery.js"></script>

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">后台管理系统</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> 修改密码</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>退出登录</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="/"><i class="fa fa-bank fa-fw"></i> 导航管理</a>
                    </li>
                    <li>
                        <a href="/article"><i class="fa fa-bar-chart-o fa-fw"></i> 内容管理</a>
                    </li>
                    <li>
                        <a href="/images"><i class="fa fa-child fa-fw"></i> 图片管理</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>