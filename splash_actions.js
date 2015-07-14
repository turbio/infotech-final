window.onload = addjs;

function addjs(){
	document.getElementById("sign_up_button_link").setAttribute("onclick", "show_signup(); return false;");
	document.getElementById("sign_in_button_link").setAttribute("onclick", "show_signin(); return false;");
}

function show_signin(){
	document.getElementById("account_popup").style["display"] = "block";
	fetchHtml("signin.php?e=1", insert_into_popup)
}

function show_signup(){
	document.getElementById("account_popup").style["display"] = "block";
	fetchHtml("signup.php?e=1", insert_into_popup)
}

function insert_into_popup(text){
	document.getElementById("account_popup").innerHTML = text;
}

function fetchHtml(url, action){
	var httpRequest = new XMLHttpRequest();

	httpRequest.open("GET", url, true);

	httpRequest.onload = function(e){
		action(httpRequest.responseText);
	};

	httpRequest.onerror = function (e){
		console.error(httpRequest.statusText);
	};

	httpRequest.send(null);
}
