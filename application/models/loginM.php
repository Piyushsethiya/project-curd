<?php
class loginM extends CI_Model{
    public function insert_data($username,$password)
    {
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $data = $this->db->get('login');

        if($data->num_rows() == 1){
            return $data->row();
        }
        else{
            return false;
        }
    }

// -----------------------register page-------------------------


    public function insert($username,$name,$phone,$address,$email,$password,$birthdate,$gender){
        $data = "INSERT INTO register (username,name, phone, address, email, password, birthdate, gender) VALUES ('$username','$name','$phone','$address','$email','$password','$birthdate','$gender')";
        // print_r($data);
        // die();
        $this->db->query($data);
        return 1;
    }
    public function display()
    {
        $query = $this->db->get('register');
        return $query->result();
    }
    function delete($id){
        $result = $this->db->delete('register', array('id'=> $id));
        return $result;
        print_r($result);
        die();
    }

    public function get($id)
    {
        // $this->db->select('*');
        // $this->db->where(array('id'=> $id));
        // $query = $this->db->get('register');
        // return $query->row_array();

        $data = "SELECT * FROM `register` WHERE id = $id";
        // print_r($data);
        // die();
        $item = $this->db->query($data);
        // print_r($data);
        // print_r($item->result());
        return $item->result();
        // $qurey=$this->db->get_where('register',array('id'=>$id));
        // if($qurey->num_rows() > 0)
        // {
        //   return $qurey->row();
        // }
    }
    public function update($name,$phone,$address,$email,$password,$birthdate,$gender,$id){

        $data = "UPDATE register SET name='$name',phone='$phone',address='$address',email='$email',password='$password',birthdate='$birthdate',gender='$gender' WHERE id = '$id'";
        // print_r($data);
        //  die();
        $this->db->query($data);
        
        //$this->db->replace('register', $data);
    }
    // public function insert($username,$name,$phone,$address,$email,$password,$birthdate,$gender){
    //     $data = "INSERT INTO register (username,name, phone, address, email, password, birthdate, gender) VALUES ('$username','$name','$phone','$address','$email','$password','$birthdate','$gender');";
    //     $this->db->query($data);
    // }
    // public function display()
    // {
    //     $query = $this->db->get('register');
    //     return $query->result();
    // }
    // function delete($id){
    //     $result = $this->db->delete('register', array('id'=> $id));
    //     return $result;
    // }

    // public function get($id)
    // {
    //     // $this->db->select('*');
    //     // $this->db->where(array('id'=> $id));
    //     // $query = $this->db->get('register');
    //     // return $query->row_array();

    //     $data = "SELECT * FROM `register` WHERE id = $id";
    //     // print_r($data);
    //     // die();
    //     $item = $this->db->query($data);
    //     // print_r($data);
    //     // print_r($item->result());
    //     return $item->result();
    //     // $qurey=$this->db->get_where('register',array('id'=>$id));
    //     // if($qurey->num_rows() > 0)
    //     // {
    //     //   return $qurey->row();
    //     // }
    // }
    // public function update($name,$phone,$address,$email,$password,$birthdate,$gender,$id){

    //     $data = "UPDATE register SET name='$name',phone='$phone',address='$address',email='$email',password='$password',birthdate='$birthdate',gender='$gender' WHERE id = '$id'";
    //     // print_r($data);
    //     //  die();
    //     $this->db->query($data);
        
    //     //$this->db->replace('register', $data);
    // }
}
?>