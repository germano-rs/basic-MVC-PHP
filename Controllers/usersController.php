<?php

class usersController extends Controller
{
    public function index($params)
    {
        $n = new Users();
        $data['user'] = $n->getUser();
        $data['users'] = $n->getUsers();
        $this->loadTemplate('user/users', $data);
    }
}
