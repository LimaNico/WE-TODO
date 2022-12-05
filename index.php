<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WE-Todo</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet" />
</head>
<body>

<div class="container-fluid">
    <?php include ('header.php');
    getHeader("ToDo (Aktuelles Projekt)");?>
    <div class="row">
        <?php include "sidebar.php";
        getSidebar();
        ?>
        <div class="col-10">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <p class="card-header">ToDo:</p>
                        <div class="list-group list-group-flush">
                            <li class="list-group-item">HTML Datei erstellen (Max Mustermann)</li>
                            <li class="list-group-item">CSS Datei erstellen (Max Mustermann)</li>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <p class="card-header">Erledigt:</p>
                        <div class="list-group list-group-flush">
                            <li class="list-group-item">PC eingeschaltet (Petra Müller)</li>
                            <li class="list-group-item">Kaffee trinken (Petra Müller)</li>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <p class="card-header">Verschoben:</p>
                        <div class="list-group list-group-flush">
                            <li class="list-group-item">Für die Uni lernen (Max Mustermann)</li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>