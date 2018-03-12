

  $('#search_submit').click(function(){
  	        	if ( $('.cell-table').css('display') == 'none' ){
 $('.cell-table').show().fadeIn(1000);
}else{
 $('.cell-table').hide();
}
});
$('.close-btn').click(function(){
  	        
 $('.cell-table').hide();

})


jQuery(document).ready(function(){
	jQuery(".navbar-nav li a.category-link").hover(function(){
		jQuery(".category-list").css('background-color','#d5d4d3');
	});
	jQuery("a").mouseleave(function(){
		jQuery(".category-list").css('background-color','white');
	});
});

