Flash
***************
на сайтах при выполнении действий встречается уведомления для пользователя  
- ПРИМ. "ВЫ АВТОРИЗИРОВАННЫ"
Используется для информативности или для дальнейших действий например 
если не авторизирован пользователь с выводом соответствующего уведомления.
Так с помощью сесиий или других инструментов можно выводить любые сообщения хоть о 
добавлении статии в блог или товара в карзину магазина
***************
Исходя из задачи написал 
 основанный на сессиях компонент, для вывода флеш сообщений 
Все пытался реализовать как можно проще.
- Создал класс Message с   методом $message  изначально со значением false;
- Попытался написать конструктор (как Вы обьясняли) прокинуть значение
 public function __construct($val)
    {
        $this->registration($val);
    }
- дальше простая проверука наличия ссесии с пользователем
- ну и конечно возможные выводы сообщений
Получается по APIданный компонент  - можно без труда переделать под разные сообщения и  добавлять разные  условия.
Вызывается 
вна подключенной странице
<h2><?php  $message_output = new Message($user); ?></h2>
данной командой ( на подключенной имел ввиду клас подключен в странице)
Тоесть в данном блоке главное только class Message и вызов  - можно использовать в любом проекте.