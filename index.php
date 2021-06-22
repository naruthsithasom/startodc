<php
    $con=mysqli_connect('43.229.78.39','root','',3306);
    $query="select from store_rdc";
    $result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ระบบ  STAR TO DC</title>
    <!-- Favicon-->
    <link rel="icon" href="frontend/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="frontend/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="frontend/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="frontend/plugins/animate-css/animate.css" rel="stylesheet" />
    

    <!-- Custom Css -->
    <link href="frontend/css/style.css" rel="stylesheet">
    <link href="frontend/css/custom.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>เข้าสู่ระบบ</b></a>
            <small>ระบบ  STAR TO DC</small>
        </div>
        <div class="card">
            <div class="body">
                    <div class="msg">กรุณากรอกรหัสพนักงาน และรหัสผ่านของคุณ</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="รหัสพนักงาน" autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน">
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-xs-12">
                            <button class="btn btn-block btn-lg bg-green waves-effect">เข้าสู่ระบบ</button>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>

   

    <!-- Jquery Core Js -->
    <script src="frontend/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="frontend/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="frontend/plugins/node-waves/waves.js"></script>

    <!-- nvaridate Js -->
    <script src="frontend/plugins/nvaridate/js/nvaridation.js"></script>

    <!-- Custom Js -->
    <script src="frontend/js/admin.js"></script>
</body>

<script>
    $('.btn').click(function() {
        // window.location.href = "creditor/creditor_list.php?menuname=creditor&menulv=creditor_list";
        window.location.href = "master/customer.php?menuname=master&menulv=customer";
    });
</script>

</html>