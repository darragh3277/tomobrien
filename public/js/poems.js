$(document).ready(function(){
	
	$('.alpha-nav a').on('click', function(){
		var letter = $(this).data('poem-index');
		
		$('.alpha-nav li').removeClass('active');
		
		$(this).parent().addClass('active');
		
		if (letter === "All"){
			$('.poem-list').fadeIn();
		} else {
			$('.poem-list').hide();
			$('.poem-index-'+letter).fadeIn();
		}
		
	});
	
}); //document.ready