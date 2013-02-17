<?php
class Site_model extends CI_Model{

    function validate()
    {
        $this->db->where('aname',$this->input->post('aname'));
        $this->db->where('apass',  md5($this->input->post('apass')));
       $query =$this->db->get('admin');

        if($query->num_rows==1)
        {
            return true;
        }
    }

    function create_member()
    {
        $member_data=array(
            'name'=>$this->input->post('name'),
            'id'=>$this->input->post('id'),
            'email'=>$this->input->post('email'),
            'password'=>  md5($this->input->post('password'))

        );

        $insert=$this->db->insert('students',$member_data);
        return $insert;
    }

    	function get_records()
	{
                $this->db->where('active',0);
		$query=$this->db->get('students');
		return $query->result();
	}

        function activate()
        {
             $activate_data=array(
            'active'=>1);

            $this->db->where('id',$this->uri->segment(3));
            $update=$this->db->update('students',$activate_data);
            
            return $update;
        }


       function st_records()
	{
                $this->db->where('active',1);
		$query=$this->db->get('students');
		return $query->result();
	}

       function create_book()
        {
            $book_data=array(
                'id'=>$this->input->post('id'),
                'name'=>$this->input->post('name'),
                'author'=>$this->input->post('author'),
                'type'=>$this->input->post('type'),
                'copy'=>$this->input->post('copy')
            );

            $insert=$this->db->insert('books',$book_data);
            return $insert;
        }

        function get_books()
        {
            $query=$this->db->get('books');
		return $query->result();
        }

        function edit_book()
        {
             $this->db->where('id',$this->uri->segment(3));
             $query=$this->db->get('books');
            return $query->result();
            
        }

       function update_book()
        {
            $book_data=array(
                'name'=>$this->input->post('name'),
                'author'=>$this->input->post('author'),
                'type'=>$this->input->post('type'),
                'copy'=>$this->input->post('copy')
            );
            
            $this->db->where('id',$this->uri->segment(3));
            $update=$this->db->update('books',$book_data);
            return $update;
        }
       function delete_book()
        {
            $this->db->where('id',$this->uri->segment(3));
            $delete=$this->db->delete('books');
            
            return $delete;
        }



}
?>