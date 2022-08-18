
<html>
	<head>
		<meta charset="utf-8">
		<title>Tooltip example</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script>
			$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			})
		</script>
	</head>
	<body>
    <button type="button" data-toggle="tooltip"  data-placement="bottom" title="Hello World" style="border:2.5px solid #1965e0; border-radius: 20px; padding: 8px 24px 8px 24px; height: 40px; display:flex; align-items:center;">
      <img src="Plus.svg">
      <span style="color: #1965e0; font-size:14px;"><b>Button</b></span>
    </button>
		<!-- <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="right" title="This is an example of a tooltip">
			UPLOAD
		</button> -->
	</body>
</html>
