<?php 
$isim = $_GET['isim'];
$eposta = $_GET['email'];
$cinsiyet = $_GET['cinsiyet'];
$dogum = $_GET['dogum'];
$mesaj = $_GET['mesaj'];

echo "İsim:".$isim."<br>";
echo "E-Mail:".$eposta."<br>";
echo "Cinsiyet:".$cinsiyet."<br>";
echo "Doğum Tarihi:".$dogum."<br>";
echo "Mesaj:".$mesaj."<br>";
?>