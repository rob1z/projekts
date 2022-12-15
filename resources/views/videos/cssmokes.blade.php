<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>Document</title>
</head>
<style>
    .collapsible {
        max-width:450px;
        overflow: hidden;
        font-weight: 500;
    }
    .collapsible input{
        display: none;
    }
    .collapsible label{
        position: relative;
        font-weight:600;
        background: #fff;
        box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .1), 0 4px 11px 0 rgba(0, 0, 0, .08);
        color: #1c1c6b;
        display:block;
        margin-bottom: 10px;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
        z-index: 1;
    }
    .collapsible label:after{
        content: "";
        position: absolute;
        right: 15px;
        top: 15px;
        width: 18px;
        height: 18px;
        background: url(arrow.svg) no-repeat 0 0;
        transition: all 0.3s ease;
    }
    .collapsible input:checked + label:after{
        transform: rotate(90deg);
    }
    .collapsible-text{
        max-height:1px;
        overflow:hidden;
        border-radius: 4px;
        line-height: 1.4;
        position:relative;
        top:-100%;
        opacity: 0.5;
        transition: all 0.3s ease;
    }
    .collapsible input:checked ~ .collapsible-text{
        max-height: 300px;
        padding-bottom: 25px;
        background: #fff;
        box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .1), 0 4px 11px 0 rgba(0, 0, 0, .08);
        opacity: 1;
        top: 0;
    }
    .collapsible-text h2 {
        margin-bottom: 10px;
        padding: 15px 15px 0;
        color: #1c1c6b;
    }
    .collapsible-text p{
        padding-left:15px;
        padding-right:15px;
    }
    .content{
        display:flex;
        justify-content:center;
    }
</style>
<body>
    <div class="content">
    <div class="wrapper">
        <div class="collapsible">
            <input type="checkbox" id="collapsible-head">
            <label for="collapsible-head"> Anubis Smoke Tutorial </label>
            
            <div class="collapsible-text">
                <h2> Smoke Lineups </h2>
                    <iframe width="400" height="300" src="https://www.youtube.com/embed/_mza5clVD-k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
</div>
    <div class="content">
        <div class="wrapper">
<div class="collapsible">
    <input type="checkbox" id="collapsible-head">
    <label for="collapsible-head"> Inferno Smoke Tutorial </label>
    
    <div class="collapsible-text">
        <h2> Smoke Lineups </h2>
            <iframe width="400" height="300" src="https://www.youtube.com/embed/gjekrf9NvGM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
</div>
</body>
</html>