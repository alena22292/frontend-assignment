<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>My score: <span id="counter">0</span></p>
  <p>Does it work?</p>
  <button onclick="cong()">Yes</button> | <button onclick="tryMore()">No</button>
  <div id="text"></div>
  <br>
  <hr>
  <br>
  <button onclick="incNbr(30)" class="btn-inc" data-score="30">+30</button>
  <button onclick="incNbr(70)" class="btn-inc" data-score="70">+70</button>
  <button onclick="incNbr(50)" class="btn-inc" data-score="50">+50</button>


  <script>
    var speed = 1;
    /* Call this function with a string containing the ID name to
     * the element containing the number you want to do a count animation on.*/
    function incEltNbr(id, num) {
      elt = document.getElementById(id);
      startNbr = Number(document.getElementById(id).innerHTML);
      progress = num + startNbr;
      incNbrRec(startNbr, progress, elt);
    }

    /*A recursive function to increase the number.*/
    function incNbrRec(i, endNbr, elt) {
      if (i <= endNbr) {
        elt.innerHTML = i;
        setTimeout(function() {//Delay a bit before calling the function again.
          incNbrRec(i + 1, endNbr, elt);
        }, speed);
      }
    }

    /*Function called on button click*/
    function incNbr(num){
      incEltNbr("counter", num);
    }

    // incEltNbr("counter"); /*Call this funtion with the ID-name for that element to increase the number within*/

    // Ask a user about feedback:

    function cong(){
      let el = document.getElementById('text');
      text.innerHTML = "Congratulations! Today is your day!"
    }
    function tryMore(){
      let el = document.getElementById('text');
      text.innerHTML = "May you try again..."

    }
  </script>
</body>
</html>
