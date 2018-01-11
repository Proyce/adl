let slide = 0;

window.onload = changeContent();

function changeContent(){
	
	let accordionContentWrapper = document.getElementById('accordionContentWrapper');
	let accordionContent = accordionContentWrapper.querySelectorAll('.accordionContent');
	
	for (var i = 0; i < accordionContent.length; i++) {
		accordionContent[i].className = 'hide accordionContent';
	}

	if (slide > 2) {
		slide = 0;
	}

	if (slide < 0) {
		slide = 2;
	}

	accordionContent[slide].className = 'show accordionContent';
		
}

function prev(){

	slide--;
	changeContent();

}

function next(){

	slide++;
	changeContent();

}