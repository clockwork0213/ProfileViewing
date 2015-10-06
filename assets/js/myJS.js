$(document).ready(function(){
	
	/*
	$('body').on('hidden.bs.modal', '.modal', function () { 
		$(this).removeData('bs.modal');
	});
	*/
	
	$('#voterView').on('hidden.bs.modal', function () { 
		$(this).removeData('bs.modal');
	});
}); 