<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reiter</title>
  <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet" />
  <script src="https://kit.fontawesome.com/376c44d724.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid">
  <?php include ('header.php');
  getHeader("Reiter");?>
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
            <th scope="col">Beschreibung</th>
            <th scope="col"></th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>ToDo</td>
            <td>Dinge die erledigt werden müssen.</td>
            <td>
              <i class="fa-regular fa-pen-to-square"></i>
              <i class="fa-regular fa-trash-can"></i>
            </td>
          </tr>
          <tr>
            <td>Erledigt</td>
            <td>Dinge die erledigt sind.</td>
            <td>
              <i class="fa-regular fa-pen-to-square"></i>
              <i class="fa-regular fa-trash-can"></i>
            </td>
          </tr>
          <tr>
            <td>Verschoben</td>
            <td>Dinge die später erledigt werden.</td>
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
            <label class="form-label" for="reitername">Bezeichnung des Reiters:</label>
            <input class="form-control" type="text" name="reitername" id="reitername" placeholder="Reiter">

            <label class="mt-3" for="reiterBeschreibung">Beschreibung:</label>
            <textarea class="form-control" name="reiterBeschreibung" id="reiterBeschreibung" placeholder="Beschreibung" rows="3" ></textarea>
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