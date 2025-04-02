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

        <div class="cart-items">
            @foreach ($orderItems as $orderItem)
            <!-- cart item begin -->
            <div class="de__cart">
                <div class="de__cart-item justify-content-between">
                    <div class="d-wrap">
                        <input type="checkbox" id="item-{{ $orderItem->id }}" name="item" class="d-checkbox__input" />
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
                        <input type="text" class="no-border no-bg" value="{{ $orderItem->quantity }}">
                        <span class="d-plus" onclick="updateCart({{ $orderItem->id }}, 'quantity', 'increase')">+</span>
                    </div>
                </div>
            </div>
            <!-- cart item end -->
            @endforeach
        </div>

        <div class="d-flex justify-content-between">
            <div id="total-price col-4 ps-2" class="d-flex flex-column">
                <span style="font-size: small; color: #354E33; height: 20px;">Total Harga</span>
                <span id="total-price-value" style="color: #354E33">
                    Rp{{ number_format($totalPrice, 0, ',', '.') }}
                </span>
            </div>
            <a href="/checkout" class="col-8">
                <button class="btn-primary w-100 rounded-20 py-2 mb-0 mt-auto">Checkout</button>
            </a>
        </div>


    </div>
</div>
<!-- overlay content end -->

<script>
    function addToCart(productId) {
        let url = "/keranjang/add";
        let data = {
            product_id: productId,
            quantity: 1, // Default tambah 1 item
        };

        fetch(url, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                },
                body: JSON.stringify(data),
            })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    // Menampilkan notifikasi
                    $("#de_notif").removeClass("active");
                    de_atc('Produk telah ditambahkan ke keranjang');
                    $("#de_notif").addClass("active");

                    setTimeout(function() {
                        $("#de_notif").removeClass("active");
                    }, 1500);

                    location.reload(); // Reload untuk update sidebar cart
                } else {
                    alert("Gagal menambahkan ke keranjang: " + data.error);
                }
            })
            .catch((error) => console.error("Error:", error));
    }

    function updateCart(orderItemId, type, action) {
        let url = `/keranjang/update/${orderItemId}`;
        let data = {
            type: type,
            action: action
        };

        fetch(url, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                },
                body: JSON.stringify(data),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const cartItemElement = document.querySelector(`#item-${orderItemId}`).closest('.de__cart');
                    const quantityInput = cartItemElement.querySelector('.de-number input');
                    const priceElement = cartItemElement.querySelector('.d-price');
                    const totalPriceElement = document.getElementById("total-price-value");
                    const totalItemElement = document.getElementById("total-item-value");

                    // Pastikan data yang diterima tidak undefined atau null
                    if (data.new_quantity !== undefined && data.new_price !== undefined && data.total_price !== undefined) {
                        // Update jumlah item
                        quantityInput.value = data.new_quantity;

                        // Update harga item
                        priceElement.textContent = `Rp${new Intl.NumberFormat('id-ID').format(data.new_price)}`;

                        // Update total harga keseluruhan
                        totalPriceElement.textContent = `Rp${new Intl.NumberFormat('id-ID').format(data.total_price)}`;

                        // Update total jumlah item
                        totalItemElement.textContent = data.total_item;
                    } else {
                        console.error("Data dari server tidak lengkap:", data);
                    }
                }
            })
            .catch(error => console.error("Error:", error));
    }
</script>