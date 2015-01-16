

$(document).ready(function(){
	$("select").selecter({
		externalLinks: true
	});
	// SELECTBOX END

		
    $('input[type=checkbox]').on('change', function(){
		if($(this).is(':checked')){
			$(this).next('label').css('background-position', '0 -17px');
		}
		else{
			$(this).next('label').css('background-position', '0 0');
		}
	});
	//  CUSTOME CHECKBOX IE8 SUPPORT

	// FLASH 
		$('.flash .close-b').click(function(){
			$(this).parents('.flash').fadeOut();
		});


	// PLACEHOLDER IE LOWER THEN 10 SUPPORT 
	  function add() {
	    if($(this).val() === ''){
	      $(this).val($(this).attr('placeholder')).addClass('placeholder');
	    }
	  }

	  function remove() {
	    if($(this).val() === $(this).attr('placeholder')){
	      $(this).val('').removeClass('placeholder');
	    }
	  }

	   // Create a dummy element for feature detection
	  if (!('placeholder' in $('<input>')[0])) {

	    // Select the elements that have a placeholder attribute
	    $('input[placeholder], textarea[placeholder]').blur(add).focus(remove).each(add);

	    // Remove the placeholder text before the form is submitted
	    $('form').submit(function(){
	      $(this).find('input[placeholder], textarea[placeholder]').each(remove);
	    });
	  };
 //PLACEHOLDER IE LOWER THEN 10 SUPPORT END

});