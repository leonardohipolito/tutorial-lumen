<?php

namespace App\Collections;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserCollection extends Collection{
    public function nameUpper(){
        return $this->map(function(User $user){
            $user->name = strtoupper($user->name);
            return $user;
        });
    }
    public function emailUpper(){
        return $this->map(function(User $user){
            $user->email = strtoupper($user->email);
            return $user;
        });
    }
    public function onlyName(){
        return $this->map(function(User $user){
            return ['name'=>$user->name];
        });
    }
}
