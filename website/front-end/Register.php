<?php
session_start();
if(!isset($_SESSION["Email"]))
{
  header("location:LoginView.php");
}
?>
<?php

include_once("header.php");
?>
      <!-- end header inner -->
      <!-- end header -->
      <!-- products -->
      <div  class="products">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Products</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="our_products">
                     <div class="row">
                        <?php
                           include_once("C:\wamp64\www\website\Back-End\Courses\CourseModel.php");
                           $obj = new Course;
                           $arr =[];
                           $arr = $obj->ListCourses();
                           for($i=0;$i<count($arr);$i++)
                           {

                          // echo $arr[$i]->getid;
                              
                        ?>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="#" alt="<?php echo $arr[$i]->getCode; ?>"/></figure>
                              <h3><?php echo $arr[$i]->getName; ?></h3>
                           </div>
                        </div>
                        <?php 
                           }
                        ?>
                        <div class="col-md-12">
                           <a class="read_more" href="#">See More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end products -->
      <!--  footer -->
      <?php
include_once("footer.php");
?>
