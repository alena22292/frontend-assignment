<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(-45deg, royalblue, tomato);
    }
    .bubbles {
      position: absolute;
      width: 100%;
      height: 100%;
      /*z-index: 0;*/
      overflow: hidden;
      top: 0;
      left: 0;
    }
    .bubble{
      position: absolute;
      bottom: 0;
      width: 40px;
      height: 40px;
      background: linear-gradient(-45deg, tomato, royalblue);
      border-radius: 50%;
      opacity: 0.5;
      border-right: 1px solid white;
      animation: flying 10s linear infinite;
      z-index: -100;
    }
    .bubble:nth-child(1){
      width: 40px;
      height: 40px;
      left: 10%;
      animation-duration: 8s;
      animation-delay: 0.2s;
    }
    .bubble:nth-child(2){
      width: 50px;
      height: 50px;
      left: 80%;
      animation-duration: 12s;
      animation-delay: 0.9s;
    }
    .bubble:nth-child(3){
      width: 20px;
      height: 20px;
      right: 60%;
      animation-duration: 8s;
      animation-delay: 1.3s;
    }
    .bubble:nth-child(4){
      width: 60px;
      height: 60px;
      left: 30%;
      animation-duration: 15s;
    }
    .bubble:nth-child(5){
      width: 30px;
      height: 30px;
      right: 10%;
      animation-duration: 10s;
      animation-delay: 0.4s;
    }
    .bubble:nth-child(6){
      width: 50px;
      height: 50px;
      right: 40%;
      animation-duration: 10s;
      animation-delay: 0.8s;
    }
    .bubble:nth-child(7){
      width: 60px;
      height: 60px;
      right: 50%;
      animation-duration: 12s;
      animation-delay: 0.1s;
    }
    .bubble:nth-child(8){
      width: 40px;
      height: 40px;
      left: 40%;
      animation-duration: 12s;
      animation-delay: 0.8s;
    }
    .blick {
        position: absolute;
        top: 7px;
        left: 12px;
        width: 8px;
        height: 15px;
        border-radius: 50%;
        border-left: 3px solid white;
        transform: rotate(45deg);
        z-index: 99;
     }

     @keyframes flying {
        0% {
          bottom: -100px;
          transform: translateX(0);
        }
        50%{
          transform: translateX(100px);
        }
        100% {
          bottom: 900px;
          transform: translateX(-10px);
        }
     }
  </style>
</head>
<body>
  <div class="bubbles">
    <div class="bubble"><div class="blick"></div></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"><div class="blick"></div></div>
    <div class="bubble"></div>
    <div class="bubble"><div class="blick"></div></div>
    <div class="bubble"></div>
    <div class="bubble"><div class="blick"></div></div>
    <div class="bubble"></div>
    <div class="bubble"><div class="blick"></div></div>
  </div>

</body>
</html>
