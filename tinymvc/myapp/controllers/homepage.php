<?php

class Homepage_controller extends TinyMVC_Controller
{
  function index()
  {
    //$this->view->assign('title','Hello World 123!');
    //$this->view->assign('body','Hello World 12345!');

    //$data['title'] = 'Hello world 3';
    //$data['body'] = 'Hello world 4';
    //$this->view->assign($data);

    // shortest notation
    //$this->view->display('hello_view',$data);


    // using a model in our controller
    // loading the page model
    $this->load->model('Page_Model','page');
    // Alternately, specify the connection pool (default is 'default')
    // $this->load->model('Page_model','page',null,'mypool');

    // use model to gather data
    $data['title'] = $this->page->get_title();
    $data['body'] = $this->page->getUserName();

    $this->view->display('hello_view',$data);


  }

}
