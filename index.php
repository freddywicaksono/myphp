<?php
    error_reporting(0);
    include('functions.php');
    include('header.php');
?>

  <section id="container" class="">
<?php
    include('topnav.php');
?>
<?php
    include('leftmenu.php');
?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <?php
                include('content.php');
              ?>
          </section>
      </section>
      <!--main content end-->
<?php
    include('rightmenu.php');
?>

<?php
    include('footer.php');
?>
