class Order {
    constructor() {
        const $this = this;
        $this.form = $('#order-form');

        $this.proxy();
        $this.initializeEvents();
    }

    proxy() {
        const $this = this;
        $this.createOrder = $.proxy($this.createOrder, $this);
    }
    initializeEvents() {
        const $this = this;
        $this.form.submit($this.createOrder);
    }

    createOrder(e) {
        e.preventDefault();
        const $this = this;
        const btn = $this.form.find('[type="submit"]');
        $.ajax({
            data: $this.form.serialize(),
            dataType: 'json',
            type: 'POST',
            beforeSend: function () {
                $this.blockBtn(btn);
            },
            url: '/order/create'
        })
            .done(function(data) {
                $this.orderCreatedHandler(data);
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

    orderCreatedHandler(data) {
        window.location = '/order/show/' + data.order_token;
    }

    errorHandler(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
    }
}

export { Order };
