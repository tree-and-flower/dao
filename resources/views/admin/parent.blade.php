<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="@yield('keywords', 'defalut keywords')">
    <meta name="description" content="@yield('description', 'default description')">
    <meta name="author" content="@yield('author', 'default author')">
    <title>
        @section('title')
            {{config('app.name')}}管理系统
        @show
    </title>
    <!-- Bootstrap3.3.4 Core CSS -->
    <link href="/common/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="/common/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="/common/sb-admin-2/css/timeline.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/common/sb-admin-2/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/common/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    @yield('css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('admin.include.navbar')
            @include('admin.include.sidebar')
        </nav>
        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery1.9.1 -->
    <script src="/common/jquery/jquery1.9.1.min.js"></script>
    <!-- Bootstrap3.3.4 Core JavaScript -->
    <script src="/common/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/common/metisMenu/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/common/sb-admin-2/js/sb-admin-2.js"></script>
    @yield('js')
</body>
</html>
