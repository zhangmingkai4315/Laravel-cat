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

    protected $fillable = ['commenter', 'email', 'comment'];


    public function getApprovedAttribute($approved)
    {
        return (intval($approved) == 1) ? 'yes' : 'no';
    }

    public function setApprovedAttribute($approved)
    {
        $this->attributes['approved'] = ($approved === 'yes') ? 1 : 0;
    }
}
?>