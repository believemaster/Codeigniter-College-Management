<?php

	class Queries extends CI_Model
	{
		public function getRoles()
		{
			$roles = $this->db->get('tbl_roles');
			if($roles->num_rows() > 0)
			{
				return $roles->result();
			}
		}

		public function insertAdmin($data)
		{
			return $this->db->insert('tbl_users', $data);
		}

		public function adminExist($email, $password)
		{
			$checkAdmin = $this->db->where(['email' => $email, 'password' => $password])
														 ->get('tbl_users');
			if($checkAdmin->num_rows() > 0)
			{
				return $checkAdmin->row();
			}
		}

		public function insertCollege($data)
		{
			return $this->db->insert('tbl_college', $data);
		}

		public function getColleges()
		{
			$colleges = $this->db->get('tbl_college');
			if($colleges->num_rows() > 0)
			{
				return $colleges->result();
			}
		}

		public function insertModerator($data)
		{
			return $this->db->insert('tbl_users', $data);
		}

		public function insertStudent($data)
		{
			return $this->db->insert('tbl_student', $data);
		}

		public function viewAllColleges()
		{
			$this->db->select(['tbl_users.user_id',
													'tbl_users.username',
													'tbl_users.email',
													'tbl_users.gender',
													'tbl_college.college_id',
													'tbl_college.collegename',
													'tbl_college.branch',
													'tbl_roles.rolename',
												]);

			$this->db->from('tbl_college');
			$this->db->join('tbl_users', 'tbl_college.college_id = tbl_users.college_id');
			$this->db->join('tbl_roles', 'tbl_roles.role_id = tbl_users.role_id');
			$users = $this->db->get();
			return $users->result();
		}
	}

?>
