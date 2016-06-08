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
});
$("div.alert").delay(3000).slideUp();

function xacnhanxoa($msg){
    if(window.confirm($msg)){
        return true;
    }
    return false
}