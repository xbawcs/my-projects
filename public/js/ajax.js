// $.ajaxSetup({
//     headers: {
//       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
//   });
// click to add student
$(document).on('click', '.add-modal', function(e){
	e.preventDefault();
	$('#addModal').modal('show');
});


$('.modal-footer').on('click', '.add-student', function(){
	$.ajax({
		type:'POST',
		url: 'student/add',
		data: {
			'_token': $('input[name=_token]').val(),
			'code': $('input[name=code]').val(),
			'name': $('input[name=name]').val(),
			'dob': $('input[name=dob]').val(),
			'gender': $('select[name=gender').val(),
			'address':$('input[name=address]').val()
		},
		success:function(data){
			$('.errorAddress').addClass('text-hide');
			$('.errorName').addClass('text-hide');

			if(data.errors){
				if(data.errors.name){
					$('.errorName').removeClass('text-hide');
					$('.errorName').text(data.errors.name);
				}
				if(data.errors.address){
					$('.errorAddress').removeClass('text-hide');
					$('.errorAddress').text(data.errors.address);
				}
			}
			else{
				$('#student-table').prepend("<tr class='item" + data.id + "'><th class='text-center STT'>" + 1 + "</th><td>" + data.code + "</td><td>" + "<img src='' class='imgS"+ data.id + "' width='100px' height='100px'>" +"</td><td>" + data.name + "</td><td>" + data.dob + "</td><td>" + data.gender + "</td><td>" + data.address + "</td>" + "<td>" + "<button class='btn btn-info show-modal' data-id='" + data.id + "'><i class='fa fa-eye' aria-hidden='true'></i></button>" + " <button class='btn btn-info edit-modal' data-id='" + data.id + "' data-code='" + data.code + "' data-name='" + data.name + "' data-dob='" + data.dob + "' data-gender='" + data.gender + "' data-address='" + data.address + "'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button> <button class='btn btn-danger delete-modal' data-id='" + data.id + "' data-code='" + data.code + "' data-name='" + data.name + "' data-dob='" + data.dob + "' data-gender='" + data.gender + "' data-address='" + data.address + "'><i class='fa fa-trash' aria-hidden='true'></i></button></td></tr> ");
				var x = ".imgS" + data.id;
				$(x).attr("src", data.avatar);
				refreshSTT();
				$('#addModal').modal('hide');
			}	
		}

	});
});
var id;
// click to delete student
$(document).on('click', '.delete-modal', function(e){
	$('#name-delete').val($(this).data('name'));
	id = $(this).data('id');
	$('#deleteModal').modal('show');
});
$('.modal-footer').on('click', '.delete-student', function(){
	$.ajax({
		type: 'DELETE',
		url: 'student/' + id,
		data: {
			'_token': $('input[name=_token]').val()
		},
		success: function(data){
			$('.item' + data.id).remove();
			refreshSTT();
			$('#deleteModal').modal('hide');
		},
		error: function(data){
			alert("Have an error");
		}
	});
});

// click to edit student
$(document).on('click', '.edit-modal', function(e){
	id = $(this).data('id');
	$('#code-edit').val($(this).data('code'));
	$('#name-edit').val($(this).data('name'));
	$('#dob-edit').val($(this).data('dob'));
	$('#gender-edit').val($(this).data('gender'));
	$('#address-edit').val($(this).data('address'));
	$('#editModal').modal('show');
	e.preventDefault();
});
$('.modal-footer').on('click', '.save-student', function(){
	$.ajax({
		type: 'PUT',
		url: 'student/' + id,
		data: {
			'_token': $('input[name=_token]').val(),
			'code': $('#code-edit').val(),
			'name': $('#name-edit').val(),
			'dob': $('#dob-edit').val(),
			'gender': $('#gender-edit').val(),
			'address': $('#address-edit').val()
		},
		success:function(data){
			$('.errorAddress').addClass('text-hide');
			$('.errorName').addClass('text-hide');

			if(data.errors){
				if(data.errors.name){
					$('.errorName').removeClass('text-hide');
					$('.errorName').text(data.errors.name);
				}
				if(data.errors.address){
					$('.errorAddress').removeClass('text-hide');
					$('.errorAddress').text(data.errors.address);
				}
			}
			else{
				$('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><th class='text-center STT'>" + 1 + "</th><td>" + data.code + "</td><td>" + "<img src='' class='imgS"+ data.id + "' width='100px' height='100px'>" +"</td><td>" + data.name + "</td><td>" + data.dob + "</td><td>" + data.gender + "</td><td>" + data.address + "</td>" + "<td>" + "<button class='btn btn-info show-modal' data-id='" + data.id + "'><i class='fa fa-eye' aria-hidden='true'></i></button>" + " <button class='btn btn-info edit-modal' data-id='" + data.id + "' data-code='" + data.code + "' data-name='" + data.name + "' data-dob='" + data.dob + "' data-gender='" + data.gender + "' data-address='" + data.address + "'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button> <button class='btn btn-danger delete-modal' data-id='" + data.id + "' data-code='" + data.code + "' data-name='" + data.name + "' data-dob='" + data.dob + "' data-gender='" + data.gender + "' data-address='" + data.address + "'><i class='fa fa-trash' aria-hidden='true'></i></button></td></tr> ");
				var x = ".imgS" + data.id;
				$(x).attr("src", data.avatar);
				refreshSTT();
				$('#editModal').modal('hide');
			}
		},
		error:function(data){

		}
	});
});

function refreshSTT(){
	var stts = document.getElementsByClassName('STT');
	for(var stt = 1; stt <= stts.length; stt++){
		stts[stt-1].innerHTML = stt;
	}
}
// search student
$(document).on('keyup', '#search-student', function(){
	var value = $(this).val().toLowerCase();
	$('#content-table tr').filter( function(){
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
	});
});

// load more data
$('#load-data').click( function(){
	var current = $('#current-record').val();
	console.log(current);
	$.ajax({
		type: 'GET',
		url: 'load-more',
		data: {
			'_token': $('input[name=_token]').val(),
			'id' : current
		},
        beforeSend:function(){
            $("#load-data").text("Loading...");
        },
		success:function(data){
			if(data.empty == "true"){
				$("#load-data").fadeOut();			}
			else{
				var y;
				$(y).attr("src", data.avatar);
				$.each(data, function(i, item){
					$('#content-table').append("<tr class='item" + item.id + "'><th class='text-center STT'>" + 1 + "</th><td>" + item.code + "</td><td>" + "<img src='' class='imgS"+ item.id + "' width='100px' height='100px'>" + "</td><td>" + item.name + "</td><td>" + item.dob + "</td><td>" + item.gender + "</td><td>" + item.address + "</td>" + "<td>" + "<button class='btn btn-info show-modal' data-id='" + item.id + "'><i class='fa fa-eye' aria-hidden='true'></i></button>" + " <button class='btn btn-info edit-modal' data-id='" + item.id + "' data-code='" + item.code + "' data-name='" + item.name + "' data-dob='" + item.dob + "' data-gender='" + item.gender + "' data-address='" + item.address + "'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button> <button class='btn btn-danger delete-modal' data-id='" + item.id + "' data-code='" + item.code + "' data-name='" + item.name + "' data-dob='" + item.dob + "' data-gender='" + item.gender + "' data-address='" + item.address + "'><i class='fa fa-trash' aria-hidden='true'></i></button></td></tr> ");
					$('#current-record').val(item.id);
					y = ".imgS" + item.id;
					$(y).attr("src", item.avatar);
				});
				$("#load-data").text("Tiếp>>");
				refreshSTT();
			}
		},
		error:function(data){
			console.log(data);
		}
	});
});

// $('#info-student').on('click', '#save-infor', function(e){
// 	e.preventDefault();
// 	var id = $(this).data('id');
// 	$.ajax({
// 		type: 'POST',
// 		url: 'student/'+ id + '/upload-image' ,
// 		data: {
// 			'_token': $('input[name=_token]').val(),
// 			'id': id,
// 			'avatar': $('input[name=avatar]')[0].files[0],
// 		},
// 		cache: false,
//     	contentType: false,
//     	processData: false,
// 		success:function(data){
// 			alert(data.msg);
// 		},
// 		error:function(data){
// 			// alert('ngu');
// 			console.log(data);
// 		}
// 	});
// });

// search-live

$('#search-live').keyup(function(e){
	var searchField = $('#search-live').val();
	if (searchField) {
		$.ajax({
			type: 'GET',
			dataType: 'json',
			url: 'student/search/' + searchField,
			data: {
				'data': searchField,
			},
			success:function(data){
				$('#result-search').html('');
				if(data.msg){
					$('#result-search').append("<li>" + data.msg + "</li>");
				}else{
					$.each(data, function(i, item){
						$('#result-search').append("<li class='list-group-item'>" + item.code + '-' + item.name + "</li>");
					});
				}
			}
		});
	}
	else{
		$('#result-search').html('');
	}
});