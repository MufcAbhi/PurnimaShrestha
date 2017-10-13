<?php 
$title='Video Page';
require_once"header.php";
require_once"Admin/class/video.class.php";
$video= new Video();
$videodata=$video->GetVideoData();
?>
<style type="text/css">
	.videoplace{
		float: left;
		display: inline-block;
		margin: 20px 10px;
		margin-left:-5px;
	}
	.vid iframe{
		
		margin: 20px 0px;
		margin-top: 0px;
	}
	.video-title{
		margin-bottom: 15px;
		border-bottom-style:groove;
	}

</style>

<script>
$(function(){
/*whitepapers Pagination*/
var paginate = $.fn.paginate({//options here
        perPage  : 2,//list items per page
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
</script><nav class="navbar navbar-default" style="background-color: #6A5ACD;">
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
        <li><a href="video.php" class="active">Video</a></li>
        <li><a href="blog.php">Blog</a></li>
      </ul>
      </ul>
    </div>
  </div>
  </div>
</nav>

<div class="container">
<div class="row">
	<section id="content_area" style="margin-top: 20px; margin-bottom: 20px;">
		<div class="col-lg-8">	
    <div class="row">
	<ul id="paginationList" style="list-style-type: none;">
	<?php 
	 foreach($videodata as $vd) { ?>
		<li>
			<div class="col-lg-6" class="videoplace">
			
					<div class="video-title">
						<span style="color: blue; font-size: 15px;"><?php echo $vd->name ?></span>
					</div>
					<div class="col-lg-12" class="vid">
						<iframe src="https://www.youtube.com/embed/<?php echo $vd->video?>" frameborder="0" allowfullscreen width="100%"></iframe>
					</div>
					
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
</section>
</div>
</div>
<div class="clearfix">
	<br class="clear"/>
</div>
<?php
require_once "footer.php";
?>