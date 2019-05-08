<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventForm extends CI_Controller {

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
            // echo 'cookile'.$_COOKIE['username'];
        }
		// $this->load->helper('url');
		// redirect('xxx');页面跳转
        $this->load->helper(array('form', 'url'));
        // $query = $this->db->get('user');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('Nombre', 'Nombre', 'trim|required|is_unique[event.Nombre]',array(
            'is_unique'=> 'This name already exists.',
           
        ));
        // $this->form_validation->set_rules('contrasena', 'Password', 'trim|required|min_length[6]|max_length[12]',
        //     array('required' => 'You must provide a %s.',
        //         'min_length'=>'The password must be 6 characters at least')

        // );
        
        $this->form_validation->set_rules('Responsable', 'Responsable', 'required');
        // $this->form_validation->set_rules('img1', 'img1', 'required');
        $this->form_validation->set_rules('Lugar', 'Lugar', 'required');
        $this->form_validation->set_rules('Fecha', 'Fecha', 'required');
         $this->form_validation->set_rules('Hora', 'Hora', 'required');
          $this->form_validation->set_rules('Valor', 'Valor', 'required');
        $this->load->helper('url');
        
        



        if ($this->form_validation->run() == FALSE)
        {
            
        $this->load->view('addevent');
        


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
        'Nombre' => $_POST['Nombre'],
        'Responsable' => $_POST['Responsable'],
        'Lugar' => $_POST['Lugar'],
        'Fecha' => $_POST['Fecha'],
        'Hora' => $_POST['Hora'],
        'Valor' => $_POST['Valor'],
        'img' => $uploadsrc,
    );
      
      $this->db->insert('event',$data);
      echo "Add successfully, Event name is ".$_POST['Nombre'];
      $_SESSION['username']=$_POST['correo'];
      
   
        echo anchor('listeventagent', 'back');
     

  }



}

}
}