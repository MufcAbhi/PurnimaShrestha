
<?php
$title= 'create Image';
require_once "header.php"; 
require_once "class/image.class.php"; 
$image = new Image();
if (isset($_POST['btnSave'])) {

    if ($_FILES['image']['error']==0) {
        $name=uniqid().'_'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$name);
        $image->set('image',$name);
    }

    $image-> set('status',$_POST['status']);
    $image-> set('short_description',$_POST['short_description']);
    $image-> set('description',$_POST['description']);
    $image-> set('slider_image',$_POST['slider_image']);
    $image-> set('feature_image',$_POST['feature_image']);
    $image-> set('latest_image',$_POST['latest_image']);
  // $news-> set('feature_image',$_POST['feature_image']);
    $image-> set('created_date',date('Y-m-d H:i:s'));
    $image-> set('created_by',$_SESSION['admin_username']);
    $status=$image->SaveImage();

    echo "inserted with id $status";

}

?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">create Image  page</h1>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                             Image form
                         </div>
                         <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php 
                                    if (isset($status) && !empty($status)) {
                                     echo "category inserted with id $status";
                                 }
                                 ?>
                                 <form role="form" action="" enctype="multipart/form-data" method="post" id="categoryform">


                                    <div class="form-group">
                                       <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control"  required>
                                             </div>
                                    <div class="form-group">
                                        <label>short Description</label>
                                        <textarea class="form-control" name="short_description" type="text"  required>
                                        </textarea>

                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description" type="text"  required>
                                        </textarea>

                                        

                                    </div>
                                
                                            <label>Display in slider</label>
                                            <input type="radio"  value="1" name="slider_image">Active
                                            <input type="radio"  checked="" value="0" name="slider_image">De Active
                                        </br>
                                        <div>
                                            <label>Display in feature Image</label>
                                            <input type="radio"  value="1" name="feature_image">Active
                                            <input type="radio"  checked="" value="0" name="feature_image">De Active
                                        </br>
                                        <div>
                                            <label>Disaplay in Latest News</label>
                                            <input type="radio"  value="1" name="latest_image">Active
                                            <input type="radio"  checked="" value="0" name="latest_image">De Active
                                        </br>


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






