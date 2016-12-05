(function($){
	$(function(){
		
		$('.show-rent select[name="numberPage"]').change(function(){	
			var uri = window.location.href;
			var regex = /&currentPage=\d+&numberPage=\d+/i;
			uri = uri.replace(regex, "");

			var numberPage = $(this).val();
			var currentPage = Number($('.paging .active a').text()) - 1;
			uri += '&currentPage=' + currentPage + '&numberPage=' + numberPage ;
			
			window.location.replace(uri);
		});
		$('.paging li a').click(function() {
			var uri = window.location.href;
			var regex = /&currentPage=\d+&numberPage=\d+/i;
			uri = uri.replace(regex, "");

			var currentPage = Number($(this).text()) - 1;
			var numberPage = Number($('.show-rent select[name="numberPage"]').find(":selected").val());
			uri = uri + '&currentPage=' + currentPage + '&numberPage=' + numberPage ;
			window.location.replace(uri);
		});		
	});
})(jQuery);
