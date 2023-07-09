<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FrontOffice extends CI_Controller
{

	public function __construct() {
		parent::__construct();
    $this->load->helper(array('form', 'url'));
    
    # $this->load->library(['form_validation','session']);
    
		$this->load->database();
    }
    
    /**
     * Home FrontOffice
     */
    public function home()
    {
        // on charge la view qui contient le corps de la page
        $data['contents'] = 'frontoffice/home';
        
		// on charge la page dans le template
		$this->load->view('frontoffice/layout', $data);
    }
    
    /**
     * Detail Objet
     */
    public function detailObjet()
    {
        // on charge la view qui contient le corps de la page
        $data['contents'] = 'frontoffice/detailObjet';
        
		// on charge la page dans le template
		$this->load->view('frontoffice/layout', $data);
    }
    
    /**
     * Profile
     */
    public function profile()
    {
        // on charge la view qui contient le corps de la page
        $data['contents'] = 'frontoffice/profile';
        
		// on charge la page dans le template
		$this->load->view('frontoffice/layout', $data);
    }
    
    /**
     * Demande
     */
    public function demande()
    {
        // on charge la view qui contient le corps de la page
        $data['contents'] = 'frontoffice/demande';
        
		// on charge la page dans le template
		$this->load->view('frontoffice/layout', $data);
    }
}