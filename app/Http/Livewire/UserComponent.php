<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserComponent extends Component
{



    public function render()
    {

        auth()->logout();
        return view('livewire.user-component')->layout('layouts.base');

    }





}