<?php

namespace App\Http\Livewire;

use App\Models\Social;
use Livewire\Component;

class SocialForm extends Component
{
    public $facebook;
    public $twitter;
    public $instagram;
    public $youtube;
    public $linkedin;
    public $social_id;

    public function submit()
    {
        $this->validate([
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'youtube' => 'nullable',
            'linkedin' => 'nullable',
        ]);

        Social::updateOrCreate(['id' => $this->social_id ], [

            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'facebook' => $this->instagram,
            'twitter' => $this->youtube,
            'facebook' => $this->linkedin,
        ]);

        flashify()->livewire($this)->fire($this->social_id ? 'updated' : 'created');

        $this->reset('facebook', 'twitter', 'instagram', 'youtube', 'linkedin');
    }

    public function edit(Social $social)
    {
        $this->social_id = $social->id;

        $this->facebook = $social->facebook;

        $this->twitter = $social->twitter;

        $this->instagram = $social->instagram;

        $this->youtube = $social->youtube;

        $this->linkedin = $social->linkedin;
    }

    public function delete(Social $social)
    {
        $social->delete();

        flashify()->livewire($this)->fire('deleted');

    }

    public function render(Social $social)
    {
        
        $socials = Social::all();

        return view('livewire.social-form', compact('socials'));
    }
}
