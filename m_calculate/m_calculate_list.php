
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
                        ดูรายการดอกเบี้ย
                    </h2>
                    
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>งวดดอกเบี้ยประจำวันที่</th>
                                    <th>จำนวนเอกสารเงินกู้</th>
                                    <th>รวมดอกเบี้ย</th>
                                    <th>รวมภาษีที่</th>
                                    <th>สุทธิ์</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>งวดดอกเบี้ยประจำวันที่</th>
                                    <th>จำนวนเอกสารเงินกู้</th>
                                    <th>รวมดอกเบี้ย</th>
                                    <th>รวมภาษีที่</th>
                                    <th>สุทธิ์</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td><a href="m_calculatereport.php?menuname=m_calculate&menulv=m_calculate_list" target="_blank">15/03/2020 - 15/04/2020</a></td>
                                    <td>20</td>
                                    <td>531,000</td>
                                    <td>3,500</td>
                                    <td>534,500</td>
                                    <td><button class="btn bg-red waves-effect" data-toggle="modal" data-target="#savesuccess ">ยกเลิกงวดนี้</button></td>
                                </tr>
                                <tr>
                                    <td><a href="m_calculatereport.php?menuname=m_calculate&menulv=m_calculate_list" target="_blank">15/02/2020 - 15/03/2020</a></td>
                                    <td>19</td>
                                    <td>500,000</td>
                                    <td>2,500</td>
                                    <td>525,000</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="m_calculatereport.php?menuname=m_calculate&menulv=m_calculate_list" target="_blank">15/01/2020 - 15/02/2020</a></td>
                                    <td>19</td>
                                    <td>500,000</td>
                                    <td>2,500</td>
                                    <td>525,000</td>
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