@foreach($order->products as $product)
<tr class="cart-row" data-id="{{ $product->id }}">
    <th scope="row" class="border-0">
        <div class="p-2">
            <img src="{{ asset('images/' . $product->product->image) }}" alt=""
                 width="70" class="img-fluid rounded shadow-sm">
            <div class="ml-3 d-inline-block align-middle">
                <h5 class="mb-0"><a href="#" class="text-dark d-inline-block align-middle">{{ $product->product->name }}</a>
                </h5>
            </div>
        </div>
    </th>
    <td class="border-0 align-middle"><strong class="product-price-value">${{ $product->price }}</strong></td>
    <td class="border-0 align-middle">{{ $product->quantity }}</td>
    </td>
</tr>
@endforeach