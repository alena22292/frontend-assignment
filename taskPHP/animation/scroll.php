<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>



  <script>
    let scrollpos = window.scrollY; // window scroll position
    let wh = window.innerHeight-50; // as soon as element touches bottom with offset event starts
    let element = document.querySelector(".sec1-dmush1"); //element

    window.addEventListener('scroll', function(){
        if(scrollpos > (element.offsetTop - wh)){
            element.classList.add("onScroll");
        }
    });
  </script>
</body>
</html>
