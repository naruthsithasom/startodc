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
                Order Managment
              </h2>

            </div>
            <div class="body">
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
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                  <thead>
                    <tr>
                      <th>job No.</th>
                      <th>Origin</th>
                      <th>Destination</th>
                      <th>Weight(KGs)</th>
                      <th>Gross Weight(KGs)</th>
                      <th>Trunk Type</th>
                      <th>Status</th>
                      <th>Select</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>G-0000-0001</td>
                      <td>Bang bon</td>
                      <td>Tesco WNDC</td>
                      <td>4300</td>
                      <td>430</td>
                      <td>6W</td>
                      <td>Confirm</td>
                      <td>Blank</td>
                      <td> <button class="btn bg-blue waves-effect" data-toggle="modal" data-target="#numbercar">ทะเบียนรถ</button>
                      </td>
                      <!-- <td><button onclick="window.location.href = 'booking.php?menuname=module&menulv=booking'" class="btn bg-orange waves-effect">ทะเบียนรถ</button></td> -->
                    </tr>
                    <!-- <tr>
                      <td>G-0000-0002</td>
                                      <button class="btn bg-blue waves-effect" data-toggle="modal" data-target="#savesuccess">Next</button>

                       <td>AB123</td>
                      <td>ABC Product</td>
                      <td><button onclick="window.location.href = 'booking_add.php?menuname=module&menulv=booking_add'" class="btn bg-orange waves-effect">เลือก</button></td>
                    </tr>
                    <tr>
                      <td>G-0000-0003</td>
                      <td>AB123</td>
                      <td>ABC Product</td>
                      <td><button onclick="window.location.href = 'booking_add.php?menuname=module&menulv=booking_add'" class="btn bg-orange waves-effect">เลือก</button></td>
                    </tr> -->
                  </tbody>
                </table>
              </div>
            </div>
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


  <div class="modal fade alertmodel" id="numbercar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <td>Trunk Type:</td>
                <td>18W</td>
              </tr>
              <tr>
                <td>Condition:</td>
                <td>Side Curtin</td>
              </tr>
              <tr>
                <td>Plate No:</td>
                <td><select name="" id="">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                </select></td>
              </tr>
              <tr>
                <td>Driver Name:</td>
                <td><select name="" id="">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                </select></td>
              </tr>
              <tr>
                <td>Pickup Time:</td>
                <td><select name="" id="">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                </select></td>
              </tr>
       
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-green  waves-effect" onclick='window.location.href = "booking.php?menuname=module&menulv=booking";'>ตกลง</button>
          <button type="button" class="btn bg-grey  waves-effect" onclick="window.location.reload();">กลับ</button>
        </div>
      </div>
    </div>
  </div>

</body>

</html>