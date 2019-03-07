<div class="style-switch right" id="switch-style">
        <a id="toggle-switcher" class="switch-button" title="Change Styles"{{--  href="{{route('cart-show')}}" --}}>
            <span class="cart_heading"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
            @if(Cart::instance('default')->count()>0)
            <span  class="badge" style="color:white;background-color:red"> {{Cart::instance('default')->count()}}</span>
        @endif
        </a>
        
    <div class="switched-options">
        <h4 class="preset-title">Your Cart</h4>
        <ul class="styles">
            <li>
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td><strong>Item</strong></td>
                                <td class="text-center"><strong>Rate</strong></td>
                                <td class="text-center"><strong>Qty</strong></td>
                                <td class="text-right"><strong>Total</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- foreach ($order->lineItems as $line) or some such thing here -->
                            <tr>
                                <td>Gyoza mix (12 pieces)</td>
                                <td class="text-center">$10.99</td>
                                <td class="text-center">1</td>
                                <td class="text-right">$10.99</td>
                            </tr>
                            <tr>
                                <td>BS-400</td>
                                <td class="text-center">$20.00</td>
                                <td class="text-center">3</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td>BS-1000</td>
                                <td class="text-center">$600.00</td>
                                <td class="text-center">1</td>
                                <td class="text-right">$600.00</td>
                            </tr>
                            <tr>
                                <td class="thick-line"></td>
                                <td class="thick-line"></td>
                                <td class="thick-line"></td>
                                <td class="thick-line"></td>
                            </tr>
                            <tr>
                                <td class="no-line"></td>
                                <td class="no-line text-left"><strong>Total</strong></td>
                                <td class="no-line text-center">$685.99</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </li>
            <li><a href="{{route('cart-show')}}"  class="dark-blue color">Edit cart </a></li>
            <li><a href="{{route('cart-checkout')}}" title="default" class="red color">checkout</a></li>
    </div>
</div>