<?php
$title='blog content';
require_once "header.php";
require_once"Admin/class/blog.class.php";
$blog= new Blog();
$blog->set('id',$_GET['id']);
$blogdata1=$blog->listBlogByID();
require_once"Admin/class/comment.class.php";
$comment= new Comment();
$comment->set('blog_id',$_GET['id']);
if (isset($_POST['saveComment'])) {
        
   $comment->set('name',$_POST['name']);
   $comment->set('email',$_POST['email']);
   $comment->set('comment',$_POST['comment']);
   $comment->set('created_date',date('Y-m-d h:i:s'));
   $comment->SaveComment();
}
$commentdata=$comment->listAllComment();
?>
<style type="text/css">
  .well li{
    min-height: 50px;
  }
  .userimg img{
    height: 40px;
    width: 40px;
    margin: 5px;
}
.blogwell{
    max-width: 90%;
    overflow: hidden;
    min-height: 20px;
    padding-top: 5px;
    padding-left: 5px;
    padding-right: 5px;
    padding-bottom: 5px;
    margin-bottom: 5px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    font-size: 13px;
}
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
        <li><a href="gallery.php">Photo Gallery</a></li>
        <li><a href="video.php">Video</a></li>
        <li><a href="blog.php" class="active">Blog</a></li>
      </ul>
      </ul>
    </div>
  </div>
  </div>
</nav>
<?php foreach($blogdata1 as $bd) { ?>
<div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php echo $bd->title?></h1>
                        <span class="meta">Posted by Purnima Shrestha on <?php echo $bd->created_date?></span>
                    </div>
                </div>
            </div>
            
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" style="min-height: 300px;">
                <img src="Admin/images/<?php echo $bd->image?>" class="img-responsive">
              </div>
            </div>
            
            <br>

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                   <?php echo $bd->blog ?>
                </div>
            </div>

            <div class="row" style="margin-top: 20px;">
              <div class="well">
                  <h4>Leave a Comment</h4><br>
                    <form action="" method="post" id="commentform">
                      <div style="width: 200px;">
                        <label for="name"><small>Name(required)</small></label>
                        <input type="text" class="form-control" required="required" placeholder="Enter your name..." name="name" id="name" size="22"/>
                      </div>  

                      <br/>
        
                      <div style="width: 400px;">
                        <label for="email"><small>Email(required)</small></label>
                        <input type="text" class="form-control" required="required" placeholder="Enter your email(Your email will not be displayed)" name="email" id="email" size="22"/>
                      </div>

                      <br/>

                      <div>
                        <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                        <textarea name="comment" class="form-control" required="required"  id="comment" style="margin-top: 20px; padding: 10px;" rows="5"></textarea>
                      </div>
                        
                      <br/>
            
                      <input type="submit" class="btn btn-primary" name="saveComment" value="Submit Comment" />
                    </form>
              </div>
            </div>
        
            <div class="row">
                <div id="leaveacomment" class="well">  
                  <h4>Comments and Responses</h4>
                  <?php foreach($commentdata as $cl) { ?>
                    
                      <div id="comments">
                        <ul style="list-style-type: none;">
                          <li>
                            <div class="submitdate"><?php echo $cl->created_date ?></a></div>
                              <div class="blogwell">
                                <div class="userimg">
                                  <img src=images/user.png>
                                    <div class="author">
                                      <span class="name"><?php echo $cl->name?></span>
                                      <span class="wrote">wrote:</span>
                                    </div>
                                  <p><?php echo $cl->comment ?></p>
                                </div>
                              </div>
                          </li>
                        </ul>
                      </div>
                  <?php } ?>
            </div>

    <?php } ?>
      <script src="Admin/dist/js/sb-admin-2.js"></script>
      <script src="Admin/validate/dist/jquery.validate.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
            $('#commentform').validate();
         });
      </script>
