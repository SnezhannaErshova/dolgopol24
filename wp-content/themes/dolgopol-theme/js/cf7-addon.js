jQuery(function($){
	$(document).ready(function(){

		document.addEventListener( 'wpcf7invalid', function( event ) {
			var form = $('#'+ event.detail.unitTag + ' form');
			form.find('.wpcf7-not-valid-tip').each(function(){
				var tooltip_text = $(this).text();
				$(this).hide();
				var field = $(this).parent().find('.wpcf7-form-control');
				field.tooltip({title : tooltip_text, container: '#'+ event.detail.unitTag});
				field.tooltip('show');
				field.on('focus', function(){
					$(this).tooltip('dispose');
				});
			});
			$( document ).ajaxComplete(function() {
				var valid_div = form.find('.wpcf7-response-output');
				var modat_text = valid_div.text();
				valid_div.hide();
				//console.log(valid_div);
				$('#cf-modal').find('.message').html('<h5>' + modat_text + '</h5>')
				$('#cf-modal').modal('show');
			});
		});


		document.addEventListener( 'wpcf7mailsent', function( event ) {
			var form = $('#'+ event.detail.unitTag + ' form');
				var valid_div = form.find('.wpcf7-response-output');
				var modat_text = valid_div.text();
				valid_div.hide();
				//console.log(valid_div);
				form.parents('.modal').modal('hide');
				if('488' != event.detail.contactFormId){
					$('#getCallOK').find('.message').html('<h5>' + modat_text + '</h5>')
					$('#getCallOK').modal('show');
				}
				if('488' == event.detail.contactFormId){
					yaCounter47062779.reachGoal('Order');
				}
		});

	});
});