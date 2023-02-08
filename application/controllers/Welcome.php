<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
		$this->load->view('welcome_message');
	}

	/**
	 * Cette page accepte une variable url facultative
	 * Cette page recupere aussi une variable $_GET
	 * welcome/bonjour/Rakoto
	 * welcome/bonjour/Rakoto?id=1
	 */
	public function bonjour($pseudo = '')
	{
		echo 'Salut à toi : ' . $pseudo . '<br>';
		echo 'Variable  : ' . $this->input->get('id') . '<br>';
	}

	/**
	 * Cette page accepte deux variables url facultative
	 * welcome/manger/frites/hambourger
	 */
	public function manger($plat = '', $boisson = '')
	{
		echo 'VOici votre menu: <br>';
		echo $plat . '<br>';
		echo $boisson . '<br>';
		echo 'Bon appetit';
	}

	/**
	 * welcome/accueil
	 */
	public function accueil()
	{
		$data = array();
		$data['pseudo'] = 'Rakoto';
		$data['email'] = 'Rakoto@gmqil.com';
		$data['en_ligne'] = true;

		$this->load->view('vue', $data);
	}

	/**
	 * welcome/about
	 */
	function about()
	{
		// définition des données variables du template
		$data['title'] = 'Le titre de la page';
		$data['description'] = 'La description de la page pour les moteurs de recherche';
		$data['keywords'] = 'les, mots, clés, de, la, page';

		// on charge la view qui contient le corps de la page
		$data['contents'] = 'page_contenu_view';
		
		// on charge la page dans le template
		$this->load->view('templates/template', $data);
	}
}
