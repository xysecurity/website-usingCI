<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileForm extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{   
        if (isset($_SESSION['username'])){

        }
        else{
session_start();
        }
		
        if(!empty($_SESSION['username'])){
            
            $username=$_SESSION['username'];
        }
        else{
            // $username=$_COOKIE['username'];
            echo 'cookile'.$_COOKIE['username'];
        }
		// $this->load->helper('url');
		// redirect('xxx');页面跳转
        $this->load->helper(array('form', 'url'));
        // $query = $this->db->get('user');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('correo', 'Username', 'trim|required|is_unique[user.Correo]|valid_email',array(
            'is_unique'=> 'This name already exists.',
            'valid_email'=> 'Correo should be in email form.'



        ));
        $this->form_validation->set_rules('contrasena', 'Password', 'trim|required|min_length[6]|max_length[12]',
            array('required' => 'You must provide a %s.',
                'min_length'=>'The password must be 6 characters at least')

        );
        
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('apellido', 'apellido', 'required');
        $this->form_validation->set_rules('telefono', 'telefono', 'required');
        $this->form_validation->set_rules('usuario', 'usuario', 'required');
        $this->load->helper('url');
        
        



        if ($this->form_validation->run() == FALSE)
        {
             if (isset($_POST['fundationconfirm'])){
        $this->load->view('profile(fundation).php');
        // redirect('profilefundation');
      }
      else{
        $this->load->view('profile');
      }
           


       }
       else
        {$img_file_path="/2/upload/";

    $path=$_SERVER['DOCUMENT_ROOT'].$img_file_path;
    if($_FILES['img1']['error'] > 0){
        $resultCode = 0;
        $resultMsg  = 'errorcode：'.$_FILES['img1']['error'];
        echo $resultMsg;
        echo 'You should upload img';
    }
    else{

      $uploadsrc="upload/".$_FILES['img1']['name'];
      // echo $uploadsrc;
      $savepath=$path.$_FILES['img1']['name'];
      // echo $savepath; 
      move_uploaded_file($_FILES["img1"]["tmp_name"], $savepath);
     


      $data = array(
        'Correo' => $_POST['correo'],
        'Contrasena' => sha1($_POST['contrasena']),
        'Nombre' => $_POST['nombre'],
        'Apellido' => $_POST['apellido'],
        'Telefono' => $_POST['telefono'],
        'Usuario' => $_POST['usuario'],
        'img' => $uploadsrc,
    );
      $this->db->where('Correo', $username);
      $this->db->update('user',$data);
      echo "Registrate successfully, Your name is ".$_POST['correo'];
      $_SESSION['username']=$_POST['correo'];
      
      if (isset($_POST['fundationconfirm'])){
        echo anchor('profilefundation', 'back');
      }
      else{
        echo anchor('profile', 'back');
      }

  }



}

}
}