
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
                        ข้อมูลเอกสารเงินกู้
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
                                    <th>หมายเลขเอกสาร</th>
                                    <th>ประเภท</th>
                                    <th>ชื่อเจ้าหนี้</th>
                                    <th>จำนวนเงิน</th>
                                    <th>ประวัติการจ่ายดอกเบี้ย</th>
                                    <th>ชำระหนี้</th>
                                    <th>สถานะ</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>หมายเลขเอกสาร</th>
                                    <th>ประเภท</th>
                                    <th>ชื่อเจ้าหนี้</th>
                                    <th>จำนวนเงิน</th>
                                    <th>ประวัติการจ่ายดอกเบี้ย</th>
                                    <th>ชำระหนี้</th>
                                    <th>สถานะ</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td><a href="loanprint.php" target="_blank">1M00119001</a></td>
                                    <td>รายเดือน</td>
                                    <td>นาย ก</td>
                                    <td>5,000,000</td>
                                    <td><button onclick="window.location.href = 'loanhistory.php?menuname=documents&menulv=documents_list'" class="btn bg-blue waves-effect">ประวัติการจ่ายดอกเบี้ย</button></td>
                                    <td><button class="btn bg-orange waves-effect" data-toggle="modal" data-target="#showrefund ">ชำระหนี้</button></td>
                                    <td class="col-green font-bold">กำลังใช้งาน</td>
                                    <td><button class="btn bg-red waves-effect" data-toggle="modal" data-target="#showcancle ">ยกเลิกเอกสาร</button></td>
                                </tr>

                                
                                <tr>
                                    <td><a href="loanprint.php" target="_blank">1Y00119002</a></td>
                                    <td>รายปี</td>
                                    <td>นาย ก,ข,ค</td>
                                    <td>20,000,000</td>
                                    <td><button onclick="window.location.href = 'loanhistory.php?menuname=documents&menulv=documents_list'" class="btn bg-blue waves-effect">ประวัติการจ่ายดอกเบี้ย</button></td>
                                    <td><button class="btn bg-orange waves-effect" data-toggle="modal" data-target="#showrefund ">ชำระหนี้</button></td>
                                    <td class="col-green font-bold">กำลังใช้งาน</td>
                                    <td><button class="btn bg-red waves-effect" data-toggle="modal" data-target="#showcancle ">ยกเลิกเอกสาร</button></td>
                                </tr>
                                <tr>
                                    <td><a href="loanprint.php" target="_blank">1M00119000</a></td>
                                    <td>รายเดือน</td>
                                    <td>นาย ก</td>
                                    <td>1,000,000</td>
                                    <td><button onclick="window.location.href = 'loanhistory.php?menuname=documents&menulv=documents_list'" class="btn bg-blue waves-effect">ประวัติการจ่ายดอกเบี้ย</button></td>
                                    <td></td>
                                    <td class="col-red font-bold">ยกเลิกเอกสารแล้ว</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade veridcard_modal" id="showhisory" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mainfont" id="exampleModalLabel">ประวัติการจ่ายดอกเบี้ย</h5>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>วันที่</th>
                            <th>MLR</th>
                            <th>ดอกเบี้ย</th>
                            <th>ผู้ได้รับผลประโยชน์</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>วันที่</th>
                            <th>MLR</th>
                            <th>ดอกเบี้ย</th>
                            <th>ผู้ได้รับผลประโยชน์</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>15/02/2020</td>
                            <td>-1.25</td>
                            <td>5,000</td>
                            <td>นาย ก</td>
                        </tr>
                        <tr>
                            <td>15/03/2020</td>
                            <td>-1.25</td>
                            <td>5,000</td>
                            <td>นาย ก</td>
                        </tr>
                        <tr>
                            <td>15/04/2020</td>
                            <td>-1.00</td>
                            <td>6,000</td>
                            <td>นาย ก</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-grey  waves-effect" onclick="window.history.back();">ปิด</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade veridcard_modal" id="showrefund" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mainfont" id="exampleModalLabel">ชำระหนี้</h5>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <div class="form-line">
                    <label for="">จำนวนเงินที่จะชำระ</label>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                    <label for="">วันที่ชำระหนี้</label>
                    <input type="text" class="form-control datepicker" data-dtp="dtp_mFgL5" placeholder="">
                </div>
            </div>
        </div>
        <div class="modal-footer text-center">
            <button type="button" class="btn btn-lg btn-block  bg-green waves-effect" data-dismiss="modal" data-toggle="modal" data-target="#savesuccess ">บันทึกข้อมูล</button>
            <button type="button" class="link" data-dismiss="modal">ยกเลิก</button>
        </div>
        </div>
    </div>
</div>


<div class="modal fade veridcard_modal" id="showcancle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mainfont" id="exampleModalLabel">ยกเลิกเอกสาร</h5>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <div class="form-line">
                    <label for="">วันที่ยกเลิก</label>
                    <input type="text" class="form-control datepicker" data-dtp="dtp_mFgL5" placeholder="">
                </div>
            </div>
        </div>
        <div class="modal-footer text-center">
            <button type="button" class="btn btn-lg btn-block  bg-green waves-effect" data-dismiss="modal" data-toggle="modal" data-target="#savesuccess ">บันทึกข้อมูล</button>
            <button type="button" class="link" data-dismiss="modal">ยกเลิก</button>
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
            <button type="button" class="btn bg-grey  waves-effect" onclick='window.location.href = "documents_list.php?menuname=documents&menulv=documents_list";'>ตกลง</button>
        </div>
        </div>
    </div>
</div>


</body>

</html>