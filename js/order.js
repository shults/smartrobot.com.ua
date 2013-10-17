$(function(){
    var App = (function() {

        /**
         * @constructor
         */
        function App() {}

        var formTemplate = doT.template( $('#liqpay-form').html() );

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
                            height: 360,
                            content: formTemplate({

                            })
                        });

                        console.log(data);
                    }
                });

                e.preventDefault();
            });

        }

        return App;

    })();

    App.run();
});
