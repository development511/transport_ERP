<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Dashboard | Nik Tech Solution Admin Dashboard</title>
       <?php include_once('include/headerscript.php'); ?>
    </head>

    <body data-layout="horizontal">

        <!-- Begin page -->
        <div id="wrapper">

            <?php include_once('include/header.php'); ?>
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Zircos</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard </a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-6 col-xl-3">
                                <div class="card widget-box-three">
                                    <div class="card-body">
                                        <div class="float-right mt-2">
                                            <i class="mdi mdi-chart-areaspline display-3 m-0"></i>
                                        </div>
                                        <div class="overflow-hidden">
                                            <p class="text-uppercase font-weight-medium text-truncate mb-2">Statistics</p>
                                            <h2 class="mb-0"><span data-plugin="counterup">34578</span> <i class="mdi mdi-arrow-up text-success font-24"></i></h2>
                                            <p class="text-muted mt-2 m-0"><span class="font-weight-medium">Last:</span> 30.4k</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card widget-box-three">
                                    <div class="card-body">
                                        <div class="float-right mt-2">
                                            <i class="mdi mdi-account-convert display-3 m-0"></i>
                                        </div>
                                        <div class="overflow-hidden">
                                            <p class="text-uppercase font-weight-medium text-truncate mb-2">User Today</p>
                                            <h2 class="mb-0"><span data-plugin="counterup">895</span> <i class="mdi mdi-arrow-down text-danger font-24"></i></h2>
                                            <p class="text-muted mt-2 m-0"><span class="font-weight-medium">Last:</span> 1250</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card widget-box-three">
                                    <div class="card-body">
                                        <div class="float-right mt-2">
                                            <i class="mdi mdi-layers display-3 m-0"></i>
                                        </div>
                                        <div class="overflow-hidden">
                                            <p class="text-uppercase font-weight-medium text-truncate mb-2">User This Month</p>
                                            <h2 class="mb-0"><span data-plugin="counterup">52410</span><i class="mdi mdi-arrow-up text-success font-24"></i></h2>
                                            <p class="text-muted mt-2 m-0"><span class="font-weight-medium">Last:</span> 40.33k</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6 col-xl-3">
                                <div class="card widget-box-three">
                                    <div class="card-body">
                                        <div class="float-right mt-2">
                                            <i class="mdi mdi-av-timer display-3 m-0"></i>
                                        </div>
                                        <div class="overflow-hidden">
                                            <p class="text-uppercase font-weight-medium text-truncate mb-2">Request Per Minute</p>
                                            <h2 class="mb-0"><span data-plugin="counterup">652</span> <i class="mdi mdi-arrow-down text-danger font-24"></i></h2>
                                            <p class="text-muted mt-2 m-0"><span class="font-weight-medium">Last:</span> 956</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-box">

                                    <h4 class="header-title mb-4">Daily Sales</h4>

                                    <div class="widget-chart text-center">
                                        <div id="morris-donut-example" class="morris-charts" style="height: 245px;"></div>
                                        <ul class="list-inline chart-detail-list mb-0">
                                            <li class="list-inline-item">
                                                <h6 class="text-danger"><i class="fa fa-circle mr-2"></i>Series A</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 class="text-success"><i class="fa fa-circle mr-2"></i>Series B</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-4">
                                <div class="card-box">

                                    <h4 class="header-title mb-4">Statistics</h4>
                                    <div id="morris-bar-example" class="text-center morris-charts" style="height: 280px;"></div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-4">
                                <div class="card-box">

                                    <h4 class="header-title mb-4">Total Revenue</h4>
                                    <div id="morris-line-example" class="text-center morris-charts" style="height: 280px;"></div>
                                </div>
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end content -->
                <!-- Footer Start -->
                <?php include_once('include/footer.php');?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
       <?php include_once('include/rightbar.php');?>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        
        <?php include_once('include/footerscript.php');?>

    </body>
</html>