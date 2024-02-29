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
  <title>Susant KC</title>
  <link rel="shortcut icon" type="x-icon" href="pic/icon1.png"> 
  <link rel="stylesheet" href="artist.css">
</head>
<body>
  <div class="container">
    <img src="pic/MELOMIX-1 (6).png" class="logo">
    <div class="profile">
      <img src="pic/sushantkc.jpg" >
      <h1>Sushant KC</h1>
      <p class="genre">Genres: Pop, pop rock</p>
      <p class="description">
        Sushant KC is a Nepali Experimental Pop singer, songwriter, guitarist and performer. 
        Currently enrolled in Berklee College of Music, Boston,
         Sushant is pursuing his undergraduate degree in Music Production and Songwriting.
      </p>
    </div>
    <div class="music">
      <h2>Music</h2>
    
        <table>
            <td>  
            <div class="imgbox">
                <img src="pic/gulabi.jpeg"></td>
            <td>
                <div class="title">Gulabi</div>
            </td>
            <td>
                <audio controls>
                  <source src="song/Sushant KC - Gulabi.m4a" type="audio/mp3">
                </audio>
            </td>
        </table>

        <table>
          <td>   
          <div class="imgbox">
              <img src="pic/mayama.jpeg"></td>
          <td>
              <div class="title">Maya Ma</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Sushant KC - Maya ma.m4a" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td> 
          <div class="imgbox">
              <img src="pic/sus.jpeg"></td>
          <td>
              <div class="title">Muskyrayera</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Sushant KC - Muskurayera .m4a" type="audio/mp3">
              </audio>
          </td>
         </table>

        <table>
          <td>
          <div class="imgbox">
              <img src="pic/behos.jpg"></td>
          <td>
              <div class="title">Behos</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Sushant KC - Behos.m4a" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td>
              
          <div class="imgbox">
              <img src="pic/risaune.jpeg"></td>
          <td>
              <div class="title">Risaune Bhaye</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Sushant KC - Risaune Bhaye.mp3" type="audio/mp3">
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
