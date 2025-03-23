<?php

namespace App\Livewire\UserDetails;

use App\Models\Interests;
use App\Models\Languages;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Update extends Component
{

    public UserDetails $userDetails;

    public $interests = [];

    public $languages = [];

    public $name;

    public $email;

    public $mobile;

    public $south_african_id;

    public $date_of_birth;

    public $language;

    public $interest;

    public $user;

    public function mount(UserDetails $userDetails)
    {
        $this->userDetails = $userDetails;
        $this->interests = Interests::all();
        $this->languages = Languages::all();

        $this->name = $userDetails->user->name;
        $this->email = $userDetails->user->email;
        $this->mobile = $userDetails->mobile;
        $this->south_african_id = $userDetails->south_african_id;
        $this->date_of_birth = $userDetails->date_of_birth;
        $this->language = $userDetails->languages->pluck('id')->toArray();
        $this->interest = $userDetails->interests->pluck('id')->toArray();
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users', 'email'],
            'mobile' => ['required', 'numeric', 'digits:10'],
            'south_african_id' => ['required', 'numeric', 'digits:13'],
            'date_of_birth' => ['required', 'date'],
            'interest' => ['required', 'exists:interests,id'],
            'language.*' => ['required', 'exists:languages,id'],
        ];
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function submit()
    {
        $defaultPassword = Hash::make('default_password');

        $this->userDetails->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $defaultPassword,
        ]);

        $this->userDetails->update([
            'mobile' => $this->mobile,
            'south_african_id' => $this->south_african_id,
            'date_of_birth' => $this->date_of_birth,
        ]);

        $this->userDetails->languages()->sync($this->language);

        $this->userDetails->interests()->sync($this->interest);

        session()->flash('success', 'User and details updated successfully!');

        $this->redirect(route('user-details.index'));
    }

    public function render()
    {
        return view('livewire.user-details.update');
    }

}
