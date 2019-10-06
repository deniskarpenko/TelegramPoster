<?php
namespace View;

class TableForm extends Page
{
    public static function DrawTableInfo($tables)
    {
        echo "<form action='posting' method='post' name='posting'>\n";
            foreach ($tables as $table) {
                for ($i = 0; $i < count($table['fields']); $i++) {
                    echo "<input type='checkbox' checked>".$table['fields'][$i]['name']."<br>\n";
                }
                
            }
        echo "<input type='submit' value='Отправить'>";
        echo "</form>";
    }
}
