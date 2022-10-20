<?php
$link = mysqli_connect("localhost:3306", "moonersi_admin", "qaprof-1myhqi-vIvcyr", "moonersi_HELP_SCHOOL");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}

