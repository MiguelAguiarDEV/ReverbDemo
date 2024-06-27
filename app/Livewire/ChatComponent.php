<?php

namespace App\Livewire;

use App\Events\MessageEvent;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatComponent extends Component
{
    public $message;
    public $convo = []; // This will hold the conversation between the two users

    protected $listeners = [
        'echo:our-channel,MessageEvent' => 'listenForMessage',
    ];

    public function mount()
    {
        $messages = Message::with('user')->get(); // Ensure we load the user relationship

        foreach ($messages as $msg) {
            $this->convo[] = [
                'user' => $msg->user->name,
                'message' => $msg->message,
            ];
        }
    }

    public function submitMessage()
    {
        $user = Auth::user();
        MessageEvent::dispatch($user->id, $this->message);
        $this->message = '';
    }

    public function listenForMessage($data)
    {
        $this->convo[] = [
            'user' => $data['user']['name'],
            'message' => $data['message'],
        ];
    }

    public function render()
    {
        return view('livewire.chat-component', [
            'convo' => $this->convo,
        ]);
    }
}