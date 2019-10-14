<?php
namespace View;

class TableForm extends Page
{
    public static function DrawTableInfo($tables)
    { 
        echo "<form action='posting' method='post' name='posting'>\n";
            foreach ($tables as $table) {
                echo $table['table']."<br>\n";
                for ($i = 0; $i < count($table['fields']); $i++) {
                    echo "<input type='checkbox' name=".$table['fields'][$i]['name']." checked>".$table['fields'][$i]['name']."<br>\n";
                }
                echo "<input type='hidden' name='tb' id='tb' value='".$table['table']."'>";
                
            }
        echo "ID chat<input type='text' name='group' id='group'><br>";
        echo "Token/label><input type='text' name='token' id='token'><br>";
        echo "<input type='submit' value='Отправить'<br>";
        
        echo "</form>";
    }
}
