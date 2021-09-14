<!DOCTYPE html>
<html>
<head>
	<title>Creer Categorie</title>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
</head>
<body>
	<?php require("headbar.php"); ?>
<main class="mt-5 pt-3">
<div class="container-fluid"> 
	<br>
	<br>
	<br>
    <div class="row justify-content-md-center">
    	<h3 style="padding: 0 200px;">Page insertion categorie :</h3> 
	    <br>
	    <form method="post" action="<?php echo base_url(); ?>back_office/crud_categorie/inserer_cat" style="padding: 0 200px;">
            <div class="form-group">
              <label for="exampleInputEmail1">Nom_categorie : </label>
               <br><br>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="categorie" name="categorie">
               <br>
            <button type="submit" class="btn btn-primary" name="insert" >Creer</button>
        </form>
    </div>
</div>
</main>
</body>
</html>

  <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>