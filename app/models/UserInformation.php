<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class UserInformation extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'userInformation';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $guarded=[
        "id",
        "created_at",
        "updated_at",

    ];

    public function PetInfo()
    {
        return $this->hasMany('PetInfo','userInformation_id','id');
    }


}
