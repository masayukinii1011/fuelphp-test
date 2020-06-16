<?php

class Controller_Sample extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Sample &raquo; Index';
		$this->template->content = View::forge('sample/index', $data);
	}

}
