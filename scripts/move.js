function gotoregpage(){
	document.location.href = "/movement/account/register.php";
}

function register(){
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

function whologgedon(){
	if(localStorage.getItem('loggedOn') === null){
		alert("No-one logged in");
	} else {
		var thisone = localStorage.getItem('loggedOn');
		alert("You are "+(JSON.parse(thisone)).fname);
		console.log(JSON.parse(thisone));
		$('#marker').append("<p>"+(JSON.parse(thisone)).fname+"</p>");
	}
	
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