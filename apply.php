<?php 

  include 'connection.php';

  if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $Semail = $_POST['Semail'];
    $AADHAR = $_POST['aadhar'];
    $CLASS = $_POST['CLASS'];
    $Branch = $_POST['branch'];
    $Subject = $_POST['subject'];
    $Gender = $_POST['gender'];
    $Father = $_POST['father'];
    $Mother = $_POST['mother'];
    $Guardian = $_POST['guardian'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $Address = $_POST['address'];

    if(empty($fname)==true){
     echo '<script>alert("Please enter First Name")</script>';
    }elseif (empty($lname)==true) {
      echo '<script>alert("Please enter Last Name")</script>';
    }elseif (empty($AADHAR)==true) {
      echo '<script>alert("Please enter AADHAR")</script>';
    }elseif (empty($Address)==true) {
      echo '<script>alert("Please enter Address")</script>';
    }elseif (empty($CLASS)==true) {
      echo '<script>alert("Please Select Class")</script>';
    }elseif (empty($Gender)==true) {
      echo '<script>alert("Please Select Gender")</script>';
    }elseif (empty($Father and $Mother and $Guardian)==true) {
      echo '<script>alert("Please enter Father, Mother or Guardian Name")</script>';
    }elseif (empty($Phone)==true) {
      echo '<script>alert("Please enter Phone Number")</script>';
    }else{

    $queryAdd="INSERT INTO `student`( `fname`, `lname`, `Class`, `Gender`, `Branch`, `Subject`, `Semail`, `AADHAR`, `Father`, `Mother`, `Guardian`, `Phone`, `Email`, `Address`, `password`) VALUES ('$fname', '$lname', '$CLASS', '$Gender', '$Branch', '$Subject', '$Semail', '$AADHAR', '$Father', '$Mother', '$Guardian', '$Phone', '$Email', '$Address', '$AADHAR')";
    mysqli_query($con,$queryAdd);
    if($queryAdd){
      header("location:upload.php?aadhar=$AADHAR");
      //echo "<meta http-equiv='refresh' content='0'>";
    }  
  }
}
  ?>




<!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Addmission</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
      fieldset {
        background-color: #eeeeee;
        margin: 10px;
      }

      legend {
        background-color: #26082F;
        color: white;
        padding: 5px 5px;
      }

      .r {
        margin: 5px;
      }
    </style>
  </head>
  <body>
    <br><br>
    <div class="container">
      <fieldset >
        <legend align= center>Apply for Addmission</legend>
        <div class="col-lg-12" style=" overflow: display;">
          <form method="post" action="">

    <label><h5>Students Details: </h5></label>
    <div class="col">
      <input type="text" class="form-control" placeholder="First Name" name="fname">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last Name" name="lname">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Student Email" name="Semail">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="AADHAR Card no" name="aadhar">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Address" name="address">
    </div>
    <br>
   <center>
    &nbsp;&nbsp;&nbsp;
  <select name="CLASS" id="CLASS">
    <option value="">Class</option>
    <option value="nur">Nurserry</option>
    <option value="LKG">LKG</option>
    <option value="UKG">UKG</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
  </select>
 
  &nbsp;&nbsp;&nbsp;
  <select name="branch" id="branch">
    <option value="">Branch</option>
    <option value="SCIENCE">Science</option>
    <option value="ARTS">Arts</option>
  </select>
  &nbsp;&nbsp;&nbsp;
    <select name="subject" id="subject">
    <option value="">Subject</option>
    <option value="Botony">Botony</option>
    <option value="Zology">Zolozy</option>
    <option value="Maths">Maths</option>
    <option value="Sanskrit">Sanskrit</option>
    <option value="Art">Art</option>
  </select>
  &nbsp;&nbsp;&nbsp;
    <select name="gender" id="gender">
    <option value="">Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>
  </select>
  </center>
<br><br>
    <label><h5>Parents Details: </h5></label>
    <div class="col">
      <input type="text" class="form-control" placeholder="Father's Name" name="father">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Mother's Name" name="mother">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Guardian's Name" name="guardian">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Phone no." name="phone">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Parents/Guardians Email" name="email">
    </div>

        </div>
        <br>    

            <center>
            <input type="submit"  class=" btn btn-success" value="Next" name="submit"></input>
          </center>      
        </form>
      </fieldset>
    </div>


  </body>

<script>
    $(document).ready(function () {
    var b = document.getElementById("cl");
    $('#cl').change(function () {
      var selectClass = b.options[b.selectedIndex].value;
    if(selectClass == 9){
            
            $('#branch').prop('disabled', false);
    }else {
      $('#branch').prop('disabled', true);
    }
  });
});

</script>
</html>
