<?php 
session_start();
if (!isset($_SESSION['notes'])){
    $_SESSION['notes'] = [];
}
if (isset($_POST['titre']) && isset($_POST['note'])){
    $_SESSION['notes'][] = ['titre' => $_POST['titre'], 'note' => $_POST['note']]; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

   
</head>
<body>
    <div class="container">
        <div class="container-fluid">
            <div class="notes-card p-3">
                <h3 class="notes-card-title">Notes</h3>
                <?php
                    foreach ($_SESSION['notes'] as $note):
                ?>
                    <div class="card">
                        <div class="card-body">
                            <b class="card-title"><?= $note['titre'] ?></b>
                            <div class="card-text"><?= $note['note'] ?></div>
                        </div>
                    </div>
                <?php
                    endforeach
                ?>
            </div>
            <form action="" method="POST">
                <div class="mb-3">    
                    <input type="text" class="form-control" name="titre" placeholder="Titre" required>
                    <textarea name="note" class="form-control" rows="2" placeholder="Note" required></textarea>
                </div>  
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</body>
</html>