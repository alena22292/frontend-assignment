<!DOCTYPE HTML>
<html>
<head>
    <style>
        .droptarget {
          float: left;
          width: 100px;
          height: 35px;
          margin: 15px;
          margin-right: 100px;
          padding: 10px;
          border: 1px solid #aaaaaa;
        }
    </style>
</head>
<body>

    <p>Drag the p element back and forth between the two rectangles:</p>

    <div
      class="droptarget"
      ondrop="drop(event)"
      ondragenter="dragEnter(event)"
      ondragleave="dragLeave(event)"
      ondragover="allowDrop(event)">
      <p
        ondragstart="dragStart(event)"
        draggable="true"
        id="dragtarget">
        Drag me!
      </p>
    </div>

    <div
      class="droptarget"
      ondragenter="dragEnter(event)"
      ondragleave="dragLeave(event)"
      ondrop="drop(event)"
      ondragover="allowDrop(event)">
    </div>

    <p style="clear:both;" id="demo"></p>

<script>
function dragStart(event) {
  event.dataTransfer.setData("Text", event.target.id);
}

function dragEnter(event) {
  if ( event.target.className == "droptarget" ) {
    event.target.style.border = "3px dotted red";
    document.getElementById("demo").innerHTML = "Entered the dropzone";
  }
}

function dragLeave(event) {
  if ( event.target.className == "droptarget" ) {
    event.target.style.border = "";
    document.getElementById("demo").innerHTML = "Left the dropzone";
  }
}

function allowDrop(event) {
  event.preventDefault();
}

function drop(event) {
  event.preventDefault();
  var data = event.dataTransfer.getData("Text");
  event.target.appendChild(document.getElementById(data));
}
</script>

</body>
</html>
