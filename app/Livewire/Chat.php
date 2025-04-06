<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chat extends Component
{
    public User $user;

    public $message = '';

    public function render()
    {
        // $role = Auth::user()->role;
        // $urlslug = url()->current();

        // dd($role, $urlslug);

        return view('livewire.chat', [
            "title" => "HydroSpace | Chat",
            "messages" => \App\Models\Chat::where('from_user_id', Auth::user()->id)
                        ->orWhere('from_user_id', $this->user->id)
                        ->orWhere('to_user_id',  Auth::user()->id)
                        ->orWhere('to_user_id', $this->user->id)
                        ->orderBy('created_at', 'asc')
                        ->get(),
            "active" => "Chat " . $this->user->name,
            "customerUsername" => $this->user->username,
            "users" => User::where('role', 'Customer')->get()
            // "role" => $role,
        ]);
    }

    // public function chatToCustomer()
    // {
    //     $role = Auth::user()->role;
    //     $urlslug = url()->current();

    //     // dd($role, $urlslug);

    //     return view('components.layouts.app', [
    //         "title" => "HydroSpace | Chat Customer HydroSpace",
    //         "active" => "Chat Customer HydroSpace",
    //         "role" => $role,
    //         "url" => $urlslug,
    //         "title" => "HydroSpace | Chat Customer",
    //         "users" => User::where('role', 'Customer')->get()
    //     ]);
    // }

    public function chatToAdmin()
    {
        // $role = Auth::user()->role;
        // $urlslug = url()->current();

        // dd($role, $urlslug);

        return view('components.layouts.app', [
            "title" => "HydroSpace | Chat Admin HydroSpace",
            "active" => "Chat Admin HydroSpace",
            // "role" => $role,
        ]);
    }

    public function sendMessage()
    {

        // dd($this->message);

        \App\Models\Chat::create([
            'from_user_id' =>  Auth::user()->id,
            'to_user_id' => $this->user->id,
            'message' => $this->message,
        ]);

        $this->reset('message');
    }
}
