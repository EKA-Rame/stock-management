<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url();?>assets/images/favicon.ico">

    <!-- third party css -->
    <link href="<?= base_url();?>assets/css/vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url();?>assets/css/vendor/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="<?= base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url();?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- Begin page -->
<div class="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu left-side-menu-light">
        <?php include 'side-menu.php';?>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <?php include 'top-bar.php';?>
            </div>
            <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">ระบบจัดการรายการจัดส่ง</a></li>
                                    <li class="breadcrumb-item active">รายการรอเรียกเก็บ</li>
                                </ol>
                            </div>
                            <h4 class="page-title">รายการรอเรียกเก็บ</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-centered mb-0">
                                        <thead class="thead-light">
                                        <tr>
                                            <th style="width: 20px;">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>ชื่อร้าน-ลูกค้า</th>
                                            <th>เริ่มวันที่ค้างชำระ</th>
                                            <th>สิ้นสุดวันค้างชำระ</th>
                                            <th>ยอดที่ค้างทั้งหมด</th>
                                            <th style="width: 125px;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                ร้าน ก
                                            </td>
                                            <td>
                                                August 05 2018
                                            </td>

                                            <td>
                                                August 05 2018
                                            </td>
                                            <td>
                                                $100
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-clipboard-text"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                ร้าน ข
                                            </td>
                                            <td>August 04 2018</td>

                                            <td>
                                                August 04 2018
                                            </td>
                                            <td>
                                                $1,458.50
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-clipboard-text"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                    <label class="custom-control-label" for="customCheck5">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                ร้าน ค
                                            </td>
                                            <td>August 03 2018</td>

                                            <td>
                                                August 03 2018
                                            </td>
                                            <td>
                                                $215
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-clipboard-text"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                    <label class="custom-control-label" for="customCheck6">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                ร้าน ง
                                            </td>
                                            <td>May 22 2018</td>

                                            <td>
                                                May 22 2018
                                            </td>
                                            <td>
                                                $2,514.50
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-clipboard-text"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2018 - 2019 © Hyper - Coderthemes.com
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-md-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
</div>
<!-- END wrapper -->

<!-- App js -->
<script src="<?= base_url();?>assets/js/app.min.js"></script>

<!-- third party js -->
<script src="<?= base_url();?>assets/js/vendor/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>assets/js/vendor/dataTables.bootstrap4.js"></script>
<script src="<?= base_url();?>assets/js/vendor/dataTables.responsive.min.js"></script>
<script src="<?= base_url();?>assets/js/vendor/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url();?>assets/js/vendor/dataTables.checkboxes.min.js"></script>

<!-- third party js ends -->

<!-- demo app -->
<script src="<?= base_url();?>assets/js/pages/demo.products.js"></script>
<!-- end demo js-->

</body>
</html>
