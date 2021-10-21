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
            <form action="traitement.php" method="post" class= "justify-content-center">
                    <h1 >Animal</h1>
                    

                <div class="form-group w-50">
                    <label for="reference">reference</label>
                    <input type="number" disabled
                      class="form-control" name="reference" id="nom" placeholder="reference">
                      
                   </div>
                <div class="form-group w-50" >
                    <label for="nom">nom</label>
                    <input type="text"
                      class="form-control" name="nom" id="nom"   placeholder="nom">
                   </div>
                <div class="form-group w-50">
                    <label for="race">race</label>
                    <input type="text"
                      class="form-control" name="race" id="race" aria-describedby="helpId" placeholder="race">
                   </div>
                <div class="form-group w-50">
                    <label for="categorie">categorie</label>
                    <input type="text"
                      class="form-control" name="categorie" id="categorie" aria-describedby="helpId" placeholder="categorie">
                   </div>
                <div class="form-group w-50">
                    <label for="poids">poids</label>
                    <input type="number"
                      class="form-control" name="poids" id="poids" aria-describedby="helpId" placeholder="poids">
                   </div>
                <div class="form-group w-50">
                    <label for="age">age</label>
                    <input type="number"
                      class="form-control" name="age" id="age" aria-describedby="helpId" placeholder="age">
                   </div>
                <div class="form-group w-50">
                    <label for="cout">cout</label>
                    <input type="number"
                      class="form-control" name="cout" id="cout" aria-describedby="helpId" placeholder="cout">
                   </div>
                <div class="form-group w-50">
                    <label for="taille">taille</label>
                    <input type="number"
                      class="form-control" name="taille" id="taille" aria-describedby="helpId" placeholder="taille">
                   </div>
                <div class="form-group w-50">
                    <label for="fourrure">fourrure</label>
                    <input type="text"
                      class="form-control" name="fourrure" id="fourrure" aria-describedby="helpId" placeholder="fourrure">
                   </div>
                   <div class="bouton d-flex justify-content-between">
                          <input name="validerA" id="" class="btn btn-primary" type="submit" value="valider">
                      <button class="btn btn-light my-2 my-sm-0 d-block" type="button"><a href="dashboard.php" >Retour</a></button>

                   </div>
                  
            </form>
           
        </div>



      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>