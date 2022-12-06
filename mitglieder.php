<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personen</title>
  <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet" />
  <script src="https://kit.fontawesome.com/376c44d724.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid">
    <?php include "header.php";
    getHeader("Personen");?>
  <div class="row">
      <?php include "sidebar.php";
      getSidebar();
      ?>
    <div class="col-10">
      <div class="row w-75">
        <table class="table">
          <thead class="bg-light">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">E-Mail</th>
            <th scope="col">In Projekt</th>
            <th scope="col"></th>
          </tr>
          </thead>
          <tbody>
          <?php include "mitglieder_array.php"
          ?>
          </tbody>
        </table>
      </div>
      <div class="row w-75">
        <h2 class="mt-3">Bearbeiten/Erstellen</h2>
        <div>
          <form action="">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" type="text" name="username" id="username" placeholder="Username">

            <label class="mt-3" for="email">E-Mail-Adresse:</label>
            <input class="form-control" type="text" name="email" id="email" placeholder="E-Mail-Adresse eingeben">

            <label class="mt-3" for="passwort">Passwort:</label>
            <input class="form-control" type="text" name="passwort" id="passwort" placeholder="Passwort">
            <input class="mt-3" type="checkbox" id="projektZugeordnet">
            <label for="projektZugeordnet">Dem Projekt zugeordnet</label>
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