<?php
  include'C:\xampp\htdocs\Melomixx\HOMEPAGE\connect.php';
  session_start();
  if(!isset($_SESSION['login'])|| $_SESSION['login']!= true){
    header('location:/Melomixx/login/login.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IU</title>
  <link rel="shortcut icon" type="x-icon" href="pic/icon1.png"> 
  <link rel="stylesheet" href="artist.css">
</head>
<body>
  <div class="container">
    <img src="pic/MELOMIX-1 (6).png" class="logo">
    <div class="profile">
      <img src="pic/iu.jpeg" >
      <h1>Lee Ji-eun</h1>
      <p class="genre">Genres: Kpop, R&B, soul</p>
      <p class="description">Lee Ji-eun also known by her stage name IU (아이유), is a South Korean singer-songwriter, composer, and actress.
         She signed with LOEN Entertainment in 2007 as a trainee and debuted as a singer with her first extended play Lost and Found.
         IU has released a total of five studio albums and nine EPs, five of which have reached number one on the Gaon Album Chart, 
        making her the artist with the most number-one songs in South Korea.
      </p>
    </div>
    <div class="music">
      <h2>Music</h2>
    
        <table>
            <td>  
            <div class="imgbox">
                <img src="pic/celebrity.jpeg"></td>
            <td>
                <div class="title">Celebrity</div>
            </td>
            <td>
                <audio controls>
                  <source src="song/IU(아이유) _ Celebrity.m4a" type="audio/mp3">
                </audio>
            </td>
        </table>

        <table>
          <td>   
          <div class="imgbox">
              <img src="pic/lilac.jpeg"></td>
          <td>
              <div class="title">Lilac</div>
          </td>
          <td>
              <audio controls>
                <source src="song/IU(아이유)_LILAC.m4a" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td> 
          <div class="imgbox">
              <img src="pic/blueming.jpg"></td>
          <td>
              <div class="title">Blueming</div>
          </td>
          <td>
              <audio controls>
                <source src="song/IU(아이유) _-Blueming.m4a" type="audio/mp3">
              </audio>
          </td>
         </table>

        <table>
          <td>
          <div class="imgbox">
              <img src="pic/bbibbi.jpg"></td>
          <td>
              <div class="title">BBIBBI</div>
          </td>
          <td>
              <audio controls>
                <source src="song/IU(아이유) _ BBIBBI.m4a" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td>
              
          <div class="imgbox">
              <img src="pic/pallate.jpg"></td>
          <td>
              <div class="title">Palette</div>
          </td>
          <td>
              <audio controls>
                <source src="song/IU(아이유) _ Palette.m4a" type="audio/mp3">
              </audio>
          </td>
        </table>
    </div>
  </div>
  <script src="artist.js"></script>
  <!-- side meanu bar--> 
  <div id="SideNav">
    <nav>
        <ul>
            <li><a href="/Melomixx/welcomepage/welcomepage.php">HOME</a></li>
            <li><a href="/Melomixx/Aboutus/aboutus.php">ABOUT US</a></li>
            <li><a href="#">SERVICES</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="/Melomixx/login/login.php">LOG OUT</a></li>
        </ul>
    </nav>
</div>
<div id="menuBtn">
    <img src="pic/menu.png" id="menu">
</div>
<script>
    var menuBtn= document.getElementById("menuBtn")
    var SideNav= document.getElementById("SideNav")
    var menu= document.getElementById("menu")

    SideNav.style.right="-250px";

    menuBtn.onclick = function(){
        if(SideNav.style.right=="-250px"){
            SideNav.style.right= "0";
            menu.src = "close.png";
        }
        else{
            SideNav.style.right = "-250px";
            menu.src = "menu.png";
        }
    }
</script> 
<!--end of nav bar-->
<!-- ------------------------------------------------- -->
</body>
</html>
