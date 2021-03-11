<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class UserComponent extends Component
{



    public function render()
    {

        // auth()->logout();
        $users=User::all();
        return view('livewire.user-component',['users'=>$users])->layout('layouts.base');
    }





}
