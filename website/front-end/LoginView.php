<?php
include_once("header.php");
?>
<div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Login</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <form id="request" class="main_form" action="DoLogin.php" method="POST">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Email" type="email" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Password" type="password" name="Password"> 
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Login</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
</div>
<?php
include_once("footer.php");
?>