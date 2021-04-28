<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      margin: 0;
      padding: 0;
      background: #f1f1f1;
    }
    .box{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    .box span {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: inline-block;
      margin: 0 6px;
    }
    .s1{
      background: #e74c3c;
      animation: s1 1s ease-out infinite;
    }
    .s2{
      background: #3498db;
      animation: s2 1s linear infinite;
    }
    .s3{
      background: #27ae60;
      animation: s3 1s ease-out infinite;
    }

    @keyframes s1 {
      25%{
        transform: scale(1);
      }
      50%{
        transform: scale(1.2);
      }
      75%{
        transform: scale(1);
      }
      100%{
        transform: scale(1);
      }
    }

    @keyframes s2 {
      25%{
        transform: scale(1);
      }
      50%{
        transform: scale(1);
      }
      75%{
        transform: scale(1.2);
      }
      100%{
        transform: scale(1);
      }
    }

    @keyframes s3 {
      25%{
        transform: scale(1);
      }
      50%{
        transform: scale(1);
      }
      75%{
        transform: scale(1);
      }
      100%{
        transform: scale(1.2);
      }
    }


  </style>
</head>
<body>
  <div class="box">
    <span class="s1"></span>
    <span class="s2"></span>
    <span class="s3"></span>
  </div>

</body>
</html>

