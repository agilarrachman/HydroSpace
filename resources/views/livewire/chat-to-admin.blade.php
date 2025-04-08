<div class="chat section flex-grow-1 d-flex flex-column overflow-auto border" id="ai">
    @push('meta')
    @php
        View::share('active', $active);
        View::share('title', $title);
    @endphp
    @endpush
    <div style="background-color: #FFF !important; padding: .75rem !important; border-radius: 10px !important;" class="container h-100 px-0">
        <!-- Chat Window -->
        <div style="padding: .75rem !important;" class="chat-window d-flex flex-column flex-grow-1 overflow-auto">
            <div class="chat h-100" wire:poll.visible>
                @foreach ($messages as $index => $message)
                    <div class="d-flex align-items-start gap-2 @if($message->from_user_id == auth()->id()) admin @else user flex-row-reverse @endif">
                        <div class="chat-bubble @if($message->from_user_id == auth()->id()) admin @else user @endif text-wrap mt-0 mb-2"  @if($loop->last) id="last-message" @endif>
                            <h6 @class([ 'mb-0',
                                                'text-end' => $message->from_user_id == auth()->id(),
                                                'text-start' => $message->from_user_id != auth()->id(),
                                            ]) style="font-weight: 800; color:@if($message->from_user_id == auth()->id()) #FFFFFF @else #454545 @endif;">{{ $message->fromUser->username }}</h6>

                            <p class="mt-1" @class([ 'text-end' => $message->from_user_id == auth()->id(),
                                                'text-start' => $message->from_user_id != auth()->id()
                                            ])>{{ $message->message }}</p>

                            <p @class([ 'text-end' => $message->from_user_id == auth()->id(),
                                                'text-start' => $message->from_user_id != auth()->id()
                                            ])><small>{{ $message->created_at->setTimezone('Asia/Jakarta')->format('H:i') }}</small></p>
                        </div>
                        <div class="profile-picture">
                            @if($message->from_user_id == auth()->id())
                                <img style="width: 100% !important" src="{{ asset('storage/' . $message->fromUser->profile_picture) }}" alt="User" />
                            @else
                                <img style="width: 20px !important;" src="{{ asset('images/logo-icon-color.webp') }}" alt="Admin" />
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="chat-input my-0">
            <div class="form-control">
                <form action="" wire:submit.prevent="sendMessage">
                    <div class="d-flex align-items-center gap-2">
                        <input name="message" type="text" class="form-control" placeholder="Ketik pesan.." required wire:model="message" />
                        <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.0431 13.886C24.5682 13.6234 24.8999 13.0867 24.8999 12.4996C24.8999 11.9125 24.5682 11.3758 24.0431 11.1133L2.34309 0.263263C1.7933 -0.0116297 1.13302 0.0643301 0.66002 0.456886C0.187018 0.849442 -0.00932183 1.48441 0.159543 2.07544L2.37382 9.82543C2.56394 10.4908 3.17214 10.9496 3.86418 10.9496L10.9499 10.9496C11.8059 10.9496 12.4999 11.6436 12.4999 12.4996C12.4999 13.3557 11.8059 14.0496 10.9499 14.0496L3.86419 14.0496C3.17215 14.0496 2.56395 14.5084 2.37383 15.1738L0.159542 22.9238C-0.0093228 23.5148 0.187017 24.1498 0.660019 24.5424C1.13302 24.9349 1.7933 25.0109 2.34308 24.736L24.0431 13.886Z"
                                    fill="white" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function scrollToLastMessage() {
            setTimeout(() => {
                const lastMsg = document.getElementById('last-message');
                if (lastMsg) {
                    lastMsg.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }, 100);
        }

        document.addEventListener("DOMContentLoaded", scrollToLastMessage);

        document.addEventListener("livewire:load", function () {
            Livewire.hook('message.processed', (message, component) => {
                scrollToLastMessage();
            });
        });
    </script>
</div>
