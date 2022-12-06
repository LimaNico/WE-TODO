<?php


$aufgaben = array(
    array(
        'aufgabenID' => 0,
        'aufgabenBezeichnung' => 'HTML Datei erstellen',
        'aufgabenBeschreibung' => 'HTML Datei erstellen',
        'reiterID' => 'ToDo',    //0 == T ODO; 1  == Erledigt, 2== Verschoben
        'zuständig' => 'Max Mustermann'
    ),

    array(
        'aufgabenID' => 1,
        'aufgabenBezeichnung' => 'CSS Datei erstellen',
        'aufgabenBeschreibung' => 'CSS Datei erstellen',
        'reiterID' => 'ToDo',
        'zuständig' => 'Max Mustermann'
    ),

    array(
        'aufgabenID' => 2,
        'aufgabenBezeichnung' => 'PC eingeschaltet',
        'aufgabenBeschreibung' => 'PC eingeschaltet',
        'reiterID' => 'Erledigt',
        'zuständig' => 'Max Mustermann'
    ),

    array(
        'aufgabenID' => 3,
        'aufgabenBezeichnung' => 'Kaffee trinken',
        'aufgabenBeschreibung' => 'Kaffee trinken',
        'reiterID' => 'Erledigt',
        'zuständig' => 'Petra Müller'
    ),

    array(
        'aufgabenID' => 4,
        'aufgabenBezeichnung' => 'Für die Uni lernen',
        'aufgabenBeschreibung' => 'Für die Uni lernen',
        'reiterID' => 'Verschoben',
        'zuständig' => 'Max Mustermann'
    ),

);

foreach ($aufgaben as $aufgabe){
    echo "<tr>
                        <td>".$aufgabe['aufgabenBezeichnung']."</td>
                        <td>".$aufgabe['aufgabenBeschreibung']."</td>
                        <td>".$aufgabe['reiterID']."</td>
                        <td>".$aufgabe['zuständig']."</td>
                        <td>
                            <i class='fa-regular fa-pen-to-square'></i>
                            <i class='fa-regular fa-trash-can'></i>
                        </td>
                    </tr>";
}
