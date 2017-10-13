<?php 
$title='Home Page';
require_once"header.php";

require_once"Admin/class/image.class.php";
$image= new Image();
require_once"Admin/class/activity.class.php";
$activity= new Activity();
require_once"Admin/class/video.class.php";
$video= new Video();
require_once"Admin/class/blog.class.php";
$blog= new Blog();

$frontblog=$blog->listfourBlogforFrontpage();

$getimageDat=$image->getimageData();
$sliderdata=$image->getSliderData();

$activitydata=$activity->GetActivityData();

$videodata=$video->GetVideoDataindex();
?>
<title>Home Page</title>
<style type="text/css">
	.videoplace{
    float: left;
    display: inline;
    margin: 20px 0px;
    margin-right: 20px;
  }
  .vid iframe{
    width: 100%;
    height: 250px;
    margin: 20px;
    margin-top: 0px;
  }
  .video-title{
    width: 100%;
    height: 30px;
    margin-bottom: 10px;
    margin-left: 20px;
    border-bottom-style: groove;
  }
#imga img{ 
  margin: 10px; 
  padding: 10px; 
  float: left;
}
#image{
  margin: 10px; 
  padding: 10px; 
  float: left;
}


.content{display:block; float:left; }
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
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="gallery.php">Photo Gallery</a></li>
        <li><a href="video.php">Video</a></li>
        <li><a href="blog.php">Blog</a></li>
      </ul>
      </ul>
    </div>
  </div>
  </div>
</nav>
<!-- ####################################################################################################### -->

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <div id="myCarousel" class="col-lg-12 myCarousel carousel slideCarousel" data-ride="carousel" data-interval="4000" style="overflow: hidden";>
        <?php 
            $imagearray=array();
            foreach ($sliderdata as $sd){
              $imagearray[]=$sd->image;
          } ?>  
        <a class="example-image-link" href="Admin/images/<?php echo $sd->image; ?>" data-lightbox="example-1">
        <div class="col-lg-12 carousel-inner" id="cara" role="listbox">
          <?php
            for($l=0;$l<count($imagearray);$l++){
              //If it is the first image set it as active
              if($l==0){
                echo "<div class='col-lg-12 item active'>
                      <img id='caraimg' src='Admin/images/$imagearray[$l]'>
                    </div>";
              }
              else{
                  echo "<div class='col-lg-12 item'>
                        <img id='caraimg' src='Admin/images/$imagearray[$l]'> 
                      </div>";
                  }
              }
          ?>
        </div>
        </a>

        
        <a class="left carousel-control" id="icon" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        
        <a class="right carousel-control" id="icon" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
      </div>

      
       <div class="col-lg-12 content" style="padding: 10px;">
          <h4 id="heading" style="border-bottom-color: #DA70D6;">
            <a href="gallery.php"><span id="headingspan" style="background-color: #DA70D6;">PURNIMA'S PHOTOS</span></a>
          </h4>
          <div class="row">
          
            <?php foreach($getimageDat as $gm){ ?>
            <div id="imga" class="col-lg-6">
                    <div class="thumbnail-container" style="float: left;">
            <a class="example-image-link" href="Admin/images/<?php echo $gm->image;?>" data-lightbox="example-1">
         
       
              
                <img src="Admin/images/<?php echo $gm->image;?>" width="100%" height="100%"/>
              
                <span class="text-content">
                               
                </span>
       
       
            </a>
            </div>
                      
                     
                    
            </div>
            

            <?php } ?>

          </div>
      </div>
     

      <div class="col-lg-12 content" style="padding: 10px;">
        <h4 id="heading">
          <a href="blog.php"><span id="headingspan">PURNIMA'S BLOGS</span></a>
        </h4>
          <div class="row">
            <?php foreach($frontblog as $fb) { ?>
            <div id="image" class="col-lg-5">
              <strong><?php echo $fb->title ?></strong>
                <a href="blogcontent.php?id=<?php echo $fb->id ?> "> <img src="Admin/images/<?php echo $fb->image?>" width="100%" height="100%"> </a> 
            </div>
            <?php } ?>  
          </div>
      </div>



    </div>

    <?php
      require_once "side.php";
    ?>
  </div>

  <div class="row">    
    <div class="col-lg-10">
      <h4 id="heading" style="margin-left: 15px; margin-top: 50px; border-bottom-color: #A52A2A">
        <a href="video.php"><span id="headingspan" style="background-color: #A52A2A">PURNIMA'S VIDEOS</span></a>
      </h4>
          <?php 
            foreach($videodata as $vd) { ?>
              <div class="col-lg-5 videoplace">
                <div class="video-title">
                  <span style="color: blue; font-size: 15px;"><?php echo $vd->name ?></span>
                </div>
                
                <div class="vid">
                  <iframe src="https://www.youtube.com/embed/<?php echo $vd->video?>" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
          <?php } ?>
    </div>
  </div>
</div>






<br class="clear" />
  
<?php
 require_once"footer.php";
 ?>

    	