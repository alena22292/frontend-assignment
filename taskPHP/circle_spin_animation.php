<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #3A526B;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: "montserrat" sans-serif;
      color: #FFFFFF;
    }
    .loading {
      width: 200px;
      height: 200px;
      box-sizing: border-box;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      border-top: 7px solid #e74c3c;
      position: relative;
      animation: a1 4s linear infinite;
    }
    .loading::before, .loading::after {
      content: '';
      width: 200px;
      height: 200px;
      /*background: white;*/
      position: absolute;
      box-sizing: border-box;
      left: 0;
      top: -7px;
      border-radius: 50%;
    }
    .loading::before {
      border-top: 7px solid #e67e22;
      transform: rotate(120deg);
    }
    .loading::after {
      border-top: 7px solid #3498db;
      transform: rotate(240deg);
    }
    .loading span {
      animation: a2 4s linear infinite;
    }

    @keyframes a1 {
      to {transform: rotate(360deg);}
    }
    @keyframes a2 {
      to {transform: rotate(-360deg);}
    }
  </style>
</head>
<body>
  <div class="loading">
     <span>Loading...</span>
  </div>

</body>
</html>

