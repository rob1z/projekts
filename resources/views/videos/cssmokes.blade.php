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
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
section{
  min-height: 100vh;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #009999;
  padding: 50px;
  position: relative;
  overflow: hidden;
}
section::before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.6);
  opacity: 0;
  transition: all 0.4s ease;
}
section.active::before{
  opacity: 1;
}
.container{
  max-width: 800px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  background: #fff;
  padding: 5px 10px;
  position: relative;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
}
 section.active .container{
   visibility: hidden;
 }
.container .main-video{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(1);
  width: 100%;
  z-index: 999;
  opacity: 0;
  pointer-events: none;
  visibility: visible;
  transition: all 0.4s ease;
}
section.active .container .main-video{
  transform:translate(-50%, -50%) scale(1);
  opacity: 1;
  pointer-events: auto;
}
.container .main-video video{
  height: 100%;
  width: 100%;
  object-fit: cover;
  outline: none;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .main-video .close{
  position: absolute;
  top: -10px;
  right: -36px;
  font-size: 35px;
  color: #fff;
  cursor: pointer;
  transition: all 0.3s ease;
  z-index: 1000;
  pointer-events: auto;
  opacity: 0.6;
}
.container .main-video .close:hover{
  opacity: 1;
}
.container .videos{
  position: relative;
  height: 200px;
  width: calc(100% / 2 - 5px);
  margin: 5px 0;
  cursor: pointer;
}
.container .videos::before{
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background: rgba(0,0,0,0.3);
  pointer-events: none;
}
.container .videos video{
  width: 100%;
  height: 100%;
  object-fit: cover;
  outline: none;
  pointer-events: none;
}
.container .videos i{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 50px;
  color: #fff;
  pointer-events: none;
}
@media (max-width: 750px) {
  .container .main-video{
    position: fixed;
    width: 83%;
  }
  .container .videos{
    width: 100%;
    height: 320px;
  }
}
@media (max-width: 600px) {
  .container .videos{
    width: 100%;
    height: 250px;
  }
}

</style>
<body>
  <section>
    <div class="container">
      <div class="main-video">
      <iframe width="400" height="300" src="https://www.youtube.com/embed/gjekrf9NvGM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <i class='bx bx-x close'></i>
      </div>
      <div class="videos">
        <video src="videos/button.mp4"></video>
        <i class='bx bx-play-circle'></i>
      </div>
      <div class="videos">
        <video src="videos/website.mp4"></video>
        <i class='bx bx-play-circle'></i>
      </div>
      <div class="videos">
        <video src="videos/sidebar.mp4"></video>
        <i class='bx bx-play-circle'></i>
      </div>
      <div class="videos">
        <video src="videos/productCard.mp4"></video>
        <i class='bx bx-play-circle'></i>
      </div>
    </div>
  </section>

  <script>
    const section = document.querySelector("section"),
    mainVideo = document.querySelector(".main-video video"),
     videos = document.querySelectorAll(".videos"),
     close = document.querySelector(".close");

     for (var i = 0; i < videos.length; i++) {
       videos[i].addEventListener("click", (e)=>{
         const target = e.target;
         section.classList.add("active");
         target.classList.add("active");
         let src = document.querySelector(".videos.active video").src;
         mainVideo.src = src;

         close.addEventListener("click", ()=>{
           section.classList.remove("active");
           target.classList.remove("active");
           mainVideo.src = "";
         });
       });
     };
  </script>
</body>
</html>
<iframe width="400" height="300" src="https://www.youtube.com/embed/gjekrf9NvGM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="400" height="300" src="https://www.youtube.com/embed/_mza5clVD-k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>