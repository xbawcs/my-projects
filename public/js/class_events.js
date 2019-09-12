function showFormAddClass(){
	$('.form-add-class').show();
	$('.add-class-form').hide();
}

$(document).on('click','.add-class', function(e){
	e.preventDefault();
	$('.form-add-class').hide();
	$('.add-class-form').show();
	// console.log($('input[name=_token]').val());
	// console.log($('input[name=code]').val());
	// console.log($('input[name=name]').val());
	$.ajax({
		type : 'POST',
		url : 'class/add',
		data : {
			'_token': $('input[name=_token]').val(),
			'code': $('input[name=code]').val(),
			'name' : $('input[name=name]').val(),
		},
		success:function(data){
			$('#content-class').append('owkk');
		},
		error:function(data){
			alert('ngu vcl');
		}
	});
});

$(document).on('click', '.increment-student', function(e){
	e.preventDefault();
	console.log($(this).data('code'));
	$.ajax({
		type: 'post',
		url: 'class/increment',
		data: {
			'_token': $('input[name=_token]').val(),
			'code': $(this).data('code'),
		},
		success:function(data){

		}
	});
});

$(document).on('click', '.fa-sort', function(){
	$('.bot-nav').toggle();
});