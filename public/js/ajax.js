$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){
	$('.qty').blur(function(){
		let rowid = $(this).data('id');
		$.ajax({
			url : 'suagiohang/'+rowid,
			type : 'put',
			
			data : {
				qty : $(this).val(),
			},
			success : function(data){
				if(data.error){
					toastr.error(data.error, 'Thông báo', {timeOut: 5000});
				}else{
					toastr.success(data.result, 'Thông báo', {timeOut: 5000});
					location.reload();
				}
			}
		});
	});