<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Video Gallery</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

body{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background: cornflowerblue;
}

.container{
    width: 1100px;
    height: 480px;
    display: flex;   
    background: rgb(238, 236, 236);
}

.container .iframes{
    width: 20%;
    padding: 10px 0 10px 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.container .iframes iframe{
    width: 95%;
    height: 100px;
    margin: 10px;
    object-fit: cover;
    cursor: pointer;
    transition: 0.2s;
}

.container .iframes iframe:nth-child(1){
    margin-top: 0;
}

.container .iframes iframe:hover,
.container .iframes .active{
    transform: scale(1.06);
    border: 3px solid blue;
}

.container .main-iframe{
    width: 80%;
    padding: 10px;
}

.container .main-iframe iframe{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border: 3px solid blue;
}
</style>
<body>

    <div class="container">
        <div class="iframes">
            <video class="active" src="https://www.youtube.com/watch?v=SgXsZNNponM" muted></video>
            <iframe src="https://www.youtube.com/embed/_mza5clVD-k"></iframe>
            <video src="https://www.youtube.com/watch?v=psUwkbpYbV0" muted></video>
            <video src="https://www.youtube.com/watch?v=SgXsZNNponM" muted></video>
        </div>
        <div class="main-video">
            <video src="https://www.youtube.com/watch?v=_mza5clVD-k" muted controls autoplay></video>
        </div>
    </div>


    <script>

        $(document).ready(function(){

            $('.iframes iframe').click(function(){

                $(this).addClass('active').siblings().removeClass('active');

                var src = $(this).attr('src');
                $('.main-iframe iframe').attr('src',src);
            });
        });

    </script>

</body>
</html>
    
</body>
</html>