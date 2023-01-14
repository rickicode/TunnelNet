<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
{
    use LivewireAlert;
    public $user;
    public $email;
    public $password;
    public $name;
    public function mount(User $user)
    {
        if(!auth()->user()->can('admin_user_edit')) {
            return abort(403);
        }

        $this->user = $user;
        $this->email = $user->email;
        $this->name = $user->name;
    }

    public function edit()
    {
        if(!auth()->user()->can('admin_user_edit')) {
            return abort(403);
        }

        $this->validate([
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->user->id)],
            'name' => ['string', 'nullable'],
            'password' => 'nullable'
        ]);

        $this->user->email = $this->email;
        $this->user->name = $this->name;
        if($this->password) {
            $this->user->password = Hash::make($this->password);
        }
        $this->user->save();

        $this->emitTo(\App\Http\Livewire\Admin\User\Index::getName(), 'updateList');
        $this->emit('hideModal');

        $this->alert('success', __('bap.edited'));
    }

    public function render()
    {
        if(!auth()->user()->can('admin_user_edit')) {
            return abort(403);
        }

        return view('livewire.admin.user.edit');
    }
}
