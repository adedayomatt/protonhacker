/**
 * This function animate background of element, just pass the element selector (id, class, or other element selector)
 * as the arguement.
 * 
 * CAN'T BELIEVE I MADE THIS MYSELF, 5-Aug-2017, 11:24 PM
 * 
 * @param {*} selector 
 */
 
 var coloranimationElements = document.querySelectorAll("[data-action='animate-bgcolor']");
 for(var ca = 0 ; ca < coloranimationElements.length ;ca++){
	 animateBackgroundColor(coloranimationElements[ca]);
 }
function animateBackgroundColor(element){
	var r = Math.round(Math.random() * 200);
	var g = Math.round(Math.random() * 200);
	var b = Math.round(Math.random() * 200);
	var i = setInterval(animate,500);

function animate(){
if((r >= 180 && g>=180 && b >= 180) || (r <= 180 && g>=180 && b > 180) || (r <= 180 && g<=180 && b >= 10)){
	shrinkRGB();												
	}
else {
exhaustRGB();
	}
									
function exhaustRGB(){
if(r < 200){
r += 5;
	}
else{		
	if(g < 200){
		g += 5;
				}
			   else{
					if(b < 200){
								b += 5;
										}
										
							}
						}
					}

function shrinkRGB(){
if(r>10){
r -= 5;
	}
	else{
		if(g>10){
			g -= 5;
		}
		else{
			if(b>=10){
				b -= 5;
			}
			
		}
	}
}
element.style.backgroundColor = "rgb("+r+","+g+","+b+")";
	}

}


