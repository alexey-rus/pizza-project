
<style>
    .cart-button {
        position: fixed;
        left: auto;
        top: 20%;
        right: 1.5em;
        bottom: auto;
        user-select: none;
        /*display: none*/;
        z-index: 2;
    }
    .cart-button:hover .cb-wrapper{
        background: #fac564;
        transition: all 0.3s ease;
    }
    .cart-button:hover .cb-counter {
        background: #fff;
        transition: all 0.3s ease;
    }
    .cb-wrapper {
        background-color: #fff;
        color: #000;
        cursor: pointer;
        box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.2);
        width: auto;
        height: 3.125em;
        border-radius: 1.5625em;
        padding: 0.875em 1em 0 1em;

    }
    .cb-wrapper span{
        color: #000;
    }

    .cb-icon {
        display: inline-block;
        font-size: 1.4em;
        line-height: 1.3em;
    }

    .cb-counter {
        width: 1.25em;
        height: 1.25em;
        position: absolute;
        display: inline-block;
        right: -12%;
        top: -12%;
        background-color: #fac564;
        color: #5c3d03;
        border-radius: 0.625em;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        overflow: hidden;
        z-index: 10;
    }
    
    @media screen and (min-width: 26.25em) {
        .cb-counter {
            right: -0.375em;
            top: -0.375em;
        }
    }  

    @media screen and (min-width: 20em) {
        .cb-counter {
            width: 1.625em;
            height: 1.625em;
            right: -0.25em;
            top: -0.25em;
            border-radius: 0.8125em;
        }
    }

    .cb-counter-label {
        position: absolute;
        display: inline-block;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        font-size: 0.6875em;
    }
    @media screen and (min-width: 20em) {
        .cb-counter-label {
            font-size: 0.75em;
        }
    }
    .cb-label {
        display: none;
    }
    @media screen and (min-width: 26.25em) {
        .cb-label {
            display: inline-block;
            font-size: 0.875em;
            transform: translate(0, 0.125em);
            vertical-align: top;
            padding-left: 0.25em;
        }
    }


    .modal h1, .modal h2, .modal h3, .modal h4, .modal h5 {
        color: #121618;
    }

    .w-70 {
        width: 70% !important;
    }
    .w-10 {
        width: 10% !important;
    }

</style>
<div class="cart-button" data-toggle="modal" data-target="#cartModal">
    <div class="cb-wrapper">
        <div class="cb-icon">
            <span class="icon-shopping-cart"></span>
        </div>
        <span class="cb-label">$685.00</span>

        <div class="cb-counter">
            <span class="cb-counter-label">3</span>
        </div>
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
                            <tbody>
                            <tr>
                                <th scope="row" class="border-0">
                                    <div class="p-2">
                                        <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-1_zrifhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                                        <div class="ml-3 d-inline-block align-middle">
                                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex Originals</a></h5>
                                        </div>
                                    </div>
                                </th>
                                <td class="border-0 align-middle"><strong>$79.00</strong></td>
                                <td class="border-0 align-middle"><input type="number" step="1" max="99" min="1" value="1" title="Qty" class="form-control"></td>

                                <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="p-2">
                                        <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-3_cexmhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                                        <div class="ml-3 d-inline-block align-middle">
                                            <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Lumix camera lense</a></h5>
                                        </div>
                                    </div>
                                </th>
                                <td class="align-middle"><strong>$79.00</strong></td>
                                <td class="align-middle"><input type="number" step="1" max="99" min="1" value="1" title="Qty" class="form-control"></td>
                                <td class="align-middle"><a href="#" class="text-dark"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="p-2">
                                        <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-2_qxjis2.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                                        <div class="ml-3 d-inline-block align-middle">
                                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Gray Nike running shoe</a></h5>
                                        </div>
                                    </div>
                                <td class="align-middle"><strong>$79.00</strong></td>
                                <td class="align-middle"><input type="number" step="1" max="99" min="1" value="1" title="Qty" class="form-control"></td>
                                <td class="align-middle"><a href="#" class="text-dark"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End -->
                </div>
                <div class="row py-5 p-3 bg-white">
                    <div class="col-lg-12">
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                        <div class="p-4">
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$390.00</strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                    <h5 class="font-weight-bold">$400.00</h5>
                                </li>
                            </ul><a href="#" class="btn btn-primary py-3 px-5">Procceed to checkout</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>