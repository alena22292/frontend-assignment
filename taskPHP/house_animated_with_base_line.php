<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
      .cls-1 {
        isolation: isolate;
      }

      .cls-2 {
        fill: #ccc;
      }

      .cls-3 {
        fill: none;
        stroke: #090;
        stroke-linecap: round;
        stroke-linejoin: round;
      }

      .house {
        opacity: 0.1;
      }
      .house:hover {
        opacity: 0.9;
      }

      .base-line .start-animation {
        animation: shrink 2s linear 1;
      }

      @keyframes shrink {
        0%{stroke: #A1C7D4; stroke-width: 6px; opacity: 0.1;}
        25%{stroke: #A1C7D4; stroke-width: 6px; opacity: 0.6;}
        50%{stroke: #A1C7D4; stroke-width: 6px; opacity: 1;}
        75%{stroke: #A1C7D4; stroke-width: 6px; opacity: 0.6;}
        100%{
          stroke: #A1C7D4;
          stroke-width: 6px;
          opacity: 0.1;
         /* After the end animation base-line have to be unactive display:none; */
        }
      }
  </style>
</head>
<body>
  <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2586 1582.85">
  <defs>
    <style>
      .cls-1 {
        isolation: isolate;
      }

      .cls-2 {
        fill: none;
        stroke: #323232;
        stroke-linecap: round;
        stroke-linejoin: round;
      }

      .cls-3 {
        fill: #fff;
      }
    </style>



</body>
</html>
