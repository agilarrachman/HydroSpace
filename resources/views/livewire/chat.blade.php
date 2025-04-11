{{--  $slot start here --}}
<div class="layout-page">
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center justify-content-between" id="navbar-collapse">
            <h5 class="mb-0 d-flex align-items-center gap-2">
                <i class="bx bx-chat"></i> {{ $active }}
            </h5>

            <div class="avatar avatar-online">
                <img src="{{ asset('../storage/' . auth()->user()->profile_picture) }}" alt class="w-px-40 rounded-circle object-fit-cover" />
            </div>
        </div>
    </nav>

    <div class="content-wrapper">
        <div class="container-xxl d-flex flex-column flex-lg-row gap-4 flex-grow-1 container-p-y" style="height: 90vh;">
            <div class="card w-25 h-100 overflow-auto d-none d-lg-block">
                <ul class="nav nav-pills flex-column" id="customer-tabs" role="tablist">
                @foreach ($users as $user)
                    <li class="nav-item" role="presentation">
                        <a wire:navigate class="nav-link d-flex align-items-center justify-content-start gap-4 py-3 @if($user->username == $customerUsername) active @endif" href="{{ route('chat', ['user' => $user->id]) }}" style="transition: background-color 0.3s, color 0.3s;">
                            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="User" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                            <p class="mb-0"><span>@</span>{{ $user->username }}</p>
                        </a>
                    </li>
                    <style>
                        .nav-link {
                            border-left: 5px solid #ffffff00 !important;
                        }
                        .nav-link:hover {
                            background-color: rgba(67, 89, 113, 0.04) !important;
                            color: #454545 !important;
                            border-left: 5px solid #354e33 !important;
                        }
                        .nav-link.active {
                            background-color: rgba(53, 78, 51, 0.1) !important;
                            color: #454545 !important;
                            border-left: 5px solid #354e33 !important;
                        }
                        .nav-pills .nav-link.active, .nav-pills .nav-link.active:hover, .nav-pills .nav-link.active:focus {
                            box-shadow: none;
                        }
                    </style>
                @endforeach
                </ul>
            </div>

            <div class="w-100 d-block d-lg-none">
                <select id="customer-select" class="form-select w-100">
                    <option value="" selected disabled>Pilih pengguna untuk memulai chat</option>
                    {{-- @foreach ($users as $user)
                        <option value="customer{{ $loop->index + 1 }}-chat">{{ $user->username }}</option>
                    @endforeach --}}
                    <option value="customer-chat">Nama-1</option>
                </select>
            </div>

            <!-- Chat Section -->
            {{-- {!! $slot !!} --}}
            <div class="tab-content w-100 w-lg-75 h-75 p-0 flex-grow-1" id="customer-chats">
                <div class="tab-pane fade h-100 show active" role="tabpanel">
                    <div class="card p-3 h-100 d-flex flex-column">
                        <div class="chat-window d-flex flex-column flex-grow-1 overflow-auto">
                            <div class="chat h-100" wire:poll.visible id="chat-window">
                                @foreach ($messages as $index => $message)
                                    @php
                                        $isAdmin = $message->fromUser->role === 'Admin';
                                        $isMe = $message->from_user_id === auth()->id();
                                        $isAdminOrMe = $isAdmin || $isMe;
                                    @endphp

                                    <div class="d-flex align-items-start gap-2 {{ $isAdminOrMe ? 'admin' : 'user flex-row-reverse' }}">
                                        <div class="chat-bubble {{ $isAdminOrMe ? 'admin' : 'user' }} text-wrap mt-0 mb-2" @if($loop->last) id="last-message" @endif>
                                            <h6 class="mb-0 {{ $isAdminOrMe ? 'text-end' : 'text-start' }}"
                                                style="font-weight: 800; color:{{ $isAdminOrMe ? '#FFFFFF' : '#454545' }};">
                                                {{ $message->fromUser->username }}
                                            </h6>

                                            <p class="mt-1 {{ $isAdminOrMe ? 'text-end' : 'text-start' }}">
                                                {{ $message->message }}
                                            </p>

                                            <p class="{{ $isAdminOrMe ? 'text-end' : 'text-start' }}">
                                                <small>{{ $message->created_at->setTimezone('Asia/Jakarta')->format('H:i') }}</small>
                                            </p>
                                        </div>

                                        <div class="profile-picture">
                                            <img src="{{ $message->fromUser->profile_picture
                                                    ? asset('storage/' . $message->fromUser->profile_picture)
                                                    : asset('images/default-profile.png') }}"
                                            alt="{{ $isAdminOrMe ? 'Admin' : 'User' }}" />

                                            {{-- <img src="{{ $isAdminOrMe ? asset('images/logo-icon.webp') : asset('storage/' . $message->fromUser->profile_picture) }}"
                                                alt="{{ $isAdminOrMe ? 'Admin' : 'User' }}" /> --}}
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
                </div>
            </div>
        </div>

        <div class="content-backdrop fade"></div>
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
{{--  $slot end here --}}
