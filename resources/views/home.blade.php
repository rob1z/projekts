<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
    <div class="imgbackground"> 
    <style>
        body {
            background-image: linear-gradient(to bottom, black , rgba(35, 7, 172, 0.8), black);

}
        .main{
            text-align: center;
            margin:50px;
            display: flex;
            padding:20px;
        }
        .imgshadow {

            transition: 0.3s;
            border-radius:50x;
            margin:50px;
        }
        

        .imgsize{
            width:300px;
            height: 200px;
            overflow: hidden;
            background-image:fill;
        }
        img {
  border-radius: 30%;
  height:400px;
  width:100%;

}
img:hover {
  opacity: 0.6;

}

    .texttop{
        text-align:center;
        color:white;
        padding:15px;
        margin:150px
    }
    h1{
        color:white;
    }
    </style>
</head>
<body>
<div class="texttop">
    <b><h1> Gaming Community</h1></b>
    <b><p> Game Updates and E-sport.</p></b>
</div>
    <div class="container">
        <div class="main">
                {{-- <button type="button" class="btn btn-outline-secondary btn-lg">CS:GO</button> --}}
                <div class="imgshadow">
                    <h1>CSGO</h1>
                <a href="csgo">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG8hqYGB_OhqinBCokeqRLTYY51fKmzxGEig&usqp=CAU" alt="Avatar" class="imgsize">
                </a>
            </div>
                {{-- <button type="button" class="btn btn-outline-secondary btn-lg">CS:GO</button> --}}
                <div class="imgshadow">
                    <h1>VALORANT</h1>
                <a href="valorant">

                    <img src="https://www.larazon.es/resizer/7ScRzjJkrqpbUVkNo9hX3VWmz94=/600x400/smart/filters:format(jpg)/cloudfront-eu-central-1.images.arcpublishing.com/larazon/AFFWT36JVVBWDELWUDKGZJMU34.JPG" alt="Avatar" class="imgsize">
                    
                </a>
            </div>
                {{-- <button type="button" class="btn btn-outline-secondary btn-lg">CS:GO</button> --}}
                <div class="imgshadow">
                    <h1>MINECRAFT</h1>
                <a href="minecraft">
                    <img src="data:image/jpeg;base64,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" alt="Avatar" class="imgsize">
                </a>
            </div>
        </div>
    </div>
</body>
</div>
</html>