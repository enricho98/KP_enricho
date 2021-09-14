<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use Illuminate\Support\Facades\Validator;

class ProfileContactInformationForm extends Component
{
    public $state = [];
    public $message;
    protected $rules = [

        'state.message' => 'required',

      

    ];
    protected $messages = [

        'required' => 'Testimony tidak bisa kosong.',


    ];


    /**
     * Prepare the component.
     *
     * @return void
     */
    public function mount()
    {
        $this->state = Auth::user()->withoutRelations()->toArray();
    }
    public function action(){
        $this->validate();
        $user = Auth::user();
        $user->message = $this->state['message'];
        $user->pekerjaan = $this->state['pekerjaan'];
        $user->save();
        $this->emit('saved');
        $this->emit('refresh-navigation-menu');
        
    
    }

    /**
     * Update the user's profile contact information.
     *
     * @return void
     */


    /**
     * Get the current user of the application.
     *
     * @return mixed
     */
    public function getUserProperty()
    {
        return Auth::user();
    }
    public function render()
    {
        return view('livewire.profile-contact-information-form');
    }
}
