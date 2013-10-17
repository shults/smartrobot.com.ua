$(function(){

    var App = (function() {

        /**
         * @constructor
         */
        function App() {}

        /**
         * Dot js templates
         * @type {{formTemplate: *}}
         */
        App.templates = {
            formTemplate: doT.template( $('#liqpay-form').html() ),
            errorsTemplate: doT.template( $('#errors-template').html() )
        }

        App.messages = {
            empty_name: "Поле 'Ф.И.О' не может быть пустым",
            empty_phone: "Поле 'Телефон' не может быть пустым",
            empty_email: "Поле 'E-Mail' не может быть пустым",
            wrong_format_email: "Неправильный формат адреса электронной почты",
            wrong_format_phone: "Неправильный формат телефона. Номер телефона может состоять только из цифр."
        };

        var showErrors = function(errors) {
            var errorDiv = $('#error-messages');
            errorDiv.css({display: 'block'});
            errorDiv.html( App.templates.errorsTemplate({
                errors: errors
            }) );
            $.fancybox.reposition();
        }

        /**
         * Run application
         */
        App.run = function() {

            $(document).on('click', '.product-item input.pay', function(e) {
                var product_id = $(this).parent().parent().attr('id').match(/item(\d+)$/)[1];
                var price = $(this).parent().find('.price .product-price-data').attr('data-cost');

                $.ajax({
                    url: 'get_form_data',
                    type: 'POST',
                    data: {
                        product_id: product_id,
                        price: price
                    },
                    success: function(data, textStatus, jqXHT) {

                        $.fancybox({
                            width: 640,
                            autoSize: true,
                            autoDimensions: true,
                            locked : false,
                            content: App.templates.formTemplate({
                                xml_encoded: data.xml_encoded,
                                sign: data.sign
                            })
                        });

                        console.log(data);
                    }
                });

                e.preventDefault();
            });

            $(document).on('submit', '#product-order form', function(e) {

                var user_name = $(this).find('.user_name').val();
                var user_phone = $(this).find('.user_phone').val();
                var user_email = $(this).find('.user_email').val();
                var user_delivery_address = $(this).find('.user_delivery_address').val();

                var errors = [];

                if (user_name.length == 0) {
                    errors.push( App.messages.empty_name );
                }

                if (user_phone.length == 0) {
                    errors.push( App.messages.empty_phone );
                }

                if (!(/^[\-\+\(\)\d]+$/i).test(user_phone)) {
                    errors.push( App.messages.wrong_format_phone );
                }

                if (user_email.length == 0) {
                    errors.push( App.messages.empty_email );
                }

                if (!(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/).test(user_email)) {
                    errors.push( App.messages.wrong_format_email );
                }

                if (errors.length > 0) {

                    showErrors(errors);

                } else {

                    var form = this;

                    $.ajax({
                        url: 'set_order_data',
                        type: 'POST',
                        data: {
                            user_name: user_name,
                            user_phone: user_phone,
                            user_email: user_email,
                            user_delivery_address: user_delivery_address,
                            xml_encoded: $(this).find('.xml_encoded').val()
                        },
                        success: function (data, textSatatus, jqXHR) {
                            if (data.error == 0) {
                                $(document).off('submit', '#product-order form');
                                form.submit();
                            }
                        }
                    })

                }

                e.preventDefault();
            });

        }

        return App;

    })();

    App.run();
});
