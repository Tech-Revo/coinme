<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;

use Livewire\Component;

class UserAccount extends Component
{
    #[Validate('required')] 
    public $name;

    #[Validate] 
   public $email;

    #[Validate]
    public $mobile_no;

    #[Validate('required|min:4')] 
    public $password;

    public function rules()
    {
        return [
            'email' => [
                'required',
                Rule::unique('users','email'),
            ],
            'mobile_no'=>['required',Rule::unique('users','mobile_no')]
           
        ];
    }

    protected $messages = [
        'email.unique' => 'The email has already been taken.',
    ];

    public function save(){

        $validated = $this->validate();

        User::create($validated);
        sweetalert()->addSuccess('Your account has been created successfully! Please login!');
        return $this->redirect('/');
        
    }
    
    public function render()
    {
        return view('livewire.user-account');
    }
}