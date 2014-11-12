<?php
/**
 * Created by PhpStorm.
 * User: zhangmingkai
 * Date: 14/11/2
 * Time: 下午9:09
 */

class UserSeeder
extends DatabaseSeeder{

    public function run(){
        $users=[
            [  "username"=>"test",
                "password"=>Hash::make("123456"),
                "email"=>"chris@example.com",
            ]

        ];

    foreach ($users as $user)
        {
               User::create($user);
        }
}
}