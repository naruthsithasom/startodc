<!DOCTYPE html>
<html>

<?php include '../inc/header.php';?>


<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="https://easymoneydev.com/prototype/pn/">ระบบ เอกสารเงินกู้</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            
                            
                        </a>
                        
                    </li>
                    <!-- #END# Notifications -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <?php include '../inc/menu.php';?>

        <!-- #END# Left Sidebar -->
    </section>

    <!-- Jquery Core Js -->
    <script src="https://easymoneydev.com/prototype/pn/asset/plugins/jquery/jquery.min.js"></script>

    <section class="content">
        <div class="container-fluid">
            
    <div class="row clearfix">
        <div class="col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        สร้างกลุ่มเจ้าหนี้
                    </h2>
                    
                </div>
                <div class="body">
                    <div class="row clearfix po_relative">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <div class="form-line">
                                    <label for="">เจ้าหนี้หลัก</label>
                                    <select id="name" class="form-control" onchange="showdetail();">
                                        <option value="">เลือก</option>
                                        <option value="1">นาย ก</option>
                                        <option value="2">นาย ข</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="showdetail" style="display:none">
                        <div id="itemdetail">
                        <div class="row clearfix po_relative" >
                            <button class="floatbtn removeteam">
                                <i class="material-icons">remove_circle</i>
                            </button>
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <label for="">รหัสสมาชิก</label>
                                        <input type="text" class="form-control" placeholder="" value="2002000001">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <label for="">ชื่อสมาชิก</label>
                                        <input type="text" class="form-control" placeholder="" value="นาย ข">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix po_relative" >
                            <button class="floatbtn removeteam">
                                <i class="material-icons">remove_circle</i>
                            </button>
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <label for="">รหัสสมาชิก</label>
                                        <input type="text" class="form-control" placeholder="" value="2002000002">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <label for="">ชื่อสมาชิก</label>
                                        <input type="text" class="form-control" placeholder="" value="นาย ค">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>


                        <div class="row clearfix po_relative" >
                            <div class="col-xs-4"></div>
                            <div class="col-xs-4 text-center" >
                                <button class="btn bg-light-green btn-lg waves-effect" data-toggle="modal" data-target="#showgroup" >เพิ่มสมาชิก</button>
                            </div>
                            <div class="col-xs-4"></div>
                        </div>

                    </div>

                    <div class="row clearfix po_relative">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <div class="form-line">
                                    <label for="">รูปแบบการรวมกลุ่ม</label>
                                    <select id="name" class="form-control">
                                        <option value="">เลือก</option>
                                        <option value="1">ขอใช้ Rate พิเศษ (สมาชิกจะใช้ Rate ดอกเบี้ยตามเจ้าหนี้หลัก)</option>
                                        <option value="2">ขอรวมเงินกู้</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="footer" id="bt" style="display:none">
                    <input type="hidden" name="" id="total">
                    <button class="btn bg-green btn-lg  waves-effect" data-toggle="modal" data-target="#savesuccess">บันทึกข้อมูล</button>
                    <button class="btn bg-grey btn-lg  waves-effect">ล้างข้อมูล</button>
                </div>
            </div>
        </div>
        
    </div>
</div>


<div class="modal fade veridcard_modal" id="showgroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mainfont" id="exampleModalLabel">เพิ่มสมาชิก</h5>
        </div>
        <div class="modal-body">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                    <tr>
                        <th>ชื่อ</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ชื่อ</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1.นาย ก</td>
                        <td><button type="button" class="btn btn-lg btn-block  bg-green waves-effect" data-dismiss="modal" onclick="addteam();">เลือก</button></td>
                    </tr>
                    <tr>
                        <td>2.นาย ข</td>
                        <td><button type="button" class="btn btn-lg btn-block  bg-green waves-effect" data-dismiss="modal" onclick="addteam();">เลือก</button></td>
                    </tr>
                    <tr>
                        <td>3.นาย ค</td>
                        <td><button type="button" class="btn btn-lg btn-block  bg-green waves-effect" data-dismiss="modal" onclick="addteam();">เลือก</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

<script>

function showdetail(){
    $("#showdetail").show();
    $("#bt").show();
}

function addteam(){
    $('#itemdetail').append('<div class="row clearfix po_relative" ><button class="floatbtn removeteam"><i class="material-icons">remove_circle</i></button><div class="col-xs-6"><div class="input-group"><div class="form-line"><label for="">รหัสสมาชิก</label><input type="text" class="form-control" placeholder="" value="2002000003"></div></div></div><div class="col-xs-6"><div class="input-group"><div class="form-line"><label for="">ชื่อสมาชิก</label><input type="text" class="form-control" placeholder="" value="นาย ง"></div></div></div></div>');

    $( ".floatbtn.removeteam" ).click(function() {
        $(this).parents(".po_relative").remove();
    });
}

$( document ).ready(function() { 
    $( ".floatbtn.removeteam" ).click(function() {
        $(this).parents(".po_relative").remove();
    });
});

</script>    
</section>

    

<?php include '../inc/script.php';?>

<!-- Modal -->


<div class="modal fade alertmodel" id="savesuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <i class="material-icons col-green">check_circle</i>
            <p>บันทึกข้อมูลสำเร็จ</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn bg-grey  waves-effect" onclick='window.location.href = "creditor_list.php?menuname=creditor&menulv=creditor_list";'>ตกลง</button>
        </div>
        </div>
    </div>
</div>


</body>

</html>