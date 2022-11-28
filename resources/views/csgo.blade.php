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
        display:flex;
        justify-content:center;
    }

    .button{
        text-align:center;
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

@include("layouts.footer")
</body>
</html>