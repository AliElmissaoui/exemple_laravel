<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\UpdateUserPassword;


class UserEditeComponent extends Component
{
    public $name;
    public $email;
    public $current_password;
    public $new_password;
    public $new_confirm_password;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'new_password' => 'min:8',
        'new_confirm_password' => 'required_with:new_password|same:new_password|min:8'
    ];
    public function updateuser($formData)
    {



        $user = User::find(Auth::id());

        if($formData['current_password']=="") {
            return redirect()->back()->with('error', 'The current password must not be empty !!');
        }
        elseif (!Hash::check($formData['current_password'], $user->password)) {
            return redirect()->back()->with('error', 'Current password does not match!');
        }

        if ($formData['new_password'] == "" && $formData['new_confirm_password'] == "") {

            $this -> rules = [
                'name' => 'required|min:6',
                'email' => 'required|email',
            ];



            $this->name = $formData['name'];
            $this->email = $formData['email'];
            $this->validate();
            $user->name = $formData['name'];
            $user->email = $formData['email'];
            $user->tel = $formData['tel'];
            $user->gender = $formData['gender'];
            $user->save();

        } else {



            $this->name = $formData['name'];
            $this->email = $formData['email'];
            $this->new_password = $formData['new_password'];
            $this->new_confirm_password = $formData['new_confirm_password'];
            $this->validate();
            $user->name = $formData['name'];
            $user->email = $formData['email'];
            $user->tel = $formData['tel'];
            $user->gender = $formData['gender'];
            $user->password = Hash::make($formData['new_password']);
            $user->save();
        }






        return redirect()->back()->with('success', 'user has been upadated successfully');
    }
    public function render()
    {
        return view('livewire.user-edite-component')->layout('layouts.base');
    }
}
