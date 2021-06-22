<!DOCTYPE html>
<html>

<?php include '../inc/header.php'; ?>

<body class="theme-red">
    <?php
    /*
    $conn = new mysqli('43.229.78.39', 'dean', 'zdean_star2dc', 'zdean_star2dc', 3306);
    $conn->query("set names utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM store_branch ";
    $result = $conn->query($sql);
    */
    ?>
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
                <a class="navbar-brand" href="#">STAR TO DC</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"></a>
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
                            <h2>Import DO</h2>
                        </div>
                        <div class="body">
                            <div class=""> <input type="file" value=".csv" /></div>
                            <br />
                            <div class="table-responsive ">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th style="width: 10%;">DO</th>
                                            <th style="width: 10%;">Customer code</th>
                                            <th style="width: 30%;">Company name</th>
                                            <th style="width: 10%;">Order</th>
                                            <th style="width: 5%;">Action</th>
                                            <th style="width: 5%;">สถานะ</th>
                                            <!-- <th style="width: 5%;"></th>
                                            <th style="width: 5%;"></th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr >
                                            <td>DO001</td>
                                            <td>ZI91</td>
                                            <td>บริษัท กีโต้ (ประเทศไทย) จำกัด (MK)</td>
                                            <td>Order01</td>
                                            <td><button onclick="window.location.href = 'list_do.php?menuname=customer&menulv=list_do'" class="btn bg-orange waves-effect">Select</button></td>
                                             <td class="col-green font-bold">ยืนยันแล้ว</td>
                                            <!-- <td><button class="btn bg-blue waves-effect" data-toggle="modal" data-target="#savesuccess">Confirm</button></td> -->
                                             <!-- <td><button class="btn bg-red waves-effect" data-toggle="modal" data-target="# ">Cancel</button></td> -->
                                        </tr>
                                        <tr>
                                            <td>DO002</td>
                                            <td>A002</td>
                                            <td>บริษัท ดีพาส เดคคอน จำกัด</td>
                                            <td>Order02</td>
                                            <td><button onclick="window.location.href = 'list_do.php?menuname=customer&menulv=list_do'" class="btn bg-orange waves-effect">Select</button></td>
                                             <td class="col-green font-bold">ยืนยันแล้ว</td>
                                            <!-- <td><button class="btn bg-blue waves-effect" data-toggle="modal" data-target="#savesuccess">Confirm</button></td> -->
                                             <!-- <td><button class="btn bg-red waves-effect" data-toggle="modal" data-target="# ">Cancel</button></td> -->
                                        </tr>
                                        <tr>
                                            <td>DO003</td>
                                            <td>XU19</td>
                                            <td>บริษัท ครัวนภัส มาร์เก็ตติ้ง จำกัด</td>
                                            <td>Order03</td>
                                            <td><button onclick="window.location.href = 'list_do.php?menuname=customer&menulv=list_do'" class="btn bg-orange waves-effect">Select</button></td>
                                             <td class="col-red font-bold">รอยืนยัน</td>
                                            <!-- <td><button class="btn bg-blue waves-effect" data-toggle="modal" data-target="#savesuccess">Confirm</button></td> -->
                                             <!-- <td><button class="btn bg-red waves-effect" data-toggle="modal" data-target="# ">Cancel</button></td> -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <!-- <input type="hidden" name="" id="total">
                <button class="btn bg-green btn-lg  waves-effect savebreaking">Comfirm</button>
                <button class="btn bg-grey btn-lg  waves-effect">Cancel</button> -->
            </div>
        </div>
    </section>



    <?php include '../inc/script.php'; ?>

    <!-- Modal -->
    <div class="modal fade alertmodel" id="savesuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <i class="material-icons col-green">check_circle</i>
                    <p>file has been successfully  </p>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn bg-grey  waves-effect" onclick='window.location.href = "#";'>OK</button> -->
                    <button type="button" class="btn bg-grey  waves-effect" onclick='window.location.href = "add_do.php?menuname=customer&menulv=add_do";'>OK</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>