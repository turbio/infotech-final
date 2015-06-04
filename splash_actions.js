window.onload = addjs;

function addjs(){
	console.log("test");
	document.getElementById("sign_up_link").setAttribute("href", "#");
	document.getElementById("sign_in_link").setAttribute("href", "#");

	document.getElementById("sign_up_link").setAttribute("onclick", "show_signup()");
	document.getElementById("sign_in_link").setAttribute("onclick", "show_signin()");
}

function show_signin(){
	document.getElementById("account_popup").style["display"] = "block";
}

function show_signup(){
	document.getElementById("account_popup").style["display"] = "block";

}
