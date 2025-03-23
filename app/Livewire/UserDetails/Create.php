<?php

namespace App\Livewire\UserDetails;

use App\Models\Interests;
use App\Models\Languages;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Mail\UserCreated;
use Illuminate\Support\Facades\Mail;


class Create extends Component
{

    public $name;

    public $email;

    public $mobile;

    public $south_african_id;

    public $date_of_birth;

    public $languages = [];

    public $language;

    public $interests = [];

    public $interest;

    public $user;

    public $userDetails;

    public function mount()
    {
        $this->interests = Interests::all();
        $this->languages = Languages::all();
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
            'language' => ['required'],
            'language.*' => ['required', 'exists:languages,id'],
        ];
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function submit()
    {
        $this->validate();

        $defaultPassword = Hash::make('default_password');

        $this->user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $defaultPassword,
        ]);

        $this->userDetails = UserDetails::create([
            'user_id' => $this->user->id,
            'mobile' => $this->mobile,
            'south_african_id' => $this->south_african_id,
            'date_of_birth' => $this->date_of_birth,
        ]);

        foreach ($this->language as $language) {
            $languageItem = Languages::where('id', $language)->first();

            $this->userDetails->languages()->attach($languageItem);
        }

        $this->userDetails->interests()->attach($this->interest);

        Mail::to($this->user->email)->send(new UserCreated($this->user));

        session()->flash('success', 'User and details created successfully!');

        return redirect()->route('user-details.index');

    }

    public function render()
    {
        return view('livewire.user-details.create');
    }

}
