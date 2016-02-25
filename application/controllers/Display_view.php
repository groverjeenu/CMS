<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Display_view extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->model('courses_model');
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}

	public function index()
	{
		#echo "Jeenu";
		

		$this->load->view('homepage');
		
	}

	public function login()
	{
		$this->load->view('login');

	}
	public function signup()
	{
		$this->load->view('signup');
	
	}
	public function dashboard()
	{
		$this->load->view('dashboard');
	
	}
	public function courselist()
	{
		if(!$this->ion_auth->logged_in())
		{
			redirect("display_view/login","refresh");
		}

		$query = $this->courses->get_all_courses();

		/*$code = "<div class=\"panel panel-default paper-shadow\" data-z=\"0.5\">
              <div class=\"panel-body\">

                <div class=\"media media-clearfix-xs\">
                  <div class=\"media-left text-center\">
                    <div class=\"cover width-150 width-100pc-xs overlay cover-image-full hover margin-v-0-10\">
                      <span class=\"img icon-block height-130 bg-primary\"></span>
                      <span class=\"overlay overlay-full padding-none icon-block bg-primary\">
                        <span class=\"v-center\">
                            <i class=\"fa fa-css3\"></i>
                        </span>
                      </span>
                      <a href=\"app-student-course.html\" class=\"overlay overlay-full overlay-hover overlay-bg-white\">
                        <span class=\"v-center\">
                            <span class=\"btn btn-circle btn-primary btn-lg\"><i class=\"fa fa-graduation-cap\"></i></span>
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class=\"media-body\">
                    <h4 class=\"text-headline margin-v-5-0\"><a href=\"app-student-course.html\">CSS Awesomeness with LESS Processing</a></h4>
                    <p class=\"small\">
                      <span class=\"fa fa-fw fa-star text-yellow-800\"></span>
                      <span class=\"fa fa-fw fa-star text-yellow-800\"></span>
                      <span class=\"fa fa-fw fa-star text-yellow-800\"></span>
                      <span class=\"fa fa-fw fa-star-o text-yellow-800\"></span>
                      <span class=\"fa fa-fw fa-star-o text-yellow-800\"></span>
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda aut debitis, ducimus, ea eaque earum eius enim eos explicabo facilis harum impedit natus nemo, nobis obcaecati omnis perspiciatis praesentium quaerat quas
                      quod reprehenderit sapiente temporibus vel voluptatem voluptates voluptatibus?</p>

                    <hr class=\"margin-v-8\" />
                    <div class=\"media v-middle\">
                      <div class="media-left">
                        <img src="images/people/50/guy-2.jpg" alt="People" class="img-circle width-40" />
                      </div>
                      <div class="media-body">
                        <h4><a href="">Adrian Demian</a>
                          <br/>
                        </h4>
                        Instructor
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>"*/
            $data['query'] = $query;

            
       
        $this->load->view('courselist',$data);
	}

	public function course($cid)
	{
		if(!$this->ion_auth->logged_in())
		{
			redirect("display_view/login","refresh");
		}

		$query = $this->courses->get_course($cid);
		$data['query'] = $query;
		$this->load->view('coursepage',$data);	
	}
} 