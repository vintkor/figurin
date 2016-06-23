<?
if(isset($_POST['phone'])&&isset($_POST['email'])){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'mail@bfc-msk.ru,alkv84@mail.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратный звонок'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>Сообщение с вашего сайта!</title>
                    </head>
                    <body>
                        <p><strong>Имя отправителя:</strong> '. $_POST['name'] .'</p>
                        <p><strong>E-mail отправителя:</strong> '. $_POST['email'] .'</p>
                        <p><strong>Телефон отправителя:</strong> '. $_POST['phone'] .'</p>
                        <p><strong>Сообщение:</strong><br><hr> '. $_POST['message'] .'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <mail@bfc-msk.ru>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}