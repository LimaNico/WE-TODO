<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aufgaben</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet" />
    <script src="https://kit.fontawesome.com/376c44d724.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid">
    <?php include "header.php";
    getHeader("Aufgaben");?>
    <div class="row">
        <?php include "sidebar.php";
        getSidebar();
        ?>
        <div class="col-10">
            <div class="row w-75">
                <table class="table">
                    <thead class="bg-light">
                    <tr>
                        <th scope="col">Aufgabenbezeichnung:</th>
                        <th scope="col">Beschreibung der Aufgabe:</th>
                        <th scope="col">Reiter:</th>
                        <th scope="col">Zuständig:</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>HTML Datei erstellen</td>
                        <td>HTML Datei erstellen</td>
                        <td>ToDo</td>
                        <td>Max Mustermann</td>
                        <td>
                            <i class="fa-regular fa-pen-to-square"></i>
                            <i class="fa-regular fa-trash-can"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>CSS Datei erstellen</td>
                        <td>CSS Datei erstellen</td>
                        <td>ToDo</td>
                        <td>Max Mustermann</td>
                        <td>
                            <i class="fa-regular fa-pen-to-square"></i>
                            <i class="fa-regular fa-trash-can"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>PC eingeschaltet</td>
                        <td>PC einschalten</td>
                        <td>Erledigt</td>
                        <td>Max Mustermann</td>
                        <td>
                            <i class="fa-regular fa-pen-to-square"></i>
                            <i class="fa-regular fa-trash-can"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Kaffee trinken</td>
                        <td>Kaffee trinken</td>
                        <td>Erledigt</td>
                        <td>Petra Müller</td>
                        <td>
                            <i class="fa-regular fa-pen-to-square"></i>
                            <i class="fa-regular fa-trash-can"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Für die Uni lernen</td>
                        <td>Für die Uni lernen.</td>
                        <td>Verschoben</td>
                        <td>Max Mustermann</td>
                        <td>
                            <i class="fa-regular fa-pen-to-square"></i>
                            <i class="fa-regular fa-trash-can"></i>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row w-75">
                <h2 class="mt-3">Bearbeiten/Erstellen</h2>
                <div>
                    <form action="">
                        <label class="form-label" for="aufgabenbezeichnung">Aufgabenbezeichnung:</label>
                        <input class="form-control" type="text" name="aufgabenbezeichnung" id="aufgabenbezeichnung" placeholder="Aufgabe">
                        <label class="mt-3 form-label" for="aufgabenBeschreibung">Beschreibung der Aufgabe:</label>
                        <textarea class="form-control" name="aufgabenBeschreibung" id="aufgabenBeschreibung" placeholder="Beschreibung" rows="3" ></textarea>
                        <label for="erstellungsDatum" class="mt-3 form-label">Erstellungsdatum:</label>
                        <input type="text" class="form-control" name="erstellungsDatum" id="erstellungsDatum" placeholder="01.01.19">
                        <label for="fälligkeitsDatum" class="mt-3 form-label">fällig bis:</label>
                        <input type="text" class="form-control" name="fälligkeitsDatum" id="fälligkeitsDatum" placeholder="01.01.19">
                        <label for="reiter-select" class="form-label mt-3">Zugehöriger Reiter:</label>
                        <select name="reiter-select" id="reiter-select" class="form-select" >
                            <option selected>ToDo</option>
                            <option>Erledigt</option>
                            <option>Verschoben</option>
                        </select>
                        <label for="zuständig-select" class="form-label mt-3">Zuständig:</label>
                        <select name="zuständig-select" id="zuständig-select" class="form-select" >
                            <option selected>Max Mustermann</option>
                            <option>Petra Müller</option>
                        </select>
                    </form>
                    <div class="mt-3">
                        <button class="btn btn-primary">Speichern</button>
                        <button class="btn btn-info">Reset</button>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>
</body>
</html>