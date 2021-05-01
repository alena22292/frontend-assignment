<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>My score is +<span id="counter">0</span></p>

  <button onclick="updateCount(30)" class="btn-inc" data-score="30">+30</button>
  <button onclick="updateCount(70)" class="btn-inc" data-score="70">+70</button>
  <button onclick="updateCount(50)" class="btn-inc" data-score="50">+50</button>


  <script>
    const speed = 2000;
    const el = document.getElementById('counter');

    const updateCount = (plus) => {
      let baseNum = +el.innerText;
      const inc = plus / speed;
      console.log(el.innerText);

      if (baseNum < (plus + baseNum)) {
        el.innerText = Math.ceil(baseNum + inc);
        setTimeout(updateCount, 1);
      }else{
        el.innerText = plus + baseNum;
      }
    }


  </script>
</body>
</html>
