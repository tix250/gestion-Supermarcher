<?php 


 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Crud_produit extends CI_Controller { 


//function 
 	/*function inserer()  
    {  
      	$this->load->view("back_office/inserer_cat");
    }
    function inserer_cat () {
      	$nom_categorie = $this->input->post('categorie'); 
      	$this->load->model('main_model');
      	$this->main_model->insert($nom_categorie);
      	?>
      	<script type="text/javascript">alert("inserer avec succes")</script>
      	<?php
      	$this->load->view("back_office/inserer_cat");

    }*/
    
    function lister () {

    	$this->load->model('main_model');
      	$produit=$this->main_model->lister_prod();
      	$this->load->view("back_office/lister_prod" ,array('produit'=>$produit));
    }

     function recherche () {
      $username = $this->input->post('recherche');

      $this->load->model('main_model');
      $produitList=$this->main_model->recherche_prod($username);
      $this->load->view("back_office/rechercher_prod" ,array('produitList'=>$produitList));
    }

    function delete($id_produit) {
      var_dump("okey0");
      $this->load->model('main_model');
      $this->main_model->delete_produit($id_produit);
      ?>
        <script type="text/javascript">alert("supprimer avec succes")</script>
        <?php
        $this->lister();
    }
    /*
    function delete () {
    	$this->load->model('main_model');
      	$categorie=$this->main_model->lister_cat();
      	$this->load->view("back_office/delete" ,array('categorie'=>$categorie));
    }
    function delete_categorie($id_categorie) {
    	$this->load->model('main_model');
    	$this->main_model->delete_categorie($id_categorie);
    	?>
      	<script type="text/javascript">alert("supprimer avec succes")</script>
      	<?php
      	$this->delete();
    }*/
 }




 ?>