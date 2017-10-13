 <?php
$title= 'create Activity ';
require_once "header.php"; 
require_once "class/activity.class.php"; 
$activity = new Activity();
if (isset($_POST['btnSave'])) {
 $activity-> set('activity',$_POST['activity']);
 $activity-> set('rank',$_POST['rank']);
 $activity-> set('status',$_POST['status']);
 $activity->set('created_by',$_SESSION['admin_username']);
 $activity-> set('created_date',date('Y-m-d h:i:s'));
 $status=$activity->SaveActivity();
echo "inserted with id $status";
}
?>
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Create page</h1>
                         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Create Activity
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <?php 
                                    if (isset($status) && !empty($status)) {
                                       echo "Blog inserted with id $status";
                                    }
                                ?>
                                    <form role="form" action="" method="post" enctype="multipart/form-data" id="categoryform">
                                         <div class="form-group">
                                            <label>Activity </label>
                                            <textarea class="form-control " name="activity" > </textarea>
                                          </div>

                                        <div class="form-group">
                                            <label>Rank</label>
                                            <input class="form-control" name="rank" type="number"  required>
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <input type="radio"  value="1" name="status">Active
                                            <input type="radio"  checked="" value="0" name="status">De Active
                                            </br>
                                            <button type="submit" name="btnSave" class="btn btn-default">Save</button>
                                            <button type="reset" class="btn btn-default">Reset Button</button>
                                        </div>
                              
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
           
     <script src="validate/dist/jquery.validate.min.js"></script>
     <script type="text/javascript">
         $(document).ready(function(){
            $('#categoryform').validate();
         });
     </script>
     <?php require_once "footer.php" ?> 






