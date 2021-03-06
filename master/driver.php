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

    $sql = "SELECT * FROM transportation_driver ";
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
                                Driver
                            </h2>

                        </div>
                        <div class="body">
                            <div class="floatbox">
                                <button class="btn bg-green btn-block waves-effect" data-toggle="modal" data-target="#to_sellconfirm">?????????????????????????????? <b>0</b> ??????????????????</button>
                                <button class="btn bg-red btn-block waves-effect" onclick="location.reload();">??????????????????</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID driver</th>
                                            <th>Name</th>
                                            <th>ID card</th>
                                            <th>License</th>
                                            <th>Type</th>
                                            <th>EXP</th>
                                             <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>??????????????????????????????</th>
                                            <th>????????????</th>
                                            <th>??????????????????????????????????????????????????????</th>
                                            <th>?????????????????????????????????</th>
                                            <th>?????????????????????</th>
                                            <th>?????????????????????????????????</th>
                                            <th>?????????????????????????????????????????????</th>
                                            <th>???????????????</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <?php
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) { ?>
                                                <tr>
                                                    <td><?php echo $row['id']  ?></td>
                                                    <td><?php echo $row['name']  ?></td>
                                                    <td><?php echo $row['idCard']  ?></td>
                                                    <td><?php echo $row['idLicense']  ?></td>
                                                    <td><?php echo $row['typeLicense']  ?></td>
                                                    <td><?php echo $row['expLicense']  ?></td>
                                                    <td><?php echo $row['note']  ?></td>
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
                        <h5 class="modal-title mainfont" id="exampleModalLabel">?????????????????????????????????????????????????????????</h5>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>??????????????????????????????</th>
                                    <th>???????????????????????????</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>??????????????????????????????</th>
                                    <th>???????????????????????????</th>
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
                        <button type="button" class="btn bg-grey  waves-effect" onclick="window.location.reload();">?????????</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade veridcard_modal" id="showgroup" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mainfont" id="exampleModalLabel">?????????????????????????????????????????????????????????????????????????????????????????????</h5>
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title mainfont text-center" id="exampleModalLabel">??????????????????????????????????????????????????? : ??????????????? Rate ???????????????</h5>
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>????????????</th>
                                    <th>???????????????</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>????????????</th>
                                    <th>???????????????</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1.????????? ???</td>
                                    <td>????????????????????????????????????</td>
                                </tr>
                                <tr>
                                    <td>2.????????? ???</td>
                                    <td>??????????????????</td>
                                </tr>
                                <tr>
                                    <td>3.????????? ???</td>
                                    <td>??????????????????</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-block  bg-orange waves-effect" onclick="window.location.href = 'creditor_group.php?menuname=creditor&menulv=creditor_group'">??????????????????????????????</button>
                        <button type="button" class="btn bg-grey  waves-effect" onclick="window.location.reload();">?????????</button>
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
                    <p>???????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-grey  waves-effect" data-dismiss="modal">?????????????????????????????????</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade alertmodel" id="savesuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <i class="material-icons col-green">check_circle</i>
                    <p>??????????????????????????????????????????????????????????????????????????????</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-grey  waves-effect" onclick="window.location.reload();">????????????</button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>