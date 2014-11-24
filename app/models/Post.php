<?php
/**
 * Created by PhpStorm.
 * User: zhangmingkai
 * Date: 14/11/19
 * Time: 下午9:27
 */

class Post extends Eloquent {

    protected $fillable = ['username', 'title', 'content'];

    public function comments()
    {
        return $this->hasMany('Comment');
    }

}

?>