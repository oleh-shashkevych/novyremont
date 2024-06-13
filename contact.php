<?php
 
if($_POST) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $count = $_POST['count'];
    $hidden_text = $_POST['hidden_text'];
    $product_colors = $_POST['product-colors'];
    
    $visitor_message = "Продукт: " . $hidden_text . "<br>Телефон: " . $phone . "<br>Ім'я: " . $name . "<br>Кількість: " . $count . "<br>HEX-Код кольору: " . $product_colors;
    $recipient = "oleh.equtor@gmail.com";
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . 'wordpress'. "\r\n";
    
    mail($recipient, 'Замовлення', $visitor_message, $headers);
    
    $URL = "/";

    header('Location: '.$URL);
}
?>