<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/bae5c5edb7.js" crossorigin="anonymous"></script>
  <style>
    *{
      margin: 0;
      padding: 0;
      text-decoration: none;
      box-sizing: border-box;
      font-family: sans-serif;
    }
    body{
      background: #f1f1f1f1;
    }
    .pagination{
      position: absolute;
      top: 50%;
      width: 100%;
      text-align: center;
      transform: translateY(-50%);
    }
    .pagination a{
      margin: 6px 1px;
      display: inline-block;
      width: 60px;
      background: #2c3e50;
      height: 60px;
      color: #fff;
      line-height: 60px;
      font-weight: 600;
      transition: 0.3s;
      position: relative;
      padding-right: 19px;
    }
    .pagination a i {
      line-height: 59px;
      font-weight: 600;
      transition: 0.3s;
      position: relative;
    }
    .pagination a:hover {
      color: #e74c3c;
    }
    .pagination a i:hover {
      color: #e74c3c;
    }

    .active {
      color: #e74c3c !important;
    }

    .prev{
      border-radius: 30px 0 0 30px;
    }
    .next{
      border-radius: 0 30px 30px 0;
    }
    /*Psevdo class*/
    .pagination a::before, .pagination a::after{
      content: '';
      position: absolute;
      border-top: 30px solid transparent;
      border-bottom: 30px solid transparent;
    }
    .num::before, .next::before{
      border-right: 20px solid #2c3e50;
      right: 100%;
    }
    .num::after, .prev::after {
      border-right: 20px solid #f1f1f1;
      right: 0;
    }


  </style>
</head>
<body>
  <div class="pagination">
    <a href="#" class="prev"><i class="fas fa-angle-left"></i></a>
    <a href="" class="num active">1</a>
    <a href="" class="num">2</a>
    <a href="" class="num">3</a>
    <a href="" class="num">4</a>
    <a href="" class="num">5</a>
    <a href="" class="next"><i class="fas fa-angle-right"></i></a>
  </div>
</body>
</html>
