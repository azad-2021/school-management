<?php 

  include 'connection.php';

  $AADHAR=$_GET['aadhar'];

  $query="SELECT * FROM students WHERE AADHAR=$AADHAR";
  $result=mysqli_query($con,$query);


  if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_name = 'data';
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $tmp = explode('.', $_FILES['image']['name']);
    $file_ext = strtolower(end($tmp));    
    $newfilename=$AADHAR.".".$file_ext;         
    $extensions= array("jpeg","jpg");
              
    if(in_array($file_ext,$extensions)=== false){
      $errors ='<script>alert("File must be JPG, JPEG")</script>';
    }
              
    if($file_size > 524288){
      $errors ='<script>alert("File must be less than 500KB")</script>';
    }
              
    if(empty($errors)==true){
      move_uploaded_file($file_tmp,"student image/".$newfilename);
    }else{
    print_r($errors);
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
        
        <div class="col-lg-12" style=" overflow: display;">
          <div class="col">
          <legend align= center>Upload Photo</legend>
          <form name="fileUpload" action = "" method = "POST" enctype = "multipart/form-data">  
          <input type = "file" name = "image" />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <br>
          <center>
            <p>File must be in jpeg format with size not more than 500KB</p>
            <center>
            <input type="submit"  class=" btn btn-success" value="Next" name="submit"></input>
          </center>      
        </form>
      </div>
      </fieldset>
    </div>


  </body>
</html>
