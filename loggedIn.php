<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Cross-Browser QRCode Generator</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3mobile.css">
		<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" /> -->
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="qrcode.js"></script>
	</head>
	<body>
		<div id="qrcode" style="width:250px; height:250px; display:inline-block;position:fixed;top:0;bottom:0;left:0;right:0;margin:auto;"></div>
		<script type="text/javascript">
			var qrcode = new QRCode(document.getElementById("qrcode"),
			{
				width : 250,
				height : 250
			});

			function makeCode()
			{
				//var elText = document.getElementById("text");
				var elText="<?php echo $username;?>";
				qrcode.makeCode(elText);
			}

			makeCode();

			$("#text").
				on("keydown keyup change paste click", function(e)
				{
					if (e.keyCode) // Add == 13 in the brackets to make it only work on "Enter"
					{
						makeCode();
					}
				});

		</script>
	</body>
</html>
