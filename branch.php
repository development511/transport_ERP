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
              <div class="content-page">
            <!-- Start content -->
            <div class="content">
               <div class="container">
                   <div class="row">
                     <div class="col-md-12">
                        <div class="page-title-box">
                           <h4 class="page-title">Add  Branch Detail</h4>
                           <div class="clearfix"></div>
                        </div>
                     </div>

                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card-box">
                           <div class="row">
                              <form class="form-horizontal" role="form">
                                 <div class="col-md-12">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Branch Name<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="branch name" class="form-control" id="userName">
                                            </div>
                                         </div>
                                       </div>
                                       <div class="row">
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                <label for="userName">Branch Code<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="branch code" class="form-control" id="userName">
                                            </div>
                                          </div>
                                            <div class="col-md-3">
                                              <div class="form-group">
                                                 <label>Date</label>
                                                 <div class="input-group">
                                                     <input type="text" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo date('d/m/y');?>" id="datepicker">
                                                     <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                 </div>
                                                 </div>
                                            </div>
                                         </div>
                                       <div class="row">
                                        <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="userName">Address<span class="text-danger">*</span></label>
                                               <textarea class="form-control" rows="5"></textarea>
                                           </div>
                                       </div>
                                     </div>
                                     <div class="row">
                                       <div class="col-md-6" align="left" style="padding-top: 25px">
                                          <button type="button" class="btn btn-primary btn-bordered waves-effect w-md waves-light m-b-5" id="submit_completed">Submit</button>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>

                   <div class="row">
                       <div class="col-sm-12">
                           <div class="card-box table-responsive">
                               <table id="datatable" class="table table-striped table-bordered">
                                   <thead>
                                   <tr>
                                       <th>Sr No</th>
                                       <th>Branch name</th>
                                       <th>Branch code</th>
                                       <th>Address</th>
                                       <th>Action</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   <tr>
                                       <td>1</td>
                                       <td>fashion</td>
                                       <td>123</td>
                                       <td>B-301, Samruddhi Complex, Near Geeta Khaman HouseBeside Makarpura depo</td>
                                       <td>
                                           <a href="#" title="Edit">
                                               <i class="fa fa-edit" style="font-size: 20px;"></i>
                                           </a>
                                           <a href="#" title="Delete">
                                               <i class="fa fa-trash-o" id="primary-alert" style="font-size: 20px;"></i>
                                           </a>

                                       </td>
                                   </tr>
                                   <tr>
                                       <td>2</td>
                                       <td>fashion</td>
                                       <td>456</td>
                                       <td>B-301, Samruddhi Complex, Near Geeta Khaman HouseBeside Makarpura depo</td>
                                       <td>
                                           <a href="#" title="Edit">
                                               <i class="fa fa-edit" style="font-size: 20px;"></i>
                                           </a>
                                           <a href="#" title="Delete">
                                               <i class="fa fa-trash-o" id="primary-alert" style="font-size: 20px;"></i>
                                           </a>

                                       </td>
                                   </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
                 
               </div>
               <!-- container -->
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