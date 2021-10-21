
 

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.css">

    <link rel="stylesheet" href="style.css">
</head>
  <body>

        <div class="container w-50">
            <form action="traitement.php" method="post" class= "m-auto">
                    <h1 >CLIENT</h1>
                    

                <div class="form-group w-50">
                    <label for="nom">nom</label>
                    <input type="text"
                      class="form-control" name="nom" id="nom" placeholder="nom">
                      
                   </div>
                <div class="form-group w-50" >
                    <label for="telephone">telephone</label>
                    <input type="number"
                      class="form-control" name="telephone" id="telephone"   placeholder="telephone">
                   </div>
                <div class="form-group w-50" >
                    <label for="adresse">adresse</label>
                    <input type="text"
                      class="form-control" name="adresse" id="adresse"   placeholder="adresse">
                   </div>
                <div class="form-group w-50">
                    <label for="animal">animal</label>
                    <input type="text"
                      class="form-control" name="animal" id="animal" aria-describedby="helpId" placeholder="animal">
                   </div>
           
                   <div class="bouton d-flex justify-content-between">
                   <input name="validerC" id="" class="btn btn-primary" type="submit" value="valider">
                      <button class="btn btn-light my-2 my-sm-0 d-block" type="button"><a href="dashboard.php" >Retour</a></button>

                   </div>

            </form>
           
        </div>


        

  <div class="container">
      <table class="table">
          <thead>
              <tr>
                  <th>reference</th>
                  <th>nom</th>
                  <th>Telephone</th>
                  <th>Adresse</th>
                  <th>Animal</th>

                 






              </tr>
          </thead>
          <tbody>
          <?php
                include 'fonctions.php';

     $conn = getDatabaseConnexion();
     $requete = 'SELECT * FROM clients ORDER BY reference DESC';
     $stmt= $conn->query($requete);
     $row = $stmt->fetchAll(); 
                  
            foreach($row as $row): 
     ?>
                <tr>
                    

                     <td scope="row"><?php echo $row['reference']?></td>

                    <td><?php echo $row['nom']?></td>
                    <td><?php echo $row['telephone']?></td>
                    <td><?php echo $row['adresse']?></td>
                    <td><?php echo $row['animal']?></td>
                                    

                  
                </tr>
    <?php endforeach ?>
     
     
          </tbody>
      </table>
  </div>



      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>