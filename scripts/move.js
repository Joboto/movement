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
		},
		error: function(data){
			alert(data);
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
			if(!obj[0]){
				alert("Could not find, please try again");
			} else {
				alert("Welcome "+obj[0].fname+" "+obj[0].lname);
				localStorage.setItem('loggedOn', JSON.stringify(obj[0]));
			}
		},
		error: function() {
			alert("Please try again.");
		}
	});
}

function logmeout(){
	localStorage.clear();
	$.ajax({
		url: "api/killsession"
	});
}

function whologgedon(){
	//var saying = localStorage;
	//alert(saying);
	if(localStorage.getItem('loggedOn') === null){
		alert("No-one logged in");
	} else {
		var thisone = localStorage.getItem('loggedOn');
		alert("You are "+(JSON.parse(thisone)).fname);
		console.log(JSON.parse(thisone));
		$('#marker').append("<p>"+(JSON.parse(thisone)).fname+"</p>");
	}
	
}

$(document).ready(function(){
	if(localStorage.getItem('loggedOn') !== null){
		var currentuser = localStorage.getItem('loggedOn');
		var userName = (JSON.parse(currentuser)).username;
		alert("Passing in "+userName);
		$.ajax({
			url: "api/"+userName,
			success: function(word){
				alert(word+" is the word");
			}
		});
	}
});