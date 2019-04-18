  <?php

$conn=mysqli_connect("localhost","koko","12345","blog");

if ($conn) {
// echo "Connected successfully";
}

else
{
    exit('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
} 



//     // mysqli_free_result($result);


?>

<!DOCTYPE html>
<!--
Template Name: Overerts
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Bublog | Pages | Full Width</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="../bs/css/bootstrap.min.css">
    <script type="text/javascript" src="../bs/js/jquery.min.js"></script>
    <script type="text/javascript" src="../bs/js/bootstrap.min.js"></script>

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/books.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="../index.html">Bublog!</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
         <li><a href="../index.html">About</a></li>
         <li class="active"><a href="#">Blogs</a></li>
          <!-- <li><a class="drop" href="#">Pages</a>
            <ul>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="#">Full Width</a></li>
              <li><a href="sidebar-left.html">Sidebar Left</a></li>
              <li><a href="sidebar-right.html">Sidebar Right</a></li>
              <li><a href="basic-grid.html">Basic Grid</a></li>
            </ul>
          </li> -->
          <li><a data-toggle="modal" data-target="#myModal2">Login</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- #####################################BUBLOG########################################################### -->
 <?php $query = "SELECT * FROM publish";

$result = mysqli_query($conn,$query);
$resultquery= mysqli_num_rows($result);

    if ($resultquery>0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo ' <div id="comments"> 
      <ul>
          <li>
            <article>
              <header>
                <h1>';
                echo $row["title"];
                echo '
              </header>
              <div class="comcont">
                <p>';
         echo $row["content"];
         echo '</p>
              </div>
            </article>
          </li>
     
     </ul>
     </div>';
       
     
    }
    }
?> 

<!--########LOGIN CREDENTIALS############################### -->

<div id="myModal2" class="modal modal-transparent fade" role="dialog">
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div  class="modal-content" style=" background-color: #cc9a67; opacity: 0.8; filter: alpha(opacity=60);">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LOGIN</h4>
      </div>
      <div class="modal-body">
       <form action="../validate.php" method="POST">
                <div>
                  <span><label>Name</label></span>
                  <span><input type="text" class="textbox"  name="username"  style="width:400px; height:25px;" required></span>
                </div></br>
                
                <div>
                  <span><label>Password</label></span>
                  <span><input name="password" type="password" class="password" style="width:400px; height:25px;" required></span>
                </div></br>
               <div>
               
                  <span><input type="submit" name="submit" class="button" value="Submit"></span>
              </div></br>
              </form>
      </div>
    </div>

  </div>
</div>

     <!--######################################## -->
     <!--########BUBLOGE################################ -->
      <!-- <div id="comments">
        <h2>Comments</h2>
        <ul>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">A Name</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
              </header>
              <div class="comcont">
                <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
              </div>
            </article>
          </li>
        </ul>
        <h2>Write A Comment</h2>
        <form action="#" method="post">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="url">Website</label>
            <input type="url" name="url" id="url" value="" size="22">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </div> -->
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper quicklinks">

  <nav class="hoc clear"> 

     <h6 class="heading">Contact Us</h6>
      <ul class="nospace">

    <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
    <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
    <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>

  </nav>

</div>
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
