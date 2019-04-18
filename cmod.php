<?php
// Initialize the session

session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Approval</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

    <section class="pt-5 pb-5 bg-dark inner-header">


    <div class="page-header">
        <h1>Volunteer Panel <br/>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. </h1>
    </div>


    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-bookmark"></span> Main Menu <span class="glyphicon glyphicon-bookmark"></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                       
                            <a href="welcome.php" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Dashboard</a>
                          <a href="add.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Add Blood Donor</a>               
                    
                          <a href="cmod.php" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>Approval</a>
                           <a href="donorall.php" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>List of All Donors</a>
                           


                          
                         
                     
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="panel-body">
                    <div class="row">
                       

 <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Location</th>
                <th>Blood Group</th>
                <th>Contact No.</th>
                <th>Email</th>
                <th>Facebook</th>
                <th>Remarks</th>
                <th>Added By</th>
                <th>Approved?</th>
                <th>Edit Details</th>
              </tr>
            </thead>
            <tbody>

<?php 
    $volname = $_SESSION['username']; 
    include('database.php'); 
    $name = $_SESSION['username']; 

    if($name=="admin"){
    $sql="SELECT * FROM sheet1 WHERE Approved='0'";
    //printf($sql);
    $result = mysqli_query($con, $sql);
    $number_of_results = mysqli_num_rows($result);
    echo '<h2>'.$number_of_results.' Donor pending from all volunteer. Take action! <br/><br/>';

    if ($result->num_rows > 0) {

  
        $i=1; 
        // output data of each row
        while($row = mysqli_fetch_array($result)) {
          ?>

              <tr>
                <td>
                
                <?php //echo $row["id"]; 
                echo $i++; 
                ?>
                    
                </td>
                <td><?php echo $row["Name"]; ?></td>
                <td><?php echo $row["City"]; ?>, <?php echo $row["Area"]; ?></td>
                <td><?php echo $row["BloodGroup"]; ?></td>
                <td><?php echo $row["Mobile"]; ?></td>
                <td><?php echo $row["EmailAddress"]; ?></td>
                <td><?php echo $row["FBID"]; ?></td>
                <td><?php echo $row["Remarks"]; ?></td>
                <td><?php echo $row["Reference"]; ?></td>
                <td> <?php if($row["Approved"]==1) printf("Yes"); else printf("No"); ?> </td>
                <td>
                  <a href="approve.php?isGood=1&amp;id=<?php echo $row["id"]; ?>" class="btn btn-primary" role="button">Approve</a> |   <a href="approve.php?isGood=0&amp;id=<?php echo $row["id"]; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
              </tr>

              <?php
            

              }

              } else {
              echo "0 results";
              } 
    
    }
 
    else{
        echo "<h2>You don't have permission for approval. Contact Admin</h2>"; 
    }
?> 



</tbody>
</table>
</div>
</div>





    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</body>
</html>