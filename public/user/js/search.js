$(function(){
	$('#searchdsxe').on('click', function(){
	var searchField = $('#searchdsxeInput').val();
	alert(searchField);
	var url = "/thuexeweb";
	$.ajax({
		type: "GET",
		cache: false,
		url:  url + '/searchdsxe',
		data: { q: searchField },
		success: function(data){
			var obj = $.parseJSON(data);
			$('.tabledsxe table tbody').empty();
			$('.paginationdsxe').empty();
			var output = '';
			$.each(obj, function(key, val){
				output += '<tr><td  scope="row">' + val.xe_id + '</td>';
                output += '<td>' + val.hang_id +'</td>';
                output += '<td>' +val.ten_xe + '</td>';
                 
                output += '<td><img class="img img-responsive url_hinhxe" src="http://localhost:8000/thuexeweb/public/user/images/' + val.url_hinhxe+ '"></td>';
                output +=  '<td>' + val.sodangky_xe + '</td>';
     			output +=  '<td>' + val.color + '</td>';
                output += '<td>'  + val.tai_xe_id +'</td>';
                output += '<td>' + val.socho_xe + '</td>';
                output += '<td>' + val.ngaysanxuat + '</td>';
                output += '<td>' + val.ngaydangkiem + '</td>';

                output +=  '<td><a class="btn btn-default text-right" data-toggle="tooltip" href="'+ url + '/cars/edit/' + val.xe_id + '" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>';
                output +=  '<div class="pull-right"><form accept-charset="UTF-8" action="' + url + '/cars/destroy/' + val.xe_id+ '" method="POST"><button data-container="body" data-original-title="Delete" href="#" data-toggle="tooltip" class="btn btn-danger add-tooltip" type="submit"><i class="fa fa-times"></i></button></form></div></td>';
                output += '</tr>';
            });
            
            $('.tabledsxe table tbody').html(output);
		}
	});
});
});