<?php 
$title='Category page';
require_once"header.php"; 
require_once"admin/class/news.class.php";
$news= new News();
$news->set('categpry_id',$_GET['id']);
$catnews=$news->getcategorynews();
?>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="container">
   <div class="fl_right">
  <?php foreach($catnews as $cn) { ?>
 
      
      <img src="admin/images/<?php echo $cn->feature_image ?>" alt="" width="100">
      <p><strong><a href="#">nepal goverment                                            </a></strong></p>
      <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan sagittislaorem dolor sum at urna.</p>
    </div>
<?php } ?>
    </div>
</div>
<!-- ####################################################################################################### -->
<?php require_once"footer.php";?>