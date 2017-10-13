<?php
$title='Photo Gallery Page';
require_once"header.php";
require_once"Admin/class/image.class.php";
$image= new Image();
$alldata=$image->getAllDatas();
?>
<!-- pagination -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/paginate.js" type="text/javascript"></script> 
<script>
$(function(){
/*whitepapers Pagination*/
var paginate = $.fn.paginate({//options here
        perPage  : 6,//list items per page
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
<style type="text/css">
#myImg{
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

#imga
{
 float: left;
 display: inline-block;
 margin: 20px;
}
#imga img{
  width: 200px;
  height: 250px;
  box-shadow:0px 0px 20px #cecece;
 
}
#imga img:hover
{
  box-shadow: 20px 20px 20px #dcdcdc;

 -webkit-transition-duration: 0.6s;
 -webkit-transform: scale(0.8);
 
 -ms-transform: scale(0.8);
 -ms-transition-duration: 0.6s;
 }


/* The Modal (background) */
</style>




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
        <li><a href="gallery.php" class="active">Photo Gallery</a></li>
        <li><a href="video.php">Video</a></li>
        <li><a href="blog.php">Blog</a></li>
      </ul>
      </ul>
    </div>
  </div>
  </div>
</nav>

<div class="wrapper">
  <div class="container">
  	<div class="row">
  		<div class="col-lg-8">
        <div class="row">

              <ul id="paginationList" style="list-style-type: none;">
              <?php foreach($alldata as $ad){?>
              <li>         
                <div class="thumbnail-container" style="float: left;">
                  <a class="example-image-link" href="Admin/images/<?php echo $ad->image;?>" data-lightbox="example-1">
                  <div id="imga">
                    <img src="Admin/images/<?php echo $ad->image;?>"/>
                  </div>
                <span class="text-content">
                               
                </span>
          
                  </a>
                </div>
              </li>
              <?php } ?>
              </ul>
              </div>
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

             
      <br class="clear" />
    </div>
  </div>
</div>

<?php
require_once"footer.php";
?>


