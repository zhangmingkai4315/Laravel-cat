<?php
/**
 * Created by PhpStorm.
 * User: zhangmingkai
 * Date: 14/11/6
 * Time: 上午11:46
 */
class GroupForm extends BaseForm{
    public function isValidForAdd(){
        return $this->isValid([
            "name"=>"required"
        ]);
    }
    public function isValidForEdit(){
        return $this->isValid([
            "id"=>"exists:group,id",
            "name"=>"required"
        ]);
    }
    public function isValidForDelete(){
        return $this->isValid([
            "id"=>"exists:group,id"
        ]);
    }

}