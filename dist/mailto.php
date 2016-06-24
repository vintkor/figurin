<?
if(isset($_POST['phone'])){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'mail@test1.organica.pp.ua,alkv84@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов info@shparma.kiev.ua
        $subject = 'Обратный звонок с сайта Фигурин'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>Сообщение с с сайта Фигурин!</title>
                    </head>
                    <body>
                        <p><strong>Имя отправителя:</strong> '. $_POST['name'] .'</p>
                        <p><strong>E-mail отправителя:</strong> '. $_POST['email'] .'</p>
                        <p><strong>Телефон отправителя:</strong> '. $_POST['phone'] .'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: ХОЧУ ФИГУРИН\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}