<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ChatToAdmin extends Component
{
    public User $user;
    public $active = 'Chat Admin HydroSpace';
    public $title = 'HydroSpace | Chat Admin';

    public function mount()
    {
        // Ambil admin pertama dari database (asumsi user ke admin)
        $this->user = User::where('role', 'Admin')->firstOrFail();
        // $this->user = User::where('role', 'Admin')->where('id', 1)->firstOrFail();
    }

    public $message = '';


    public function render()
    {
        return view('livewire.chat-to-admin', [
            "title" => "HydroSpace | Chat",
            "messages" => \App\Models\Chat::where('from_user_id', Auth::user()->id)
                ->orWhere('to_user_id', Auth::user()->id)
                ->orderBy('created_at', 'asc')
                ->get()
                ->unique('message'), // <- ini untuk buang duplikat berdasarkan isi pesan
            "active" => "Chat " . $this->user->name,
            "customerUsername" => $this->user->username,
            "users" => User::where('role', 'Admin')->get()
        ]);
    }

    public function sendMessage()
    {

        // dd($this->message);

        // \App\Models\Chat::create([
        //     'from_user_id' =>  Auth::user()->id,
        //     'to_user_id' => $this->user->id,
        //     'message' => $this->message,
        // ]);

        // $this->reset('message');

        $admins = User::where('role', 'Admin')->get();

        foreach ($admins as $admin) {
            \App\Models\Chat::create([
                'from_user_id' => Auth::user()->id,
                'to_user_id' => $admin->id,
                'message' => $this->message,
            ]);
        }

        $this->reset('message');
    }
}
