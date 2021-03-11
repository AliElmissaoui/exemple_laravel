<?php

namespace App\Http\Livewire;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;

class UserEditeComponent extends Component
{
    // public $name;
    // public $email;
    // public $tel;
    // public $ID;
    // public function mount($id)
    // {
    //    //$user=User::find($id_user)->first();
    //    $user=User::where('id',Auth::id());
    //    $this->name=$user->name;
    //    $this->email=$user->email;
    //    $this->tel=$user->tel;
    //    $this->ID=$user->id;
    // }

    public function updateuser($formData)
    {

        // dd($formData);
        $user=User::find(Auth::id());
        $user->name=$formData['name'];
        $user->email=$formData['email'];
        $user->tel=$formData['tel'];
        $user->save();
         session()->flash('message','user has been upadated successfully');
    }
    public function render()
    {

        return view('livewire.user-edite-component')->layout('layouts.base');
    }
}
