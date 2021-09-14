<!DOCTYPE html>
<html>
<head>
	<title>Insertion Produit</title>
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
	    <?php echo form_open_multipart('back_office/crud/do_upload');?>

                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Nom_produit</label>
                    <input type="text" class="form-control" id="inputEmail4" required="" name="nom_produit">
                </div>
                
                <div class="col-12">
                    <label for="inputState" class="form-label">Categorie produit</label>
                    <select id="inputState" class="form-select" name="categorie">
                      <option value="<?php echo($categorie[0]['id_categorie']);?>" selected><?php echo($categorie[0]['nom_categorie']);?></option>
                      <?php  for($i=1 ; $i< count($categorie) ; $i++) {?>
                      <option value="<?php echo($categorie[$i]['id_categorie']);?>"> <?php echo($categorie[$i]['nom_categorie']) ?></option>
                      <?php } ?>
                    </select>
                </div>  
                 
                  <div class="col-12">
                    <label for="inputAddress2" class="form-label">Prix</label>
                    <input type="number" class="form-control" id="inputAddress2" placeholder="Prix du produit" name="prix">
                  </div>
                  
                  
                  <div class="col-12">
                    <label for="inputAddress2" class="form-label">image</label>
                    <div class="input-group">
                      <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="userfile">
                    </div>
                  </div>
                  <br>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Inserer</button>
              </div>
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