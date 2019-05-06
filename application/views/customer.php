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
                                    <li class="breadcrumb-item active">ระบบจัดการลูกค้า</li>
                                </ol>
                            </div>
                            <h4 class="page-title">ลูกค้า</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-12">
                                        <a href="javascript:void(0);" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle mr-2"></i> เพิ่มลูกค้า</a>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-centered table-striped dt-responsive nowrap w-100" id="products-datatable">
                                        <thead>
                                        <tr>
                                            <th style="width: 20px;">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Customer</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Location</th>
                                            <th>Create Date</th>
                                            <th>Status</th>
                                            <th style="width: 75px;">Action</th>
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
                                            <td class="table-user">
                                                <img src="<?= base_url();?>assets/images/users/avatar-4.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body font-weight-semibold">Paul J. Friend</a>
                                            </td>
                                            <td>
                                                937-330-1634
                                            </td>
                                            <td>
                                                pauljfrnd@jourrapide.com
                                            </td>
                                            <td>
                                                New York
                                            </td>
                                            <td>
                                                07/07/2018
                                            </td>
                                            <td>
                                                <span class="badge badge-success-lighten">Active</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td class="table-user">
                                                <img src="<?= base_url();?>assets/images/users/avatar-3.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body font-weight-semibold">Bryan J. Luellen</a>
                                            </td>
                                            <td>
                                                215-302-3376
                                            </td>
                                            <td>
                                                bryuellen@dayrep.com
                                            </td>
                                            <td>
                                                New York
                                            </td>
                                            <td>
                                                09/12/2018
                                            </td>
                                            <td>
                                                <span class="badge badge-success-lighten">Active</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                    <label class="custom-control-label" for="customCheck4">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td class="table-user">
                                                <img src="<?= base_url();?>assets/images/users/avatar-3.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body font-weight-semibold">Kathryn S. Collier</a>
                                            </td>
                                            <td>
                                                828-216-2190
                                            </td>
                                            <td>
                                                collier@jourrapide.com
                                            </td>
                                            <td>
                                                Canada
                                            </td>
                                            <td>
                                                06/30/2018
                                            </td>
                                            <td>
                                                <span class="badge badge-danger-lighten">Blocked</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                    <label class="custom-control-label" for="customCheck5">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td class="table-user">
                                                <img src="<?= base_url();?>assets/images/users/avatar-1.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body font-weight-semibold">Timothy Kauper</a>
                                            </td>
                                            <td>
                                                (216) 75 612 706
                                            </td>
                                            <td>
                                                thykauper@rhyta.com
                                            </td>
                                            <td>
                                                Denmark
                                            </td>
                                            <td>
                                                09/08/2018
                                            </td>
                                            <td>
                                                <span class="badge badge-danger-lighten">Blocked</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                    <label class="custom-control-label" for="customCheck6">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td class="table-user">
                                                <img src="<?= base_url();?>assets/images/users/avatar-5.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body font-weight-semibold">Zara Raws</a>
                                            </td>
                                            <td>
                                                (02) 75 150 655
                                            </td>
                                            <td>
                                                austin@dayrep.com
                                            </td>
                                            <td>
                                                Germany
                                            </td>
                                            <td>
                                                07/15/2018
                                            </td>
                                            <td>
                                                <span class="badge badge-success-lighten">Active</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
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
