<?php 
use Twilio\Rest\Client;
class SMS extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('sms_form');
	}

	public function send_sms(){
		$message = $this->input->post('message');
		$this->load->config('twilio');
		$sid = $this->config->item('sid');
		$token = $this->config->item('token');
		$twilio_client = new Client($sid,$token);
		$phone = $this->config->item('phone');
		try{
			$twilio_client->messages->create('+receivingnumberwithextension',[
				'from'=>$phone,
				'body'=>$message
			]);
			echo 'SMS has been sent!';
		}catch(Exception $ex){
			echo 'SMS failed due to '.$ex->getMessage();
		}
		


	}
} 

