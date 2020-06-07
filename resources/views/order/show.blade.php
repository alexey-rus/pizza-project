@extends('layouts.main')

@section('title',  'Order page')

@section('content')
<div class="container">

    <div class="row py-5 p-3 bg-white">
        <div class="col-md-12">
            <h1 class="mb-4 text-muted">Order #{{ $order->id }} (status: {{ $order->status }})</h1>
        </div>
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
                    @include('order._order_items')
                    </tbody>
                </table>
            </div>
            <!-- End -->
        </div>
        <div class="col-md-6">
            <div class="p-4">
                <h3 class="mb-3 text-muted">Order details</h3>

                <ul class="list-unstyled mb-4">
                    <li class="d-flex justify-content-between py-3 border-bottom">
                        <strong class="text-muted">Full Name</strong>
                        <strong>{{ $order->customer_name }}</strong>
                    </li>
                    <li class="d-flex justify-content-between py-3 border-bottom">
                        <strong class="text-muted">Address</strong>
                        <strong>{{ $order->delivery_address }}</strong>
                    </li>
                    <li class="d-flex justify-content-between py-3 border-bottom">
                        <strong class="text-muted">Email</strong>
                        <strong>{{ $order->customer_email }}</strong>
                    </li>
                    <li class="d-flex justify-content-between py-3 border-bottom">
                        <strong class="text-muted">Phone</strong>
                        <strong>{{ $order->customer_phone }}</strong>
                    </li>
                    <li class="d-flex justify-content-between py-3 border-bottom">
                        <strong class="text-muted">Payment method</strong>
                        <strong>{{ $order->payment_type }}</strong>
                    </li>

                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                        <h5 class="font-weight-bold text-dark">${{ $order->total_amount }}</h5>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
@endsection