$(document).ready(function(){
// 	var url = "/thuexeweb";
// 	$(".select_b_search_tinh").change(function() {
//    		var tid = $(this).find("option:selected").val();
// 		$.ajax({
//             type: "POST",
//             cache: false,
//             url : url + '/tinh/' + tid,
//             success: function(data) {
//                 var obj = $.parseJSON(data);
//                 var i = 0;
//                 //console.log(data);
//                 var out = "";
//                 $.each(obj, function() {
//                     //console.log(this.id);
//                     //console.log(this.name);
//                     out += '<option value="';
//    					        out += this.id;
//    					        out += '">' + this.name;
//    					        out += '</option>';
//                     i++;
//                 });
//                 $('.select_b_search_diadanh select option').remove();
//    				var preOut = '<option value="">--Nhập địa danh--</option>';
//    				$('.select_b_search_diadanh select').append(preOut);
//    				$('.select_b_search_diadanh select').append(out);
//             }
//         })
// });
// 	$(".search_diemdenTinh1").change(function(){
//    		var tid = $(this).find("option:selected").val();
//    		alert(tid);
// 		$.ajax({
//             type: "POST",
//             cache: false,
//             url : url + '/tinh/' + tid,
//             success: function(data) {
//                 var obj = $.parseJSON(data);
//                 var i = 0;
//                 //console.log(data);
//                 var out = "";
//                 $.each(obj, function() {
//                     //console.log(this.id);
//                     //console.log(this.name);
//                     out += '<option value="';
//    					out += this.id;
//    					out += '">' + this.name;
//    					out += '</option>';
//                     i++;
//                 });
//                 $('.search_diadanhDen select option').remove();
//    				var preOut = '<option value="">--Nhập địa danh--</option>';
//    				$('.search_diadanhDen select').append(preOut);
//    				$('.search_diadanhDen select').append(out);
//             }
//         })
//         //  .done(function(data) {
//         //     alert('done');
//         // })
//         // .fail(function(jqXHR, ajaxOptions, thrownError) {
//         //     alert('No response from server');
//         // });
// 	});
  // $(".dropdown-submenu a").hover(function(){
  //     $(".level2").addClass('displayblock');
  //     $(".level2").mouseout(function() {
  //     $(".level2").removeClass('displayblock');
  //   });
  // });
});
jQuery(function () {
    var datetimepicker3;
    var d = new Date();    d.setHours(0, 0, 0, 0);
    var open = false;
    $("#datetimepicker3").datetimepicker({
        timepicker: true,
        closeOnDateSelect: false,
        closeOnTimeSelect: true,
        initTime: true,
        minDate: d
    });
    $("#datetimepicker4").datetimepicker({
        timepicker: true,
        closeOnDateSelect: false,
        closeOnTimeSelect: true,
        initTime: true,
        minDate: d
    });

    jQuery("#datetimepicker3").on("dp.change", function (e) {
        var f = new Date(e.date);    var n = new Date();
        checkDate(jQuery('#datetimepicker3'), f, n);
        jQuery('#datetimepicker4').data("DateTimePicker").setMinDate(e.date);
    });
    jQuery("#datetimepicker4").on("dp.change", function (e) {
        var f = new Date(e.date);    var n = new Date();
        checkDate(jQuery('#datetimepicker3'), f, n);
        jQuery('#datetimepicker3').data("DateTimePicker").setMaxDate(e.date);
    });

    var checkDate = function (obj, f, n) {
        if (f.getTime()+60*1000 < n.getTime() && !open) {
            open = true;
            $('#message').dialog({
                modal: true,
                position: ['center', 'center'],
                show: 'blind',
                hide: 'blind',
                width: 400,
                dialogClass: 'ui-dialog-osx',
                buttons: {
                    "I understand. Let me try again": function () {
                        $(this).dialog("close");
                        obj.data('DateTimePicker').setDate(n);
                        open = false;
                    }
                }
            });
        }
    }
});