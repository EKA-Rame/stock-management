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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">ระบบจัดการสินค้า</a></li>
                                    <li class="breadcrumb-item active">สินค้าและผลิตภัณฑ์</li>
                                </ol>
                            </div>
                            <h4 class="page-title">สินค้า</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <a href="javascript:void(0);" class="btn btn-danger mb-2" data-toggle="modal" data-target="#products-add-modal"><i class="mdi mdi-plus-circle mr-2"></i> เพิ่มสินค้า</a>
                                    </div>
                                </div>

                                <!-- SignIn modal content -->
                                <div id="products-add-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <?php include 'products-add-modal.php';?>
                                </div><!-- /.modal -->

                                <div class="table-responsive">
                                    <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                        <thead class="thead-light">
                                        <tr>
                                            <th class="all" style="width: 20px;">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th class="all">สินค้า</th>
                                            <th>หมวดหมู่สินค้า</th>
                                            <th>ราคาซื้อ</th>
                                            <th>ราคาขาย</th>
                                            <th>จำนวน</th>
                                            <th>สถานะ</th>
                                            <th style="width: 85px;">Action</th>
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
                                                <img src="<?= base_url();?>assets/images/products/woonsen-kilen200g.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                                <p class="m-0 d-inline-block align-middle font-16">
                                                    <a href="apps-ecommerce-products-details.html" class="text-body">วุ้นเส้นกิเลนคู่ 200 กรัม</a>
                                                    <br/>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                </p>
                                            </td>
                                            <td>
                                                เส้น
                                            </td>
                                            <td>
                                                $10
                                            </td>
                                            <td>
                                                $20
                                            </td>

                                            <td>
                                                100
                                            </td>
                                            <td>
                                                <span class="badge badge-success">พร้อมส่ง</span>
                                            </td>

                                            <td class="table-action">
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                    <label class="custom-control-label" for="customCheck8">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="<?= base_url();?>assets/images/products/nurse-toful.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                                <p class="m-0 d-inline-block align-middle font-16">
                                                    <a href="apps-ecommerce-products-details.html" class="text-body">เต้าหู้ไข่ตรานางพยาบาล</a>
                                                    <br/>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                </p>
                                            </td>
                                            <td>
                                                เต้าหู้
                                            </td>
                                            <td>
                                                $5.50
                                            </td>
                                            <td>
                                                $10
                                            </td>
                                            <td>
                                                5
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">ใกล้หมด</span>
                                            </td>

                                            <td class="table-action">
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->


<!-- Right Sidebar -->
<div class="right-bar">

    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="dripicons-cross noti-icon"></i>
        </a>
        <h5 class="m-0">Settings</h5>
    </div>

    <div class="slimscroll-menu rightbar-content">

        <!-- Settings -->
        <hr class="mt-0" />
        <h5 class="pl-3">Basic Settings</h5>
        <hr class="mb-0" />

        <div class="p-3">
            <div class="custom-control custom-checkbox mb-2">
                <input type="checkbox" class="custom-control-input" id="notifications-check" checked>
                <label class="custom-control-label" for="notifications-check">Notifications</label>
            </div>

            <div class="custom-control custom-checkbox mb-2">
                <input type="checkbox" class="custom-control-input" id="api-access-check">
                <label class="custom-control-label" for="api-access-check">API Access</label>
            </div>

            <div class="custom-control custom-checkbox mb-2">
                <input type="checkbox" class="custom-control-input" id="auto-updates-check" checked>
                <label class="custom-control-label" for="auto-updates-check">Auto Updates</label>
            </div>

            <div class="custom-control custom-checkbox mb-2">
                <input type="checkbox" class="custom-control-input" id="online-status-check" checked>
                <label class="custom-control-label" for="online-status-check">Online Status</label>
            </div>

            <div class="custom-control custom-checkbox mb-2">
                <input type="checkbox" class="custom-control-input" id="auto-payout-check">
                <label class="custom-control-label" for="auto-payout-check">Auto Payout</label>
            </div>

        </div>


        <!-- Timeline -->
        <hr class="mt-0" />
        <h5 class="pl-3">Recent Activity</h5>
        <hr class="mb-0" />
        <div class="pl-2 pr-2">
            <div class="timeline-alt">
                <div class="timeline-item">
                    <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                    <div class="timeline-item-info">
                        <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                        <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                        <p class="mb-0 pb-2">
                            <small class="text-muted">5 minutes ago</small>
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                    <div class="timeline-item-info">
                        <a href="#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
                        <small>Dave Gamache added
                            <span class="font-weight-bold">Admin Dashboard</span>
                        </small>
                        <p class="mb-0 pb-2">
                            <small class="text-muted">30 minutes ago</small>
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                    <div class="timeline-item-info">
                        <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
                        <small>Send you message
                            <span class="font-weight-bold">"Are you there?"</span>
                        </small>
                        <p class="mb-0 pb-2">
                            <small class="text-muted">2 hours ago</small>
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                    <div class="timeline-item-info">
                        <a href="#" class="text-primary font-weight-bold mb-1 d-block">Audrey Tobey</a>
                        <small>Uploaded a photo
                            <span class="font-weight-bold">"Error.jpg"</span>
                        </small>
                        <p class="mb-0 pb-2">
                            <small class="text-muted">14 hours ago</small>
                        </p>
                    </div>
                </div>

                <div class="timeline-item">
                    <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                    <div class="timeline-item-info">
                        <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                        <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                        <p class="mb-0 pb-2">
                            <small class="text-muted">1 day ago</small>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="rightbar-overlay"></div>
<!-- /Right-bar -->


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
