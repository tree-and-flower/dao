@extends('admin.parent')

<!-- css文件 -->
@section('css')
@stop

<!-- 主要内容 -->
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h4 class="page-header">海洋世界</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            <form class="form-inline" method="get">
                <input type="text" name="name" value="" class="form-control" placeholder="联系人">
                <input type="text" name="telephone" value="" class="form-control" placeholder="手机">
                <input type="submit" value="查询" class="btn btn-info">
            </form>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="widget-box">
                    <div class="widget-content nopadding">
                        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper">
                            <table class="table table-bordered table-striped table-hover with-check">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th style="width:80px">联系人</th>
                                        <th style="width:90px">出行日期</th>
                                        <th>下单日期</th>
                                        <th style="width:100px">卷号</th>
                                        <th style="width:70px">备注</th>
                                        <th class="op">操作</th>
                                    </tr>
                                </thead>
                                <tbody id="sortableTable">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
</div>
@stop
<!-- js文件 -->
@section('js')
<script>
var table = $("#sortableTable");
table.on('click', '.delOne', function(){
    var r = confirm('确定删除该联系人?');
    if(r==true){
        var id = $(this).attr('targetid');
        var url = '/customer/delCustomer/' + id;
        var data = {};
        $.ajax({
            type: "POST",
                url: url,
                data: data,
                dataType: 'json',
                success:function(rs){
                    if(rs.status == 0){
                        window.location.reload();
                    }else{
                        alert(rs.info);
                    }
                }
        });
    }
    return true;
});
table.on('click', '.verifyOne', function(){
    var r = confirm('确定通过验证该联系人?');
    if(r==true){
        var id = $(this).attr('targetid');
        var url = '/customer/verifyCustomer/' + id;
        var data = {};
        $.ajax({
            type: "POST",
                url: url,
                data: data,
                dataType: 'json',
                success:function(rs){
                    if(rs.status == 0){
                        window.location.reload();
                    }else{
                        alert(rs.info);
                    }
                }
        });
    }
    return true;
});

table.on('click', '.unverifyOne', function(){
    var r = confirm('确定取消验证该联系人?');
    if(r==true){
        var id = $(this).attr('targetid');
        var url = '/customer/unverifyCustomer/' + id;
        var data = {};
        $.ajax({
            type: "POST",
                url: url,
                data: data,
                dataType: 'json',
                success:function(rs){
                    if(rs.status == 0){
                        window.location.reload();
                    }else{
                        alert(rs.info);
                    }
                }
        });
    }
    return true;
});
//退款/取消退款
table.on('click', '.refundOne', function(){
    var r = confirm('确定退款该联系人?');
    if(r==true){
        var id = $(this).attr('targetid');
        var url = '/customer/refundCustomer/' + id;
        var data = {};
        $.ajax({
            type: "POST",
                url: url,
                data: data,
                dataType: 'json',
                success:function(rs){
                    if(rs.status == 0){
                        window.location.reload();
                    }else{
                        alert(rs.info);
                    }
                }
        });
    }
    return true;
});

table.on('click', '.unrefundOne', function(){
    var r = confirm('确定取消退款该联系人?');
    if(r==true){
        var id = $(this).attr('targetid');
        var url = '/customer/unrefundCustomer/' + id;
        var data = {};
        $.ajax({
            type: "POST",
                url: url,
                data: data,
                dataType: 'json',
                success:function(rs){
                    if(rs.status == 0){
                        window.location.reload();
                    }else{
                        alert(rs.info);
                    }
                }
        });
    }
    return true;
});
</script>
@stop
