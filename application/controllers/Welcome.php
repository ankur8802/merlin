<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

function index()
{
	$this->load->view('index');
}
function services()
{
	$this->load->view('services');
}
function about_us()
{
	$this->load->view('about-us');
}
function prices()
{
	$this->load->view('prices');
}
function contact()
{
	$this->load->view('contact');
}
function send_us_a_message()
{
   $this->session->set_flashdata('success','Your application has been submitted successfully');
   redirect('contact');
}
function apply_job()
{
   $this->session->set_flashdata('success','Your Job application has been submitted successfully');
   redirect('career');
}
function Career()
{
   $this->load->view('career');	
}
function verticals()
{
   $this->load->view('verticals');	
}
}
