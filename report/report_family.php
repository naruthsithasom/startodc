
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
                        รายงานสรุปรวมรายบุคคล/ครอบครัว
                    </h2>
                    
                </div>
                <form action="https://easymoneydev.com/prototype/pn/report/reportloanexport" method="post">
                <div class="body">
                    <div class="row clearfix po_relative">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <div class="form-line">
                                    <label for="">เจ้าหนี้</label>
                                    <select id="name" class="form-control">
                                        <option value="1">นาย ก</option>
                                        <option value="2">นาย ข</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix po_relative">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <div class="form-line">
                                    <label for="">รูปแบบรายงาน</label>
                                    <select id="name" class="form-control">
                                        <option value="1">รายบุคคล</option>
                                        <option value="2">รายครอบครัว</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <button class="btn bg-green btn-lg  waves-effect">ออกรายงาน</button>
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