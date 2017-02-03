<?php

$i = 0;
if ($query) {
    foreach ($query as $querys) {
        $i++;
        echo $i . " - " . "<a href=\"?id=" . $querys->id . "\">" . $querys->title . "   "  . $querys->time . "</a><br>";
    }
}else {
    echo "<div class=\"alert alert-warning\">";
    echo "<strong>Ошибка: </strong> Записи не найдены!!";
    echo "</div>";
}
echo "<a href=\"?id=new\"> Новая запись </a><br>";