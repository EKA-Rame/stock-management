<div class="slimscroll-menu" id="left-side-menu-container">
    <br/>
    <!-- LOGO -->
    <a href="index.html" class="logo text-center">
                <span class="logo-lg">
                    <img src="<?= base_url();?>assets/images/r-tee-logo.png" alt="" height="150">
                </span>
    </a>

    <!--- Sidemenu -->
    <ul class="metismenu side-nav side-nav-light">

        <li class="side-nav-item">
            <a href="<?php echo site_url('home') ?>" class="side-nav-link">
                <i class="mdi mdi-home mdi-24px"></i>
                <span> หน้าหลัก </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="mdi mdi-clipboard-text mdi-24px"></i>
                <span> ระบบจัดการรายการ </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-third-level" aria-expanded="false">
                <li>
                    <a href="<?php echo site_url('order') ?>">
                        <i class="mdi mdi-calendar-text mdi-18px"></i>
                        ทำรายการใหม่
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('waitingForPayment') ?>">
                        <i class="mdi mdi-calendar-today mdi-18px"></i>
                        รายการรอเรียกเก็บ
                    </a>
                </li>
            </ul>
        </li>

        <li class="side-nav-item">
            <a href="<?php echo site_url('products') ?>" class="side-nav-link">
                <i class="mdi mdi-barcode-scan mdi-24px"></i>
                <span> ระบบจัดการสินค้า </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="<?php echo site_url('customer') ?>" class="side-nav-link">
                <i class="mdi mdi-account-card-details mdi-24px"></i>
                <span> ระบบจัดการลูกค้า </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="<?php echo site_url('employee') ?>" class="side-nav-link">
                <i class="mdi mdi-account-multiple mdi-24px"></i>
                <span> ระบบจัดการบุคลากร </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="<?php echo site_url('income') ?>" class="side-nav-link">
                <i class="mdi mdi-cart-plus mdi-24px"></i>
                <span> ระบบจัดการรายรับ </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="<?php echo site_url('outcome') ?>" class="side-nav-link">
                <i class="mdi mdi-cart-minus mdi-24px"></i>
                <span> ระบบจัดการรายจ่าย </span>
            </a>
        </li>
    </ul>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>