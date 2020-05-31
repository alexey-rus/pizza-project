@foreach($cart['rows'] as $cartRow)
<tr class="cart-row" data-id="{{ $cartRow->id }}">
    <th scope="row" class="border-0">
        <div class="p-2">
            <img src="{{ asset('images/' . $cartRow->associatedModel->image) }}" alt=""
                 width="70" class="img-fluid rounded shadow-sm">
            <div class="ml-3 d-inline-block align-middle">
                <h5 class="mb-0"><a href="#" class="text-dark d-inline-block align-middle">{{ $cartRow->name }}</a>
                </h5>
            </div>
        </div>
    </th>
    <td class="border-0 align-middle"><strong class="product-price-value">${{ $cartRow->getPriceSum() }}</strong></td>
    <td class="border-0 align-middle"><input type="number" step="1" max="99" min="1" value="{{ $cartRow->quantity }}"
                                             title="Qty" class="js-change-quantity form-control"></td>

    <td class="border-0 align-middle"><a href="#" class="js-remove-item text-dark"><i class="icon-trash"></i></a>
    </td>
</tr>
@endforeach