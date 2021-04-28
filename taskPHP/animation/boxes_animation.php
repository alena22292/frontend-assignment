<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main page</title>

  <style>

    html,body{
      margin: 0;
      height: 100%;
    }
    body{
      background: linear-gradient(-45deg, royalblue, tomato);
      display: grid;
      place-items: center;
    }

    .container{
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-auto-rows: 1fr;
      width: 120px;
      height: 120px;
      gap: 5px;
      padding: 5px;
    }

    div::before {
      content: "";
      padding-top: 100%;
      /*   grid-column: 1/1   */
      grid-column: 1/1;
      grid-row: 1/1;
    }

    .house:first-of-type {
      grid-column: 1/1;
      grid-row: 1/1;
    }

    .house {
      border-radius: 4px;
    }

    .house:nth-of-type(1){
      background: lightgreen;
      animation: shrink 3s ease-out infinite;
    }
    .house:nth-of-type(2){
      background: lightsalmon;
      animation: shrink 3s ease-out infinite;
      animation-delay: 0.25s;
    }
    .house:nth-of-type(3){
      background: lightblue;
      animation: shrink 3s ease-out infinite;
      animation-delay: 0.75s;
    }
    .house:nth-of-type(4){
      background: lightgray;
      animation: shrink 3s ease-out infinite;
      animation-delay: 0.5s;
    }
    @-webkit-keyframes shrink{
      /*to {background: transparent;}*/
      0% {opacity: 0.1;}
      50% {opacity: 1;}
      100% {opacity: 0.1;}
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="house"></div>
    <div class="house"></div>
    <div class="house"></div>
    <div class="house"></div>
  </div>
</body>
</html>
