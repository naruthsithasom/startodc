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
                        เพิ่มเจ้าหนี้
                    </h2>
                    
                </div>
                <div class="body">
                    <div class="row clearfix po_relative">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="">ชื่อเจ้าหนี้</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="">กลุ่มดอกเบี้ยที่ใช้คำนวณ</label>
                                    <select name="accesstype" id="" class="form-control accesstypeval">
                                        <option value="1">ญาติท่่าน MD</option>
                                        <option value="2">ทั่วไป</option>
                                        <option value="3">อื่นๆ</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="">กู้ในนาม</label>
                                    <select name="accesstype" id="" class="form-control accesstypeval">
                                        <option value="1">เดี่ยว</option>
                                        <option value="2">กลุ่ม</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="input-group">
                                <div class="form-line">
                                    <label for="">จำนวนเจ้าหนี้</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <span class="input-group-addon">คน</span>
                            </div>
                        </div>
                        
                    </div>
                    <br>


                    <div class="row clearfix po_relative">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <div class="form-line">
                                    <h4 for="">ข้อมูลที่อยู่</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix po_relative">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="">ที่อยู่ (เลขที่ / ซอย / ถนน)</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="">จังหวัด</label>
                                    <select name="" id="" class="form-control ">
                                        <option value="1">กรุณาเลือก</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="">อำเภอ</label>
                                    <select name="" id="" class="form-control ">
                                        <option value="1">กรุณาเลือก</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="">ตำบล</label>
                                    <select name="" id="" class="form-control ">
                                        <option value="1">กรุณาเลือก</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <label for="">รหัสไปรษณีย์</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <br>

                    <div class="row clearfix po_relative">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <div class="form-line">
                                    <h4 for="">บัญชีรับดอกเบี้ย</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix po_relative">
                        <button class="floatbtn addbank">
                            <i class="material-icons">add_circle</i>
                        </button>
                        <div class="col-xs-3">
                            <div class="input-group">
                                <div class="form-line">
                                    <label for="">ชื่อบัญชี</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="input-group">
                                <div class="form-line">
                                    <label for="">เลขที่บัญชี</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="input-group">
                                <div class="form-line">
                                    <label for="">สาขา</label>
                                    <select id="bankbranch" class="form-control">
                                        <option value="1">กทม.</option>
                                        <option value="2">ตจว.</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="input-group">
                                <div class="form-line">
                                    <label for="">ธนาคาร</label>
                                    <select name="bank" id="" class="form-control">
                                        <option value="1">ธนาคารกสิกร</option>
                                        <option value="2">ธนาคารกรุงเทพ</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="footer">
                    <input type="hidden" name="" id="total">
                    <button class="btn bg-green btn-lg  waves-effect savebreaking">บันทึกข้อมูล</button>
                    <button class="btn bg-grey btn-lg  waves-effect">ล้างข้อมูล</button>
                </div>
            </div>
        </div>
        
    </div>
</div>

<script>
$( document ).ready(function() { 
    $( ".addbank" ).click(function() {
        $(this).parents(".card .body").append('<div class="row clearfix po_relative"><button class="floatbtn removebank"><i class="material-icons">remove_circle</i></button><div class="col-xs-3"><div class="input-group"><div class="form-line"><label for="">ชื่อบัญชี</label><input type="text" class="form-control" placeholder=""></div></div></div><div class="col-xs-3"><div class="input-group"><div class="form-line"><label for="">เลขที่บัญชี</label><input type="text" class="form-control" placeholder=""></div></div></div><div class="col-xs-3"><div class="input-group"><div class="form-line"><label for="">สาขา</label><select id="bankbranch" class="form-control"><option value="1">กทม.</option><option value="2">ตจว.</option></select></div></div></div><div class="col-xs-3"><div class="input-group"><div class="form-line"><label for="">ธนาคาร</label><select name="bank" id="" class="form-control"><option value="1">ธนาคารกสิกร</option><option value="2">ธนาคารกรุงเทพ</option></select></div></div></div>');

        $( ".floatbtn.removebank" ).click(function() {
            $(this).parents(".po_relative").remove();
        });
    
        $('.savebreaking').click(function() {  
            var costtotal = $('#total').val();
            if(costtotal > 500000){
                $('#notbreaking').modal('show')
            }else{
                $('#savesuccess').modal('show')
            }
        });
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