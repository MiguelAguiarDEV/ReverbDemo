<div>
    <h1>Chat</h1>
    <div>
        @foreach ($convo as $message)
            <div>
                <strong>{{ $message['user'] }}:</strong> {{ $message['message'] }}
            </div>
        @endforeach
    </div>

    <form wire:submit.prevent="submitMessage">
        <x-text-input wire:model="message" />
        <button type="submit">Send</button>
    </form>
</div>
