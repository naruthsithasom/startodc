
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
                        ประวัติการจ่ายดอกเบี้ย
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
                                    <th>วันที่</th>
                                    <th>MLR</th>
                                    <th>อัตราดอกเบี้ย</th>
                                    <th>ดอกเบี้ย</th>
                                    <th>ภาษี</th>
                                    <th>สุทธิ</th>
                                    <th>ผู้ได้รับผลประโยชน์</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>วันที่</th>
                                    <th>MLR</th>
                                    <th>อัตราดอกเบี้ย</th>
                                    <th>ดอกเบี้ย</th>
                                    <th>ภาษี</th>
                                    <th>สุทธิ</th>
                                    <th>ผู้ได้รับผลประโยชน์</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>15/02/2020</td>
                                    <td>-1.25</td>
                                    <td>5.00%</td>
                                    <td>5,000</td>
                                    <td>100</td>
                                    <td>5,100</td>
                                    <td>นาย ก</td>
                                </tr>
                                <tr>
                                    <td>15/03/2020</td>
                                    <td>-1.25</td>
                                    <td>5.00%</td>
                                    <td>5,000</td>
                                    <td>100</td>
                                    <td>5,100</td>
                                    <td>นาย ก</td>
                                </tr>
                                <tr>
                                    <td>15/04/2020</td>
                                    <td>-1.00</td>
                                    <td>5.25%</td>
                                    <td>6,000</td>
                                    <td>150</td>
                                    <td>6,150</td>
                                    <td>นาย ก</td>
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

</body>

</html>