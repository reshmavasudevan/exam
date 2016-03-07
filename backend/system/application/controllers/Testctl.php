<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testctl extends CI_Controller {

	public function index()
	{
		$this->show();
	}

	public function show()
	{
		$this->load->model('Testmd');

		$data['title']='Recent exams';
		$data['array']=$this->Testmd->get();

		$this->load->view('Testvw',$data);
	}

	public function searchTop()
	{
		$data['topic']='Operating systems';

		$this->load->model('Testmd',$data);

		$data['title']='Search By Topic '
		$data['array']=$this->Testmd->getTop();

		$this->load->view('Testvw',$data);
	}

	public function searchTch()
	{
		$data['tname']='Salim abdul';

		$this->load->model('Testmd',$data);

		$data['title']='Search By Topic '
		$data['array']=$this->Testmd->getTch();

		$this->load->view('Testvw',$data);
	}
}
