<?php
$degree = " ";
$sum=" ";
$average=" ";
$precentage=" ";


if($_POST)
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $num5 = $_POST['num5'];
    $sum=$num1 + $num2 + $num3 + $num4 + $num5;
    $average=$sum/5.0;
    $precentage=($sum/500)*100;
    if($average >= 90){
        $degree = "A";
    }elseif($average >= 80 && $average < 90){
        $degree = "B";
    }elseif($average >= 70 && $average < 80){
        $degree = "C";
    }elseif($average >= 60 && $average < 70){
        $degree = "D";
    }else{
        $degree = "E";
    }
    
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-12 my-5">
                  <div class="h1 text-center text-success">
                      Get grade of subject and the precentage of total degree
                  </div>
              </div>
              <div class="col-6 offset-3 ">
                  <form method="post" class="border border-success p-3 ">
                      <div class="form-group">
                          <label for="num1">enter grade of A </label>
                          <input type="number" name="num1" id="num1" class="form-control ">
                      </div>
                      <div class="form-group">
                          <label for="num2">enter grade of B </label>
                          <input type="number" name="num2" id="num2" class="form-control ">
                      </div>
                      <div class="form-group">
                          <label for="num3">enter grade of C </label>
                          <input type="number" name="num3" id="num3" class="form-control ">
                      </div>
                      <div class="form-group">
                          <label for="num4">enter grade of D </label>
                          <input type="number" name="num4" id="num4" class="form-control ">
                      </div>
                      <div class="form-group">
                          <label for="num5">enter grade of E </label>
                          <input type="number" name="num5" id="num5" class="form-control ">
                      </div>
                     
                      <button class="btn btn-outline-dark btn-sm">check</button>
                  </form>
              </div>
              <div class="col-12 text-center m-3 ">
                      <?php echo "total of subject =".$sum."/500" ?>
                      <?php echo "<br>" ?>
                      <?php echo "precentage of subject =".$precentage."%" ?>
                      <?php echo "<br>" ?>
                      <?php echo "grade of subject =".$degree ?>
                      
                   

             </div>
          </div>

          </div>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>