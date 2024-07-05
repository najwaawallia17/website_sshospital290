<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    
    $data = " $name,  $email,  $phone,  $date,   $time" . PHP_EOL;
    
    file_put_contents('reserv.txt', $data, FILE_APPEND);
    
    echo "Reservasi anda telah berhasil, jangan lupa datang waktu!";
}
?>


