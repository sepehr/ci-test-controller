<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->session->set_userdata('foo3', 'bar3');

		$data = array(
			'all_userdata' => $this->session->all_userdata(),
			'foo3'		   => $this->session->userdata('foo3'),
		);


		$this->load->view('welcome_message', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/modules/welcome/controllers/welcome.php */
