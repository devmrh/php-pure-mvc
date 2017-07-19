<?php

class Post extends Model
{


    public function getList($is_published = false)
    {
        $sql = "select * from posts where 1";

        if ($is_published) {
            $sql .= "and is_published = 1";
        }

        return $this->db->query($sql);

    }


    public function getById($id)
    {



        $sql = "select * from posts WHERE id = '$id' limit 1";
        $result = $this->db->query($sql);

        return isset($result[0]) ? $result[0] : null;
    }


    public function getByTitle()
    {


        $pre_sql = "select * from posts WHERE 1";

        $pre_result = $this->db->query($pre_sql);

        $pre_title = $pre_result[0]['title'];

        $sql = "select * from posts WHERE title = '$pre_title' limit 1";

        return $this->db->query($sql);


    }

    public function save($data, $id = null)
    {

        $id = (int)$id;
        $category = $this->db->escape($data['category']);
        $author = $this->db->escape($data['author']);
        $tags = $this->db->escape($data['tags']);
        $title = $this->db->escape($data['title']);
        $content = $this->db->escape($data['content']);
        $is_published = isset($data['is_published']) ? 1 : 0;

        if (!$id) {
            $sql = "insert into posts 
            set category = $category,
            author = $author,
            tags = $tags,
            title = $title,
            content = $content,
            is_published = $is_published
            ";
        } else {

            $sql = "update  posts 
            set category = $category,
            author = $author,
            tags = $tags,
            title = $title,
            content = $content,
            is_published = $is_published
            WHERE 
            ";
        }
        return $this->db->query($sql);

    }

    public function getPostViewNumber($id)
    {

        //getting db view count
        $sql0 = "select view_num from posts WHERE id = '$id' limit 1";

        $result = $this->db->query($sql0);

        $pre_num = $result[0]['view_num'];
        if (!Cookie::getCoockie('_p')) {
            $num = $pre_num + 1;
            Cookie::setCookie('_p',Hash::mkHash(GetIp::$ip),1);

            $sql = "update posts set view_num = '$num' WHERE id = '$id' limit 1";

           $this->db->query($sql);


        }

        return $this->db->query($sql0);

    }


    public function getPostVoteNumber($id)
    {

        //getting db view count
        $sql = "select vote_num from posts WHERE id = '$id' limit 1";

        return $this->db->query($sql);



    }

    public function vote($data, $id){

        $id = (int)$id;
        $vote = $data['vote'];

        $sql = "
        update posts set 
        vote_num = vote_num+$vote
        WHERE id = $id
        ";

        return $this->db->query($sql);

    }



}