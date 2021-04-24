<?php session_start() ?>
<?php
include 'connection.php';
$email = $_SESSION['admin_user_email'];
$name = $_SESSION['admin_user_name'];
$pass = $_SESSION['admin_user_pass'];
?>
<!DOCTYPE html>
<html>

<head>
  <title>Admin</title>
  <?php include '../links.php'; ?>
  <?php include '../style.php'; ?>
</head>

<body>

  <div id="sb">
    Hi <?php echo $name; ?>
    <hr>
    <br>
    <ul style="list-style-type: none;">

      <li id="fac" onclick="show('faculty','fac')">Faculty</li><br>
      <li id="stu" onclick="show('student','stu')">Students</li><br>
      <li><a href="resultAnalysis.php" style="color:black;text-decoration:none">Result Analysis</a></li>
      
    </ul>
  </div>


  <nav class="navbar navbar-expand-lg navbar-info bg-info sticky-top">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <i id="tg" class='fas fa-arrow-alt-circle-right' style='color:#d5d5d5;font-size: 30px;'></i>
      </li>
    </ul>
    <a class="navbar-brand mx-auto text-white" href="#">Learning Management System</a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <form method="post">
          <button type="submit" name='lgt' style="border:2px solid #d5d5d5; background-color: transparent;color: #d5d5d5;"><i class="fas fa-sign-out-alt"></i></button>
        </form>
      </li>
    </ul>
  </nav>


  <div class="container-fluid">
    <div class="row pad">
      <div class="col-lg-12 sm-auto md-12 pad2" id="body">
        <?php include 'adminFaculty.php'; ?>
        <?php include 'adminStudent.php'; ?>

      </div>

    </div>
  </div>

  <br><br>
  </div>
  <div class="navbar navbar-expand-lg navbar-info bg-info" id="footer">
    <a class="navbar-brand mx-auto text-white">...</a>
  </div>
</body>

</html>
<?php include 'adminSidebarJavaScript.php'; ?>

<?php
if (isset($_POST['lgt'])) {
  unset($_SESSION["admin_user_email"]);
  unset($_SESSION["admin_user_name"]);
  unset($_SESSION["admin_user_pass"]);
  echo "<script type='text/javascript'>location.replace('../index.php')</script>";
}

?>