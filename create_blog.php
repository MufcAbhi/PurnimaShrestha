 <?php
$title= 'create category';
require_once "header.php"; 

require_once "class/blog.class.php"; 
$blog = new Blog();
if (isset($_POST['btnSave'])) {
  if ($_FILES['image']['error']==0) {
      $name=uniqid().'_'.$_FILES['image']['name'];
      move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$name);
      $blog->set('image',$name);
  }
 $blog-> set('blog',$_POST['blog']);
  $blog-> set('title',$_POST['title']);
 $blog-> set('rank',$_POST['rank']);
 $blog-> set('status',$_POST['status']);
 $blog-> set('created_date',date('Y-m-d H:i:s'));
 $status=$blog->SaveBlog();
echo "inserted with id $status";
 
}

?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Create Blog  page</h1>
                         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           create Blog
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
                                         <div class="form-group">
                                     <label>Image</label>
                                    <input type="file" name="image" class="form-control"  required>
                                             </div>
                                     <label>Blog </label>
                                            <textarea class="form-control" name="blog" required> </textarea>
                                          </div>
                                          <label>Title </label>
                                            <textarea class="form-control" name="title" required> </textarea>
                                          </div>
                                        <div class="form-group">
                                 <label>rank</label>
                                            <input class="form-control" name="rank" type="number"  required>
                                        </div>
                                        <div>
                                        <label>status</label>
                                        <input type="radio"  value="1" name="status">Active
                                         <input type="radio"  checked="" value="0" name="status">De Active
                                         </br>
                                        <button type="submit" name="btnSave" class="btn btn-default">Save</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                              
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






