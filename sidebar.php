<?php

function getSidebar(){
    echo "    <div class='col-2'>
            <ul class='list-group'>
                <li class='list-group-item text-primary'><a href='login.php' class='text-decoration-none'>Login</a></li>
                <li class='list-group-item text-primary'><a href='projekte.php' class='text-decoration-none'>Projekte</a></li>
                <li class='list-group-item text-primary'>Aktuelles Projekt</li>
                <ul>
                    <li class='list-group-item text-primary'>Reiter</li>
                    <li class='list-group-item text-primary'>Aufgaben</li>
                    <li class='list-group-item text-primary'>Mitglieder</li>
                </ul>

            </ul>
        </div>";
}