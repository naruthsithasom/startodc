<!DOCTYPE html>
<html>

<?php include '../inc/header.php'; ?>


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
                <a class="navbar-brand" href="#">STAR TO DC </a>
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
        <?php include '../inc/menu.php'; ?>
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
                                Order Management
                            </h2>

                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-4 text-right"><label for="">Customer Group</label></div>
                                <div class="col-lg-4 text-left">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="accesstype" id="" class="form-control accesstypeval">
                                                <option value="1">บริษัท</option>
                                                <option value="2">หจก.</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-center"></div>
                            </div>
                            <div class="w-100"></div>
                            <div class="row">
                                <div class="col-lg-4 text-right"><label for="">Customer Code</label></div>
                                <div class="col-lg-4 text-left">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="accesstype" id="" class="form-control accesstypeval">
                                                <option value="1">A001</option>
                                                <option value="2">A002</option>
                                                <option value="3">A003</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-center"></div>
                            </div>
                            <div class="w-100"></div>
                            <div class="row">
                                <div class="col-lg-4 text-right"><label for="">Delivery Request Date</label></div>
                                <div class="col-lg-4 text-left">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <label for=""></label>
                                            <input type="text" class="form-control datepicker" data-dtp="dtp_mFgL5" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-center"></div>
                            </div>
                            <div class="w-100"></div>
                            <div class="row">
                                <div class="col-lg-4 text-right"><label for="">Shipment Type</label></div>
                                <div class="col-lg-4 text-left">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="accesstype" id="" class="form-control accesstypeval">
                                                <option value="1">Direct-FTL</option>
                                                <option value="2">Direct-LTL</option>
                                                <option value="3">Console-Collection</option>
                                                <option value="4">Console-Share Service</option>
                                                <option value="5">Linehaul-RDC (เฉพาะรถที่ออกจาก สาย5)</option>
                                                <option value="6">Linehaul-Multiple Destination (เฉพาะรถที่ออกจาก สาย5)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-center"></div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Do No.</th>
                                            <th>Customer</th>
                                            <th>Origin</th>
                                            <th>Destination</th>
                                            <th>Quanlity</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                                                </div>
                                            </td>
                                            <td>DO001</td>
                                            <td>A001</td>
                                            <td>Bang Bon</td>
                                            <td>Tesco WNDC</td>
                                            <td>1500</td>
                                            <td>150</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                                                </div>
                                            </td>
                                            <td>DO002</td>
                                            <td>A002</td>
                                            <td>Bang Bon</td>
                                            <td>Tesco WNDC</td>
                                            <td>1500</td>
                                            <td>150</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                                                </div>
                                            </td>
                                            <td>DO003</td>
                                            <td>A003</td>
                                            <td>Bang Bon</td>
                                            <td>Tesco WNDC</td>
                                            <td>1500</td>
                                            <td>150</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-2"></div>
                            <div class="text-right">
                                <span>Sum Weight = 3000 Kg.</span>
                                <span>um Quantity = 300 CTNS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer text-right">
                <button class="btn bg-blue waves-effect" data-toggle="modal" data-target="#savesuccess">Next</button>
                <!-- <button class="btn bg-red   waves-effect" data-toggle="modal" data-target="#notbreaking">Cancel</button>
              <button class="btn bg-grey  waves-effect" data-toggle="modal" data-target="#notbreaking">Next</button> -->
            </div>
        </div>




    </section>


    <?php include '../inc/script.php'; ?>

    <!-- Modal -->
    <div class="modal fade alertmodel" id="notbreaking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <i class="material-icons">report</i>
                    <p>ไม่สามารถบันทึกข้อมูลได้ เพนื่องจากต้นทุนรวมสูงกว่ามูลค่าตั๋ว</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-grey  waves-effect" data-dismiss="modal">แก้ไขข้อมูล</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade alertmodel" id="savesuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <i class="material-icons col-green">check_circle</i>
                    <p>Job No. G-0000-0001</p>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                 <td>Origin:</td>
                                <td>Bang Bon</td>
                             </tr>
                            <tr>
                                 <td>Destination:</td>
                                <td>Tesco WNDC</td>
                             </tr>
                            <tr>
                                 <td>Do Count:</td>
                                <td>2</td>
                             </tr>
                            <tr>
                                 <td>Sum Weight:</td>
                                <td>3000 Kg.</td>
                             </tr>
                            <tr>
                                 <td>Sum Quantity:</td>
                                <td> 300 CTN</td>
                             </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-green  waves-effect" onclick='window.location.href = "booking_job.php?menuname=module&menulv=booking_job";'>ตกลง</button>
                    <button type="button" class="btn bg-grey  waves-effect" onclick="window.location.reload();">กลับ</button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>