<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class ConsultationComponent extends Component
{
    // public $ID;

    // public function mount($id)
    // {
    //     $this->ID = $id;
    // }
    public function render()
    {
        return view('livewire.consultation-component')->layout('layouts.base');;
    }
}
