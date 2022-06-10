<?php 
session_start();
if(!$_SESSION['mdp']){
  header("Location: http://localhost/portfolio/espaceAdmin/connexion.php");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Admin page </title>
</head>
<body>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Prénom</th>
        <th scope="col">Nom</th>
        <th scope="col">email</th>
        <th scope="col">objets</th>
        <th scope="col">message</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $host = "localhost";
      $username = "root";
      $password = "";
      $database = "site_perso";

        // se connecter à mysql
        $con = mysqli_connect("$host","$username","$password","$database");
        if ($con) {
          
        }else{
          echo "failed ! ";
        }

      $sel = "SELECT * FROM form";
      $query = $con->query($sel);
      while($row = $query->fetch_assoc())
      {

      ?>
      <tr>
        <th scope="row"><?php echo $row ['id']; ?></th>
        <td><?php echo $row ['firstname'];?></td>
        <td><?php echo $row ['lastname'];?></td>
        <td><?php echo $row ['email'];?></td>
        <td><?php echo $row ['objets'];?></td>
        <td><?php echo $row ['message'];?></td>
        
        <td>
          <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php 
      }
      ?>
    </tbody>
  </table>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

