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
			console.log(obj);
			$('.tabledsxe table tbody').empty();
			$('.paginationdsxe').empty();
			var output = '';
			$.each(obj, function(key, val){
				output += '<tr><td  scope="row">' + val.sodangky_xe + '</td>';
                output += '<td>' + val.hang_name +'</td>';
                output += '<td>' +val.ten_xe + '</td>';
                 
                output += '<td><img class="img img-responsive url_hinhxe" src="http://localhost:8000/thuexeweb/public/user/images/' + val.url_hinhxe+ '"></td>';
     			output +=  '<td>' + val.color + '</td>';
                output += '<td><a href="'+ url + '/showtaixe/' + val.tai_xe_id + '">Chi tiết</a></td>';
                output += '<td>' + val.socho_xe + '</td>';
                output += '<td>' + val.ngaysanxuat + '</td>';
                output += '<td>' + val.ngaydangkiem + '</td>';
                output += '<td><a href="'+ url + '/gioxe/' + val.xe_id + '" class="btn btn-success">Đặt thuê</a></td>';
                output += '</tr>';
            });
            
            $('.tabledsxe table tbody').html(output);
		}
	});
});
});