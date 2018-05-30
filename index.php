<!DOCTYPE html>
<html>

<head>
  <title>Blood Bank Bangladesh - ব্ল্যাড ব্যাংক বাংলাদেশ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css"> </head>

<body>
  <div class="text-center py-0" style="background-image: url('images/bg.png');">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-3 mb-4 text-primary">ব্ল্যাড ব্যাংক</h1>
          <p class="lead mb-5">রক্ত দিন, জীবন বাচান</p>
          <a href="#" data-target="#BeADonor" data-toggle="modal" class="btn btn-lg mx-1 btn-secondary">Be A Donor</a>
          <a href="#" data-target="#SearchDonor" data-toggle="modal" class="btn btn-lg btn-primary mx-1">Find Donor</a>
        </div>
      </div>
    </div>
  </div>




<!-- Be A Donor -->
<div class="modal fade" id="BeADonor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">রক্ত দাতা হিসেবে নিবন্ধন করুন</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Find Donor -->
<div class="modal fade" id="SearchDonor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">রক্ত দাতা খুজে বের করুন</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <form action="list.php" method="get"> 
      
      <div class="input-group mb-3">
      <div class="input-group-prepend">
      <label class="input-group-text" for="blood">Select Blood Group</label>
    </div>
        <select name="blood" class="custom-select" id="blood" required>
           
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
      </div>

      <div class="input-group mb-3">
      <div class="input-group-prepend">
      <label class="input-group-text" for="city">Select City</label>
    </div>
        <select name="city" class="custom-select" id="city">
           
            <option value="Dhaka">Dhaka</option>
           
        </select>
      </div>
    

      <div class="input-group mb-3">
      <div class="input-group-prepend">
      <label class="input-group-text" for="city">Select Area</label>
    </div>
        <select class="custom-select" id="city">
           
            <option value="">All Area</option>
            
           
        </select>
      </div>
      </div>



        



      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <input type="submit" class="btn btn-primary" value="Search For Donor">
      </form>
      </div>
    </div>
  </div>
</div>





  <div class="py-5 text-center bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="pb-3 text-secondary">দ্রুত বর্ধনশীল বাংলাদেশী ব্ল্যাড ব্যাংক</h1>
        </div>
      </div>

      <div class="row">
        <div class="text-right col-md-6">
          <div class="row my-5">
            <div class="col-2 order-lg-2 col-2 text-center">
              <i class="d-block fa fa-3x fa-money"></i>
            </div>
            <div class="col-10 text-lg-right text-left order-lg-1">
              <h4 class="text-primary">সম্পুর্ণ বিনামুল্যে</h4>
              <p>আপনার প্রয়োজনীয় রক্ত পেতে সঠিক ব্যক্তি খুজে বের করতে সাহায্য করবে ব্ল্যাড ব্যাংক। কোন সাবস্ক্রিপশন চার্জ ছাড়া</p>
            </div>
          </div>
          <div class="row my-5">
            <div class="col-2 order-lg-2 col-2 text-center">
              <i class="d-block fa fa-4x fa-ambulance"></i>
            </div>
            <div class="col-10 text-lg-right text-left order-lg-1">
              <h4 class="text-primary">রক্তদাতা হোন!&nbsp;</h4>
              <p>সাহায্য করতে চান? জীবন বাচানোর চেয়ে বড় সুযোগ আর কি হতে পারে? সাইন আপ করে নথিভুক্ত হলে প্রয়োজনে পাশে পাবে আপনাকে</p>
            </div>
          </div>
        </div>
        <div class="text-left col-md-6">
          <div class="row my-5">
            <div class="col-2 text-center">
              <i class="d-block fa fa-3x fa-angellist"></i>
            </div>
            <div class="col-10">
              <h4 class="text-primary">সহজ ইন্টারফেস</h4>
              <p>সহজেই খুজে বের করুন রক্তদাতা কে। আমাদের বড় তথ্য ডাটা হতে যথাযথ ফিল্টার সেট করলেই তথ্য পাওয়া যাবে।&nbsp;</p>
            </div>
          </div>
          <div class="row my-5">
            <div class="col-2 text-center">
              <i class="d-block mx-auto fa  fa-3x fa-handshake-o"></i>
            </div>
            <div class="col-10">
              <h4 class="text-primary">সেচ্ছাসেবক হোন!</h4>
              <p>এই মহৎ এবং খুবই গুরুত্বপুর্ণ কাজে সেচ্ছাসেবক হিসেবে কাজ করতে চান? যোগাযোগ করুন আমাদের সাথে।&nbsp;</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-primary py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8 my-3">
          <h1 class="display-4 text-white text-md-left text-center">শেয়ার করে সবাইকে জানান!</h1>
        </div>
        <div class="col-md-4  text-center align-self-center">
          <a href="https://www.facebook.com/" target="_blank">
            <i class="fa fa-fw fa-facebook fa-3x text-white mx-3"></i>
          </a>
          <a href="https://twitter.com/" target="_blank">
            <i class="fa fa-fw fa-twitter fa-3x text-white mx-3"></i>
          </a>
          <a href="https://www.instagram.com/" target="_blank">
            <i class="fa fa-fw fa-instagram fa-3x text-white mx-3"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
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
        <div class="col-12 col-md-6 align-self-center">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a href="" class="active nav-link" data-toggle="tab" data-target="#tabone">আমাদের সম্পর্কে</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" data-toggle="tab" data-target="#tabtwo">সোশ্যাল মিডিয়া
                <br>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" data-toggle="tab" data-target="#tabthree">যোগাযোগ</a>
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
          <p>© কপিরাইট ২০১৮। সর্বসত্ব সংরক্ষিত</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>

</html>