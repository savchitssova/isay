<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Baseforprofile extends Controller_Template
{
    protected $user;
    protected $auth;
	

 public $template='v_baseforprofile';


	public function before()
	{
	
	
parent::before();
$auth = Auth::instance();
$logged_in = $auth->logged_in('login');

$this->template->logged_in = $logged_in;

$this->auth = Auth::instance();
$this->user = $this->auth->get_user();




        
        $this->template->block_right = null;
	$this->template->block_center = null;
	$this->template->block_left = null;
	$this->template->mainblock = null;
	




		
	}

} 