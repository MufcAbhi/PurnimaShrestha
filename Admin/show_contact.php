<?php
$title='List contacts';
require_once"header.php"; 
require_once"class/contact.class.php";
$contact= new Contact();
$c = $contact->listAllComment();
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
                           Contact List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" id="category" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sn.</th>
                                        <th>Nmage</th>
                                        <th>Email</th>
                                        <th>Website</th>
                                        <th>Date/Time</th>
                                        <th>Comments and queries</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; foreach ($c as $con)     { ?>
                                    <tr class="odd gradeX">
                                        <td> <?php echo $i++ ?></td>
                                        <td><?php echo $con->Name ?>
                                        <td><?php echo $con->Email ?>
                                        <td><?php echo $con->Website ?>
                                        <td><?php echo $con->Created_date ?>
                                        <td class="center"><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')"href="delete_contact.php?id=<?php echo $con->ID ?>" </a> Delete</td>
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
      






