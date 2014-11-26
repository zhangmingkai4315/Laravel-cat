<?php
/**
 * Created by PhpStorm.
 * User: zhangmingkai
 * Date: 14/11/26
 * Time: 下午9:13
 */

class petinfoseeder
    extends DatabaseSeeder{

    public function run(){
        $pets=[
            [
                "userInformation_id"=>1,
                "petName"=>"玛雅",
                "petType"=>"喵星人",
                "petPinzhong"=>"苏格兰折耳猫",
                "petFood"=>"火腿，鱼肉，猫粮",
                "petAge"=>2
            ]
        ];

        foreach ($pets as $pet)
        {
            PetInfo::create($pet);
        }
    }
}
