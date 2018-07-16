<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->helper('directory');
		$this->load->library('session');

	}
	public function index(){
        $this->load->helper('url');
		$this->load->view('home');
	}
    public function logout(){
        $this->session->sess_destroy();
        $this->index();
        /*$products['res']=$this->db->get('products')->result();
        $this->load->view('home',$products);*/
    }
    public function go_login(){
        $this->load->view('login');
    }
    public function networks(){
        $this->load->view('networks');
    }
    public function try_(){
        $this->load->view('try');
    }
    public function trials(){
        $this->load->view('trials');
    }
    public function contacts(){
        $this->load->view('contacts');
    }
    public function skills(){
        $this->load->view('skills');
    }
    public function works(){
        $this->load->view('works');
    }
    public function video_(){
        $this->load->view('video');
    }
    public function hotsauceApp(){
        $this->load->view('hotsauceApp');
    }
    public function legrandApp(){
        $this->load->view('legrandApp');
    }
    /*if(!preg_match("/^[0-9]*$/",$otherPhoneNo)){
                $phoneNoErr="Numbers only";
            }
            if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$otherE_mailAddress)){
                $otherE_mailAddressErr="Invalid E-mail format";
            }*/
    public function message(){
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $subject=$this->input->post('subject');
        $message=$this->input->post('message');
        $date_sent=gmstrftime("%Y-%m-%d %H:%M:%S",time()+60*60*-9);
        if(preg_match("/^[a-zA-Z]*$/",$name)){
            if(preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
                $this->session->set_flashdata('msg','sent');
                $this->session->set_flashdata('i',1);
                $this->db->insert('message',array("sender"=>$name,"email"=>$email,"message"=>$message,"date_sent"=>$date_sent,"subject"=>$subject));
                $this->contacts();
            }else{
                $this->session->set_flashdata('i',1);
                $this->session->set_flashdata('msg','Invalid e-mail format!');
                $this->contacts();
            }
        }else{
            $this->session->set_flashdata('i',1);
            $this->session->set_flashdata('msg','Invalid name. No white spaces!');
            $this->contacts();
        }
    }
    public function newmessage(){
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $subject=$this->input->post('subject');
        $message=$this->input->post('message');
        $date_sent=gmstrftime("%Y-%m-%d %H:%M:%S",time()+60*60*-9);
        if(preg_match("/^[a-zA-Z]*$/",$name)){
            if(preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
                $this->session->set_flashdata('msg','sent');
                $this->session->set_flashdata('i',1);
                $this->db->insert('message',array("sender"=>$name,"email"=>$email,"message"=>$message,"date_sent"=>$date_sent,"subject"=>$subject));
                echo "success";
            }else{
                $this->session->set_flashdata('i',1);
                $this->session->set_flashdata('msg','Invalid e-mail format!');
                echo $this->session->flashdata('msg');
            }
        }else{
            $this->session->set_flashdata('i',1);
            $this->session->set_flashdata('msg','Invalid name. No white spaces!');
            echo $this->session->flashdata('msg');
        }
    }
    /*
    public function login(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $device=$this->input->post('device');
        //echo $username.$password.$device;

        $pass=sha1($password,20);
        //$this->db->insert('admin',array('email'=>$username,'password'=>$pass,'username'=>'Derick Oduor'));
        if($device=='web'){
            $d=$this->db->get_where('customers',array('email'=>$username,'password'=>$password));
            if($d->num_rows()>0){
                //echo "string";
                $data=$this->db->get_where('customers',array('email'=>$username,'password'=>$password))->result();
                foreach($data as $da){
                    $logged_user=$da->username;
                    $logged_id=$da->id;
                    //$logged_profile_pic=$da->profilepic;
                    $this->session->set_userdata(array('customer_name'=>$logged_user,'customer_id'=>$logged_id));
                }
                $products['res']=$this->db->get('products')->result();
                $this->load->view('home',$products);
            }else{
                $this->session->sess_destroy();
                $this->session->set_flashdata('err_msg','Incorrect username or password!');
                $this->index();
            }
                
        }else{

        }
    }
    public function register(){
        $device=$this->input->post('device');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $email=$this->input->post('email');
        $phone=$this->input->post('phone');
        $gender=$this->input->post('gender');

        //echo($device.$username.$password.$email.$phone.$gender);
        if($device=='web'){
            $register=$this->db->insert('customers',array('username'=>$username,'password'=>$password,'email'=>$email,'phone'=>$phone,'gender'=>$gender));
            if($register==TRUE){
                $this->session->set_flashdata('err_msg','Registration success!');
                $this->go_login();
            }
        }
        
    }
    */
}