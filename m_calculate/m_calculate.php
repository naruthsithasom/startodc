
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
                        คำนวนดอกเบี้ย
                    </h2>
                    
                </div>
                <div class="body">
                    <div class="row clearfix po_relative">
                        <div class="col-xs-6">
                            <div class="input-group">
                                <div class="form-line">
                                    <label for="">คำนวณวันที่</label>
                                    <input type="text" class="form-control  datepicker" data-dtp="dtp_mFgL5" placeholder="" value="15/02/2020">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="input-group">
                                <div class="form-line">
                                    <label for="">ถึงวันที่</label>
                                    <input type="text" class="form-control  datepicker" data-dtp="dtp_mFgL5" placeholder="" value="15/03/2020">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <input type="hidden" name="" id="total">
                    <button class="btn bg-green btn-lg  waves-effect" data-toggle="modal" data-target="#savesuccess">คำนวนดอกเบี้ย</button>
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
            <button type="button" class="btn bg-grey  waves-effect" onclick='window.location.href = "m_calculate_list.php?menuname=m_calculate&menulv=m_calculate_list";'>ตกลง</button>
        </div>
        </div>
    </div>
</div>


</body>

</html>