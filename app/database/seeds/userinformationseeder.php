<?php
/**
 * Created by PhpStorm.
 * User: zhangmingkai
 * Date: 14/11/2
 * Time: 下午9:09
 */

class userinformationseeder
    extends DatabaseSeeder{

    public function run(){
        $UserInformations=[
            [  "username"=>"zhangmingkai1",
               "userage"=>20,
                "gender"=>1,
                "city"=>"北京",
                "region"=>"朝阳区",
                "community"=>"定福庄小区",
                "pet"=>"拉普拉多",
                "pettype"=>"苏格兰折耳猫",
                "petage"=>"2"
            ]

        ];

        foreach ($UserInformations as $UserInformation)
        {
            userInformation::create($UserInformation);
        }
    }
}