<?php
/**
 * Created by PhpStorm.
 * User: zhangmingkai
 * Date: 14/11/26
 * Time: 下午9:07
 */
class PetInfo extends Eloquent {
    protected $table = 'petInfo';

    public function userInformation()
    {
        return $this->belongsTo('UserInformation');
    }

    protected $fillable = ['petName', 'petType', 'petPinzhong','petAge','petFood'];

}
?>