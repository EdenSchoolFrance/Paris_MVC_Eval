<?php

class Controller {
	/**
	 * @var $model
	 */
	protected $model;
	/**
	 * @var View $view
	 */
	protected $view;
	
	/**
	 * Controller constructor.
	 */
	public function __construct() {
		$this->view = new View();
		Session::set('controller_name', get_class($this));
	}
	
	/**
	 * Load the model
	 */
	public function loadModel() {
		$model_name = get_class($this) . '_Model';
		$model_file = 'model/' . $model_name . '.php';

		// Load a Model-File only if it exists
		if (file_exists($model_file)) {
				require $model_file;
				$this->model = new $model_name;
		}
	}

	// TODO make function index abstract
	//abstract function index();
}