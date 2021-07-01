<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'voting_system');
if(!isset($_SESSION['Username'])){
  echo "<script> window.open('admin.php','_self') </script>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Admin Panel</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='adminPanel.css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src='main.js'></script>
</head>
<body>
    <div class="sidebar">
       <h4> Admin Panel</h4>
        <a href="#home">Home</a>
        <a href="#Result">Result</a>
        <a href="#User">User</a>
        <a href="#Data">Data</a>
        <a href="Logout.php">LogOut</a>
    </div>
      
    <div class="content" id="home">
        <h3 id="Result">Result Progress</h3><br>
        <div class="progress" style="height: 30px;">
            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
        </div>
        <div class="progress" style="height: 30px;">
            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>
        <br><br>
        <!-- =================== -->
        <div class="container">
            <h2 id="User">Register User Table</h2>

<?php 
 $conn = mysqli_connect('localhost', 'root', '', 'voting_system');
 if(isset($_GET['del'])){
   $del_email=$_GET['del'];
   $delete="delete from register where Email='$del_email'";
   $run_del=mysqli_query($conn,$delete);
   if($run_del===true){
     echo "<div style='color:green;text-align:center;'>Record Deleted Successfully </div> ";
   }else{
     echo "<div style='color:red;text-align:center;'>Try Again</div>";
   }
 }
?>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>DOB</th>
                  <th>Password</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
<?php
  $conn = mysqli_connect('localhost', 'root', '', 'voting_system');
  $select="select * from register";
  $run=mysqli_query($conn,$select);

  while($row_user=mysqli_fetch_array($run)){
      $FullName=$row_user['FullName'];
      $MobileNo=$row_user['MobileNo'];
      $Email=$row_user['Email'];
      $DOB=$row_user['DOB'];
      $Password=$row_user['Password'];
      // $RePassword=$row_user['RePassword'];

?>
              <tbody>
                <tr>
                  <td><?php echo $FullName; ?></td>
                  <td><?php echo $MobileNo; ?></td>
                  <td><?php echo $Email; ?></td>
                  <td><?php echo $DOB; ?></td>
                  <td><?php echo $Password; ?></td>
                  <td><a href="EditUser.php?edit=<?php echo $Email; ?>" class="btn btn-primary">Edit</a></td>
                  <td><a href="adminPanel.php?del=<?php echo $Email; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
        </div>
        <br><br>
        <!-- ================= -->
    </div>
</body>
</html>