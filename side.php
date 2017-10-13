<?php 
require_once"Admin/class/image.class.php";
$image= new Image();
require_once"Admin/class/activity.class.php";
$activity= new Activity();
require_once"Admin/class/blog.class.php";
$blog= new Blog();

$frontblog=$blog->listABlogforFrontpage();

$latestdata=$image->getLatestData();
$sliderdata=$image->getSliderData();

$activitydata=$activity->GetActivityData();
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<style type="text/css">
  #heading{
  border-bottom: solid 1px orange;
  font-family: "Trebuchet MS", Helvetica, sans-serif;
}
#headingspan{
  background-color: orange;
  padding:0px 10px;
  padding-top: 5px;
  color: white;
}
#images{
  width: 25%;
  height: 100px;
}
#title{
  width: 75%;
  height: 100px;
  padding-left: 5px;
}
#blogside{
  font-size: 13px;
  padding-top: 10px;
}
</style>

<div class="col-lg-4" style="margin: auto;">
	    		<div class="row" align="center">
    				<div  class="fb-page" data-href="https://www.facebook.com/Purnima-shrestha-258904654154053/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Purnima-shrestha-258904654154053/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Purnima-shrestha-258904654154053/">Purnima shrestha</a></blockquote></div>
    			</div>

    			<div class="row" style="margin-top: 10px; padding-top: 10px;">
    				<h4 id="heading" style="border-bottom-color: #2F4F4F">
              <a href="blog.php"><span id="headingspan" style="background-color: #2F4F4F">RECENT FEEDS</span></a>
            </h4>
    				
            
        			<?php foreach($frontblog as $fb) { ?>
              <div style="margin-top: 5px; padding: 5px; width: 100%; float: left">
                <a href="blogcontent.php?id=<?php echo $fb->id ?> ">
                <div id="images" style="float: left;">
                  <img src="Admin/images/<?php echo $fb->image?>" width="100%" height="100%">
                </div>
        
                <div id="title" style="float: left; overflow: hidden;">
                  <strong><?php echo $fb->title ?></strong>
                  <div id="blogside">
                    <span style="color: gray;"><?php echo $fb->blog; ?></span>
                  </div>
                </div>
                </a> 
              </div>
              <?php } ?>
				  </div>	

				<div class="row">
    	  			<ul class="latestnews" style="list-style-type: none; display: inline; padding: 10px;">
        	 			<h4 id="heading" style="border-bottom-color: green;">
                  <a href="gallery.php"><span id="headingspan" style="background-color: green;">LATEST PHOTOS</span></a>
                </h4>
       					<?php foreach($latestdata as $ld){ ?>
  							<li style="float: left;">
                <a class="example-image-link" href="Admin/images/<?php echo $ld->image; ?>" data-lightbox="example-1">
  								
  									<div class="img-responsive" style="width: 150px; height: 150px; margin: 10px 10px;"> <img src="Admin/images/	<?php echo $ld->image?>" width="100%" height="100%"/>
									</div>
								</a>
							</li>
						<?php } ?>
		        	</ul>
      			</div>
	    	</div>