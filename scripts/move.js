function gotoregpage(){
	document.location.href = "/movement/account/register.php";
}

function register(){
	//window.location = "../scripts/reg.php";
	var formels = $('#registerForm').serialize();
	var myurl = "../api/newmember";
	$.ajax({
		url: myurl,
		type: 'POST',
		data: formels,
		datatype: 'json',
		success: function(){
			alert('Welcome to the tribe!');
			//redirect to profile page
		}
	});
}

function logmein(){
	var logindeets = $('#loginform').serialize();
	var myurl = "/movement/api/getmember";
	$.ajax({
		url: myurl,
		type: 'POST',
		data: logindeets,
		datatype: 'json',
		success: function(row){
			obj = JSON.parse(row);
			alert("Welcome "+obj[0].fname+" "+obj[0].lname);
		}
	});
}