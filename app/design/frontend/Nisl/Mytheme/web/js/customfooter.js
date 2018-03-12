/************ Search Code ****************/
jQuery(document).on('click', '#search_icon', function(){	
	if (jQuery('.cell-table').css('display') == 'none'){
		jQuery('.cell-table').show().fadeIn(1000);
	}else{
		jQuery('.cell-table').hide();
	}
});
jQuery(document).on('click', '.close-btn', function(){
	jQuery('.cell-table').hide();
});
/************ Login Popup Code ****************/
jQuery(document).on('click', '#login_icon', function(){		
	if (jQuery('.login-form-tooltip').css('display') == 'none'){
		jQuery('.login-form-tooltip').show().fadeIn(1000);
	}else{
		jQuery('.login-form-tooltip').hide();
	}
});
/*jQuery(document).on('mouseout', '#login_icon', function(){
	jQuery(".page-footer .login-form-tooltip").hide();
});
jQuery(document).on('mouseover', '#login_icon', function(){
	jQuery(".page-footer .login-form-tooltip").show();
});*/

/*jQuery(document).ready(function(){
	jQuery(".navbar-nav li a.category-link").hover(function(){
		jQuery(".category-list").css('background-color','#d5d4d3');
	});
	jQuery("a").mouseleave(function(){
		jQuery(".category-list").css('background-color','white');
	});
});*/

