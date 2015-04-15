
<div id="loginbox">
	<h4 style="margin:0">Login to view your account.</h4>
	<form id="loginform">
		<div style="float:left">
			<label name="emailLabel" style="width:90%;text-align:left">Email address</label>
			<br>
			<input id="email" name="email" type="email" style="width:90%" />
		</div>
		<div style="float:right">
			<label name="passwordLabel" style="text-align:left">Password</label>
			<br>
			<input id="password" name="password" type="password" style="width:90%" />
		</div>
		<div style="clear:both"></div>
		<button type="button" style="height:23px;font-size:100%;" onclick="logmein()">Log in</button>
		<button type="button" style="height:23px;font-size:100%;" onclick="gotoregpage()">Register</button>
	</form>
</div>
<div id="userbox">
	<h3 style="margin:0">You are logged in as <span id="currentfname"></span></h3>
	<button type="button" style="height:23px" onclick="logmeout()">Log out</button>
</div>
