<?php

namespace app\controller;

use app\model\Users;

class UsersController
{
    public function create()
    {
        $template = new TemplateEngineController('new-user');

        $value = $this->getUsersData();

        $template->set('getUsersData', $value);
        $template->echoOutput();
    }

    private function getUsersData(): string
    {
        $result = (new Users())->list();
        $options = '';

        foreach ($result as $value){

            $options .= '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
        }
        return $options;
    }

    public function store()
    {
        $data = $_POST;
        $data['password'] = sha1($data['password'] . SALT);
        $model = new Users();
        $model->create($data);

        // Redirecting to LIST
        header('Location: ?view=user&action=list');
        exit();
    }

    public function list()
    {
        $model = new Users();

        $result = $model->list();

        $header = '';
        $data = '';

        foreach ($result as $item) {

            if ($header == '') {
                foreach ($item as $key => $value) {
                    $header .= '<th>' . $key . '</th>';
                }
            }

            $data .= '<tr>';

            foreach ($item as $key => $value) {
                $data .= '<td>' . $value . '</td>';
            }

            $data .= '</tr>';
        }
        $template = new TemplateEngineController('table_list');

        $template->set ('header', $header);
        $template->set ('data', $data);


        $template->echoOutput();
    }

    public function login()
    {
        $template = new TemplateEngineController('login');
        $template->echoOutput();
    }

    public function auth()
    {
        $data = $_POST;
        $data['password'] = sha1($data['password'] . SALT);

        print_r($data);

        $model = new Users();
        $result = $model->auth($data);
        print_r($result);
    }
}