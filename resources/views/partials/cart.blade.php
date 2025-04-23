<style>
    .btn-check:active+.btn-primary,
    .btn-check:checked+.btn-primary,
    .btn-primary.active,
    .btn-primary:active,
    .show>.btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #354E33 !important;
        border-color: #354E33 !important;
    }

    .btn-primary {
        color: #fff;
        background-color: #354E33 !important;
        border-color: #354E33 !important;
    }
</style>

<!-- overlay content begin -->
<div id="extra-wrap" class="de-light cart-wrap">
    <div id="btn-close" class="dark">
        <span></span>
        <span></span>
    </div>

    <div id="extra-content">
        <img src="/images/logo-black.webp" class="w-150px" alt="">

        <div class="spacer-30-line"></div>

        <h5 class="mb-3">Keranjang Kamu</h5>

        <form action="/checkout" method="POST">
            @csrf
            <div class="cart-items">
                @if ($orderItems->isNotEmpty())
                @foreach ($orderItems as $orderItem)
                <div class="de__cart">
                    <div class="de__cart-item justify-content-between">
                        <div class="d-wrap">
                            <input type="checkbox" id="item-{{ $orderItem->id }}" name="items[]" value="{{ $orderItem->id }}" class="d-checkbox__input" />
                            <label for="item-{{ $orderItem->id }}" class="d-checkbox__label align-items-center"></label>
                            <img src="{{ asset('storage/' . $orderItem->product->picture1) }}" alt="{{ $orderItem->product->name }}" class="p-2">
                            <div class="d-info">
                                <div>
                                    <h4>{{ $orderItem->product->name }}</h4>
                                    <span class="d-price">Rp{{ number_format($orderItem->total_price, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="de-number">
                            <span class="d-minus" onclick="updateCart({{ $orderItem->id }}, 'quantity', 'decrease')">-</span>
                            <input type="text" class="no-border no-bg" name="quantities[{{ $orderItem->id }}]" value="{{ $orderItem->quantity }}">
                            <span class="d-plus" onclick="updateCart({{ $orderItem->id }}, 'quantity', 'increase')">+</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <button type="submit" class="w-100 btn-primary text-center rounded-20 py-2 mb-0 mt-auto">
                Checkout
            </button>
            @else
                <p style="color: #354E33;">Kamu belum memasukkan produk ke keranjang</p>
            </div>
            @endif
        </form>



    </div>
</div>
<!-- overlay content end -->