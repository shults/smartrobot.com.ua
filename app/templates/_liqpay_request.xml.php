<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<request>
    <version>1.2</version>
    <merchant_id><?php echo $config['merchant_id'] ?></merchant_id>
    <result_url><?php echo $config['result_url'] ?></result_url>
    <server_url><?php echo $config['server_url'] ?></server_url>
    <order_id><?php echo md5(microtime()) ?></order_id>
    <amount><?php echo $price ?></amount>
    <currency>UAH</currency>
    <description>Оплата товара на сайте smartrobot.com.ua. Наименование товара: "<?php echo $product_name?>"</description>
    <default_phone></default_phone>
    <pay_way>card</pay_way>
    <goods_id>"<?php echo $product_id ?>"</goods_id>
</request>