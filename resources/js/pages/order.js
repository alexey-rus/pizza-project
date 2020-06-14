import { Order } from '../components/order.js';
import { Core } from '../components/core.js';

class OrderPage {
    constructor() {
        const $this = this;

        $this.order = new Order();
    }
}
Core.init();
Core.OrderPage = new OrderPage();
