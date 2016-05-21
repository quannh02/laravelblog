$(function(){
	var average = $('.ratingAverage').attr('data-average');
	function avaliacao(average){
		average = (Number(average)*20);
		$('.bg').css('width', 0);		
		$('.barra .bg').animate({width:average+'%'}, 500);
	}
	
	avaliacao(average);

	$('.star').on('mouseover', function(){
		var indexAtual = $('.star').index(this);
		for(var i=0; i<= indexAtual; i++){
			$('.star:eq('+i+')').addClass('full');
		}
	});
	$('.star').on('mouseout', function(){
		$('.star').removeClass('full');
	});

	$('.star').on('click', function(){
		var url = "/thuexeweb";
		var idArticle = $('.article').attr('data-id');
		var vote = $(this).attr('data-vote');
		$.ajax({
            type: "POST",
            cache: false,
            url : url + '/votes/' + idArticle,
            data: { point: vote },
            success: function(data) {
            	var obj = $.parseJSON(data);
            	avaliacao(obj.roundVote);
            	$('.votes span').empty();
            	$('.votes span').html(obj.votes);
             }
           
        })
          	//.done(function(data) {
            //	alert('done');
        	//	})
        	//.fail(function(jqXHR, ajaxOptions, thrownError) {
            //	alert('No response from server');
        	//});
	});
});