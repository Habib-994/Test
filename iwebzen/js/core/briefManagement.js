$(function(){

	$(document).on("submit","#briefForm", function(){
	
		$(this).find('#formResult').removeClass("alert alert-success alert-danger");
        $(this).find('#briefFormBtn').hide();
        $(this).find('#formResult').html('<img src="/order/img/loader.gif" alt="Loading, Please Wait..." />');

        _ajax.post("/crm_inc/core/briefManagement", $(this).serialize(), function (data) {
        	if(data.status){
            $(this).find("#briefFormBtn input[type='text'], #briefFormBtn input[type='email'], #briefFormBtn textarea").val('');
            $(this).find('#formResult').addClass('alert alert-success').html('Thankyou! Your Query Has Been Sent Successfully. Our Expert will get in touch with you shortly.');
            window.location = '/order/payment';
        	}
        	else{
        		generalHelper.errorHandler(["Somthing went wrong"]);
        	}

        });
	})
});