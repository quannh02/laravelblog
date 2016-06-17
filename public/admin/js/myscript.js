function commaFormat(n){
	var comma = ".";
	var a =[n];
	var arraybaso = [];
	var index = 0;
	var length = a[0].length;
	var i = 0;
	while(a[0].length > 3) {
		var nn = a[0].substr(a[0].length-3);
		arraybaso.unshift(nn);
		a[0] = a[0].substr(0,a[0].length-3);
	}
	if(a[0].length > 0){ arraybaso.unshift(a[0]);}
	a[0] = arraybaso.join(comma);
	return a[0];
}
$(document).ready(function(){
	$('.btn-reset').click(function(){
		$('.form-group input').val()  = '';
	});
	$('.close').click(function(){
		$(this).parent().hide();
	});
	// var valueForCheckedCustomer_Type = $('#radioValueForCheck').val();
	// if(valueForCheckedCustomer_Type == 1){
	// 	document.getElementById("khachCT").checked = true;
	// } else {
	// 	document.getElementById("khachCN").checked = true;
	// }
	// $(".nav-pills li a").click(function(){
	// 	$('.nav-pills li').addClass('active');
	// });
	$('#giamuaxe').keyup(function(){
		var val = $(this).val().split('.');
		var n = val.join("");
		//alert(n);
		var formatSo = commaFormat(n);
		$(this).val(formatSo);
	});
});
$("div.alert").delay(3000).slideUp();

function xacnhanxoa($msg){
    if(window.confirm($msg)){
        return true;
    }
    return false
}