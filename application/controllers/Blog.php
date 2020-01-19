<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

	function __construct(){
		 parent:: __construct(); //Call to a member function model() on null
		 $this->load->model('blog_m','m'); //Call to a member function getBlog() on null
	}
	function index()
	{
		// pages(name of folder) home(name of file)
		$data['blog'] = $this->m->getBlog();
		$this->load->view('layouts/header');
		//$this->load->view('pages/index'); 
		$this->load->view('pages/index', $data);
		$this->load->view('layouts/footer');
	}
	public function records(){
		$data['blog'] = $this->m->getBlog();
		$this->load->view('layouts/header');
		$this->load->view('pages/records',$data);
		$this->load->view('layouts/footer');

	}
	public function posts(){
		$data['blog'] = $this->m->getBlog();
		$this->load->view('layouts/header');
		$this->load->view('pages/posts',$data);
		$this->load->view('layouts/footer');

	}
	public function edit($id){
		$data['blog'] = $this->m->getBlogById($id);
		$this->load->view('layouts/header');
		$this->load->view('pages/edit', $data);
		$this->load->view('layouts/footer');
	
	}
	public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record added successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Fail to add record');
		}
		redirect(base_url('blog/index'));
	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record updated successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Fail to update record');
		}
		redirect(base_url('/blog/records'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Record deleted successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Fail to delete record');
		}
		redirect(base_url('/blog/records'));
	}
}
