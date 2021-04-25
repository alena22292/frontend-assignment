<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Choosing your event targets</h1>
  <h2>Nothing selected</h2>
  <main>
    <ul class="list-view">
      <li class="list-item" data-id="1" data-name="Sam">1: <span>Sam</span></li>
      <li class="list-item" data-id="4" data-name="Luok">2: <span>Luok</span></li>
      <li class="list-item" data-id="6" data-name="Debrie">3: <span>Debrie</span></li>
    </ul>
  </main>

  <script>
    let myFunction = function(){
      // Add event listeners to element on the page;
      document.querySelector('.list-view').addEventListener('click', onClick);
      // Target will be ul;
      let list = document.querySelectorAll('list-item');
      list.forEach(li => {
        li.addEventListener('click', onClick);
        // Target will be li;
      })
      let spans = document.querySelectorAll('.list-item span');
    }

    let onClick = function(e) {
      // alert('target ' + e.target.tagName + ' and current target ' + e.currentTarget.tagName);
      let id = e.target.getAttribute('data-id');
      let name = e.target.getAttribute('data-name');
      let h2 = document.querySelector('h2');
      h2.textContent = id + ': ' + name;
      // ISSUE is you can't predict what will be used(clicked). Make sure a user will click on the li element neither 'span' or 'ul' as current target;
      // function onClick2 will solve the problem;
    }

    document.addEventListener('DOMContentLoaded', myFunction);
  </script>
</body>
</html>
