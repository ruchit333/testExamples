// Auto suggest code
function suggest_new(inputString, manufid){
	if(inputString.length == 0) {
		jQuery('#suggestions1').fadeOut();
	} else {
			
			jQuery.get(HTTP_LOCATION + "support-scripts/getAutoSuggestList.php", {keyword: ""+inputString+"" ,flag :true, manuf :manufid}, function(data){
			if(data.length >0) {
				jQuery('#suggestions1').fadeIn();
				jQuery('#suggestionsList1').html(data);

				jQuery("#suggestionsList1 ul li").removeClass("itemhover");
				jQuery("#suggestionsList1 ul li a").removeClass("itemhover");
				jQuery("#suggestionsList1 ul li a").eq(currentSelection_new).addClass("itemhover");
				jQuery("#suggestionsList1 ul li").eq(currentSelection_new).addClass("itemhover");

			}
		});
	}
}

function fill_new(thisValue,url) {
	jQuery('#txt_model1').val(thisValue);
	jQuery('#txt_model').val(url);
	setTimeout("jQuery('#suggestions1').fadeOut();", 10);
}
// Capture the up/down keypress
function myKeyupFunc_new(e){	
    switch(e.keyCode) { 
		// User pressed "up" arrow
		case 38:
			navigate_new('up');
		break;
		// User pressed "down" arrow
		case 40:
			navigate_new('down');
		break;
		// User pressed "enter"
		case 13:
			if(value != '') {
				fill_new(value);
			}
		break;
	}

}

var currentSelection_new = 0;
var value_new = '';

// Bind the keypress event (e.g. to the document)
jQuery(document).keydown(myKeyupFunc_new);

// Add data to let the hover know which index they have
for(var i = 0; i < jQuery("#suggestionsList1 ul li a").size(); i++) {
	jQuery("#suggestionsList1 ul li a").eq(i).data("number", i);
}

// Simulote the "hover" effect with the mouse
jQuery("#suggestionsList1 ul li a").hover(
	function () {
		currentSelection_new = jQuery(this).data("number");
		setSelected(currentSelection_new);
	}, function() {
		jQuery("#suggestionsList1 ul li a").removeClass("itemhover");
		currentUrl = '';
	}
);


function navigate_new(direction) {
	// Check if any of the menu items is selected
	if(jQuery("#suggestionsList1 ul li .itemhover").size() == 0) {
		currentSelection_new = -1;
	}
	
	if(direction == 'up' && currentSelection_new != -1) {
		if(currentSelection_new != 0) {
			currentSelection_new--;
		}
	} else if (direction == 'down') {
		if(currentSelection_new != jQuery("#suggestionsList1 ul li").size() -1) {
			currentSelection_new++;
		}
	}
	setSelected_new(currentSelection_new);
}

function setSelected_new(currentSelection_new) {
	jQuery("#suggestionsList1 ul li").removeClass("itemhover");
	jQuery("#suggestionsList1 ul li a").removeClass("itemhover");
	jQuery("#suggestionsList1 ul li a").eq(currentSelection_new).addClass("itemhover");
	jQuery("#suggestionsList1 ul li").eq(currentSelection_new).addClass("itemhover");
	value = jQuery("#suggestionsList1 ul li a").eq(currentSelection_new).attr("title");
}

