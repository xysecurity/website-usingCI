<?php

class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));
        // $this->load->helper('form');
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
        $this->form_validation->set_rules('direccion', 'direccion', 'required');
        $this->form_validation->set_rules('ciudad', 'ciudad', 'required');
        $this->form_validation->set_rules('estado', 'estado', 'required');
        $this->form_validation->set_rules('postal', 'postal', 'required');
      


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('Registrate');
        }
        else
            {$data = array(
                'Correo' => $_POST['correo'],
                'Contrasena' => sha1($_POST['contrasena']),
                'Nombre' => $_POST['nombre'],
                'Apellido' => $_POST['apellido'],
                'Direccion' => $_POST['direccion'],
                'Ciudad' => $_POST['ciudad'],
                'Estado' => $_POST['estado'],
                'Postal' => $_POST['postal'],
                'Type' => $_POST['type1'],
);
        $this->db->insert('user',$data);
        echo "Registrate successfully, Your name is ".$_POST['correo'];
            
        }
    }
}