 
 var dropdownElements = document.querySelectorAll("[data-action = 'dropdown']");
 for(var t=0;t<toggleElements.length;t++){
	 var mainDropdown = toggleElements[t].querySelector("[data-dropdown-role = 'main-dropdown']");
	 var dropdownTrigger = toggleElements[t].querySelector("[data-dropdown-role = 'dropdown-trigger']");
	 mainDropdown.style.display = "none";
	 dropdownTrigger.style.cursor = "pointer";
	 dropdown(toggleTrigger,mainToggle);
 }
 
 function dropdown(trigger,dropdownElement){
	 trigger.onclick = function(event){
		 if(toggleElement.style.display == 'block'){
//NOTE: The function fader() is in masterjs.js. It must have been included prior to this script
//A fall back has been provided in the catch block
	try{ 
	fade(toggleElement,'fadeOut','normal');
	}catch{
		console.log('function fader() did not execute well, probably because masterjs.js is not available or something went wrong there');
	toggleElement.style.display = 'none';	
	}
	 }else{
		 try{
			fade(toggleElement,'fadeIn','normal');
		 }catch{
	 console.log('function fader() did not execute well, probably because masterjs.js is not available or something went wrong there');
	toggleElement.style.display = 'block';	
	}
		 
		}
	 
	 }
	 
 }