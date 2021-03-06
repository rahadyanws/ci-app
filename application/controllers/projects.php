<?php

class Projects extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata("no_access", 'Sorry you are NOT allowed or not logged in');
            redirect('home/index');
        }
    }

    public function index() {
        $data['projects'] = $this->project_model->get_projects();
        $data['main_view'] = "projects/index";
        $this->load->view('layouts/main', $data);
    }

    public function display($id) {
        $data['project_data'] = $this->project_model->get_project($id);
        $data['main_view'] = "projects/display";
        $this->load->view('layouts/main', $data);
    }

    public function create() {
        $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('project_body', 'Project Description', 'trim|required|min_length[3]');

        if ($this->form_validation->run() == FALSE) {
            $data['main_view'] = 'projects/create_project';
            $this->load->view('layouts/main', $data);
        } else {
            $data = array(
                'project_user_id' => $this->session->userdata('user_id'),
                'project_name' => $this->input->post('project_name'),
                'project_body' => $this->input->post('project_body'),
            );
            
            if($this->project_model->create_project($data)) {
                $this->session->set_flashdata('project_created', 'Your project has been created');
                redirect("projects/index");
            } else {
                
            }
        }
    }
    
    public function edit($id) {
        $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('project_body', 'Project Description', 'trim|required|min_length[3]');

        if ($this->form_validation->run() == FALSE) {
            $data['project_data'] = $this->project_model->get_project_info($id);
            $data['main_view'] = 'projects/edit_project';
            $this->load->view('layouts/main', $data);
        } else {
            $data = array(
                'project_user_id' => $this->session->userdata('user_id'),
                'project_name' => $this->input->post('project_name'),
                'project_body' => $this->input->post('project_body'),
            );
            
            if($this->project_model->edit_project($data,$id)) {
                $this->session->set_flashdata('project_updated', 'Your project has been updated');
                redirect("projects/index");
            } else {
                
            }
        }
    }

    public function delete($id) {
        $this->project_model->delete_project($id);
        $this->session->set_flashdata('project_deleted', 'Your project has been deleted');
        redirect('projects/index');
    }
}
