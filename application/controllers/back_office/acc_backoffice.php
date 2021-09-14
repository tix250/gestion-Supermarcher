<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Acc_backoffice extends CI_Controller { 


//function 
 	function acceuil()  
      {  
      	$this->load->view("back_office/home");
      	  
      }
 }
 ?>