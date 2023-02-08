<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <!--Bootstarp UI-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>

  <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Insert PDF</title>
    <style media="screen">
      div{
        
        height: 100vh;
        padding: 30px;
      }
      form{
        margin-left: 70px;
      }
      label{
        font-size: 25px;
        font-weight: bold;
      }
      #pdf{
        font-size: 20px;
        font-weight: bold;
        margin-top: 10px;
      }
      #upload{
        font-size: 20px;
        font-weight: bold;
        margin-left: 100px;
      }

      .ss {
        border: 2px solid black;
        padding: 55px;
        height: 450px;
        width: 550px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row"> 
        <div class="col-12 d-flex justify-content-center ">
          <form class="d-flex flex-column justify-content-center ss" action="insert.php" method="post" enctype="multipart/form-data">
                <label class="text-center">Choose Your PDF File</label><br>
                <input id="pdf" type="file" name="pdf" value="" required><br><br>
                <input id="upload" type="submit" name="submit" value="Upload">
                <?php
                include('db.php');

                if (isset($_POST['submit'])) {
                  $pdf=$_FILES['pdf']['name'];
                  $pdf_type=$_FILES['pdf']['type'];
                  $pdf_size=$_FILES['pdf']['size'];
                  $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
                  $pdf_store="pdf".$pdf;

                  move_uploaded_file($pdf_tem_loc,$pdf_store);

                  $sql="INSERT INTO pdf_file(pdf) values('$pdf')";
                  $query=mysqli_query($conn,$sql);



                }



              ?>

              </form>
          </div>
        </div>
      </div>
    </div>
  </body>