<!doctype html>
<html lang="en">

<head>
    <title>Order</title>
    <?php require('inc_header.php'); ?>

</head>

<body>
    <?php require('inc_navbar.php'); ?>
    <div class="wrapper">
        <div class="box1 ">
            <div class="my-3">
                <ul class="nav justify-content-end mx-3">
                    <li class="nav-item">
                        <i class="far fa-file-alt fa-2x"></i>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">ADMIN</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Menu 1</a></li>
                            <li><a class="dropdown-item" href="#">Menu 2</a></li>
                            <li><a class="dropdown-item" href="#">Menu 3</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="box2">
            <div class="box2-1 d-flex justify-content-between p-3 ">
                <h6> Oder List</h6>
                <p> ลูกค้า/list</p>
            </div>
            <div class="box2-2 px-3">
                <div class="d-flex justify-content-between mb-1">
                    <div>

                        <button type="button" class="btn-sm btn btn-outline-success">item1</button>
                        <button type="button" class="btn-sm btn btn-outline-primary">item2</button>
                        <button type="button" class="btn-sm btn btn-outline-danger">item3</button>
                        <button type="button" class="btn-sm btn btn-outline-secondary">upload</button>
                    </div>
                    <div>
                        <input type="text" class="border-1 " placeholder="ค้นหา" />
                        <input type="text" class="border-1 " placeholder="รายการสินค้า" />
                        <input type="date" class="border-1 " />
                    </div>
                </div>
                <table class="table table-borderless  bg-white m-0 p-0">
                    <thead class="text-center">
                        <tr class="bg-danger text-white">
                            <th scope="col">ลำดับ</th>
                            <th scope="col">รายการสินค้า</th>
                            <th scope="col">ปริมาณสินค้า</th>
                            <th scope="col">ว/ด/ป : เวลา</th>
                            <th scope="col">ดำเนินการ</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>123</td>
                            <td>xxxxxxxxx</td>
                            <td>xxxxxxxxx</td>
                            <td>xxxxxxxxx</td>
                            <td>
                                <button type="button" class="btn-sm btn btn-outline-secondary">แก้ไข</button>
                                <button type="button" class="btn-sm btn btn-outline-warning">ยกเลิกแจ้งส่งสินค้า</button>
                                <button type="button" class="btn-sm btn btn-outline-danger">ลบ</button>
                            </td>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td>xxxxxxxxx</td>
                            <td>xxxxxxxxx</td>
                            <td>xxxxxxxxx</td>
                            <td>
                                <button type="button" class="btn-sm btn btn-outline-secondary">แก้ไข</button>
                                <button type="button" class="btn-sm btn btn-outline-warning">ยกเลิกแจ้งส่งสินค้า</button>
                                <button type="button" class="btn-sm btn btn-outline-danger">ลบ</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="box2-3 px-3">
            </div>
        </div>
        <div class="box3">
            <div class="p-3  ">
                <p>2021 © OTS.</p>
            </div>
        </div>
    </div>
    <?php require('inc_footer.php'); ?>
</body>

</html>