<?php

namespace App\Livewire;

use App\Models\User;
// Removed unused import
use Livewire\Component;

class Chat extends Component
{
    public User $user;

    public $message = '';

    public function render()
    {
        return view('livewire.chat', [
            'messages' => \App\Models\Chat::where('from_user_id', auth()->id())
                        ->orWhere('from_user_id', $this->user->id)
                        ->orWhere('to_user_id', auth()->id())
                        ->orWhere('to_user_id', $this->user->id)
                        ->orderBy('created_at', 'asc')
                        ->get(),
        ]);
    }

    public function sendMessage()
    {

        // dd($this->message);

        \App\Models\Chat::create([
            'from_user_id' => auth()->id(),
            'to_user_id' => $this->user->id,
            'message' => $this->message,
        ]);

        $this->reset('message');
    }
}
