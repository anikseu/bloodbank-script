<?php 
include('database.php'); 
?> 

<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css">
  <title>রক্ত দাতার তালিকা - Donor List - BloodBank | Largest Blood Bank of Bangladesh</title>
</head>




<body>
  <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Blood Bank</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="fa d-inline fa-lg fa-bookmark-o"></i>&nbsp;হোমপেজ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa d-inline fa-lg fa-envelope-o"></i>&nbsp;যোগাযোগ</a>
          </li>
        </ul>
        <a class="btn navbar-btn btn-primary ml-2 text-white" href="login.php">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp;প্রবেশ</a>
      </div>
    </div>
  </nav>


<?php 

  if(isset($_GET['blood']) && isset($_GET['city'])){
    $bloodGroup = $_GET['blood'];
    $citySelected = $_GET['city']; 

    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'bloodbank');


  // Koyta page count kori
  $results_per_page = 10;

  // Total Database a koyta seita store kori
  $sql="SELECT * FROM sheet1 WHERE BloodGroup='$bloodGroup' AND City='$citySelected' AND Approved='1'";
  $result = mysqli_query($con, $sql);
  $number_of_results = mysqli_num_rows($result);

  // Page count frontend er formula
  $number_of_pages = ceil($number_of_results/$results_per_page);

  // ?page='x' eitar check 
  if (!isset($_GET['page'])) {
  $page = 1;
  } else {
  $page = $_GET['page'];
  }

  // 1 page a koyta show korbo seitar formula 
  $this_page_first_result = ($page-1)*$results_per_page;

  // Final query jeita prod a jabe
  $sql="SELECT * FROM sheet1 WHERE BloodGroup='$bloodGroup' AND City='$citySelected' AND Approved='1' LIMIT ".$this_page_first_result . ","
   .  $results_per_page;

   // Final Result Build, I know procedural programming sucks :p 
  $result = mysqli_query($con, $sql); 

  // Ekhon table a output dewar jonno ready! 
  ?> 

  <div class="py-5 text-center bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-light"><?php printf($_GET['blood']); ?> রক্ত দাতার তালিকা</h1>
              <p class="text-light">Location: <?php printf($_GET['city']); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="px-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="margin-top:20px;">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Location</th>
                <th>View Details</th>
              </tr>
            </thead>
            <tbody>

              <?php
              if ($result->num_rows > 0) {

  

              // output data of each row
              while($row = mysqli_fetch_array($result)) {
                if($row["Approved"]==1){
                  //printf($row["Approved"]);
              ?>

              <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["Name"]; ?></td>
                <td><?php echo $row["City"]; ?>, <?php echo $row["Area"]; ?></td>
                <td>
                  <input type="button" data-target="#dataModal" data-toggle="modal" name="view" value="View Details" id="<?php echo $row["id"]; ?>" class="btn btn-primary btn-xs view_data" />
                </td>
              </tr>

              <?php
              }
              else{
                //do nothing // unapproved
                 printf("");
              }

              }

              } else {
              echo "0 results";
              } 
              ?>

              
            
            </tbody>
          </table>


        </div>
      </div>
    </div>
  </div>
  <div class="p-0 my-3">



    <!-- PAGINATION -->
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center>
          <ul class="pagination text-center m-0">
          
          <?php 
          // display the links to the pages
          for ($page=1;$page<=$number_of_pages;$page++) {
          
          echo '<li class="page-item">';
          echo '<a class="page-link" href="list.php?blood='.urlencode($_GET['blood']).'&amp;city='.$_GET['city'].'&page='.$page.'">'.$page.'</a></li>';
            
          }
          ?> 
            

            
          </ul>
        </div>
      </div>
    </div>
  </div>


  <?php 
  }else{
    printf("<center>You are in wrong place!</center>"); 
  }

  ?>
  <div class="py-5 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="lead">আমাদের কাছ থেকে নিয়মিত আপডেট নিন!&nbsp;</p>
          <form class="form-inline">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Your e-mail here"> </div>
            <button type="submit" class="btn btn-primary ml-3">Subscribe</button>
          </form>
        </div>
        <div class="col-4 col-md-6 align-self-center">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a href="" class="active nav-link" data-toggle="tab" data-target="#tabone">আমাদের সম্পর্কে</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" data-toggle="tab" data-target="#tabtwo">সোশ্যাল মিডিয়া
                <br> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" data-toggle="tab" data-target="#tabthree">যোগাযোগ</a>
            </li>
          </ul>
          <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tabone" role="tabpanel">
              <p class="">সাউথইস্ট বিশ্ববিদ্যালয়ের কম্পিউটার বিজ্ঞান ও প্রকৌশল বিভাগের ৪৫ তম ব্যাচের প্রজেক্ট ব্ল্যাড। আরো জানুন!&nbsp;</p>
            </div>
            <div class="tab-pane fade" id="tabtwo" role="tabpanel">
              <p class="">Tab pane two. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="tab-pane fade" id="tabthree" role="tabpanel">
              <p class="">Tab pane three. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2018 BloodBank. All Right Reserved.</p>
        </div>
      </div>
    </div>
  </div>




     

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 
</body>
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     
                     <h4 class="modal-title">Donor Detail</h4>  
                </div>  
                <div class="modal-body" id="donor_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 
 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var donor_id = $(this).attr("id");  
           $.ajax({  
                url:"view.php",  
                method:"post",  
                data:{donor_id:donor_id},  
                success:function(data){  
                     $('#donor_detail').html(data);  
                     $('#dataModal').modal({ show: false})
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
</html>
 





