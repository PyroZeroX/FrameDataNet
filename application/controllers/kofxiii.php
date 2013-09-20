<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kofxiii extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kofxiii_framedata');
	}

	public function index()
	{
		$data['nav'] = $this->kofxiii_framedata->get_FighterList();
		$this->load->view('kofxiii', $data);
	}

	public function view($fighter)
	{
		$data['game'] = 'KOFXIII';
		$fighter = str_replace('%20', ' ', $fighter);
		$data['req'] = $fighter;
		$data['nav'] = $this->kofxiii_framedata->get_FighterList();
		$data['fighter'] = $this->kofxiii_framedata->get_FighterName($fighter);
		$this->load->helper('notation');
		if(!$data['fighter'])
		{
			//todo:
			//try find in mapping
			//otherwise throw 404.
		} //throw 404 because we couldnt determine the fighter
		else
		{
			$data['game'] = 'KOFXIII';
			$data['framedata'] = $this->kofxiii_framedata->get_Framedata($data['fighter']);
			$this->load->view('kofxiiiframedata',$data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */