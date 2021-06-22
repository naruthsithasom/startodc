
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
                        รวมเอกสารเงินกู้
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
                    <div class="row clearfix po_relative">
                        <div class="col-xs-6">
                            <h3>เอกสารเงินกู้ที่มีอยู่</h3>
                            <div class="dataframe selectdata">
                                <div class="dataframe_search">
                                    <div>
                                        <label for="">หมายเลขเอกสาร</label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                    <div>
                                        <label for="">จำนวนเงิน</label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="dataframe_head">
                                    <div class="row">
                                        <div class="col-xs-3"><b>หมายเลขเอกสาร</b></div>
                                        <div class="col-xs-3"><b>จำนวนเงิน</b></div>
                                        <div class="col-xs-3"><b></b></div>
                                        <div class="col-xs-3"><b></b></div>
                                    </div>
                                </div>
                                <div class="dataframe_body" style="display: none;">
                                    <div class="row">
                                        <div class="col-xs-3"><span>1M00119001</span></div>
                                        <div class="col-xs-3"><span>1000,000</span></div>
                                        <div class="col-xs-3"><b></b></div>
                                        <div class="col-xs-3">
                                            <button class="btn bg-light-blue waves-effect" id="RS0001">เลือก</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="dataframe_body"  style="display: none;">
                                    <div class="row">
                                        <div class="col-xs-3"><span>1M00119002</span></div>
                                        <div class="col-xs-3"><span>800,000</span></div>
                                        <div class="col-xs-3"><b></b></div>
                                        <div class="col-xs-3">
                                            <button class="btn bg-light-blue waves-effect" id="RS0002">เลือก</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="dataframe_body">
                                    <div class="row">
                                        <div class="col-xs-3"><span>1M00119003</span></div>
                                        <div class="col-xs-3"><span>800,000</span></div>
                                        <div class="col-xs-3"><b></b></div>
                                        <div class="col-xs-3">
                                            <button class="btn bg-light-blue waves-effect" id="RS0003">เลือก</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="dataframe_body">
                                    <div class="row">
                                        <div class="col-xs-3"><span>1M00119004</span></div>
                                        <div class="col-xs-3"><span>500,000</span></div>
                                        <div class="col-xs-3"><b></b></div>
                                        <div class="col-xs-3">
                                            <button class="btn bg-light-blue waves-effect" id="RS0004">เลือก</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="dataframe_body">
                                    <div class="row">
                                        <div class="col-xs-3"><span>1M00119005</span></div>
                                        <div class="col-xs-3"><span>500,000</span></div>
                                        <div class="col-xs-3"><b></b></div>
                                        <div class="col-xs-3">
                                            <button class="btn bg-light-blue waves-effect" id="RS0005">เลือก</button>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        
                        <div class="col-xs-6">
                            <h3>รายการเอกสารที่เลือก</h3>
                            <div class="dataframe dataselect">
                                <div class="dataframe_search">
                                    <div>
                                        <label for="">เอกสารรวม</label>
                                        <b class="w_total">2</b>
                                        <label for="">ใบ</label>
                                    </div>
                                    <div>
                                        <b>&nbsp;&nbsp;|&nbsp;&nbsp;</b>
                                    </div>
                                    <div>
                                        <label for="">จำนวนเงินที่รวม</label>
                                        <b>1,500,000</b>
                                        <label for="">บาท</label>
                                    </div>
                                </div>
                                <div class="dataframe_head">
                                    <div class="row">
                                        <div class="col-xs-3"><b>หมายเลขเอกสาร</b></div>
                                        <div class="col-xs-3"><b>จำนวนเงิน</b></div>
                                        <div class="col-xs-3"><b></b></div>
                                        <div class="col-xs-3"><b></b></div>
                                    </div>
                                </div>
                                <span class="dataframe_none" style="display: none;"><i class="material-icons">arrow_back</i> กรุณาเลือกเอกสารที่ต้องการรวม</span>
                                <div class="dataframe_body show">
                                    <div class="row">
                                        <div class="col-xs-3"><span>1M00119001</span></div>
                                        <div class="col-xs-3"><span>1,000,000</span></div>
                                        <div class="col-xs-3"><b></b></div>
                                        <div class="col-xs-3">
                                            <button class="btn bg-red waves-effect" title="RS0001">ลบ</button>
                                        </div>
                                        <input type="hidden" name="" value="1">
                                    </div>
                                </div>
                                <div class="dataframe_body show" >
                                    <div class="row">
                                        <div class="col-xs-3"><span>1M00119002</span></div>
                                        <div class="col-xs-3"><span>500,000</span></div>
                                        <div class="col-xs-3"><b></b></div>
                                        <div class="col-xs-3">
                                            <button class="btn bg-red waves-effect" title="RS0002">ลบ</button>
                                        </div>
                                        <input type="hidden" name="" value="1">
                                    </div>
                                </div>
                                <div class="dataframe_body">
                                    <div class="row">
                                        <div class="col-xs-3"><span>1M00119003</span></div>
                                        <div class="col-xs-3"><span>500,000</span></div>
                                        <div class="col-xs-3"><b></b></div>
                                        <div class="col-xs-3">
                                            <button class="btn bg-red waves-effect" title="RS0003">ลบ</button>
                                        </div>
                                        <input type="hidden" name="" value="1">
                                    </div>
                                </div>
                                <div class="dataframe_body">
                                    <div class="row">
                                        <div class="col-xs-3"><span>1M00119004</span></div>
                                        <div class="col-xs-3"><span>500,000</span></div>
                                        <div class="col-xs-3"><b></b></div>
                                        <div class="col-xs-3">
                                            <button class="btn bg-red waves-effect" title="RS0004">ลบ</button>
                                        </div>
                                        <input type="hidden" name="" value="1">
                                    </div>
                                </div>
                                <div class="dataframe_body">
                                    <div class="row">
                                        <div class="col-xs-3"><span>1M00119005</span></div>
                                        <div class="col-xs-3"><span>500,000</span></div>
                                        <div class="col-xs-3"><b></b></div>
                                        <div class="col-xs-3">
                                            <button class="btn bg-red waves-effect" title="RS0005">ลบ</button>
                                        </div>
                                        <input type="hidden" name="" value="1">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row clearfix po_relative">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <div class="form-line">
                                    <label for="">วันที่รวมเอกสาร</label>
                                    <input type="text" class="form-control datepicker" data-dtp="dtp_mFgL5" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>


                    </div>

                </div>

                <div class="footer text-center" id="bt" style="display:none">
                    <input type="hidden" name="" id="total">
                    <button class="btn bg-green btn-lg  waves-effect" data-toggle="modal" data-target="#savesuccess">รวมเอกสาร</button>
                    <button class="btn bg-grey btn-lg  waves-effect" onclick="window.history.back();">ย้อนกลับ</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

function showdetail(){
    $("#showdetail").show();
    $("#bt").show();
}

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
            <button type="button" class="btn bg-grey  waves-effect" onclick='window.location.href = "documents_list.php?menuname=documents&menulv=documents_list";'>ตกลง</button>
        </div>
        </div>
    </div>
</div>

</body>

</html>