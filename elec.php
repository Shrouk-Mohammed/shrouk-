<?php
$elec_price = " ";
define('vat', .2);
$price = 0;
$message = " ";
$totalPrice = 0;
if ($_POST) {
    $elec_rate = $_POST['elec_price'];
    if ($elec_rate == NULL) {
        $message = "please enter a value";
    } else {
        if ($elec_rate <= 50) {
            $price = $elec_rate * .50;
        } else if ($elec_rate <= 150) {
            $price = $elec_rate * .75;
        } else if ($elec_rate <= 250) {
            $price = $elec_rate * 1.2;
        } else {
            $price = $elec_rate * 1.5;
        }
        $totalPrice = $price + ($price * vat);
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
                    Calculate total electricity bill
                </div>
            </div>
            <div class="col-6 offset-3 ">
                <form method="post" class="border border-success p-3 ">
                    <div class="form-group">
                        <label for="elec_price">electricity unit charge </label>
                        <input type="number" name="elec_price" id="num1" class="form-control ">
                    </div>
                    <button class="btn btn-outline-dark btn-sm">check</button>
                </form>
            </div>
            <div class="col-12 text-center m-3 ">
                <?php echo $message ?>
                <?php echo "<br>" ?>
                <?php echo "total electricity bill is:" . $price . " LE" ?>
                <?php echo "<br>" ?>

                <?php echo " total electricity bill with additional surcharge is  :" . $totalPrice . " LE" ?>
               

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