var Modal = function(){
 this.header = "";
 this.content = "";
 this.contentHTML = "";
 this.body = document.querySelector('body');

 //You can put your style in this function if you used a custom contentHTML
 this.style = function(s){
console.log("applying Modal styles...");
	 if(typeof(s) == 'function'){
				try{
					s();
				}
				catch(err){
console.log("something went wrong in the function you passed in style(): "+err);
console.log("check "+s);
				}
		}
	};

//If you want to be doing something in the background of the modal
this.doInBackground = function(f){
console.log("running doInBackground() function");
	 if(typeof(f) == 'function'){
				try{
					f();
				}catch(err){
console.log("something went wrong in the function you passed in doInBackground(): "+err);
console.log("check "+f);
				}
		}
};
	

this.customContentExist = function(){
	if(this.contentHTML =="" || this.contentHTML==null ){
		console.log("no custom HTML content found, rendering defined .content...");
		return false;
	}
console.log("custom HTML content found, rendering your defined .contentHTML content...Make sure you define the styles for this in .style(function())");
	 return true;
};

 this.createModal = function(){
if(!isDisplaying('.mato-modal-parent')){//if no modal before
//This is the modal parent,
	var modalParent = document.createElement("div");
	modalParent.setAttribute('class','mato-modal-parent');
	
//basic styling of the parent, it will remain unmanipulated, any manipulation on the style would be the 
//modal container and that can be done by overriding this.stylemodal()
    this.body.style.margin = "0px";
	this.body.style.overflow = "hidden";
	modalParent.style.position = 'fixed';
	modalParent.style.width = '100%';
	modalParent.style.height = '100vh';
	modalParent.style.zIndex = '10000';
	modalParent.style.backgroundColor = 'rgba(0,0,0,0.5)';

if(this.customContentExist()){//if you have your own html you want to pop though, overide the custom pop up
		modalParent.innerHTML = this.contentHTML;
		this.body.insertBefore(modalParent,this.body.firstChild);
	}
else{//create a default modal content
 	var modalContainer = document.createElement("div");
	modalContainer.setAttribute('class','mato-modal-container');
	
	var modalHeader = document.createElement("div");
	modalHeader.setAttribute('class','mato-modal-header');
	
	var modalHeaderText = document.createElement("div");
	modalHeaderText.setAttribute('class','mato-modal-header-text');
	modalHeaderText.innerHTML = this.header;
	
	var closer = document.createElement("span");
	closer.setAttribute('class','close');
	closer.setAttribute('style','float:right');
	closer.innerHTML = " &times ";
	closer.addEventListener('click',function(){
		new Modal().closeModal();
	});
	
	
	modalHeader.appendChild(modalHeaderText);
	modalHeader.appendChild(closer);
	
	var modalContent = document.createElement("div");
	modalContent.setAttribute('class','mato-modal-content');
	modalContent.innerHTML = this.content;
	
	
	
	
	modalContainer.appendChild(modalHeader);
	modalContainer.appendChild(modalContent);
	
	modalParent.appendChild(modalContainer);
	
	this.body.insertBefore(modalParent,this.body.firstChild);
	
//styling of the default pop up container
	this.style(function(){
				
	var deviceWidth = window.screen.width;
	var modalContainer = document.querySelector(".mato-modal-parent>.mato-modal-container");
	var modalHeader = modalContainer.querySelector('.mato-modal-header');
	var modalHeaderText = modalHeader.querySelector('.mato-modal-header-text');
	var closer = modalHeader.querySelector('.close');
	var modalContent = modalContainer.querySelector('.mato-modal-content');

	
	modalContainer.style.width = new Modal().setWidth(deviceWidth)+'px';
	modalContainer.style.margin = "auto";
	modalContainer.style.marginTop = "10px";
	modalContainer.style.boxShadow = "0px 5px 5px rgba(0,0,0,0.1)";
	modalContainer.style.borderRadius = "5px";
	modalContainer.style.backgroundColor = "white";
	
	
   modalHeader.style.width = parseInt(document.querySelector('.mato-modal-container').style.width) + 'px';
	modalHeader.style.backgroundColor = "#f7f7f7";
	modalHeader.style.borderRadius = modalContainer.style.borderRadius+' '+modalContainer.style.borderRadius+' 0px 0px';
	modalHeader.style.borderBottom = "1px solid #e3e3e3";
	
	modalHeaderText.style.display = 'inline-block';
	modalHeaderText.style.width = '95%';
	closer.style.display = 'inline-block';
	closer.style.width = '4%';
	closer.style.marginRight = '1%';
	
	
	closer.style.fontWeight = "bold";
	closer.style.fontSize = "20px";
	closer.style.cursor = "pointer";
	closer.addEventListener('mouseenter',function(){
	closer.style.color = "rgba(200,0,0,0.5)";
	});
	closer.addEventListener('mouseleave',function(){
	closer.style.color = "black";
	});
	
	modalContent.style.minHeight = "100px";
	modalContent.style.maxHeight = "550px";
	modalContent.style.padding = "10px";
	modalContent.style.overflow = "auto";
	
window.addEventListener('resize',function(event){
	var frameWidth = window.innerWidth;
	modalContainer.style.width = new Modal().setWidth(frameWidth)+'px' ;
    modalHeader.style.width = parseInt(document.querySelector('.mato-modal-container').style.width) + 'px';
	});
		});
	}
 }

 if(document.querySelector('.mato-modal-parent') != null){
	console.log("modal created!"); }
	else{
		console.log("no modal created!");
	}
 };
 this.setWidth = function(container){
		if(container >= 992){
      console.log("modal width will be set to 600px");
		return 600;
		}
		else if(container >= 768){
      console.log("modal width will be set to 600px");
			return 600;
		}
		else if(container >= 500){
      console.log("modal width will be set to 450px");
			return 450;
		}
		else if(container < 500){
      console.log("modal width will be set to "+(container-10));
			return (container-50);
		}
	};
 this.showModal = function(){
if(document.querySelector('.mato-modal-parent') != null){//if the modal has been created
		 fader(document.querySelector('.mato-modal-parent'),'fadeIn','normal');
      console.log("modal active!");
	 }
	 else{
      console.log("modal failed to open, make sure you call createmodal first!");
	 }
}

 this.contentHolder = function(){//return the element holding the content incase you want to manipulate it
	 if(document.querySelector('body>.mato-modal-parent') != null){
		console.log("modal content holder ready...");
		 return document.querySelector('.mato-modal-content'); 
	 }
	 else{
      console.log("could not return the content holder. call createModal first!");
	 }
 };
 this.closeModal = function(){
	if(isDisplaying('.mato-modal-parent')){
			this.body.style.overflow = "scroll";
		fader(document.querySelector('.mato-modal-parent'),'fadeOut','normal');
		console.log("modal fading away...");
		this.destroyModal();
	} 
	else{
		console.log("no modal was active!");
	}
 };
this.destroyModal = function(){
//destroy after 1.5 secs. This allow this fading out animation complete before destroying completely
	setTimeout(function(){new Modal().body.removeChild(document.querySelector('.mato-modal-parent'));
					console.log("Modal destroyed!");
						},1500);
};
}


