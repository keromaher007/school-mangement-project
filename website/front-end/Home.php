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
      <!-- banner -->
      <li class="nav-item">
                                 <a class="nav-link" href="Register.php">registration</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="computer.php">weekly schedule</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="laptop.php">exams schedule</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="product.php">payment</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="product.php">books</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="product.php">exam results</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="product.php">grade appeal</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="product.php">courses material</a>
                              </li>
      <!-- end contact -->
      <!--  footer -->
      <?php
include_once("footer.php");
?>