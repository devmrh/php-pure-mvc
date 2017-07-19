<?php

class User extends Model
{

    public function getByLogin($login)
    {
        $login = $this->db->escape($login);
        $sql = "select * from users WHERE username = $login limit 1";
        $result = $this->db->query($sql);

        if (isset($result[0])) {
            return $result[0];
        }
        return false;
    }


    public function save($data)
    {


        //$id = (int)$id;
        $firstname = $this->db->escape($data['firstname']);
        $lastname = $this->db->escape($data['lastname']);
        $username = $this->db->escape($data['username']);
        $password = $data['password'];
        $hashed_pass = Hash::mkHash($password);
        $email = $this->db->escape($data['email']);
        $role = $this->db->escape('admin');
        $phone = $this->db->escape($data['phone']);
       // $brithday = $this->db->escape($data['brithday']);
        $is_active = 1;
        $su = 0;

            $sql = "
            insert into users 
            set firstname = $firstname,
            lastname = $lastname,
            username = $username,
            password = '$hashed_pass',
            email = $email,
            role = $role,
            phone = $phone,
            is_active = $is_active,
            su = $su
            ";

        return $this->db->query($sql);

    }
}