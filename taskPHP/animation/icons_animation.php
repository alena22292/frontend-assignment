<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/bae5c5edb7.js" crossorigin="anonymous"></script>
  <style>
    body{
      margin: 0;
      padding: 0;
    }
    .middle{
      position: absolute;
      width: 100%;
      text-align: center;
      top: 50%;
      transform: translateY(-50%);
    }
    .btn {
      width: 90px;
      height: 90px;
      background: #193153;
      display: inline-block;
      margin: 10px;
      border-radius: 30%;
      box-shadow: 0 5px 15px -5px #00000070;
      color: #F8F9FA;
      position: relative;
      overflow: hidden;
    }
    .btn::before{
      content: '';
      position: absolute;
      width: 120%;
      height: 120%;
      background: #F8F9FA;
      opacity: 0.8;
      transform: rotate(45deg);
      left: -110%;
      top: 90%;
    }
    .btn i{
      font-size: 35px;
      line-height: 90px;
      transition: 0.3s linear;
    }
    .btn:hover i {
       transform: scale(1.3);
       color: #193153;
    }
    .btn:hover{
      box-shadow: 0 5px 15px -5px #000000;
    }
    .btn:hover::before{
      animation: aaa 0.7s 1;
      top: -10%;
      left: -10%;
    }


    @keyframes aaa {
      0%{
        left: -110%;
        top: 90%;
      }
      50%{
        left: 10%;
        top: -30%;
      }
      100%{
        top: -10%;
        left: -10%;
      }
    }

  </style>
</head>
<body>
  <div class="middle">
    <a class="btn" href="">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a class="btn" href="">
      <i class="fab fa-instagram"></i>
    </a>
    <a class="btn" href="">
      <i class="fab fa-twitter"></i>
    </a>
  </div>

</body>
</html>
