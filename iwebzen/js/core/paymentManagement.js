$(function () {

    $(document).on("change","#countryId",function(){
            var countryId=$("#countryId").val();
            _ajax.post("../crm_inc/core/generalHelpers", {countryId:countryId,state:1}, function (response) {
                $("#stateName").text("");
                if(response.status){
                    
                    $("#stateName").append('<option value="">Select State</option>');
                    $.each(response.data,function(index,value){
                        $("#stateName").append('<option value="'+index+'">'+value+'</option>');
                    });
                }
                else{
                    
                    $("#stateName").append('<option value="">Select State</option>');
                    $("#stateName").append('<option value="NS">Default State</option>');
                }
                
            });
    })
    $(document).on("submit", "#orderForm", function () {
        $(this).find('#formResult').removeClass("alert alert-success alert-danger").html('');
        $(this).find('#signupBtn').hide();
        $(this).find('#formResult').html('<img src="order/img/loader.gif" alt="Loading, Please Wait..." />');
        var formType = $(this).parents('[data-form-type]').attr('data-form-type');
        $(this).find("#formType").val(formType);
        $(this).find("#referer").val(document.URL);
        var formData = new FormData(this);
        var currentForm = $(this);
        _ajax.postFormData("../crm_inc/core/paymentManagement", formData, function (response) {
            currentForm.find('#signupBtn').show();
            if (response.status) {
                currentForm.find('#finalformResult').addClass('alert alert-success').html("Congratulations! You've Signed up, redirecting please wait.....");
                currentForm.find('input:not([type="hidden"]),textarea,select').val('');
                window.location.href = '/order/receipt';
            } else {
                currentForm.find('#formResult').hide();
                generalHelper.errorHandler(response.messages);
            }
        });
    });

});