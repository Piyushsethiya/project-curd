<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormC extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
 
	public function index()
	{
		$this->load->view('formV');	
	}

	public function insert_formdata()
{
	// echo"<pre>";
	// print_r($_POST);
	// die();
	$username = $_POST['username'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$birthdate = $_POST['birthdate'];
	$gender = $_POST['gender'];
	
	$this->load->model('formM');
	$query = $this->formM->insert($username,$name,$phone,$address,$email,$password,$birthdate,$gender);
	// return redirect(base_url('formC/index'));
	if($query){
		echo "data successfully saved";
	}
}
	public function display_formdata()
	{
		$this->load->model('formM');
		$show = $this->formM->display(); 
		$this->load->view('view',['show'=> $show]);
	}
	public function delete_formdata($id)
	{
		$this->load->model('formM');
		$this->formM->delete($id);
		// header("Location:http://localhost/form/index.php/formC/delete_formdata/");
		redirect(base_url('formC/display_formdata/'));
	}

	public function get_formdata($id)
	{
		$this->load->model('formM');
		$data['data'] = $this->formM->get($id);
		// print_r($id);
		// print_r($data);
		// die();
		$this->load->view('updateV',$data);

	}
	public function update_formdata($id){
		// print_r($_POST);
		// die();
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$birthdate = $_POST['birthdate'];
		$gender = $_POST['gender'];
		$this->load->model('formM');
		$this->formM->update($name,$phone,$address,$email,$password,$birthdate,$gender,$id);
 		return redirect(base_url('/formC/display_formdata/'));
	}
}
?>
