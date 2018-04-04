 
 var toggleElements = document.querySelectorAll("[data-action = 'toggle']");
 for(var t=0;t<toggleElements.length;t++){
	 var mainToggle = toggleElements[t].querySelector("[data-toggle-role = 'main-toggle']");
	 var toggleTrigger = toggleElements[t].querySelector("[data-toggle-role = 'toggle-trigger']");

	 var showMsg_ = toggleTrigger.getAttribute("data-toggle-off") ;
	 var showMsg = (showMsg_ == null || showMsg_ == "" ? toggleTrigger.innerHTML : showMsg_);
	 var hideMsg_ = toggleTrigger.getAttribute("data-toggle-on");
	 var hideMsg = (hideMsg_ == null || hideMsg_ == "" ? toggleTrigger.innerHTML : hideMsg_);

	 var arrow = toggleTrigger.getAttribute("data-toggle-arrow");
	 toggleTrigger.style.cursor = "pointer";
	 
	 toggleTrigger.innerHTML = showMsg+(arrow == "false" ? "" : "  <span class=\"glyphicon glyphicon-chevron-down\"></span>");
	 toggle(toggleTrigger,mainToggle,showMsg,hideMsg,arrow);
 }
 
 function toggle(trigger,toggleElement,sm,hm,arrow){
	 trigger.onclick = function(event){
		// event.preventDefault();
		 if(toggleElement.style.display == 'block'){
//NOTE: The function fader() is in masterjs.js. It must have been included prior to this script
//A fall back has been provided in the catch block
	try{ 
	fader(toggleElement,'fadeOut','normal');
	}
catch(err){
		console.log('function fader() did not execute well, probably because masterjs.js is not available or something went wrong there. Technical Detail:'+err);
	toggleElement.style.display = 'none';	
	}
trigger.innerHTML = sm+(arrow == "false" ? "" : "  <span class=\"glyphicon glyphicon-chevron-down\"></span>");
	 }else{
		 try{
			fader(toggleElement,'fadeIn','normal');
		 }
	catch(err){
	 console.log('function fader() did not execute well, probably because masterjs.js is not available or something went wrong there. Technical Detail: '+err);
	toggleElement.style.display = 'block';	
	}
trigger.innerHTML =  hm+(arrow == "false" ? "" : "  <span class=\"glyphicon glyphicon-chevron-up\"></span>");
		}
	 
	 }
	 
 }