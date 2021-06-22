
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ประวัติการเปลี่ยนแปลงดอกเบี้ย
                    </h2>
                    
                </div>
                <div class="body">
                    <div class="floatbox">
                        <button class="btn bg-green btn-block waves-effect" data-toggle="modal" data-target="#to_sellconfirm">นำไปวางขาย <b>0</b> รายการ</button>
                        <button class="btn bg-red btn-block waves-effect" onclick="location.reload();">ยกเลิก</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>รายเดือน</th>
                                    <th>รายปี</th>
                                    <th>วันที่เริ่ม</th>
                                    <th>วันที่สิ้นสุด</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>รายเดือน</th>
                                    <th>รายปี</th>
                                    <th>วันที่เริ่ม</th>
                                    <th>วันที่สิ้นสุด</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>
                                        100,000 - 10,000,000 : MLR -1.50 <br>
                                        10,000,000 - 20,000,000 : MLR -1.25 <br>
                                        20,000,000 - 999,999,999 : MLR -1.00 
                                    </td>
                                    <td>
                                        100,000 - 10,000,000 : MLR -0.50 <br>
                                        10,000,000 - 20,000,000 : MLR -0.25 <br>
                                        20,000,000 - 999,999,999 : MLR 
                                    </td>
                                    <td>01/01/2019</td>
                                    <td>31/12/2019</td>
                                </tr>
                                <tr>
                                    <td>
                                        100,000 - 10,000,000 : MLR -1.75 <br>
                                        10,000,000 - 20,000,000 : MLR -1.50 <br>
                                        20,000,000 - 999,999,999 : MLR -1.25 
                                    </td>
                                    <td>
                                        100,000 - 10,000,000 : MLR -0.50 <br>
                                        10,000,000 - 20,000,000 : MLR -0.25 <br>
                                        20,000,000 - 999,999,999 : MLR 
                                    </td>
                                    <td>01/01/2018</td>
                                    <td>31/12/2018</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
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
            <button type="button" class="btn bg-grey  waves-effect" onclick='window.location.href = "interestlist.php?menuname=setting&menulv=interestlist";'>ตกลง</button>
        </div>
        </div>
    </div>
</div>


</body>

</html>