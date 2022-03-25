<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Home_Model', 'user');
        // $this->load->model('Student_Model', 'student');
        // $this->load->model('Teacher_Model', 'teacher');
    }

    public function index()
    {
        if (!$this->session->userdata('id')) {
            redirect(base_url('login'));
        } else {
            $this->load->model('model_student');
            $this->load->model('model_teacher');
            $this->load->model('model_classes');

            $data['countTotalStudent'] = $this->model_student->countTotalStudent();
            $data['countTotalTeacher'] = $this->model_teacher->countTotalTeacher();
            $data['countTotalClasses'] = $this->model_classes->countTotalClass();

                $this->load->view('admin/inc/top');
                $this->load->view('admin/inc/header');
                $this->load->view('admin/inc/sidebar');
                $this->load->view('admin/dashboard',$data);
                $this->load->view('admin/inc/footer');
        }
    }

    public function error_page()
    {
        $this->load->view('admin/inc/top');
        $this->load->view('admin/inc/header');
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/inc/error_page');
        $this->load->view('admin/inc/footer');
    }

}
