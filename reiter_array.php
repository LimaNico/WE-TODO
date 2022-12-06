<?php

$reiter = array(
    array(
        'ID' => 0,
        'name' => 'ToDo',
        'beschreibung' => 'Dinge die erledigt werden müssen.'
    ),
    array(
        'ID' => 1,
        'name' => 'Erledigt',
        'beschreibung' => 'Dinge die erledigt sind.'
    ),
    array(
        'ID' => 2,
        'name' => 'Verschoben',
        'beschreibung' => 'Dinge die später erledigt werden.'
    )
);

foreach ($reiter as $elem){
    echo "<tr>
            <td>".$elem['name']."</td>
            <td>".$elem['beschreibung']."</td>
            <td>
              <i class='fa-regular fa-pen-to-square'></i>
              <i class='fa-regular fa-trash-can'></i>
            </td>
          </tr>";
};