function gotoregpage(){
	document.location.href = "/movement/account/register.php";
}

function gotoprofile(){
	document.location.href = "/movement/account/profile.php";
}

function checkIfValid() {
	var form = document.querySelector('#registerForm');
	if(!form.checkValidity()){
		var message = "The following are required fields: ";
		var emptyfields = false;
		for(var loop = 0; loop < form.length; loop++) {
			if(form[loop].validity.valueMissing){
				message += form[loop].placeholder+" ";
				emptyfields = true;
			}
		} 
		if (form.email.validity.typeMismatch && !emptyfields) {
			message = "Email must of form: example@domain.whatever";
		}
		alert(message);
	} else {
		register();
	}
};

function register(){
	var formels = $('#registerForm').serialize();
	var myurl = "../api/newmember";
	$.ajax({
		url: myurl,
		type: 'POST',
		data: formels,
		datatype: 'json',
		success: function(obj){
			alert('Welcome to the tribe!');
			localStorage.setItem('loggedOn', obj);
			document.location.href = "/movement";
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
				alert("Could not log you on, please try again");
			} else {
				alert("Welcome "+obj[0].fname);
				localStorage.setItem('loggedOn', JSON.stringify(obj[0]));
				var loginbox = document.querySelector("#loginbox");
				loginbox.style.display = "none";
				var userbox = document.querySelector("#userbox");
				userbox.style.display = "";
				$("#currentfname").html(obj[0].fname+" "+obj[0].lname);
			}
		},
		error: function() {
			alert("Please try again.");
		}
	});
}

function logmeout(){
	localStorage.clear();
	var loginbox = document.querySelector("#loginbox");
	loginbox.style.display = "";
	var userbox = document.querySelector("#userbox");
	userbox.style.display = "none";
	alert("You are no longer logged in.");
}

function getdetails(){
	if(localStorage.getItem('loggedOn') === null){
		alert("No-one logged in");
	} else {
		var loggedOn = JSON.parse(localStorage.getItem('loggedOn'));
		$("#fname").val(loggedOn.fname);
		$("#lname").val(loggedOn.lname);
		$("#email").val(loggedOn.email);
		$("#bio").val(loggedOn.bio);
	}
	
}

function updateprofile(){
	var formels = $('#updateForm').serialize();
	var user = JSON.parse(localStorage.getItem('loggedOn'));
	var myurl = "../api/updateme";
	$.ajax({
		url: myurl,
		type: 'POST',
		data: formels+'&username='+user.username,
		datatype: 'json',
		success: function(output){
			alert('Update successful');
			var update = JSON.parse(output);
			user.fname = update.First;
			user.lname = update.Last;
			user.email = update.email;
			user.bio = update.bio;
			localStorage.setItem('loggedOn', JSON.stringify(user));
		},
		error: function(data){
			alert(data);
		}
	});
}

function addtobasket(item, price){
	var newItem = String(item);
	var itemPrice = parseFloat(price);
	alert("Adding "+newItem+" to basket");
	$.ajax({
		url: "../api/"+newItem+"/"+itemPrice,
		success: function(){
			$.get("../includes/basket.php", function(data){
				$('#basketbox').html(data);
			});
		}
	});
}

function discard(akey){
	$.ajax({
		url: "api/"+akey,
		success: function(){
			alert("Removing from basket.");
			$.get("includes/thebasket.php", function(data){
				$('#maincontainer').html(data);
			});
		}
	});
}

function clearsession(){
	$.ajax({
		url: "/movement/api/killsession",
		success: function(){
			alert("Basket cleared");
			$.get("includes/thebasket.php", function(data){
				$('#maincontainer').html(data);
			});
		}
	});
}

$(document).ready(function(){
	if(localStorage.getItem('loggedOn') !== null){
		var currentuser = localStorage.getItem('loggedOn');
		var userName = (JSON.parse(currentuser)).username;
		var fname = (JSON.parse(currentuser)).fname;
		var lname = (JSON.parse(currentuser)).lname;
		var loginbox = document.querySelector("#loginbox");
		loginbox.style.display = "none";
		$("#currentfname").html(fname+" "+lname);
	} else {
		var userbox = document.querySelector("#userbox");
		userbox.style.display = "none";
	}
})