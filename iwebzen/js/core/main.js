$(function () {
    let getAddressInfoByZip = function (zip) {
        if (zip.length >= 5 && typeof google != 'undefined') {
            var addr = {};
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'address': zip }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results.length >= 1) {
                        for (var ii = 0; ii < results[0].address_components.length; ii++) {
                            var street_number = route = street = city = state = zipcode = country = formatted_address = '';
                            var types = results[0].address_components[ii].types.join(",");
                            if (types == "street_number") {
                                addr.street_number = results[0].address_components[ii].long_name;
                            }
                            if (types == "route" || types == "point_of_interest,establishment") {
                                addr.route = results[0].address_components[ii].long_name;
                            }
                            if (types == "sublocality,political" || types == "locality,political" || types == "neighborhood,political" || types == "administrative_area_level_3,political") {
                                addr.city = (city == '' || types == "locality,political") ? results[0].address_components[ii].long_name : city;
                            }
                            if (types == "administrative_area_level_1,political") {
                                addr.state = results[0].address_components[ii].short_name;
                            }
                            if (types == "postal_code" || types == "postal_code_prefix,postal_code") {
                                addr.zipcode = results[0].address_components[ii].long_name;
                            }
                            if (types == "country,political") {
                                addr.country = results[0].address_components[ii].long_name;
                            }
                        }
                        addr.success = true;
                        for (name in addr) {
                            //console.log('### google maps api ### ' + name + ': ' + addr[name] );
                        }
                        //response(addr);
                        //console.log(addr);

                        // Autopopulate city and state
                        if (addr.country == 'United States') {
                            var state = addr.state;
                            var city = addr.city;
                            $('[name="shipState"]').find($('[name="shipState"]').val(state)).change();
                            $('[name="shipCity"]').val(city);
                        } else {
                            $('[name="shipState"]').find($('[name="shipState"]')[0]).change();
                            $('[name="shipCity"]').val('');
                            return false;
                        }


                    } else {
                        //response({success:false});
                        return false;
                    }
                } else {
                    //response({success:false});
                    return false;
                }
            });
        } else {
            //response({success:false});
            return false;
        }
    };

    $(function () {
        $.validator.addMethod("checkEmail", function (value, element) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(value).toLowerCase());
        }, ' is invalid.');

        $.validator.addMethod("phoneNumber", function (value, element) {
            var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
            return re.test(value);

        }, 'should contain only number.');

        if (typeof $(".signupForm").attr("class") !== "undefined") {
            $(".signupForm").each(function () {

                var validationRules = {
                    name: {
                        required: true
                    },
                    phone: {
                        required: true,
                        phoneNumber: true
                    },
                    email: {
                        required: true,
                        checkEmail: true
                    }
                };

                if ($(this).find("[name='category_id']").length) {
                    validationRules['category_id'] = {
                        required: false
                    };
                }

                $(this).validate({
                    rules: validationRules,
                    submitHandler: function (form) {


                        $(form).find('#formResult').removeClass("alert alert-success alert-danger").html('');
                        $(form).find('#signupBtn').hide();
                        $(form).find('#formResult').html('<img src="/images/loader.gif" alt="Loading, Please Wait..." />');

                        var formType = $(form).parents('[data-form-type]').attr('data-form-type');
                        $(form).find("#formType").val(formType);
                        $(form).find("#referer").val(document.URL);

                        _ajax.post("/crm_inc/core/send_requests.php", $(form).serialize(), function (data) {

                            if (typeof data.errors !== "undefined") {
                                $(form).find('#signupBtn').show();
                                let message = "";
                                $.each(data.errors, function (i, v) {
                                    message += v[0].toString().split(".").join(" ") + "\n";
                                });
                                $(form).find('#formResult').addClass('alert alert-danger').html(message);
                            } else if (typeof data.success !== "undefined" && !data.success) {
                                $(form).find('#signupBtn').show();
                                $(form).find('#formResult').addClass('alert alert-danger').html(data.message);
                            } else if (typeof data.success !== "undefined" && !!data.success) {
                                /*dataLayer.push({
                                    'event': 'formSubmitted',
                                    'formName': formType
                                });*/
                                $(form).find('#formResult').addClass('alert alert-success').html("Your query has been received.");
                                $(form).find('input:not([type="hidden"]),textarea,select').val('');

                                /**check order now lead**/
                                if (formType == "ordernow_form") {
                                    let lgo = $(form).find("#categoryType").val().split('_');
                                    if (lgo.length && lgo[0] == 'logo') {
                                        // console.log(lgo)
                                        window.location = "/order/logo_brief.php";
                                    } else if (lgo.length && lgo[0] == 'web') {
                                        window.location = "/order/web-brief.php";
                                    } else {
                                        // console.log(lgo)
                                        window.location = "/order/payment.php";
                                    }
                                } else {
                                    window.location = "/order/thankyou.php";
                                }


                            }

                        });

                    }
                });
            })


        }

        if (typeof $("#briefForm").attr("id") !== "undefined") {
            $("#briefForm").validate({
                submitHandler: function (form) {
                    $(form).find('#formResult').removeClass("alert alert-success alert-danger");
                    $(form).find('#briefFormBtn').hide();
                    $(form).find('#formResult').html('<img src="/images/loader.gif" alt="Loading, Please Wait..." />');

                    _ajax.post("/crm_inc/core/send_requests.php", $(form).serialize(), function (data) {

                        $(form).find("#briefFormBtn input[type='text'], #briefFormBtn input[type='email'], #briefFormBtn textarea").val('');
                        $(form).find('#formResult').addClass('alert alert-success').html('Thankyou! Your Query Has Been Sent Successfully. Our Expert will get in touch with you shortly.');
                        window.location = '/order/payment.php';

                    });


                }
            });
        }

        if (typeof $(".order-package").attr("class") !== "undefined") {

            $(".order-package").on("click", function () {
                let ele = $(this);
                data = {
                    html_description: ele.parents('[data-package-box]').find('[data-package-scroll]').html(),
                    sku: ele.attr('data-sku'),
                    categoryType: ele.attr('data-category-type'),
                    id: ele.attr('data-package-id'),
                    promotion_id: ele.attr('data-promotion-id'),
                    title: ele.attr('data-title'),
                    price: ele.attr('data-price'),
                    priceText: ele.attr('data-price-text'),
                    numeberOfPage:ele.attr('data-number-page'),
                    wordperpage:ele.attr('data-word-per-page'),
                    dataurgency:ele.attr('data-urgency'),
                    datapackagelabel:ele.attr('data-package-label'),
                    orderSession:1
                };

                _ajax.post("/crm_inc/core/send_requests.php", data, function (data) {
                    window.location = '/order/order-now.php';
                });
            });

        }

        if (typeof $(".view_detail").attr("class") !== "undefined") {

            $(".view_detail").on("click", function () {
                let ele = $(this),
                    data = {
                        html_description: ele.parents('[data-package-box]').find('[data-package-scroll]').html(),
                        short_description: ele.parents('[data-package-box]').find('[data-package-detail]').html(),
                        sku: ele.attr('data-sku'),
                        categoryType: ele.attr('data-category-type'),
                        id: ele.attr('data-package-id'),
                        promotion_id: ele.attr('data-promotion-id'),
                        title: ele.attr('data-title'),
                        price: ele.attr('data-price'),
                        priceText: ele.attr('data-price-text'),
                        orderSession: 1
                    };

                _ajax.post("/crm_inc/core/send_requests.php", data, function (data) {
                    window.location = '/view_detail.php';
                });
            });

        }


        if (typeof $("#orderForm").attr("id") !== "undefined") {

            $('.zip-change').on('blur keyup', function () {
                var $this = $(this);
                if ($this.val().length == 5) {
                    getAddressInfoByZip($this.val());
                }
            });

            $('input[type=text], input[type=tel], input[type=email], select').on(" blur change", function () {
                $(this).valid();
            });

            $('#orderForm').validate({
                errorPlacement: function (error, element) {
                    return true;
                },
                rules: {
                    shipFirstName: {
                        required: true
                    },
                    address1: {
                        required: true
                    },
                    city: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    postalCode: {
                        required: true
                    },
                    shipLastName: {
                        required: true
                    },
                    emailAddress: {
                        required: true,
                        email: true
                    },
                    shipPostalCode: {
                        required: true
                    },
                    shipAddress1: {
                        required: true,
                        minlength: 7
                    },
                    phoneNumber: {
                        required: true,
                        minlength: 10
                    },
                    shipState: {
                        required: true
                    },
                    shipCity: {
                        required: true
                    },
                    cardMonth: {
                        required: true
                    },
                    cardYear: {
                        required: true
                    },
                    cardNumber: {
                        required: true,
                        minlength: 15
                    },
                    cardSecurityCode: {
                        required: true,
                        minlength: 3
                    }
                },
                submitHandler: function (form) {
                    window.onbeforeunload = null;
                    $('#pop_overlay').show();
                    $("#orderFormBtn").hide();
                    $('#finalFormResult').html('<img src="/images/loader.gif" alt="Loading, Please Wait..." />');
                    _ajax.post('/crm_inc/core/send_requests.php', $(form).serialize(), function (data) {

                        if ((typeof data.status !== "undefined" && data.status === "error") || (typeof data.errors !== "undefined")) {

                            let message = "";
                            if (typeof data.errors.errors !== "undefined") {

                                $.each(data.errors.errors, function (i, v) {
                                    message += v[0].toString().split(".").join(" ") + "\n";
                                });

                            } else if (typeof data.message !== "undefined") {

                                message += data.message;

                            }

                            $('#finalFormResult').addClass('alert alert-danger').html(message);
                            $("#orderFormBtn").show();
                            $('#pop_overlay').hide();

                        } else if (typeof data.success !== "undefined" && !data.success) {

                            $('#finalFormResult').addClass('alert alert-danger').html(data.message);
                            $("#orderFormBtn").show();
                            $('#pop_overlay').hide();
                            if (typeof data.invoiceId !== "undefined") {
                                $('#invoiceId').val(data.invoiceId);
                            }

                        } else if (typeof data.success !== "undefined" && !!data.success) {

                            $('#finalFormResult').removeClass('alert-danger').addClass('alert alert-success').html(data.message);

                            window.location.href = '/order/receipt.php';

                        }

                    })
                }
            });

        }


    });

});