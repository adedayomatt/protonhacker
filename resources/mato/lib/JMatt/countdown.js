/*
Get all the elements with the attribute data-action = 'countdown' in the document. Using the data- attribute makes it possible to
*have more than one countdown on the same document (or a webpage) counting down at the same time with different time counting down.
*But it is important to note that data-action attribute must be set to 'countdown' and the attribute data-days, data-hours, data-minutes and data-seconds can be set to any 
value. Each of this attribute is optional
*/
var countdownElements = document.querySelectorAll("[data-action='countdown']");
var i = 0;
defaultFormat = 'dhms';
while(i<countdownElements.length){
	countdownElements[i].setAttribute('data-countdown-hash','c-d-h-000'+i);
	countdownElements[i].setAttribute('data-countdown-format',defaultFormat);
//create some parent elements	
	countdownElements[i].innerHTML = "<div class=\"countdown-header\"></div>";
	countdownElements[i].innerHTML += "<div class=\"countdown-content\"></div>";
	countdownElements[i].innerHTML += "<div class=\"countdown-options\"></div>";
//set the label
countdownElements[i].querySelector('div.countdown-header').innerHTML = "<h2>"+(countdownElements[i].getAttribute('data-label') == "" || countdownElements[i].getAttribute('data-label') == null ? "No Label" : countdownElements[i].getAttribute('data-label'))+"</h2>";
countdownElements[i].querySelector('div.countdown-header').innerHTML += "<p style=\" text-align:left; font-size:14px\">"+(countdownElements[i].getAttribute('data-countdown-detail') == "" || countdownElements[i].getAttribute('data-countdown-detail') == null ? "No details for this event" : countdownElements[i].getAttribute('data-countdown-detail'))+"</p>";


//get the data-
	var days = (countdownElements[i].getAttribute('data-days') != null && countdownElements[i].getAttribute('data-days') > 0 ? countdownElements[i].getAttribute('data-days') : 0);
	var hours = (countdownElements[i].getAttribute('data-hours') != null && countdownElements[i].getAttribute('data-hours') > 0 ? countdownElements[i].getAttribute('data-hours') : 0);
	var minutes = (countdownElements[i].getAttribute('data-minutes') != null && countdownElements[i].getAttribute('data-minutes') > 0 ? countdownElements[i].getAttribute('data-minutes') : 0);
	var seconds = (countdownElements[i].getAttribute('data-seconds') != null && countdownElements[i].getAttribute('data-seconds') > 0 ? countdownElements[i].getAttribute('data-seconds') : 0);
//calculate the countdown in seconds
	var secondsToCountdown = (parseInt(days)*24*60*60) + (parseInt(hours)*60*60) + (parseInt(minutes)*60) + parseInt(seconds);
	
if(secondsToCountdown > 0){
	var countdownOptions = "<button class=\"change-format-btn\">Display in seconds</button>";
	countdownElements[i].querySelector('div>.countdown-options').innerHTML = countdownOptions;
	countDown(countdownElements[i],secondsToCountdown);	
	}
	
else if(secondsToCountdown == 0){
	display_countdown(countdownElements[i],0);
	}
//apply some styles to the containers
	styleCountdownContainer(countdownElements[i]);
	i++;
	}
	
//This is the main function that initizes the countdown
function countDown(container,timestamp){
var counter = setInterval(countdown,1000);
function countdown(){
	if(timestamp==0){
//detach the click event function
		container.querySelector('div>.countdown-options>button.change-format-btn').onclick = null;
		container.querySelector('div>.countdown-options>button.change-format-btn').innerHTML = "Time Up!!!";
		clearInterval(counter);
	}
	else{
	timestamp--;
	display_countdown(container,timestamp);
			}
		}
	
	}

function display_countdown(container,timestamp){		
var dhmsFormat = "<span class=\"countdown-container day-countdown\"></span>";
dhmsFormat += "<span class=\"countdown-container hr-countdown\"></span>";
dhmsFormat += "<span class=\"countdown-container min-countdown\"></span>";
dhmsFormat += "<span class=\"countdown-container sec-countdown\"></span>";

seconds_only = "<span class=\"countdown-container\">"+timestamp+" s</span>";
	
var format = container.getAttribute('data-countdown-format');
var displayingFormat = (format == null || format == "" ? defaultFormat : format);
	
	switch(displayingFormat){
			case 'dhms':
container.querySelector('div.countdown-content').innerHTML = dhmsFormat;

var day = container.querySelector("div.countdown-content>span.countdown-container.day-countdown");
var hour = container.querySelector("div.countdown-content>span.countdown-container.hr-countdown");
var min = container.querySelector("div.countdown-content>span.countdown-container.min-countdown");
var sec = container.querySelector("div.countdown-content>span.countdown-container.sec-countdown");

var d = parseInt(timestamp/86400);
var h = parseInt((timestamp%86400)/3600);
var m =  parseInt((timestamp%3600)/60);
var s = timestamp%60;

	if(d<=5){
		day.style.color='red';
	}
	if(d==0 && h<12){
		hour.style.color='red';
	}
	if(d==0 && h==0 && m<=30){
		min.style.color='red';
		sec.style.color='red';
		
	}

if(timestamp==0){
	day.innerHTML = '00';
	hour.innerHTML = '00';
	min.innerHTML = '00';
	sec.innerHTML = '00';
	day.style.color='red';
	hour.style.color='red';
	min.style.color='red';
	sec.style.color='red';
	}
else{	
	day.innerHTML = (d<10 ? '0'+d : d)+'d';
	hour.innerHTML = (h<10 ? '0'+h : h)+'h';	
	min.innerHTML = (m<10 ? '0'+m : m)+'m';	
	sec.innerHTML = (s<10 ? '0'+s : s)+'s';	
		}

			break;
case 'seconds':
container.querySelector('div.countdown-content').innerHTML = seconds_only;
			break;

		}

var changeFormatButton =  container.querySelector('div>.countdown-options>button.change-format-btn');
if(changeFormatButton != null){
changeFormatButton.onclick = function(event){
if(container.getAttribute('data-countdown-format') == 'dhms'){
   container.setAttribute('data-countdown-format','seconds');
   changeFormatButton.innerHTML = "Display in D:H:M:S";
		}
else{
container.setAttribute('data-countdown-format','dhms');
   changeFormatButton.innerHTML = "Display in seconds";
	}
		}
}

//apply some css styles to digit containers
var digitContainers = document.querySelectorAll("[data-action='countdown']>div.countdown-content>.countdown-container");
for(var j=0;j<digitContainers.length;j++){
	styleDigitContainer(digitContainers[j]);
				}	
}

function styleDigitContainer(s){
	s.style.backgroundColor = 'white';
	s.style.color = 'grey';
	s.style.width = "22%";
	s.style.padding = '2px';
	s.style.fontSize = '30px';
	s.style.margin = "1%";
	s.style.border = '1px solid #e3e3e3';
	s.style.borderRadius = '10px';
	s.style.boxShadow = '0px 5px 5px rgba(0,0,0,0.2)';
}
function styleCountdownContainer(container){
	containerHeader = container.querySelector('div.countdown-header');
	containerContent = container.querySelector('div.countdown-content');
	containerOptions = container.querySelector('div.countdown-options');
	
	containerHeader.style.fontSize = "20px";
	containerHeader.style.fontFamily = "Georgia";
	containerHeader.style.color = "white";
	
	containerContent.style.fontSize = "18px";
	containerContent.style.padding = "5px";
	
	containerOptions.style.padding = "0px";
	

}


