<?php

namespace CTrak;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class User extends Model implements AuthenticatableContract
{
    //
    use Authenticatable;

    protected $table = 'users';

    protected $fillable = ['username','password'];

    protected $hidded = ['password'];


    public function getUsername()
    {
    		return  $this->username;
    	
    }
}
