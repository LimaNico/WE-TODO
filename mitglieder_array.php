<?php
$mitglieder = array(
// Erzeuge den ersten Array und speichere einige Werte darin
    array(
        'id' => 1,
        'username' => 'kalenborn',
        'email' => 'kalenborn@example.com',
        'projektID' => 1
    ),
// Erzeuge den zweiten Array und speichere einige Werte darin
    array(
        'id' => 3,
        'username' => 'elena',
        'email' => 'elena@example.com',
        'projektID' => 1
    )
);

foreach ($mitglieder as $mitglied){
    echo "<tr>
            <td>".$mitglied['username']."</td>
            <td>".$mitglied['email']."</td>
            <td>
              <input type='checkbox'>
            </td>
            <td>
              <i class='fa-regular fa-pen-to-square'></i>
              <i class='fa-regular fa-trash-can'></i>
            </td>
          </tr>";
}