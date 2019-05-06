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
                                    <li class="breadcrumb-item active">ทำรายการใหม่</li>
                                </ol>
                            </div>
                            <h4 class="page-title">ระบบจัดการรายการจัดส่ง</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-lg-8">
                                        <form class="form-inline">
                                            <div class="form-group mx-sm-3 mb-2">
                                                <label for="status-select" class="mr-2">เดือน</label>
                                                <select class="custom-select" id="status-select">
                                                    <option selected>เลือกเดือนที่ต้องการค้นหา</option>
                                                    <option value="1">มกราตม</option>
                                                    <option value="2">กุมภาพันธ์</option>
                                                    <option value="3">มีนาคม</option>
                                                    <option value="4">เมษายน</option>
                                                    <option value="5">พฤษภาคม</option>
                                                    <option value="6">มิถุนายน</option>
                                                    <option value="7">กรกฎาคม</option>
                                                    <option value="8">สิงหาคม</option>
                                                    <option value="9">กันยายน</option>
                                                    <option value="10">ตุลาคม</option>
                                                    <option value="11">พฤศจิกายน</option>
                                                    <option value="12">ธันวาคม</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="text-lg-right">
                                            <button type="button" class="btn btn-danger mb-2 mr-2"><i class="mdi mdi-basket mr-1"></i> เพิ่มรายการใหม่</button>
                                        </div>
                                    </div><!-- end col-->
                                </div>

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
                                            <th>เลขที่รายการ</th>
                                            <th>วันที่ทำรายการ</th>
                                            <th>สถานะการชำระเงิน</th>
                                            <th>ยอดทั้งหมด</th>
                                            <th>ชื่อลูกค้า</th>
                                            <th>สถานะรายการ</th>
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
                                            <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9708</a> </td>
                                            <td>
                                                August 05 2018 <small class="text-muted">10:29 PM</small>
                                            </td>
                                            <td>
                                                <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> ชำระเงินแล้ว</span></h5>
                                            </td>
                                            <td>
                                                $100
                                            </td>
                                            <td>
                                                ร้าน ก
                                            </td>
                                            <td>
                                                <h5><span class="badge badge-success-lighten">รายการสำเร็จ</span></h5>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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
                                            <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9707</a> </td>
                                            <td>August 04 2018 <small class="text-muted">08:18 AM</small></td>
                                            <td>
                                                <h5><span class="badge badge-warning-lighten"><i class="mdi mdi-timer-sand"></i> รอการชำระเงิน</span></h5>
                                            </td>
                                            <td>
                                                $1,458.50
                                            </td>
                                            <td>
                                                ร้าน ข
                                            </td>
                                            <td>
                                                <h5><span class="badge badge-warning-lighten">กำลังดำเนินการ</span></h5>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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
                                            <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9705</a> </td>
                                            <td>August 03 2018 <small class="text-muted">07:56 AM</small></td>
                                            <td>
                                                <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> ชำระเงินแล้ว</span></h5>
                                            </td>
                                            <td>
                                                $215
                                            </td>
                                            <td>
                                                ร้าน ค
                                            </td>
                                            <td>
                                                <h5><span class="badge badge-success-lighten">รายการสำเร็จ</span></h5>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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
                                            <td><a href="apps-ecommerce-orders-details.html" class="text-body font-weight-bold">#BM9704</a> </td>
                                            <td>May 22 2018 <small class="text-muted">07:22 PM</small></td>
                                            <td>
                                                <h5><span class="badge badge-danger-lighten"><i class="mdi mdi-cancel"></i> ไม่มีการชำระเงิน</span></h5>
                                            </td>
                                            <td>
                                                $2,514.50
                                            </td>
                                            <td>
                                                ร้าน ง
                                            </td>
                                            <td>
                                                <h5><span class="badge badge-danger-lighten">ยกเลิกรายการ</span></h5>
                                            </td>
                                            <td>
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
