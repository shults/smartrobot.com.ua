Получен заказа с сайта http://smartrobot.com.ua <br>
<br>
Ф.И.О: <?php echo $user_name ?><br>
Номер телефона: <?php echo $user_phone ?><br>
EMail: <?php echo $user_email ?><br>
Адрес доставки: <?php echo $user_delivery_address ?><br>
<br>
Параметры оплаты на LiqPay:<br>
<?php echo htmlspecialchars($xml, ENT_QUOTES, 'UTF-8') ?><br>