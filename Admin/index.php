
<?php 
require_once "class/admin.class.php";
$admin= new Admin();


if(isset($_POST['btnlogin'])){
  
    $err=array();

    if (isset($_POST['email']) && !empty($_POST['email'])) {
       $admin->set('email',$_POST['email']);
      
    }else{
        $err['email']="Enter email";
    }
        if (isset($_POST['password']) && !empty($_POST['password'])) {
        $admin->set('password',$_POST['password']);
      
    }else{
        $err['password']="Enter password";
    }
    if (count($err)==0) {
      $data=$admin->login();
    
 
        
    }
}
     ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Purnima shrestha</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                   <?php    if(isset($data)){
                                        echo $data; }
                                        ?>

                        <form role="form" action="" method="POST" id="loginform">
                            <fieldset>
                                <div class="form-group">
                               
                                    <input class="form-control" required placeholder="E-mail" name="email" type="email" value="">
                                    <?php 
                                    if(isset($erremail)){
                                        echo $erremail; }
                                        ?>

                                    
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required placeholder="Password" name="password" type="password" value="">
                                     <?php 
                                    if(isset($errpassword)){
                                        echo $errpassword; }
                                        ?>

                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button name="btnlogin" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
     <script src="validate/dist/jquery.validate.min.js"></script>
     <script type="text/javascript">
         $(document).ready(function(){
            $('#loginform').validate();
         });
     </script>

</body>


