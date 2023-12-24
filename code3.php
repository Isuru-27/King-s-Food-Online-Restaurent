<?php
require('connection.php');

if (isset($_POST['pure'])) {
    $resname = $_POST['resname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $number = $_POST['phoneNumber'];

    $query = "INSERT INTO `order` (name, address, email, number, res_date, res_time) VALUES ('$resname','$address','$email','$number', NOW(), NOW())";
    
    if ($result = mysqli_query($conn, $query)) {
        echo "
        <script>
            alert('Details Received.');
            window.location.href='checkout.php'; // Redirect to checkout page
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Cannot Run Query.');
            window.location.href='reserve.php';
        </script>
        ";
    }
}
?>
