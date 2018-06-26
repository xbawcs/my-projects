$(document).on('click', '.show-modal', function(e){
	var id = $(this).data('id');
	var url = "http://homestead.test/student/" + id;
	window.location = url;
});

$("#content-table tr").hover(function(){
    $(this).css("background-color", "#8bc7f4");
    }, function(){
    $(this).css("background-color", "white");
});