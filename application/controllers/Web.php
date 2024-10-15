<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->data['theme'] = 'web';
		$this->data['module'] = 'pages';
		$this->data['page'] = '';
		$this->data['base_url'] = base_url();

		$this->load->model('Common_model', 'Common');
		$this->load->model('Banner_model', 'Banner');

		//$this->load->helper('text');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->data['banner'] = $this->Common->get_records("tbl_banner", "*", array('status' => 0));
		$this->data['page'] = 'index';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}

	public function contact_save()
	{

		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('mobile_number', 'Mobile Number', 'required|regex_match[/^[0-9]{10}$/]', ['regex_match' => 'Phone Number must be 10 digits.']);

		if ($this->form_validation->run() == FALSE) {
			$errors = [
				'email' => form_error('email'),
				'mobile_number' => form_error('mobile_number')
			];
			echo json_encode(['status' => 'error', 'errors' => $errors]);
		} else {
			$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
			$userIp = $this->input->ip_address();
			$secret = '6LdSQz4qAAAAAK8lHo9oi4JdtSBGSE58sr7wB6jN';
			$url = 'https://www.google.com/recaptcha/api/siteverify';

			$response = file_get_contents($url . '?secret=' . $secret . '&response=' . $recaptchaResponse . '&remoteip=' . $userIp);
			$status = json_decode($response, true);

			if ($status['success']) {
				$values = [
					'name' => $this->input->post('name'),
					'mobile_number' => $this->input->post('mobile_number'),
					'email' => $this->input->post('email'),
					'message' => $this->input->post('message')
				];

				$insert_id = $this->Common->insert('tbl_contact', $values);
				if ($insert_id) {
					echo json_encode(['status' => 'success', 'message' => 'Your contact has been successfully saved!']);
				} else {
					echo json_encode(['status' => 'error', 'message' => 'Failed to add contact.']);
				}
			} else {
				echo json_encode(['status' => 'error', 'message' => 'reCAPTCHA verification failed. Please try again.']);
			}
		}
	}


	public function contact_delete($id)
	{

		$where['id'] = $id;
		$values['status'] = 1;
		$this->Common->update('tbl_contact', $values, $where);
		$this->session->set_flashdata('success', 'Contact deleted successfully');
		redirect('contact_list');
	}
}
