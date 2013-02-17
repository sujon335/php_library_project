<?php
class Site extends CI_Controller
{
	function index()
	{
            
		$this->load->view('new_view');

	}
	function adminlogin()
	{
                $data= array();
		$this->load->view('admin_view',$data);
	}
	function slogin()
	{
		$this->load->view('st_view');
	}
	function reg()
	{
		$this->load->view('reg_view');
	}


        function adminloginprocess()
        {
               $this->load->model('site_model');
               $query=$this->site_model->validate();
               if($query)
               {
                   $data = array(
                       'aname' =>$this->input->post('aname'),
                       'is_logged_in' =>true
                   );

                 $this->load->library('session');
                 $this->session->set_userdata($data);

                 redirect("http://localhost/ci/index.php/site/adminpage");
               }

             else
             {
                 $message="Username & Password mismatch..please try again";
                 $data['msg']=$message;
                 $this->load->view('admin_view',$data);
             }
        }

        function adminpage()
        {
            $l=$this->is_logged_in();
            if($l) { $this->load->view('main_view');}
     
        }

        
        function is_logged_in()
        {
            $is_logged_in=$this->session->userdata('is_logged_in');
            if(!isset($is_logged_in)|| $is_logged_in!=TRUE)
            {
                echo 'You dont have permission to access this
                    page please..<a href="http://localhost/ci/">Login</a>';

                return false;
            }
            else return true;
        }


        function logout()
        {
                    $this->load->library('session');
                    $this->session->sess_destroy();
                    redirect("http://localhost/ci/");
        }




        function create_member()
	{
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name','','trim|required|min_length[4]');
            $this->form_validation->set_rules('email','','trim|required|valid_email');
            $this->form_validation->set_rules('password','','trim|required|min_length[4]');
            $this->form_validation->set_rules('password2','','trim|required|matches[password]');

            if(($this->form_validation->run())==FALSE)
            {
                $this->reg();
            }

             else {

                    $this->load->model('site_model');
                    if($query=$this->site_model->create_member())
                    {
                        $this->load->view('app_view');
                    }
                    else {
                          $this->reg();
                    }

            }


        }

        function approve()
        {
            $this->load->model('site_model');
            	$data= array();
		if($query=$this->site_model->get_records())
		{
			$data['records']=$query;
		}
		$this->load->view('approve_view',$data);


        }

        function register()
        {
            $this->load->model('site_model');
            
            if($query=$this->site_model->activate())
		{
			$this->approve();
		}
            
        }

        function student()
        {
            $this->load->model('site_model');
               $data= array();
		if($query=$this->site_model->st_records())
		{
			$data['records']=$query;
		}
		$this->load->view('status_view',$data);
        }

        function books()
        {
               $this->load->model('site_model');
            	$data= array();
		if($query=$this->site_model->get_books())
		{
			$data['records']=$query;
                }
            $this->load->view('book_view',$data);
        }

        function add_book()
        {
            $this->load->view('book_form');
        }

        function create_book()
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('id','','trim|required');
            $this->form_validation->set_rules('name','','trim|required');
            $this->form_validation->set_rules('author','','trim|required');
            $this->form_validation->set_rules('type','','trim|required');
            $this->form_validation->set_rules('copy','','trim|required');
         

            if(($this->form_validation->run())==FALSE)
            {
                $this->add_book();
            }

             else {

                    $this->load->model('site_model');
                    if($query=$this->site_model->create_book())
                    {
                        $this->load->view('msg_view');
                    }
                    else {
                          $this->add_book();;
                    }

            }

        }

        function book_edit()
        {
             $this->load->model('site_model');
            	$data= array();
		if($query=$this->site_model->edit_book())
		{
			$data['records']=$query;
                }
            $this->load->view('book_edit',$data);
        }

        function update_book()
        {

            $this->load->library('form_validation');

          
            $this->form_validation->set_rules('name','','trim|required');
            $this->form_validation->set_rules('author','','trim|required');
            $this->form_validation->set_rules('type','','trim|required');
            $this->form_validation->set_rules('copy','','trim|required');


            if(($this->form_validation->run())==FALSE)
            {
                $this->book_edit();
            }

             else {

                    $this->load->model('site_model');
                    if($query=$this->site_model->update_book())
                    {
                        $data= array();
                        $message="Book's data has been successfully updated.";
                        $data['msg']=$message;
                        $this->load->view('book_edit',$data);
                    }
                    else {
                          $this->book_edit();
                    }

            }
        }


        function delete_book()
        {
            $this->load->model('site_model');
                  if($query=$this->site_model->delete_book())
                    {
                        $data= array();
                        $message="The book has been successfully deleted.";
                        $data['msg']=$message;
                        $this->load->view('book_edit',$data);
                    }


        }


}

?>