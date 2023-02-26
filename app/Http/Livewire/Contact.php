<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Notifications\NewContact;
use Illuminate\Support\Facades\Notification;

class Contact extends Component
{
    public $name;
    public $email;
    public $url;
    public $comment;

    public function submit()
    {
        
        $this->validate([
            'name' => [
                'required',
                'max:255',
            ],
            'email' => [
                'required',
                'email',
                'max:255',
            ],
            'url' => [
                'nullable',
            ],
            'comment' => [
                'required',
            ],
        ]);


        try {
            Notification::route('mail', setting('company_email'))->notify(
                new NewContact($this->all())
            );
        } catch (\Exception $e) {
            // dd($e->getMessage());

            flashify()->livewire($this)->fire(__('Oops, something went wrong. Please try again.'));

            return;
        }

        flashify()->livewire($this)->fire(__('Message sent successfully.'));

        $this->reset(['name', 'email', 'url', 'comment']);
    }
    public function render()
    {
        return view('livewire.contact');
    }
}
