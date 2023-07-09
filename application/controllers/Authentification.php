<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentification extends CI_Controller
{
	public function __construct() {
		parent::__construct();
        $this->load->helper(array('form', 'url'));
        
        # $this->load->library(['form_validation', 'session']);
        
		$this->load->database();
	}
    
    /**
     * Login FrontOffice
     */
    public function loginFrontOffice()
    {
        // on charge la view qui contient le corps de la page
        $data['contents'] = 'frontoffice/login';
        
		// on charge la page dans le template
		$this->load->view('frontoffice/layout', $data);
    }
    
    /**
     * Register FrontOffice
     */
    public function registerFrontOffice()
    {
        // on charge la view qui contient le corps de la page
        $data['contents'] = 'frontoffice/register';
        
		// on charge la page dans le template
		$this->load->view('frontoffice/layout', $data);
    }
    
    /**
     * Home BackOffice
     */
    public function loginBackOffice()
    {
        // on charge la view qui contient le corps de la page
        $data['contents'] = 'backoffice/login';
        
		// on charge la page dans le template
		$this->load->view('frontoffice/layout', $data);
    }
}