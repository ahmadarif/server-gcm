<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GcmController extends CI_Controller {

	public function index()
	{
		$this->load->view('gcm/v_index');
	}

	public function send() {

		// ambil data dari form
		$apiKey   = $this->input->post('apiKey');
		$regToken = $this->input->post('regToken');
		$message  = $this->input->post('message');

		// seting api key
		$this->config->load('gcm');
		$this->config->set_item('gcm_api_key', $apiKey);

		// load library
		$this->load->library('gcm');
		
		// seting message
		$this->gcm->setMessage($message);
		
		// add receiver
		$this->gcm->addRecepient($regToken);
		
		// then send
		if ($this->gcm->send())
			$this->session->set_flashdata('status', 'Berhasil');
		else
			$this->session->set_flashdata('status', 'Gagal');

		$this->session->set_flashdata('apiKey', $apiKey);
		$this->session->set_flashdata('regToken', $regToken);
		$this->session->set_flashdata('message', $message);

		redirect();
	}

}

/* End of file GcmController.php */
/* Location: ./application/controllers/GcmController.php */