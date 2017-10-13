<?php
$title="Contact Page";
require_once "header.php";
require_once"Admin/class/contact.class.php";
$contact= new Contact();
if (isset($_POST['saveComment'])) {

 $contact-> set('Name',$_POST['Name']);
 $contact-> set('Email',$_POST['Email']);
 $contact-> set('Website',$_POST['Website']);
 $contact-> set('Created_date',date('Y-m-d H:i:s'));
 $contact-> set('Comment',$_POST['Comment']);

$contact->SaveComment();
echo "<h1>Your response has been submitted! Thank you!</h1>";
}
?>
<style type="text/css">
    #borderimg1{ 
    -webkit-border-image: url(../images/section-shadow.png) 30 round; /* Safari 3.1-5 */
    -o-border-image: url(../images/section-shadow.png) 30 round; /* Opera 11-12.1 */
    border-image: url(../images/section-shadow.png) 30 round;
}
</style>
<style type="text/css">
    


    #lefto {
        float:left;

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
        <li><a href="blog.php">Blog</a></li>
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
            <div class="col-lg-8">
                

                <!-- Author -->
                <p class="lead">
                    <a href="about.php">
                    <?php 
                   echo "<h2 align='center'>Purnima shrestha</h2>" ?>
                    </a>
                </p>

                <hr>
                <div>
                <h1><span>Contact Us</span></h1>
                </hr>
                </div><br>

<div style="left">
                <span><p >To contact us for any purposes please use the Form below.</p></span>
                
                <p><strong>Note: </strong>With this form you <strong>cannot</strong> contact Purnima Shrestha.You can only contact the editor of this blog for any queries or purpose related to this blog. We will be happy to respond.</p>    
                
</div>
</br>

                    <div>
                     <form action="" method="post" id="commentform">
                                          <div class="col-lg-8">
                                            <label for="name"><small>Name(required)</small></label>
                                            <input type="text" class="form-control" required="required" placeholder="Enter your name..." name="Name" id="name" size="22"/>
                                          </div>  

                                          <br/>
                            
                                          <div class="col-lg-8" style="margin-top: 10px; ">
                                            <label for="email"><small>Email(required)</small></label>
                                            <input type="text" class="form-control" required="required" placeholder="Enter your email(Your email will not be displayed)" name="Email" id="email" size="22"/>
                                          </div>

                                          <br/>

                                        <div class="col-lg-8" style="margin-top: 10px; ">
                                            <label for="Website"><small>Website</small></label>
                                            <input type="text" class="form-control" placeholder="Enter your Website" name="Website" id="Website" size="22"/>
                                         </div>
                                        </br>

                                          <div class="col-lg-12" style="margin-top: 10px; ">
                                            <label for="comment"><small>Comment and Queries(required)</small></label>
                                            <textarea name="Comment" class="form-control" required="required"  id="comment" style="padding: 10px;" rows="5"></textarea>
                                          </div>
                                                                           
                                          <br/>
                                          <div class="col-lg-2" style="margin-top: 10px; ">
                                
                                          <input type="submit" class="btn btn-primary" name="saveComment" value="Submit" />
                                        </div>
                                        </form>

                    </div>

                <!-- Date/Time -->
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
