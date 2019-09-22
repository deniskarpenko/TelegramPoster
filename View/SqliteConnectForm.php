<?php
namespace View;

class SqliteConnectForm extends Page
{
    public function getForm()
     {
        echo "<form action='table/field/' method='post'>\n<label for='sqlite'>Выберите базу данных</label>\n<br>\n<input type='file' id='file' name='file' multiple>\n<br>\n<input type='submit' value='Отправить'></form>\n";
     }
    
}