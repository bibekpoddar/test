<html>
	<head>
		<title>Online Compiler</title>
			<meta name="keywords" content="BITS,OffCampus,Pilani,Compiler,WILPD" />
			<link rel="shortcut icon" href="../styles/logo.png" />
			<link rel="stylesheet" type="text/css" href="../styles/style.css" />

			<script type="text/javascript" src="../js/jquery.js"></script>
			<script type="text/javascript" src="../js/compile.js"></script>
			<script type="text/javascript" src="../js/tab.js"></script>
			<script type="text/javascript" src="../js/jquery.form.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#form2').ajaxForm(function(msg) {
						$('#output2').html(msg);
					});
				});
			</script>
	</head>

	<body>
	<div id="whole">
		<div id="header">
			<!--<img src="../styles/header.png" width="1000px" height="200px" alt="BITS logo" />
			<br />-->
			<img src="../styles/banner.png" class="curiosta" width="1200px" height="135px" alt="BITS logo" />

			<!--<p class="title_name">
			WILP Online Lab
			</p>-->
			<!--Build block of blue-->

		</div>
		<div id="content">

			<table class="code">
				<td class="code">
				<form action="compile.php" method="post" id="form">
					Select Language of Interest:
						<select name="language" id="language">
							<option value="c">C</option>
							<option value="cpp">C++</option>
							<option value="java">Java</option>
							<option value="python2.7">Python</option>
							<option value="python3.2">Python3</option>
						</select>
					<br />
					<strong>Enter Your code here:<br/></strong>
					<textarea name="code" rows=15 cols=100 onkeydown=insertTab(this,event) id="code" style="font-size: 13pt"></textarea><br/>
					<span id="errorCode" class="error"></span><br/><br/>
					<strong>Sample Input please:<br/></strong>
					<textarea name="input" rows=7 cols=100 id="input"></textarea><br/><br/>
					<input type="submit" value="Submit" id="submit">
					<input type="reset" value="Reset"><br/>
				</form>
			</td>

			<!--
				<td class="code">
				<p>
				For Multiple file implementation of C code, upload your tar.gz or zip or rar file that contains your makefile.</p>
				<form action="compile.php" method="post" enctype="multipart/form-data" id="form2">
					<!--<p>Select Language of Interest:
						<select name="language">
							<option value="1">C</option>
							<option value="2">Python</option>
							<option value="3">Java</option>
						</select>
					</p>--><!--
					<label for="file">Filename:</label>
					<input type="file" name="file" id="file" />
					<br />
					<input type="submit" name="submit" value="Submit" />
					<input type="reset" value="Reset"><br/>
				</form>
			</td>

			-->
			<tr>
			<td class="code"><strong>Output:</strong>
			<span id="output"></span><br/></td>

			</tr>
		</div>
		<table>
			<div id="bottom">
			<p class="descri"><br>
					<font size='4' color='black'><b>
	&nbsp;&nbsp;CURIOSTA INNOVATION LABS<br /></font></b>
	<font size='3' color='black'>
				&nbsp;&nbsp;@&nbsp;all  rights reserverd<br />

				&nbsp;&nbsp;Contact us : bibekpoddar06@gmail.com</p></font>

			</div>
		</table>
	</div>

	</body>
</html>
