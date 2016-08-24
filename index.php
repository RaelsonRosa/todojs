<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>To-do app in JS</title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	<!-- Show off purposes -->
	<a href="" id="changeView" class="changeView">Change View</a>
	<p class="changeView">To edit a todo double click it.<br>And save it clicking elsewhere.</p>
	<!-- ||||||| -->
	<div class="wrapper">
		<div id="header">
			<input id="to-do" type="text" placeholder="to-do?">
			<button id="add-todo">+</button>
		</div>
		<div class="todos" id="todos"></div>
	</div>
	<!-- JS Files -->
	<script src="js/app.js"></script>
	<script>
		// SHOW OFF PURPOSES
		var changeView = document.getElementById('changeView');
		var toggle = false;
		changeView.addEventListener('click', function(e){
			e.preventDefault();
			if (toggle) {
				document.body.style.backgroundColor = '#b3b3b3';
				toggle = false;
				this.dataset.toggle = false;
			}else{
				document.body.style.backgroundColor = 'whitesmoke';
				toggle = true;
				this.dataset.toggle = true;
			}
		}, false);
	</script>
</body>
</html>