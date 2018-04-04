 //get all the tabs parent containers
  var switchElements = document.querySelectorAll("[data-action = 'switch-tab']");
 for(var s=0;s<switchElements.length;s++){
	 switchTab(switchElements[s]);
	 }
	 
 function switchTab(switchTab){	 
 //get all the tabs
	  var allTabs = switchTab.querySelectorAll(".tabs-container>[data-tab-index]");
//set the default tab as tab-index-0
var defaultTabIndex = (switchTab.getAttribute('data-default-tab') == null || switchTab.getAttribute('data-default-tab') == "" ? allTabs[0] : switchTab.querySelector(".tabs-container>[data-tab-index='"+switchTab.getAttribute('data-default-tab')+"']"));
	  	 changeContent(defaultTabIndex,allTabs); 
	  for(var t = 0;t<allTabs.length;t++){
//if the the tab-index to switch to is specified in the data-switch-to attribute or not.
		  var switchTo = allTabs[t].querySelector("[data-switch-action='change-tab']").getAttribute('data-switch-to');
		  var nextTab = (switchTo == null || switchTo=="" ? (t+1)%allTabs.length : switchTo);
	attachTabChanger(allTabs,allTabs[t],nextTab);
	  }
	  
function attachTabChanger(tabsArray,currentTab,nextIndex){
	 currentTab.querySelector("[data-switch-action='change-tab']").onclick = function(event){ 
		 if(switchTab.querySelector(".tabs-container>[data-tab-index='"+nextIndex+"']")==null){
		 alert("The tab index "+nextIndex+"  does not exist");
		 }
		 else{
	changeContent(switchTab.querySelector(".tabs-container>[data-tab-index='"+nextIndex+"']"),tabsArray);			 
				}
			}
		}
 //This function changes contents. show is the tab to show while hide is an array of other tabs.
 function changeContent(show,hide){
 for(var z=0;z<hide.length;z++){
	 if(show.getAttribute('data-tab-index') == hide[z].getAttribute('data-tab-index')){
	 hide[z].style.display = 'block';
	 }
	 else{
	 hide[z].style.display = 'none';
			}
		}
	}		
}
