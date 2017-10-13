<?php
$title='List Videos';
require_once"header.php"; 
require_once"class/video.class.php";
$video= new Video();
$v = $video->GetVideoDataforadmin();
?>
<link rel="stylesheet" type="text/css" href="css/jquery.datatables.min.css">

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List Contact page</h1>
                        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Video List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" id="category" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sn.</th>
                                        <th>Nmage</th>
                                        <th>Video</th>
                                        <th>Status</th>
                                        <th>Rank</th>
                                        <th>Created_date</th>
                                        <th>Created_by</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; foreach ($v as $vid)     { ?>
                                    <tr class="odd gradeX">
                                        <td> <?php echo $i++ ?></td>
                                        <td><?php echo $vid->name ?>
                                        <td><iframe src="https://www.youtube.com/embed/<?php echo $vid->video; ?>"></iframe>
                                        <td><?php echo $vid->status ?>
                                        <td><?php echo $vid->rank ?>
                                        <td><?php echo $vid->created_date ?>
                                        <td><?php echo $vid->created_by ?>
                                        <td class="center"><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')"href="delete_video.php?id=<?php echo $vid->id ?>" </a> Delete</td>
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
      






