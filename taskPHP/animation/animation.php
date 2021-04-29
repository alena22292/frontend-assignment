<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style type="text/css">
    body{
      height: 100vh;
      margin: 20px;
      padding: 20px;
    }
    /*#rect {
      width: 60px;
      height: 60px;
      background-color: red;
      border-radius: 30%;
      position: absolute;
      top: 30px;
      left: 30px;
    }*/
  </style>
</head>
<body>
  <div id="field">
    <!-- Ex. 1 -->
    <p><button onclick="myFunction()">Start Animation</button></p>
    <div id="rect"></div>

    <!-- Ex. 2 -->
    <svg width="900" height="650">
      <circle id="circle"
              cx="450"
              cy="325"
              r="50"
              fill="blue"/>
    </svg>

    <!-- Ex. 3 -->
    <svg width="100%" height="100%" >
      <circle id="c1" cx="10" cy="10" r="50" fill="#440a67"/>
      <circle id="c2" cx="0" cy="0" r="50" fill="#9f5f80"/>
      <circle id="c3" cx="0" cy="0" r="50" fill="#93329e"/>
      <circle id="c4" cx="0" cy="0" r="50" fill="#b4aee8"/>
      <circle id="c5" cx="0" cy="0" r="50" fill="#ffe3fe"/>
    </svg>
  </div>
  <script>
    // 1 rectangle movement with setInterval;
    function myFunction() {
      let element = document.getElementById("rect");
      let position = 20;
      let timing = setInterval(secondFunction, 1);

      function secondFunction() {
        if (position == 523) {
          clearInterval(timing);
          element.style.top = '30px';
          element.style.right = '80px';
        } else {
          position ++;
          element.style.top = position + 'px';
          element.style.left = position + 'px';
        }
      }
    }

    // 2 mousemove with svg file;

    let circle = document.getElementById("circle");
    window.addEventListener("mousemove", function(e) {
      console.log(e);
      circle.setAttribute('cx', e.pageX);
      circle.setAttribute('cy', e.pageY);
    }, false);


    // 3 mousemove

    window.addEventListener("mousemove", function(e){
      for (let i = 1; i < 6; i ++) {
        let id = "c" + i;
        document.getElementById(id).setAttribute('cx', e.pageX * (1-i/5));
        document.getElementById(id).setAttribute('cy', e.pageY * (1-i/5));
      }
    })


  </script>
</body>
</html>
