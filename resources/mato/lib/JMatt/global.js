//doc_root = "https://protonhacker.com";
doc_root = "http://localhost/protonhacker_alpha";
pageOffset = 0;

function isDisplaying(selector){
	try{
	if(document.querySelector(selector).style.display == 'null'){
		return false;
	}
	else if(document.querySelector(selector).style.display == 'none'){
		return false;
	}
else if(document.querySelector(selector).style.display == 'block'){
		return true;
		}
	}catch(err){
console.log("in isDisplaying() : "+err);
	}

}
function show(selector){
document.querySelector(selector).style.display = 'block';
}

function hide(selector){
document.querySelector(selector).style.display = 'none';
}
function freezeBody(){
document.querySelector('body').style.overflow = 'hidden';
}
function unfreezeBody(){
document.querySelector('body').style.overflow = 'scroll';
}

var windowScroll = function(offsetY){
	
	this.onScrollUp = function(f){
	if(offsetY < pageOffset){
		if(typeof(f) == 'function'){
					f();
			}
	pageOffset = window.pageYOffset;
		}
	};
	this.onScrollDown = function(f){
	if(offsetY > pageOffset){
		if(typeof(f) == 'function'){
					f();
			}
	pageOffset = window.pageYOffset;
		}
	};
};
 
function fader(element,inOrOut,speed){
var opacity = (inOrOut == 'fadeIn' ? 1 : (inOrOut == 'fadeOut' ? 100 : 0));
element.style.opacity = opacity/100;
switch(speed){
	case 'very slow':
var fadingInterval = setInterval(fade,100);
	break;
	case 'slow':
var fadingInterval = setInterval(fade,50);
	break;
	case 'normal':
var fadingInterval = setInterval(fade,1);
	break;
	default:
var fadingInterval = setInterval(fade,1);
	break;
}

function fade(){
	
if(inOrOut == 'fadeIn'){
		if(opacity == 100){
		clearInterval(fadingInterval);
	}
else{
	element.style.display = 'block';
	opacity++;
	element.style.opacity = opacity/100;
		}
}	
else if(inOrOut == 'fadeOut'){
			if(opacity == 0){
		element.style.display = 'none';
		clearInterval(fadingInterval);
	}
else{
	opacity--;
	element.style.opacity = opacity/100;
		}
	}
	}

}




	function check_connection(){
var connection = false;
var connection_max_sec = 10000;
var ping = doc_root+"/resources/ping.html"; 
var timeout = setTimeout(feedback,connection_max_sec);

var ajax = new useAjax(ping);
ajax.go(function(responseCode,response){
if(responseCode == 204){
	connection = true;
	clearTimeout(timeout);
}
else{
	connection = false;
}
});
function feedback(){
var fb = (connection == true ? "Connection OK" : "It's taking too long to load");
	alert(fb);
connection = false;
}
	}


var useAjax = function(url){
	this.connect = function(){
	ajax = null;
		try{
		//opera 8+, firefox,safari
		ajax = new XMLHttpRequest();
	}
	catch(e){
		//Internet Explorer
		try{
			ajax = new ActiveXObject('Msxml2.XMLHTTP');
		}
	catch(e){
		try{
		ajax = new ActiveXObject('Microsoft.XMLHTTP');
		}
		catch(e){
			console.log("This browser does not support AJAX");
			}
		}	
	}	
	return ajax;
	};
this.go = function(callback){
		ajaxObject = this.connect();
	if(ajaxObject != null){
		ajaxObject.onreadystatechange = function(){
			if(ajaxObject.status == 200){//if url is found
					switch(ajaxObject.readyState){
						case 0:
						console.log("Request not yet initialized. initializing...");
						trackCode = 0;
						trackMsg = "Your request is intializing...";
						break;
						case 1:
						console.log("Request set up!");
						trackCode = 1;
						trackMsg = "Your request is set up!";
						break;
						case 2:
						console.log("Request sent!");
						trackCode = 2;
						trackMsg = "Your request is sent!";
						break;
						case 3: 
						console.log("Request in process...");
						trackCode = 3;
						trackMsg = "Your request is processing...";
						break;
						case 4:
						trackCode = 204;
						trackMsg = "Response ready!";
						console.log("Request completed!");
						break;
					}
					
if(typeof(callback) == 'function'){//if there is a valid callback function
				try{
					callback(trackCode,ajaxObject.responseText);
					}catch(err){
						console.log("The function "+callback+" did not execute well: "+err);
			}
		}
	
 }
	else if(ajaxObject.status == 404){
			console.log("The ajax returns a status code of 404."+url+" is not found");
			}
		
		
		}
   ajaxObject.open("GET",url, true);
   ajaxObject.send();	
		}
	};

};




