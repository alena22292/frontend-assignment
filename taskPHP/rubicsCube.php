<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rubics Cube</title>
  <style>
    body{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .rubiksCube {
        top: 130px; left: 250px; width: 400px; height: 400px;
        transform-style: preserve-3d;
        position: relative;
    }
    .rubiksCube div {
        position: absolute;
        height: 400px;
        width: 400px;
        opacity: 0.9;
    }
    .face1green {
        top: 0; left: 0;
        transform: translate3d(0,0,200px); }
    .face2blue {
        top: 0; left: 0;
        transform: translate3d(0,0,-200px); }
    .face3yellow {
        top: 0; left: 100%;
        transform-origin: 0 0;
        transform: translate3d(0,0,200px) rotate3d(0,1,0,90deg); }
    .face4red {
        top: 100%; left: 0;
        transform-origin: 0 0;
        transform: translate3d(0,0,200px) rotate3d(1,0,0,-90deg); }
    .face5white {
        top: 0; right: 100%;
        transform-origin: 100% 0;
        transform: translate3d(0,0,200px) rotate3d(0,1,0,-90deg); }
    .face6orange {
        bottom: 100%; left: 0;
        transform-origin: 0 100%;
        transform: translate3d(0,0,200px) rotate3d(1,0,0,90deg); }

  </style>
</head>
<body>
  <script>
    let rotateX = 0, rotateY = 0;
    let cursorPosX = 0, cursorPosY = 0;

    document.onkeydown = async function(e) {
      if     (e.keyCode === 37) rotateY -= 2
      else if(e.keyCode === 38) rotateX += 2
      else if(e.keyCode === 39) rotateY += 2
      else if(e.keyCode === 40) rotateX -= 2

      document.querySelector('.rubiksCube').style.transform =
              'rotateY(' + rotateY + 'deg)'+'rotateX(' + rotateX + 'deg)';
           // `rotateY(${rotateY}deg)rotateX(${rotateX}deg)`;
    }

    window.addEventListener('mousemove', function(e) {
      if (cursorPosX < (e.pageX-2)) { rotateY += 2 }
        else if (cursorPosX > (e.pageX+2)) { rotateY -= 2 };
      if (cursorPosY < (e.pageY-2)) { rotateX += 2 }
        else if (cursorPosY > (e.pageY+2)){ rotateX -= 2 };
      cursorPosX = e.pageX;
      cursorPosY = e.pageY;

      document.querySelector('.rubiksCube').style.transform =
        'rotateX(' + rotateX + 'deg)'+'rotateY(' + rotateY + 'deg)';
    }, false);

    // Perspective view:
    // let view = 2000;

    // document.onkeydown = function(e) {
    //   if     (e.keyCode === 38) view -= 50
    //   else if(e.keyCode === 40) view += 50

    //   document.querySelector('.rubiksCube').style.perspective = view + 'px';
    // }
  </script>

  <div class="rubiksCube">
    <div class="face1green"><img src="images/1.jpg" alt=""></div>
    <div class="face2blue"><img src="images/2.jpg" alt=""></div>
    <div class="face3yellow"><img src="images/3.jpg" alt=""></div>
    <div class="face4red"><img src="images/4.jpg" alt=""></div>
    <div class="face5white"><img src="images/5.jpg" alt=""></div>
    <div class="face6orange"><img src="images/6.jpg" alt=""></div>
  </div>

</body>
</html>
