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
        <?php include '../inc/menu.php'; ?>
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
                                DO00001
                            </h2>

                        </div>
                        <div class="body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>DO</th>
                                            <th>Customer Code</th>
                                            <th>Customer Name</th>
                                            <th>Order</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>G-xxxx-xxxx</td>
                                            <td>AB123</td>
                                            <td>ABC Product</td>
                                            <td>All</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                                    All
                                                </div>
                                                <div class="form-check ">
                                                    <input class="form-check-input " type="checkbox" value="" id="flexCheckChecked" >

                                                    Order 1
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"  >

                                                    Order 2
                                                </div>
                                                <div class="form-check ">
                                                    <input class="form-check-input " type="checkbox" value="" id="flexCheckChecked"  >

                                                    Order 3
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"  >

                                                    Order 4
                                                </div>
                                            </td>
                                            <td>15/06/2021</td>
                                            <td>10:00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="footer">
                            <input type="hidden" name="" id="total">
                            <button class="btn bg-green btn-lg  waves-effect savebreaking">บันทึกข้อมูล</button>
                            <button class="btn bg-grey btn-lg  waves-effect">ล้างข้อมูล</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>
            // $(document).ready(function() {
            //     $(".addbank").click(function() {
            //         $(this).parents(".card .body").append('<div class="row clearfix po_relative"><button class="floatbtn removebank"><i class="material-icons">remove_circle</i></button><div class="col-xs-3"><div class="input-group"><div class="form-line"><label for="">ชื่อบัญชี</label><input type="text" class="form-control" placeholder=""></div></div></div><div class="col-xs-3"><div class="input-group"><div class="form-line"><label for="">เลขที่บัญชี</label><input type="text" class="form-control" placeholder=""></div></div></div><div class="col-xs-3"><div class="input-group"><div class="form-line"><label for="">สาขา</label><select id="bankbranch" class="form-control"><option value="1">กทม.</option><option value="2">ตจว.</option></select></div></div></div><div class="col-xs-3"><div class="input-group"><div class="form-line"><label for="">ธนาคาร</label><select name="bank" id="" class="form-control"><option value="1">ธนาคารกสิกร</option><option value="2">ธนาคารกรุงเทพ</option></select></div></div></div>');

            //         $(".floatbtn.removebank").click(function() {
            //             $(this).parents(".po_relative").remove();
            //         });

            //         $('.savebreaking').click(function() {
            //             var costtotal = $('#total').val();
            //             if (costtotal > 500000) {
            //                 $('#notbreaking').modal('show')
            //             } else {
            //                 $('#savesuccess').modal('show')
            //             }
            //         });
            //     });
            // });
        </script>

    </section>



    <?php include '../inc/script.php'; ?>

    <!-- Modal -->
    <div class="modal fade alertmodel" id="savesuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <i class="material-icons col-green">check_circle</i>
                    <p>บันทึกข้อมูลสำเร็จ</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-grey  waves-effect" onclick='window.location.href = "booking.php?menuname=module&menulv=booking";'>ตกลง</button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>