<?php

namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $phone;
    public $park;
    public $failed_logins;
    public $status;
    public $search_month;
    public $search_limit;
    public $search_onday;
    public $auth_code;

    public $drivers = [];

    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
            ['id', 'number'],
            ['name', 'string'],
            ['email', 'string'],
            ['password', 'string'],
            ['phone', 'string'],
            ['park', 'string'],
            ['failed_logins', 'number'],
            ['search_month', 'number'],
            ['search_limit', 'number'],
            ['search_onday', 'number'],
            ['auth_code', 'string'],
        ];
    }
}
