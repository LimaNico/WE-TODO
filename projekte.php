<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projekte</title>
  <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet" />
</head>
<body>

<div class="container-fluid">
    <?php include ('header.php');
    getHeader("Projekte");?>
    <div class="row">
        <?php include "sidebar.php";
        getSidebar();
        ?>
        <div class="col-10">
            <div class="row w-75">
                <h2>Projekte Auswählen:</h2>
                <select name="projekt-select" id="projekt-select" class="form-select" >
                    <option selected>- bitte auswählen -</option>
                </select>
                <div class="row mt-4">
                    <button class="btn btn-primary col-2 m-1">Auswählen</button>
                    <button class="btn btn-primary col-2 m-1">Bearbeiten</button>
                    <button class="btn btn-danger col-2 m-1">Löschen</button>
                </div>
                <h2 class="mt-3">Projekte bearbeiten/ erstellen:</h2>
                <div>
                    <form action="">
                        <label class="form-label" for="projektname">Projektname:</label>
                        <input class="form-control" type="text" name="projektname" id="projektname" placeholder="Projekt">

                        <label class="mt-3" for="projektbeschreibung">Projektbeschreibung:</label>
                        <textarea class="form-control" name="projektbeschreibung" placeholder="Beschreibung"
                                  id="projektbeschreibung" rows="3" ></textarea>
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