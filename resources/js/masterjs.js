	
/**
 * This function is to toggle sidebar especially in mobile
 */


 
 
	
/*_________________________________________________________________________________________________________________________ */

/**
 * This function is for countdown on the sidebar
 * @param {*} containerId 
 * @param {*} initial 
 */
function timecountdown(containerId,initial){
var counter = setInterval(countdown,1000);
var container = document.getElementById(containerId);
var day = document.getElementById('day-countdown');
var hour = document.getElementById('hr-countdown');
var min = document.getElementById('min-countdown');
var sec = document.getElementById('sec-countdown');

var d = parseInt(initial/86400);
var h = parseInt((initial%86400)/3600);
var m =  parseInt((initial%3600)/60);
var s = initial%60;
function countdown(){
	if(d==0 && h==0 && m==0 && s==0){
		clearInterval(counter);
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
	s--;
	if(s<0){
		m--;
		s=59;
		if(m<0){
			h--;
			m=59;
			if(h<0){
				d--;
				h=23;
			}
		}
	}
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
	day.innerHTML = (d<10 ? '0'+d : d)+'d';
	hour.innerHTML = (h<10 ? '0'+h : h)+'h';	
	min.innerHTML = (m<10 ? '0'+m : m)+'m';	
	sec.innerHTML = (s<10 ? '0'+s : s)+'s';	
	
	}
	
}	
}









