<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class RedirectToLoginModal extends ModalComponent
{
    public function render()
    {
        return view('livewire.redirect-to-login-modal');
    }
}
