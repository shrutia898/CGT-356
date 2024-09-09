<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Assign02-Login</title>
	<style type="text/css">
		ul{
			list-style: none;
			margin-top:5px;
		}
		ul>li{
			display:block;
			float:left;
			width:100%;
			height:100%;
		}
		ul>li>label{
			float:left;
			padding:7px;
			color:#6666ff;
			
		}
		ul>li>input{
			float:right;
			margin:10px;
			border:1px solid #ccc;
			padding:3px;
			font-family: Gotham, Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
			width: 60%;
		}
		li>input:focus{
			border:1px solid #666;
		}
		fieldset{
			padding:10px;
			border:1px solid grey;
			width:400px;
			overflow:auto;
			margin:10px;
		}
		legend{
			color:#000099;
			margin: 0 10px 0 0;
			padding: 0 5px;
			font-size: 11pt;
			font-weight:bold;
		}
		label span{
			color:red;
		}
		fieldset#info{
    position: absolute;
    top: 70px;
    left: 28px;
    width: 460px;
		}
		fieldset#submit{
    position: absolute;
    top: 223px;
    left: 29px;
    width: 460px;
    text-align: center;
		}
		fieldset input#SubmitBtn{
			background: #e5e5e5;
			color:#000099;
			border: 1px solid #ccc;
			padding:5px;
			width:150px;
		}
	</style>
</head>

<body>
	<h1 style="font-size: 14pt; text-indent: 360px">Assign02-Login</h1>
	<form id="form0" name="form0" action="loginB.php" method="post">
		<fieldset id = "info">
			<legend>Login</legend>
			<ul>
				<li>
					<label title="userID" for="userID" >UserID<span>*</span></label>
					<input type="text" name="userID" id="userID" size="30" maxlength="30"/>
				</li>
				<li>
					<label title="password" for="password">Password<span>*</span></label>
					<input type="password" name="password" id="password" size="30" maxlength ="30"/>
				</li>
			</ul>
		</fieldset>
		<fieldset id = "submit">
			<input type="submit" id="SubmitBtn" name="SubmitBtn" value="Login" />
	  </fieldset>
		
</form>
	</div>
	<div class="login" style="float:right; width:400px; padding:10px; margin-right: 10%">
	<ul>
	  <li>Password</li>
		<li>userID: page1B</li>
		 <li>pass: page1Bpass</li>
		<li>userID: page2B</li>
		<li>pass: page2Bpass</li>
		<li>userID: page3B</li>
		<li>pass: page3Bpass</li>
		<li>userID: page4B</li>
		<li>pass: page4Bpass</li>		
	</ul>
		
		<h4 style="padding:20px">Return to <a href="index.php">index.php</a></h4>
	</div>
	<script type = "text/javascript">
		let userID = document.getElementById("userID").focus();
	</script>
</body>
</html>