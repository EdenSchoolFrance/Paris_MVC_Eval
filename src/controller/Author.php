<?php
	
	
	class Author extends Controller
	{
		public function index()
		{
			$this->view->render('author/index');
		}
	}