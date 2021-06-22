<!DOCTYPE html>
<html>

<?php include '../inc/header.php'; ?>


<meta http-equiv=Content-Type content="text/html; charset=utf-8">

<body class="theme-red">
    <?php

    $conn = new mysqli('43.229.78.39', 'dean', 'zdean_star2dc', 'zdean_star2dc', 3306);
    $conn->query("set names utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM item_product ";
    $result = $conn->query($sql);

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
                                Product
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
                                            <th>ID</th>
                                             <!-- <th>ลูกค้า</th> -->
                                            <!-- <th>isActive</th> -->
                                            <th>Company</th>
                                            <!-- <th>ชื่อE</th> -->
                                            <!-- <th>Type</th> -->
                                            <!-- <th>Group</th> -->
                                            <th>Unit</th>
                                            <th>Weight</th>
                                            <th>Width</th>
                                            <th>Length</th>
                                            <th>Height</th>
                                            <th>Volume</th>
                                            <!-- <th>รูปภาพ</th> -->
                                            <th>price</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                <tr>
                                    <th>รหัสสมาชิก</th>
                                    <th>ชื่อ</th>
                                    <th>จำนวนเอกสารเงินกู้</th>
                                    <th>ให้กู้ในนาม</th>
                                    <th>ที่อยู่</th>
                                    <th>แก้ไขข้อมูล</th>
                                    <th>ดูสมาชิกในกลุ่ม</th>
                                    <th>สถานะ</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot> -->
                                    <tbody>
                                        <?php
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) { ?>
                                                <tr>
                                                    <td><?php echo $row['itemID']  ?></td>
                                                    <!-- <td><?php /*echo $row['itemProduct_itemCustomer	']  */?></td> -->
                                                    <!-- <td><?php /* echo $row['isActive'] */  ?></td> -->
                                                    <td><?php echo $row['itemCompany']  ?></td>
                                                    <!-- <td><?php /* echo $row['itemNameE']  */?></td> -->
                                                    <!-- <td><?php /* echo $row['itemType']  */?></td> -->
                                                    <!-- <td><?php /* echo $row['itemGroup'] */ ?></td> -->
                                                    <td><?php echo $row['itemUnit']  ?></td>
                                                    <td><?php echo $row['itemWeight']  ?></td>
                                                    <td><?php echo $row['itemWidth']  ?></td>
                                                    <td><?php echo $row['itemLength']  ?></td>
                                                    <td><?php echo $row['itemHeight']  ?></td>
                                                    <td><?php echo $row['itemVolume']  ?></td>
                                                    <!-- <td><?php /* echo $row['itemPhoto']  */?></td> -->
                                                    <td><?php echo $row['itemPrice']  ?></td>
                                                </tr>
                                        <?php }
                                        } ?>
                                        <?php $conn->close(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade veridcard_modal" id="showdocument" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mainfont" id="exampleModalLabel">ข้อมูลเอกสารเงินกู้</h5>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>รหัสเอกสาร</th>
                                    <th>จำนวนเงิน</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>รหัสเอกสาร</th>
                                    <th>จำนวนเงิน</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1M02564541156</td>
                                    <td>10,000,000</td>
                                </tr>
                                <tr>
                                    <td>1M02564541157</td>
                                    <td>1,000,000</td>
                                </tr>
                                <tr>
                                    <td>1M02564541158</td>
                                    <td>500,000</td>
                                </tr>
                                <tr>
                                    <td>1M02564541159</td>
                                    <td>900,000</td>
                                </tr>
                                <tr>
                                    <td>1M02564541160</td>
                                    <td>800,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-grey  waves-effect" onclick="window.location.reload();">ปิด</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade veridcard_modal" id="showgroup" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mainfont" id="exampleModalLabel">สมาชิกที่อยู่ในกลุ่มของเจ้าหนี้</h5>
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title mainfont text-center" id="exampleModalLabel">รูปแบบกลุ่มสมาชิก : ขอใช้ Rate พิเศษ</h5>
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>ชื่อ</th>
                                    <th>ระดับ</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ชื่อ</th>
                                    <th>ระดับ</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1.นาย ก</td>
                                    <td>หัวหน้ากลุ่ม</td>
                                </tr>
                                <tr>
                                    <td>2.นาย ข</td>
                                    <td>สมาชิก</td>
                                </tr>
                                <tr>
                                    <td>3.นาย ค</td>
                                    <td>สมาชิก</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-block  bg-orange waves-effect" onclick="window.location.href = 'creditor_group.php?menuname=creditor&menulv=creditor_group'">แก้ไขกลุ่ม</button>
                        <button type="button" class="btn bg-grey  waves-effect" onclick="window.location.reload();">ปิด</button>
                    </div>
                </div>
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
                    <p>ยกเลิกเจ้าหนี้ที่เลือกแล้ว</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-grey  waves-effect" onclick="window.location.reload();">ตกลง</button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>