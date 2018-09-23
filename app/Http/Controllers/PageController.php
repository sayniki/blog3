<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PageController extends Controller
{
	public function __construct()
    {
        //$this->middleware('menu');
        
    }
    public function checkLogIn(Request $request)
    {
    	
    }

	public function showIndex()
	{
		echo "test";
	}
	public function getTravel()
	{
		$date=array();
		
		$post=new post();
		$post->setAuthor("Niki");
		$post->setBody("Hello");
		$post->setHead('Arakura yama Pavilion');
		$date=array($post);
		return view('pages.blog_post')->withdata($date);
	}
	public function getAbout()
	{ 
		$title="About";
		$first="Marie Dominique";
		$last="Say";
		$fullname=$first.' '.$last;
		$date=array();
		$date['fullname']=$fullname;
		$date['email']="mdominiquesay@gmail.com";
		return view('pages.about')->withdate($date);
	}
	public function getContact()
	{
		$PageTitle="Contact";
		return view('pages.contact')->withdate($date);
	}
	public function getLogIn()
	{
		$PageTitle="Log In";
		$success='';

		return view('pages.log_in')->withData(array('pagetitle'=>$PageTitle,'success'=>$success));
	}
	public function validateLogin()
	{
		$rules = array(
	    'user_name'    => 'required', 
	    'password' => 'required|alphaNum|min:8' // password can only be alphanumeric and has to be greater than 3 characters
		);

	}
	
}