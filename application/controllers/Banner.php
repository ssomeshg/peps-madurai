<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

    public function __construct() {
	    parent::__construct();

        if ($this->session->userdata('id') == '') {
            redirect(base_url() . 'Nirvakam');
        }

        $this->data['theme'] = 'Nirvakam';
        $this->data['module'] = 'banner';
        $this->data['page'] = '';
        $this->data['base_url'] = base_url();

        $this->load->model('Common_model', 'Common');
        $this->load->model('Banner_model', 'Banner');

    }

    public function index() {
		
        $this->data['page'] = 'banner_create';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function banner_list(){
        $this->data['banner'] = $this->Common->get_records("tbl_banner","*",array('status' => 0));
        $this->data['page'] = 'banner_list';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function banner_save() {
		
        $id = $where['id'] = $this->input->post('id');
        $values['title'] = $this->input->post('title');
        $values['heading'] = $this->input->post('heading');
        $values['content'] = $this->input->post('content');
        $values['video_link'] = $this->input->post('video_link');

        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $config['upload_path'] = 'uploads/banner';
            $config['allowed_types'] = 'jpg|png|jpeg|webp';
            $config['file_name'] = rand() . time();

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', "Please upload an image with dimensions 1568 * 789.");
                redirect('banner_create');
                return;
            } else {
                $data = array('upload_data' => $this->upload->data());
                $values['image'] = $data['upload_data']['file_name'];
            }
        }
		if(!empty($id)){
			$insert_id = $this->Common->update('tbl_banner',$values,$where);
			$this->session->set_flashdata('success', 'Banner updated successfully.');
		}else{
			$insert_id = $this->Common->insert('tbl_banner',$values);
			$this->session->set_flashdata('success', 'Banner added successfully.');
		}
		
        redirect("banner_list");
    }

    public function banner_edit($id = NULL) {
		 
        $this->data['banner'] = null;

		if ($id) {
            $this->data['banner'] = $this->Banner->getbanner($id);
        }
		
        $this->data['page'] = 'banner_create';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function banner_delete($id){

        $where['id'] = $id;
		$values['status'] = 1;
		$this->Common->update('tbl_banner', $values, $where);
		$this->session->set_flashdata('success', 'Banner deleted successfully');
		redirect("banner_list");
	}

}