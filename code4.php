<?php
require('connection.php');

if (isset($_POST['pure1'])) {
    $meth = $_POST['method'];
    $cnum = $_POST['cardnum'];
    $chold = $_POST['carduser'];
    $exmon = $_POST['month'];
    $exyear = $_POST['Year'];
    $cvc = $_POST['cvc'];

    $query = "INSERT INTO `payment`(`pay_method`, `card_num`, `card_holder`, `ex_month`, `ex_year`, `cvc_num`, `pay_time`, `pay_date`) VALUES ('$meth','$cnum','$chold','$exmon','$exyear','$cvc',NOW(),NOW())";

    if ($result = mysqli_query($conn, $query)) {
        echo "
        <script>
        alert('Details Received.');
        window.location.href='add_cart.php'; // Redirect to login page
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Cannot Run Query.');
            window.location.href='checkout.php';
        </script>
        ";
    }


}
?>
