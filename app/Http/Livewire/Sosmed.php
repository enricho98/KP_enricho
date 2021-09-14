<?php


namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use Illuminate\Support\Facades\Validator;





class Sosmed extends Component
{
  
    /**
     * The component's state.
     *
     * @var array
     */
    public $state = [];

    /**
     * Prepare the component.
     *
     * @return void
     */
    public function mount()
    {
        $this->state = Auth::user()->withoutRelations()->toArray();
    }

    /**
     * Update the user's profile contact information.
     *
     * @return void
     */
    public function updateProfileContactInformation()
    {
        $this->resetErrorBag();
        $user = Auth::user();
        $user->facebook = $this->state['facebook'];
        $user->instagram = $this->state['instagram'];
        $user->save();
        $this->emit('saved');
        $this->emit('refresh-navigation-menu');
    }

    /**
     * Get the current user of the application.
     *
     * @return mixed
     */
    public function getUserProperty()
    {
        return Auth::user();
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.sosmed');
    }
}
