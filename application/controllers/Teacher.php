<?php

class Teacher extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		// $this->isNotLoggedIn();

		// loading the teacher model
		$this->load->model('model_teacher');

		// loading the form validation library
		$this->load->library('form_validation');
	}

	public function teacher()
	{
		if ($this->session->userdata('id')) {
			$this->load->library('session');

			$this->load->view('admin/inc/top');
			$this->load->view('admin/inc/header');
			$this->load->view('admin/inc/sidebar');
			$this->load->view('admin/teacher');
			$this->load->view('admin/inc/footer');
		} else {
			$this->load->view('login');
		}
	}

	/*
	*------------------------------------
	* inserts the teachers information
	* into the database 
	*------------------------------------
	*/
	public function create()
	{
		$validator = array('success' => false, 'messages' => array());

		$validate_data = array(
			array(
				'field' => 'fname',
				'label' => 'First Name',
				'rules' => 'required'
			),
			array(
				'field' => 'age',
				'label' => 'Age',
				'rules' => 'required'
			),
			array(
				'field' => 'contact',
				'label' => 'Contact',
				'rules' => 'required'
			),
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required'
			),
			array(
				'field' => 'registerDate',
				'label' => 'Register Date',
				'rules' => 'required'
			),
			array(
				'field' => 'jobType',
				'label' => 'Job Type',
				'rules' => 'required'
			)
		);

		$this->form_validation->set_rules($validate_data);
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() === true) {
			$imgUrl = $this->uploadImage();
			$create = $this->model_teacher->create($imgUrl);
			if ($create == true) {
				$validator['success'] = true;
				$validator['messages'] = "Successfully added";
			} else {
				$validator['success'] = false;
				$validator['messages'] = "Error while inserting the information into the database";
			}
		} else {
			$validator['success'] = false;
			foreach ($_POST as $key => $value) {
				$validator['messages'][$key] = form_error($key);
			}
		} // /else

		echo json_encode($validator);
	}

	/*
	*------------------------------------
	* returns the uploaded image url 
	*------------------------------------
	*/
	public function uploadImage()
	{
		$type = explode('.', $_FILES['photo']['name']);
		$type = $type[count($type) - 1];
		$url = 'assets/images/teachers/' . uniqid(rand()) . '.' . $type;
		if (in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))) {
			if (is_uploaded_file($_FILES['photo']['tmp_name'])) {
				if (move_uploaded_file($_FILES['photo']['tmp_name'], $url)) {
					return $url;
				} else {
					return false;
				}
			}
		}
	}

	/*
	*------------------------------------
	* retrieves teacher information 
	*------------------------------------
	*/
	public function fetchTeacherData($teacherId = null)
	{
		if ($teacherId) {
			$result = $this->model_teacher->fetchTeacherData($teacherId);
		} else {
			$teacherData = $this->model_teacher->fetchTeacherData();
			$result = array('data' => array());

			foreach ($teacherData as $key => $value) {
				$button = '<!-- Single button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Action <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a type="button" data-toggle="modal" data-target="#updateTeacherModal" onclick="editTeacher(' . $value['teacher_id'] . ')"> <i class="glyphicon glyphicon-edit"></i> Edit</a></li>
					    <li><a type="button" data-toggle="modal" data-target="#removeTeacherModal" onclick="removeTeacher(' . $value['teacher_id'] . ')"> <i class="glyphicon glyphicon-trash"></i> Remove</a></li>		    
						<li><a type="button" data-toggle="modal" data-target="#viewTeacherModal" onclick="viewTeacher(' . $value['teacher_id'] . ')"> <i class="glyphicon glyphicon-edit"></i> View</a></li>
						<li><a type="button" href="javascript:void(0)" title="pdf" onclick="viewPdf(' . $value['teacher_id'] . ')"> <i class="glyphicon glyphicon-edit"></i> PDF</a></li>
						<li><a type="button" data-toggle="modal" data-target="#printTeacherModal" onclick="viewTeacher(' . $value['teacher_id'] . ')"> <i class="glyphicon glyphicon-edit"></i> Print</a></li>
					  </ul>
					</div>';

				$photo = '	<img src="' . base_url() . $value['image'] . '" alt="Photo" width="50px" class="img-circle candidate-photo"/>';


				$result['data'][$key] = array(
					$photo,
					$value['fname'] . ' ' . $value['lname'],
					$value['age'],
					$value['contact'],
					$value['email'],
					$value['address'],
					$value['register_date'],
					$button
				);
			} // /foreach
		}

		echo json_encode($result);
	}

	public function pdf($teacherId)
	{
		$data['output'] = $this->model_teacher->fetchTeacherData($teacherId);
		$html = $this->load->view('admin/pdfteacher', $data, true);

		$mpdf = new \Mpdf\Mpdf([
			'format' => 'A4',
			'default_font_size' => 9,
			'default_font' => 'avenir'
		]);
		$mpdf->WriteHTML($html);
		$url = 'teacher.pdf';
		// $mpdf->Output($url,'D'); // opens in browser
		$mpdf->Output();
	}


	/*
	*------------------------------------
	* updates teacher information
	*------------------------------------
	*/
	public function updateInfo($teacherId = null)
	{
		if ($teacherId) {
			$validator = array('success' => false, 'messages' => array());

			$validate_data = array(
				array(
					'field' => 'editFname',
					'label' => 'First Name',
					'rules' => 'required'
				),
				array(
					'field' => 'editAge',
					'label' => 'Age',
					'rules' => 'required'
				),
				array(
					'field' => 'editContact',
					'label' => 'Contact',
					'rules' => 'required'
				),
				array(
					'field' => 'editEmail',
					'label' => 'Email',
					'rules' => 'required'
				),
				array(
					'field' => 'editRegisterDate',
					'label' => 'Register Date',
					'rules' => 'required'
				),
				array(
					'field' => 'editJobType',
					'label' => 'Job Type',
					'rules' => 'required'
				)
			);

			$this->form_validation->set_rules($validate_data);
			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

			if ($this->form_validation->run() === true) {
				$updateInfo = $this->model_teacher->updateInfo($teacherId);
				if ($updateInfo == true) {
					$validator['success'] = true;
					$validator['messages'] = "Successfully added";
				} else {
					$validator['success'] = false;
					$validator['messages'] = "Error while inserting the information into the database";
				}
			} else {
				$validator['success'] = false;
				foreach ($_POST as $key => $value) {
					$validator['messages'][$key] = form_error($key);
				}
			} // /else

			echo json_encode($validator);
		}
	}

	/*
	*------------------------------------
	* updates teacher photo information
	*------------------------------------
	*/
	public function updatePhoto($teacherId = null)
	{
		if ($teacherId) {
			$validator = array('success' => false, 'messages' => array());

			if (empty($_FILES['editPhoto']['tmp_name'])) {
				$validator['success'] = false;
				$validator['messages'] = "The Photo Field is required";
			} else {
				$imgUrl = $this->editUploadImage();
				$update = $this->model_teacher->updatePhoto($teacherId, $imgUrl);

				if ($update == true) {
					$validator['success'] = true;
					$validator['messages'] = "Successfully Updated";
				} else {
					$validator['success'] = false;
					$validator['messages'] = "Error while inserting the information into the database";
				}
			} // /else
			echo json_encode($validator);
		} // /if
	}

	/*
	*------------------------------------
	* returns the edited image url 
	*------------------------------------
	*/
	public function editUploadImage()
	{
		$type = explode('.', $_FILES['editPhoto']['name']);
		$type = $type[count($type) - 1];
		$url = 'assets/images/teachers/' . uniqid(rand()) . '.' . $type;
		if (in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))) {
			if (is_uploaded_file($_FILES['editPhoto']['tmp_name'])) {
				if (move_uploaded_file($_FILES['editPhoto']['tmp_name'], $url)) {
					return $url;
				} else {
					return false;
				}
			}
		}
	}


	/*
	*------------------------------------
	* removes teacher information 
	*------------------------------------
	*/
	public function remove($teacherId = null)
	{
		$validator = array('success' => false, 'messages' => array());

		if ($teacherId) {
			$remove = $this->model_teacher->remove($teacherId);
			if ($remove) {
				$validator['success'] = true;
				$validator['messages'] = "Successfully Removed";
			} else {
				$validator['success'] = false;
				$validator['messages'] = "Error while removing the information";
			} // /else
		} // /if

		echo json_encode($validator);
	}
}
