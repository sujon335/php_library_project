<?php
/**
 * logout.php, Controller
 *
 * This file controls logout  actions.
 * 
 * @author CodeSoftIT
 * @version 0.1
 * @package MPC
 */
/**
 * This class contains all of the logout interface functions.
 *
 * @package MPC
 * @subpackage Classes
 */
class Logout extends Controller {

   function Logout()
   {
        parent::Controller();
   }

    /**
     * default index function for logout
     *
     */
   function index()
   {
       //for checking loggedin
        $this->load->library('session');
        $this->session->sess_destroy();
        $this->load->helper('url');
        redirect('home');//redirect in home page
   }
}

/* End of file Logout.php */
/* Location: ./system/application/controllers/Logout.php */
