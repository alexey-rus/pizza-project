@push('scripts')
    <script src="{{ asset('js/particles/cart.js') }}"></script>
@endpush
<div id="cartButton" class="cart-button" data-toggle="modal" data-target="#cartModal">
    <div class="cb-wrapper">
        <div class="cb-icon">
            <span class="icon-shopping-cart"></span>
        </div>
        @if (!$cart['isEmpty'])
        <span class="cb-label cb-subtotal">${{ $cart['subTotal'] }}</span>
        <div class="cb-counter">
            <span class="cb-counter-label">{{ $cart['rows']->count() }}</span>
        </div>
        @else
        <span class="d-none cb-label cb-subtotal"></span>
        <div class="d-none cb-counter">
            <span class="cb-counter-label"></span>
        </div>
        @endif
    </div>
</div>
<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="shoppingCart" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="shoppingCart">Cart</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="full-cart {{ $cart['isEmpty'] ? 'd-none' : '' }}">
                    <div class="col-lg-12 bg-white">
                        <!-- Shopping cart table -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" class="border-0 bg-light w-70">
                                        <div class="p-2 px-3 text-uppercase">Product</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light w-10">
                                        <div class="py-2 text-uppercase">Price</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light w-10">
                                        <div class="py-2 text-uppercase">Quantity</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light w-10">
                                        <div class="py-2 text-uppercase">Remove</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="products-list">
                                @if (!$cart['isEmpty'])
                                    @include('cart._items')
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- End -->
                    </div>
                    <div class="row py-5 p-3 bg-white">
                        <div class="col-lg-12">
                            <div class="p-4">
                                <ul class="list-unstyled mb-4">
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal</strong>
                                        <h5 class="font-weight-bold subtotal-value">${{ $cart['subTotal'] }}</h5>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary py-3 px-5">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="empty-cart {{ !$cart['isEmpty'] ? 'd-none' : '' }}">Cart is empty. Let's add something delicious in it.</p>
            </div>
        </div>
    </div>
</div>