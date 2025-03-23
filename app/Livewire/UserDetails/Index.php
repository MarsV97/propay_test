<?php

namespace App\Livewire\UserDetails;

use App\Models\UserDetails;
use Livewire\Component;

class Index extends Component
{

    public $usersDetails;

    public function mount()
    {
        $this->usersDetails = UserDetails::with('user')->get();
    }

    public function deleteUser(UserDetails $userDetails)
    {
        $userDetails->user->delete();
        $userDetails->delete();

        session()->flash('success', 'User and details deleted successfully!');

        $this->redirect(route('user-details.index'));
    }

    public function render()
    {
        return view('livewire.user-details.index');
    }

}
