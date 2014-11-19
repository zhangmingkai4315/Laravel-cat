<?php
/**
 * Created by PhpStorm.
 * User: zhangmingkai
 * Date: 14/11/19
 * Time: 下午9:27
 */

class Comment extends Eloquent {

    public function post()
    {
        return $this->belongsTo('Post');
    }
}
?>