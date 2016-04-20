$(document).ready(function(){
	var url = "/thuexeweb";
	$(".select_b_search_tinh").change(function() {
   	var tid = $(this).find("option:selected").val();
	$.ajax({
            type: "POST",
            cache: false,
            url : url + '/tinh/' + tid,
            success: function(data) {
                var obj = $.parseJSON(data);
                var i = 0;
                //console.log(data);
                var out = "";
                $.each(obj, function() {
                    //console.log(this.id);
                    //console.log(this.name);
                    out += '<option value="';
   					out += this.id;
   					out += '">' + this.name;
   					out += '</option>';
                    i++;
                });
                $('.select_b_search_diadanh select option').remove();
   				var preOut = '<option value="">Nhập điểm đi</option>';
   				$('.select_b_search_diadanh select').append(preOut);
   				$('.select_b_search_diadanh select').append(out);
            }
        })
        // .done(function(data) {
        //     alert('done');
        // })
        .fail(function(jqXHR, ajaxOptions, thrownError) {
            alert('No response from server');
        });
   	// $.post(url + '/seat/' + tid, function(returndata){
   	// 	var count = returndata.tenhuyen.length;
   	// 	var out = "";
   	// 	for(var i = 0; i< count; i++){
   	// 		out += '<option value="';
   	// 		out += returndata.huyenId[i];
   	// 		out += '">' + returndata.tenhuyen[i];
   	// 		out += '</option>';
   	// 	}
   	// 	$('.select_b_search_diemdi1 select option').remove();
   	// 	var preOut = '<option value="">Nhập điểm đi</option>';
   	// 	$('.select_b_search_diemdi1 select').append(preOut);
   	// 	$('.select_b_search_diemdi1 select').append(out);
   	// }, 'jSON');
});
	$(".select_b_search_diemdi").change(function(){
		var hid = $(this).find("option:selected").val();
		$.post(url + '/huyen/' + hid, function(returndata){
			var count = returndata.ddHot.length;
			var out = "";
	   		for(var i = 0; i< count; i++){
	   			out += '<option value="';
	   			out += returndata.ddId[i];
	   			out += '">' + returndata.ddHot[i];
	   			out += '</option>';
	   		}
	   		$('.select_b_search_diemden1 select option').remove();
	   		var preOut = '<option value="">Nhập điểm đến</option>';
	   		$('.select_b_search_diemden1 select').append(preOut);
	   		$('.select_b_search_diemden1 select').append(out);
		},'jSON');
	});
});
