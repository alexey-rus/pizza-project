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

    createOrder() {
        e.preventDefault();
        const $this = this;
        $.ajax({
            dataType: 'json',
            type: 'POST',
            url: '/order/create'
        })
            .done($this.orderCreatedHandler)
            .fail($this.errorHandler);
    }

    orderCreatedHandler(data) {
console.log(data);
    }

    errorHandler(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
    }
}

$(function () {
    const order = new Order();
});
