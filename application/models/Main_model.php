 <?php  
 class Main_model extends CI_Model  
 {  
      function can_login($username, $password)  
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('users');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      } 

      function insert($nom_categorie)  
      {  
           $data = array('nom_categorie' => $nom_categorie);
           $this->db->insert('categorie',$data);
      }

      function lister_cat () {
          $this->db->select('*');
          $this->db->from('categorie');                

          $query =$this->db->get();
                   
          if ($query->num_rows()) {
            return $query->result_array();
          } else {
            return 0;
          }
      }

      function recherche_prod ($nom_produit) {
          $this->db->select('*');
          $this->db->from('produit');
          $this->db->like('nom_produit', $nom_produit);
          //$this->db->where('nom_produit', $nom_produit);                

          $query =$this->db->get();
                   
          if ($query->num_rows()) {
            return $query->result_array();
          } else {
            return 0;
          }
      }

      function lister_prod () {
          $this->db->select('*');
          $this->db->from('produit');                

          $query =$this->db->get();
                   
          if ($query->num_rows()) {
            return $query->result_array();
          } else {
            return 0;
          }
      }

      function delete_categorie ($id_categorie) {
        $this->db->delete('categorie', array('id_categorie'=>$id_categorie));  
        
      } 

      function delete_produit ($id_produit) {
        $this->db->delete('produit', array('id_produit'=>$id_produit));  
        
      } 

      function insert_produit($nom_produits , $id_categorie , $prix , $nom_image) {
         $data = array('nom_produit' => $nom_produits , 'prix_produit' => $prix , 'id_categorie' => $id_categorie , 'image_produit' => $nom_image);
        $this->db->insert('produit',$data);
      }   
 }     