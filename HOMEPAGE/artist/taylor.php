
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
  <title>Taylor Swift</title>
  <link rel="shortcut icon" type="x-icon" href="pic/icon1.png"> 
  <link rel="stylesheet" href="artist.css">
</head>
<body>
  <div class="container">
    <img src="pic/MELOMIX-1 (6).png" class="logo">
    <div class="profile">
      <img src="pic/Taylor swift spotify pic.jpeg" >
      <h1>Taylor Swift</h1>
      <p class="genre">Genres: Pop, country, folk, rock, alternative</p>
      <p class="description">Taylor Alison Swift is an American singer-songwriter. 
        Recognized for her songwriting, musical versatility, artistic reinventions, and influence on the music industry,
         she is a prominent cultural figure of the 21st century.
         Swift began professional songwriting at age 14 and signed with Big Machine Records in 2005 to become a country singer.
         Under Big Machine, she released six studio albums starting with her self-titled album in 2006.</p>
    </div>
    <div class="music">
      <h2>Music</h2>
    
        <table>
            <td>  
            <div class="imgbox">
                <img src="pic/taylor2.jpg"></td>
            <td>
                <div class="title">Lover</div>
            </td>
            <td>
                <audio controls>
                  <source src="song/Taylor Swift - Lover.mp3" type="audio/mp3">
                </audio>
            </td>
        </table>

        <table>
          <td>   
          <div class="imgbox">
              <img src="pic/gorgeous.png"></td>
          <td>
              <div class="title">Gorgeous</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Taylor Swift - Gorgeous (Lyric Video)(MP3_70K).mp3" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td> 
          <div class="imgbox">
              <img src="pic/you belong.webp"></td>
          <td>
              <div class="title">You Belong With Me</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Taylor Swift - You Belong With Me.mp3" type="audio/mp3">
              </audio>
          </td>
         </table>

        <table>
          <td>
          <div class="imgbox">
              <img src="pic/snow.jpg"></td>
          <td>
              <div class="title">Snow On The Beach</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Taylor Swift ft. Lana del Rey - Snow On The Beach (Official Lyric Video)(MP3_70K).mp3" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td>
              
          <div class="imgbox">
              <img src="pic/wildestdreams.jpeg"></td>
          <td>
              <div class="title">Wildest Dreams</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Taylor Swift - Wildest Dreams.mp3" type="audio/mp3">
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
