<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<!-- Form with submit button -->
	Name: <input type="text" id="name">
	<input type="submit" id="name-data" value="GET">
	<div id="retrieve-data"></div>

	<script src="jquery-3.5.1.min.js"></script>
	<script type="text/javascript">
		$("input#name-data").on("click", function(){
			var name = $("input#name").val();
			if ($.trim(name) != ""){
                // $.post('path', JSON format {data: data}, callback function)
	            $.post('./ajax/data.php', {data: name}, function(data){
	            	$("div#retrieve-data").text(data);
				    // console.log(data);   
	            })
			}
		})

	</script>
</body>
</html>