<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;

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
            "messages" => \App\Models\Chat::where(function (Builder $query) {
                $query->where('from_user_id', Auth::user()->id)
                      ->where('to_user_id', $this->user->id);
            })->orWhere(function (Builder $query) {
                $query->where('from_user_id', $this->user->id)
                      ->where('to_user_id', Auth::user()->id);
            })->orderBy('created_at', 'asc')->get(),
            "active" => "Chat " . $this->user->name,
            "customerUsername" => $this->user->username,
            "users" => User::where('role', 'Customer')->get()
        ]);
    }

    public function chatToAdmin()
    {
        // $role = Auth::user()->role;
        // $urlslug = url()->current();

        // dd($role, $urlslug);

        // $slot = view('livewire.slotChatToAdmin', [
        //     "title" => "HydroSpace | Chat Admin HydroSpace",
        //     "messages" => \App\Models\Chat::where('from_user_id', Auth::user()->id)
        //         ->orWhere('to_user_id', Auth::user()->id)
        //         ->orderBy('created_at', 'asc')
        //         ->get(),
        //     "active" => "Chat Admin HydroSpace",
        //     "users" => User::where('role', 'Admin')->get(),
        //     "customerUsername" => null,
        // ]);

        return view('chat', [
            "messages" => \App\Models\Chat::where('from_user_id', Auth::user()->id)
                ->orWhere('to_user_id', Auth::user()->id)
                ->orderBy('created_at', 'asc')
                ->get(),
            "title" => "HydroSpace | Chat Admin HydroSpace",
            "active" => "Chat Admin HydroSpace",
            // "slot" => $slot,
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
