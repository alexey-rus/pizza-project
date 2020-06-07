@extends('layouts.main')

@section('title',  'Checkout page')
@push('scripts')
    <script src="{{ asset('js/particles/order.js') }}"></script>
@endpush
@section('content')
@if (!$cart['isEmpty'])
<div class="container">

    <div class="row py-5 p-3 bg-white">
        <div class="col-md-6 bg-white">
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

                    </tr>
                    </thead>
                    <tbody class="products-list">
                    @include('cart._items_checkout')
                    </tbody>
                </table>
            </div>
            <!-- End -->
        </div>
        <div class="col-md-6">
            <div class="p-4">
                <h3 class="mb-3 text-muted">Order summary</h3>

                <ul class="list-unstyled mb-4">
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>${{ $cart['subTotal'] }}</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>${{ $deliveryCost }}</strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                        <h5 class="font-weight-bold text-dark">${{ $cart['total'] }}</h5>
                    </li>
                </ul>
                <h3 class="mb-3 text-muted">Shipping information</h3>

                <form action="#" class="order-form" id="order-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Full Name *" name="customer_name" value="{{ old('customer_name') }}" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Address *" name="delivery_address" value="{{ old('delivery_address') }}" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email *" name="customer_email" value="{{ old('customer_email') }}" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Phone *" name="customer_phone" value="{{ old('customer_phone') }}"  required>
                    </div>

                    <h5 class="mt-4 text-muted">Choose payment method:</h5>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_type" id="f-cash" value="cash" checked>
                        <label class="form-check-label" for="f-cash">
                            Cash
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_type" id="f-card" value="card">
                        <label class="form-check-label" for="f-card">
                            Card
                        </label>
                    </div>
                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-primary py-3 px-4">
                            <span class="spinner spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Order
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@else
<div class="container">
    <div class="row py-5 p-3 bg-white">
        <div class="col-md-6 bg-white">
            <h3 class="empty-cart text-muted {{ !$cart['isEmpty'] ? 'd-none' : '' }}">Cart is empty. <a href="{{ route('index')  }}">Go back.</a></h3>
        </div>
    </div>
</div>
@endif
@endsection