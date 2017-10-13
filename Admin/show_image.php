<?php
$title='List image';
require_once"header.php"; 
require_once"class/image.class.php";
$image= new Image();
$imagedata = $image->listAllImage();
?>
<link rel="stylesheet" type="text/css" href="css/jquery.datatables.min.css">

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List Image  page</h1>
                        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Image List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" id="category" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; foreach ($imagedata as $ab)     { ?>
                                    <tr class="odd gradeX">
                                        <td> <?php echo $i++ ?></td>
                                        <td><img src="images/<?php echo $ab->image ?>" height="250px" width="250px"></td>
                                        <td class="center">
                                        <?php  if($ab->status==1){
                                            echo "<span class='bg bg-success'> Active </span>";
                                            } else{
                                                echo "<span class='bg bg-success'> De Active </span>";

                                                } ?></td>
                                        <td class="center"><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')"href="delete_image.php?id=<?php echo $ab->id ?>" </a> Delete</td>
                                    </tr>
                                    <?php } ?>
                                  </tbody>
                                  </table>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
          <?php require_once"footer.php"; ?>
        <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
    $('#category').DataTable();
} );
        </script>
      






