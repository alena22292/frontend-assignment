<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Interactive positioning [SVG elements] Regular expressions</title>
	</head>
<body>
  <svg width = "900" height = "633">
    <g transform = "translate(450)">
      <g id = "group1" transform = "scale(1 1)">
        <svg x = "0" y = "100" width = "600" height = "600">
          <image xlink:href = "images/image.jpg"/>
        </svg>
      </g>
    </g>
  </svg>
  <script>
    let group = document.getElementById("group1");
    let scaleExpression = /.*\((\d*) \d*\)/g.exec(group.getAttribute("transform"));
    let newScaleX = parseInt(scaleExpression[1],10);
    let cursorPos = 0;
    window.addEventListener('mousemove', function(e) {
      group.setAttribute("transform", "scale(" + newScaleX + " 1" + ")");
      if (cursorPos < e.pageX) { newScaleX -= 0.05 } else { newScaleX += 0.05 };
      cursorPos = e.pageX;
      console.log("cursorPos:", cursorPos, "newScaleX:", newScaleX);
    }, false);
  </script>
</body>
</html>

