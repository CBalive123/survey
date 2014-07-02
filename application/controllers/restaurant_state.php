<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant_state extends CI_Controller {
	#add
	function __construct()
	{
		parent::__construct();
        // used in the view
        $this->load->helper('url');
	}

	public function index()
	{
        $this->load->library('form');

        $this->form

            // if the form is submitted to the same url this can be omitted
            ->open('restaurant_state/')

            ->indent(150)
            // add a standard submit button ('Submit')
            ->submit('下一步')
            // add some 'margin-left' to the reset button
            ->margin(10);

        // get the form output and write it to the $data array
        // this method automatically validates the form data
        $data['form'] = $this->form->get();

        if ($this->form->valid)
        {
            redirect('/restaurant/', 'refresh');
        }
        else
        {
        }

        $this->load->view('restaurant_state',$data);
	}
	
}