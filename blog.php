<?php
$title="Blog Page";
require_once "header.php";
require_once"Admin/class/blog.class.php";
$blog= new Blog();

$blogdata=$blog->listAllBlogforpage();
?>
<style type="text/css">
	#borderimg1{ 
    -webkit-border-image: url(../images/section-shadow.png) 30 round; /* Safari 3.1-5 */
    -o-border-image: url(../images/section-shadow.png) 30 round; /* Opera 11-12.1 */
    border-image: url(../images/section-shadow.png) 30 round;
}
</style>

<script>
$(function(){
/*whitepapers Pagination*/
var paginate = $.fn.paginate({//options here
        perPage  : 3,//list items per page
        pageId    : "paginationList", //pagination ul Id
        pager      : "pager",//pager Id
        leftImgSrc  : "images/pager-left.png",
        rightImgSrc  : "images/pager-right.png",
        leftImgActiveSrc : "images/pager-left-active.png",
        rightImgActiveSrc : "images/pager-right-active.png",
        getCurrentPage : function(currentPage){
            $(".pageNo").html("Page "+currentPage);
        }
});

});  
</script>

<nav class="navbar navbar-default" style="background-color: #6A5ACD;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
  <div class="row">
  <div class="col-lg-2"></div>
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav" id="nab" style="font-size: 18px;">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="gallery.php">Photo Gallery</a></li>
        <li><a href="video.php">Video</a></li>
        <li><a href="blog.php" class="active">Blog</a></li>
      </ul>
      </ul>
    </div>
  </div>
  </div>
</nav>

 <div class="container">
 

        <div class="row">
        <section id="borderimg1" >
            <!-- Blog Post Content Column -->
            <div class="col-lg-8" align="center" >
                

                <!-- Author -->
                <p class="lead">
                    by <a href="about.php">
                    <?php 
                   echo 'Purnima shrestha' ?>
                    </a>
                </p>


                <!-- Date/Time -->
               
                <hr>
                <ul id="paginationList" style="list-style-type: none;">
                <?php foreach($blogdata as $bd) { ?>
                <li>
                 <p><span class="glyphicon glyphicon-time"></span> <?php echo $bd->created_date?></p>
                 <h1>Blog Title: <?php  echo $bd->title ?></h1>
                <!-- Preview Image -->
                <img class="img-responsive" src="Admin/images/<?php echo $bd->image?>" alt="">

                <hr>
                <div style="overflow: hidden; width: 100%; height: 90px; margin-bottom: 10px;" align="left">
                <!-- Post Content -->
                <p class="lead"><?php echo $bd->blog?></p>
                </div>
                	<a href="blogcontent.php?id=<?php echo $bd->id ?>"><button type="button" class="btn btn-primary btn-md" style="margin-bottom: 20px;">Read more</button></a>
             
                <div style="border-bottom-color:RED; border-bottom-style: solid;margin-bottom: 20px;" >
                </div>
                </li>
                <?php } ?>
                </ul>
                </br>
                 <div class="row" style="margin-left: 40px;">
                        <div class="pager" id="pager" style="float: left;">
                                <a href="javascript:void(0);" target="_parent" title="Previous">
                                    <img src="images/pager-left.png" />
                                </a>
                            <div class="pageNo" style="float: right;"><?php echo '&nbsp';?> Page 1</div>
                                <a href="javascript:void(0);" target="_parent" title="Next">
                                    <img src="images/pager-right.png" />
                                </a>
                            </div>  
                        </div> 
                  </div>
                 








    <?php
    require_once "side.php";
    ?>
            </div>
    </section>
</div>
</div>
<div class="clear=fix">
    <br class="clear"/>
</div>

<?php
require_once "footer.php";
?>
