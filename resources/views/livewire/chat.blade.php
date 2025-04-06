<div class="tab-content w-100 w-lg-75 h-75 p-0 flex-grow-1" id="customer-chats">
    <div class="tab-pane fade h-100 show active"  role="tabpanel">
        <div class="card p-3 h-100 d-flex flex-column">
            <h5>Chat dengan User</h5>
            <div class="chat-window d-flex flex-column flex-grow-1 overflow-auto">
                <div class="chat h-100">
                    @foreach ($messages as $message)
                    <div class="admin d-flex gap-2">
                        <div class="chat-bubble admin text-wrap lh-1">
                            <h5 class="mb-2" style="font-weight: 800; color:#fff;">Admin HydroSpace</h5>
                            <p>{{ $message->message }}</p>
                            <p>{{ $message->created_at->diffForHumans() }}</p>
                        </div>
                        <div class="profile-picture">
                            <img src="{{ asset('images/logo-icon.webp') }}" alt="Admin" />
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="user d-flex gap-2 align-item-center mb-2">
                        <img src="{{ asset('images/user-default.jpg') }}" alt="User" />
                        <div>
                            <p class="mb-0">{{ $message->from_user_id }}</p>
                            <div class="chat-bubble user w-100">
                                {{ $message->message }}
                            </div>
                            <p>{{ $message->created_at->diffForHumans() }}</p>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="chat-input my-0">
                <div class="form-control">
                    <form action="" wire:submit.prevent="sendMessage">
                        <div class="d-flex align-items-center gap-2">
                            <input name="message" type="text" class="form-control" placeholder="Ketik pesan.." required wire:model="message"/>
                            <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
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
    </div>
</div>
