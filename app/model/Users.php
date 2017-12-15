<?php

namespace app\model;

use app\model\interfaces\Destroyable;
use app\model\interfaces\Manageable;

class Users extends CoreModel implements Manageable, Destroyable
{
    protected $table = 'bakery_users';

    public function create (array $data)
    {
        $query = $this->generateInsertQuery($data, true);
        $this->query($query);
    }

    public function auth($data)
    {
        $query = "SELECT * FROM `" . $this->table . "` WHERE `deleted_at` IS NULL
                                                       AND `email`= '" . $data['email'] . "'
                                                       AND `password` = '" . $data['password'] . "'";

        return $this->query($query);
    }
    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function destroy()
    {
        // TODO: Implement destroy() method.
    }
}