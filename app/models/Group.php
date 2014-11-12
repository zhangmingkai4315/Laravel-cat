<?php
/**
 * Created by PhpStorm.
 * User: zhangmingkai
 * Date: 14/11/4
 * Time: 下午8:54
 */


class Group extends Eloquent{
    protected $table="group";


    //软删除 ，更新一个删除时间
    protected $softDelete=true;
    //设置哪些值是不可以变动的
    protected $guarded=[
        "id",
        "created_at",
        "updated_at",
        "deleted_at",
    ];


}