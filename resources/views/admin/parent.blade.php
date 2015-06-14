<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        @section('title')
            道管理系统
        @endsection
    </title>

    <!-- Bootstrap3.3.4 Core CSS -->
    <link href="/common/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="/common/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="/common/sb-admin-2/css/timeline.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/common/sb-admin-2/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="/common/morrisjs/morris.css" rel="stylesheet">
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

    <!-- jQuery2.1.3 -->
    <script src="/common/jquery/jquery2.1.3.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/common/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/common/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="/common/raphael/raphael-min.js"></script>
    <script src="/common/morrisjs/morris.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/common/sb-admin-2/js/sb-admin-2.js"></script>
    @yield('js')

</body>

</html>
