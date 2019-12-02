<?php
namespace View;

class SqliteConnectForm extends Page
{
    public function getForm()
     {
       $this->getHead('Выберите базу данных', ['https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css']);
       echo "<form action='table/field/' method='post'>\n<label for='sqlite'>Выберите базу данных</label>\n<br>\n<input type='file' id='file' name='file' multiple>\n<br>\n<input type='submit' value='Отправить'></form>\n";
       $this->getFoot([
           'https://code.jquery.com/jquery-3.3.1.slim.min.js',
           'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
           'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
       ]); 
     }
    
}