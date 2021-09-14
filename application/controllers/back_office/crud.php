<?php 


 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Crud extends CI_Controller { 

 	public function __construct()
        {
				parent::__construct();
                $this->load->helper(array('form', 'url'));                
        }
//function 
 	function inserer()  
      {  
      	$this->load->model('main_model');
      	$categorie=$this->main_model->lister_cat();
      	$this->load->view("back_office/insert_produit" ,array('categorie'=>$categorie));

      }
    function do_upload () {
    	      	$this->load->model('main_model');
    		    $nom_produits = $this->input->post('nom_produit');
    		    $id_categorie = $this->input->post('categorie'); 
    		    $prix = $this->input->post('prix'); 
    		    var_dump($nom_produits);
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        var_dump($error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $nom_image = $data['upload_data']['file_name'];
                        $this->main_model->insert_produit($nom_produits , $id_categorie , $prix , $nom_image);
                         echo ("<script type='text/javascript'>alert('Insertion avec succée');
</script>");
                        $this->inserer();


                } 
    }
 }




 ?>