<aside id="leftsidebar" class="sidebar">

    <div class="menu">
        <ul class="list">

            <li class="<?= (($_GET['menuname'] == 'do') ? 'active' : '') ?>">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">view_list</i>
                    <span>Customer</span>
                </a>
                <ul class="ml-menu">
                    <li class="<?= (($_GET['menulv'] == 'add_do') ? 'active' : '') ?>">
                        <a href="../customer/add_do.php?menuname=customer&menulv=add_do">Import DO</a>
                    </li>
                </ul>
            </li>

            <li class="<?= (($_GET['menuname'] == 'master') ? 'active' : '') ?>">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">view_list</i>
                    <span>Master</span>
                </a>
                <ul class="ml-menu">
                    <li class="<?= (($_GET['menulv'] == 'customer') ? 'active' : '') ?>">
                        <a href="../master/customer.php?menuname=master&menulv=customer">Customer</a>
                    </li>
                    <li class="<?= (($_GET['menulv'] == 'product') ? 'active' : '') ?>">
                        <a href="../master/product.php?menuname=master&menulv=product">Product</a>
                    </li>
                    <li class="<?= (($_GET['menulv'] == 'branch') ? 'active' : '') ?>">
                        <a href="../master/branch.php?menuname=master&menulv=branch">Branch</a>
                    </li>
                    <li class="<?= (($_GET['menulv'] == 'rdc') ? 'active' : '') ?>">
                        <a href="../master/rdc.php?menuname=master&menulv=rdc">Center RDC</a>
                    </li>
                    <li class="<?= (($_GET['menulv'] == 'rdc_sub') ? 'active' : '') ?>">
                        <a href="../master/rdc_sub.php?menuname=master&menulv=rdc_sub">Sub RDC</a>
                    </li>
                    <li class="<?= (($_GET['menulv'] == 'trade') ? 'active' : '') ?>">
                        <a href="../master/trade.php?menuname=master&menulv=trade">Modern Trade</a>
                    </li>
                    <li class="<?= (($_GET['menulv'] == 'driver') ? 'active' : '') ?>">
                        <a href="../master/driver.php?menuname=master&menulv=driver">Driver</a>
                    </li>
                    <li class="<?= (($_GET['menulv'] == 'trunk') ? 'active' : '') ?>">
                        <a href="../master/trunk.php?menuname=master&menulv=trunk">Trunk</a>
                    </li>
                </ul>
            </li>

            <li class="<?= (($_GET['menuname'] == 'module') ? 'active' : '') ?>">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">view_list</i>
                    <span>Module</span>
                </a>
                <ul class="ml-menu">
                    <li class="<?= (($_GET['menulv'] == 'booking') ? 'active' : '') ?>">
                        <a href="../module/booking.php?menuname=module&menulv=booking">Confirm Booking</a>
                    </li>
                    <li class="<?= (($_GET['menulv'] == 'order') ? 'active' : '') ?>">
                        <a href="../module/order.php?menuname=module&menulv=order">Order Management</a>
                    </li>
                    <li class="<?= (($_GET['menulv'] == 'assignment') ? 'active' : '') ?>">
                        <a href="../module/assignment.php?menuname=module&menulv=assignment">Trunk Management</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>

    <!-- #Menu -->

</aside>