<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginC extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
 
	public function index()
	{
		$this->load->view('loginV');

	}

	public function insert()
    {
		$username=$_POST['username'];
		$password=$_POST['password'];
		
        $this->load->model('loginM');
        $query = $this->loginM->insert_data($username,$password);
		// print_r($_POST);
		// die();
		 
		if($query){
			$this->load->view('piyush');
			// $this->session->set_userdata('register',$query);

			// header("Location:http://localhost/project/index.php/loginC/insert");
		}
		else{echo "fali";
			$this->session->set_flashdata('error', 'Invalid username or password');
			// redirect (base_url('loginC/insert'));
			header("Location:http://localhost/project/");

		}
	}


// -----------------------register page-------------------------
public function form()
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

		$this->load->model('loginM');
		$query = $this->loginM->insert($username,$name,$phone,$address,$email,$password,$birthdate,$gender);
		// return redirect(base_url('formC/index'));
		
		if($query) { ?>
			<script>
			alert("Data Successfully Saved");
			</script>
			<?php
			redirect(base_url('/loginC/form/'));
		}
		
		
	}
	public function display_formdata()
	{
		$this->load->model('loginM');
		$show = $this->loginM->display(); 
		// print_r($show);
		// die();
		$this->load->view('view',['record'=> $show]);
	}
	public function delete_formdata($id)
	{
		// print_r($id);
		// die();
		$this->load->model('loginM');
		$query = $this->loginM->delete($id);
		if($query) { ?>
			<script>
			alert("Data Has Been Deleted");
			</script>
			<?php
		}
		// print_r($query);
		// die();
		// header("Location:http://localhost/project/index.php/formC/display_formdata/");
		redirect(base_url('/loginC/display_formdata/'));
	}

	public function get_formdata($id)
	{
		$this->load->model('loginM');
		$data['data'] = $this->loginM->get($id);
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
		$this->load->model('loginM');
		$this->loginM->update($name,$phone,$address,$email,$password,$birthdate,$gender,$id);
 		// return redirect(base_url('/loginC/display_formdata/'));
	}
// public function insert_formdata()
// {
// 	// echo"<pre>";
// 	// print_r($_POST);
// 	// die();
// 	$username = $_POST['username'];
// 	$name = $_POST['name'];
// 	$phone = $_POST['phone'];
// 	$address = $_POST['address'];
// 	$email = $_POST['email'];
// 	$password = $_POST['password'];
// 	$birthdate = $_POST['birthdate'];
// 	$gender = $_POST['gender'];
	
// 	$this->load->model('loginM');
// 	$query = $this->loginM->insert($username,$name,$phone,$address,$email,$password,$birthdate,$gender);
// 	return $query;
// 	// print_r($query);
// 	// die();
	
// 	// return redirect(base_url('formC/index'));
// 	// if($query){
// 	// 	echo "data successfully saved";
// 	// }
// 	// else{
// 	// 	echo "data is incorrect, please! try again.";
// 	// 	redirect(base_url('loginC/index'));
// 	// }
// }
// 	public function display_formdata()
// 	{
// 		$this->load->model('loginM');
// 		$show = $this->loginM->display(); 
// 		$this->load->view('view',['show'=> $show]);
// 	}
// 	public function delete_formdata($id)
// 	{
// 		$this->load->model('loginM');
// 		$this->loginM->delete($id);
// 		// header("Location:http://localhost/form/index.php/formC/delete_formdata/");
// 		redirect(base_url('loginC/display_formdata/'));
// 	}

// 	public function get_formdata($id)
// 	{
// 		$this->load->model('loginM');
// 		$data['data'] = $this->loginM->get($id);
// 		// print_r($id);
// 		// print_r($data);
// 		// die();
// 		$this->load->view('updateV',$data);

// 	}
// 	public function update_formdata($id){
// 		// print_r($_POST);
// 		// die();
// 		$name = $_POST['name'];
// 		$phone = $_POST['phone'];
// 		$address = $_POST['address'];
// 		$email = $_POST['email'];
// 		$password = $_POST['password'];
// 		$birthdate = $_POST['birthdate'];
// 		$gender = $_POST['gender'];
// 		$this->load->model('loginM');
// 		$this->loginM->update($name,$phone,$address,$email,$password,$birthdate,$gender,$id);
//  		return redirect(base_url('/loginC/display_formdata/'));
// 	}
}
?>
