@include('layouts.csheader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
        body {
 background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR58NhbYHMMOPW_7pj6WpVd1B9RYnL_BvqUgQ&usqp=CAU");
 background-color: #cccccc;
 background-repeat: no-repeat;
 background-size: 100%

}   
    .text {
        color:white;
        text-align:center;
    }

    .title{
        margin-bottom:50px;
    }
    .container{
        background-color:black;
        background: rgba(0, 0, 0, 0.5);
        padding:100px;
        margin-top:75px;
        margin-bottom:75px;
        display:flex;
        justify-content:center;
    }

    .button{
        text-align:center;
    }
    img{
        padding-left:200px;
        padding-right:200px;
        justify-content:center;
    }

</style>
<body>
    <div class="container">
    <div class="text">
        <div class="title">
    <h1>Information about CS:GO</h1>
        </div>
    <p>Counter-Strike: Global Offensive (CS:GO) is a 2012 multiplayer tactical first-person shooter developed by Valve and Hidden Path Entertainment.</p>
        <p> It is the fourth game in the Counter-Strike series. Developed for over two years,</p>
         <p> Global Offensive was released for OS X, PlayStation 3, Windows, and Xbox 360 in August 2012, and for Linux in 2014.</p>
         <p>  Valve still regularly updates the game, both with smaller balancing patches and larger content additions.</p>

       <p> The game pits two teams, Terrorists and Counter-Terrorists, against each other in different objective-based game modes.</p>
       <p>  The most common game modes involve the Terrorists planting a bomb while Counter-Terrorists attempt to stop them,</p>
       <p>   or Counter-Terrorists attempting to rescue hostages that the Terrorists have captured. </p>
       <p>   There are nine official game modes, all of which have distinct characteristics specific to that mode.</p>
       <p>    The game also has matchmaking support that allows players to play on dedicated Valve servers, </p>
       <p> in addition to community-hosted servers with custom maps and game modes. A battle-royale game-mode, "Danger Zone", was introduced in late 2018.</p>
    </div>
</div>
<div class="bd-example">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_184c250dabd%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_184c250dabd%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.00000762939453%22%20y%3D%22217.99999885559083%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_184c250dabf%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_184c250dabf%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22245.9091033935547%22%20y%3D%22217.99999885559083%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_184c250dabf%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_184c250dabf%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22275.90909576416016%22%20y%3D%22217.99999885559083%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
</body>
@include("layouts.footer")
</html>