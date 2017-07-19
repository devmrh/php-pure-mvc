<?php

class PostsController extends Controller {
    public function __construct(array $data = array())
    {
        parent::__construct($data);
        $this->model = new Post();
    }

    public function index(){

        $this->data['posts'] = $this->model->getList();

    }

    public function view(){
        $params = App::getRouter()->getParams();

        if (isset($params[0])) {
            $postid = strtolower($params[0]);
            $this->data['view_num'] = $this->model->getPostViewNumber($postid);
            $this->data['view_vote'] = $this->model->getPostVoteNumber($postid);
          $this->data['post'] =  $this->model->getById($postid);
        }
        if ($_POST){
            $id = isset($_POST['id']) ? $_POST['id'] : null;

            $this->model->vote($_POST,$id);

            Router::redirect('/posts/view/'.$params[0]);
        }


    }

    public function asking(){

        if ($_POST){
           $this->model->save($_POST);
        }
    }
}