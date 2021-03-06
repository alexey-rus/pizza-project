class Cart {
    constructor() {
        const $this = this;
        $this.products = $('.products .product');
        $this.cartButton = $('#cartButton');
        $this.cartPopup = $('#cartModal');
        $this.proxy();
        $this.initializeEvents();
    }
    addItem(e) {
        e.preventDefault();
        const $this = this;
        const btn = $(e.target);
        const productId = btn.parents('.product').data('id');

        $.ajax({
            dataType: 'json',
            type: 'POST',
            beforeSend: function () {
                $this.blockBtn(btn);
            },
            url: '/cart/add/' + productId
        })
        .done(function(data) {
            $this.refreshCart(data);
            $this.unBlockBtn(btn);
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            $this.errorHandler(jqXHR, textStatus, errorThrown);
            $this.unBlockBtn(btn);
        });
    }
    blockBtn(btn) {
        btn.addClass('loading').attr('data-text', btn.text()).text('Loading...').prop('disabled', true);
    }
    unBlockBtn(btn) {
        btn.removeClass('loading').text(btn.attr('data-text')).prop('disabled', false);
    }
    changeQuantity(e) {
        const $this = this;
        const input = $(e.target);
        const productRow = input.parents('.cart-row');
        const rowId = productRow.data('id');
        let quantity = input.val();
        $.ajax({
            dataType: 'json',
            data: {quantity: quantity},
            type: 'PUT',
            url: '/cart/update/' + rowId
        })
            .done(function(data) {
                $this.refreshCart(data);
                $this.refreshRow(productRow, data);
            })
            .fail($this.errorHandler);
    }

    removeItem(e) {
        e.preventDefault();
        const $this = this;
        const productRow = $(e.target).parents('.cart-row');
        const rowId = productRow.data('id');
        productRow.fadeOut(300, function(){ $(this).remove(); });

        $.ajax({
            dataType: 'json',
            type: 'DELETE',
            url: '/cart/remove/' + rowId
        })
            .done($this.refreshCart)
            .fail($this.errorHandler);
    }
    refreshRow(productRow, data) {
        productRow.find('.product-price-value').text(Cart.formatPrice(data.itemPriceTotal));
    }
    refreshCart(data) {
        const $this = this;
        if (data.items > 0) {

            $this.cartPopup.find('.full-cart.d-none').removeClass('d-none');
            $this.cartPopup.find('.empty-cart').addClass('d-none');

            $this.cartButton.find('.d-none').removeClass('d-none');
            $this.cartButton.find('.cb-subtotal').text(Cart.formatPrice(data.subtotal));
            $this.cartButton.find('.cb-counter-label').text(data.items);
            $this.cartPopup.find('.subtotal-value').text(Cart.formatPrice(data.subtotal));
            if (data.view !== undefined)
                $this.cartPopup.find('.products-list').html(data.view);
        } else {
            $this.cartPopup.find('.full-cart').addClass('d-none');
            $this.cartPopup.find('.empty-cart').removeClass('d-none');

            $this.cartButton.find('.cb-label, .cb-counter').addClass('d-none');
            $this.cartButton.find('.cb-counter-label').text(data.items);
        }


    }
    errorHandler(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
    }
    proxy() {
        const $this = this;
        $this.addItem = $.proxy($this.addItem, $this);
        $this.refreshCart = $.proxy($this.refreshCart, $this);
        $this.removeItem = $.proxy($this.removeItem, $this);
        $this.changeQuantity = $.proxy($this.changeQuantity, $this);
    }
    initializeEvents() {
        const $this = this;
        $this.products.find('.js-add-cart').click($this.addItem);
        $this.cartPopup.on('click', '.js-change-quantity', $this.changeQuantity);
        $this.cartPopup.on('click', '.js-remove-item', $this.removeItem);
    }

    static formatPrice(value) {
        return '$' + value;
    }
}
export { Cart };
