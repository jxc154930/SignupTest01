function testFunc(helpID){
	helpID.appendChild(document.createTextNode("asdf"));	
	var num01 = document.getElementById("testNum01").value;
	var num02 = document.getElementById("testNum02").value;
	try{
		if(!num01 || !num02){
			throw new Error("Need to enter values");
		}else if(isNaN(num01) || isNaN(num02)){
			throw new Error("Need to enter Numbers");
		}else if(num02 == 0){
			throw new Error("Can't divide by zero");
		}
		if(helpID != null){
			while(helpID.firstChild){
				helpID.removeChild(helpID.firstChild);
			}
		}
		var answer = num01 + "/" + num02 + "=" + num01/num02;
		helpID.appendChild(document.createTextNode(answer));
	}catch(errMsg){
		if(helpID != null){
			while(helpID.firstChild){
				helpID.removeChild(helpID.firstChild);
			}
		}
		helpID.appendChild(document.createTextNode(errMsg));		
	}
}

function testingShit(variable){
	variable.style.background= "pink";
}

///////////////////
function onSubmit(){
	document.getElementById("testCreateCookie").addEventListener("keyup", createCookie(event));
}
function createCookie(event){
	if(document.getElementById("testCreateCookie").value != ""){
		if(event.keyCode == 13){
			var expDate = new Date();
			expDate.setMonth(expDate.getMonth() + 1);
			
			var cookieID = document.getElementById("testCreateCookie");
			var cookieVal= cookieID.value;
			document.cookie = cookieID + "=" + cookieVal + ";path=/;expires=" + expDate.toGMTString();
			var cookieName = document.getElementById("displayCookies");
			while(cookieName.firstChild){
				cookieName.removeChild(cookieName.firstChild);
			}
			document.getElementById("displayCookies").appendChild(document.createTextNode(document.cookie));
			document.getElementById("displayCookies").appendChild(document.createElement("br"));
			document.getElementById("testCreateCookie").value = "";
		}	
	}
}