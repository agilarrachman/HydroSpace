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
        $adminIds = User::where('role', 'Admin')->pluck('id');

        return view('livewire.chat', [
            "title" => "HydroSpace | Chat",
            "messages" => \App\Models\Chat::where(function (Builder $query) use ($adminIds) {
                $query->whereIn('from_user_id', $adminIds)
                    ->where('to_user_id', $this->user->id);
            })->orWhere(function (Builder $query) use ($adminIds) {
                $query->where('from_user_id', $this->user->id)
                    ->whereIn('to_user_id', $adminIds);
            })->orderBy('created_at', 'asc')->get(),
            "active" => "Chat " . $this->user->name,
            "customerUsername" => $this->user->username,
            "users" => User::where('role', 'Customer')->get()
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
