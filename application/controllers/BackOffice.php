<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BackOffice extends CI_Controller
{
	public function __construct() {
		parent::__construct();
    $this->load->helper(array('form', 'url'));
    
    # $this->load->library(array('form_validation','session'));
    
		$this->load->database();
    }
    
    /**
     * Home Backoffice
     */
    public function home()
    {
        // on charge la view qui contient le corps de la page
        $data['contents'] = 'backoffice/home';
        
		// on charge la page dans le template
		$this->load->view('backoffice/layout', $data);
    }
    
    /**
     * Create a category
     */
    public function indexCategory()
    {
        // on charge la view qui contient le corps de la page
        $data['contents'] = 'backoffice/categories/index';
        
		// on charge la page dans le template
		$this->load->view('backoffice/layout', $data);
    }

    /**
     * Create a category
     */
    public function createCategory()
    {
        // on charge la view qui contient le corps de la page
        $data['contents'] = 'backoffice/categories/create';
        
		// on charge la page dans le template
		$this->load->view('backoffice/layout', $data);
    }

    /**
     * Read a category
     */
    public function readCategory()
    {
        // on charge la view qui contient le corps de la page
        $data['contents'] = 'backoffice/categories/read';
        
		// on charge la page dans le template
		$this->load->view('backoffice/layout', $data);
    }

    /**
     * Update a category
     */
    public function updateCategory()
    {
        // on charge la view qui contient le corps de la page
        $data['contents'] = 'backoffice/categories/update';
        
		// on charge la page dans le template
		$this->load->view('backoffice/layout', $data);
    }

    /**
     * Delete a category
     */
    public function deleteCategory()
    {
        // on charge la view qui contient le corps de la page
        $data['contents'] = 'backoffice/categories/delete';
        
		// on charge la page dans le template
		$this->load->view('backoffice/layout', $data);
    }
}