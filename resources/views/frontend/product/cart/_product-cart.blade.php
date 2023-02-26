<div class="shop-cart padding-tb">
    <div class="container">
        <div class="section-wrapper">
            <div class="cart-top">
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-item">
                                <div class="p-thumb">
                                    <a href="#"><img src="{{ asset('frontend/assets/images/shope/01.jpg') }}" alt="product"></a>
                                </div>
                                <div class="p-content">
                                    <a href="#">Product Text Here</a>
                                </div>
                            </td>
                            <td>$250</td>
                            <td>
                                <div class="cart-plus-minus">
                                    <div class="dec qtybutton">-</div>
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="3">
                                    <div class="inc qtybutton">+</div>
                                </div>
                            </td>
                            <td>$750</td>
                            <td>
                                <a href="#"><img src="{{ asset('frontend/assets/images/shope/del.png') }}" alt="product"></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="product-item">
                                <div class="p-thumb">
                                    <a href="#"><img src="{{ asset('frontend/assets/images/shope/02.jpg') }}" alt="product"></a>
                                </div>
                                <div class="p-content">
                                    <a href="#">Product Text Here</a>
                                </div>
                            </td>
                            <td>$250</td>
                            <td>
                                <div class="cart-plus-minus">
                                    <div class="dec qtybutton">-</div>
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    <div class="inc qtybutton">+</div>
                                </div>
                            </td>
                            <td>$500</td>
                            <td>
                                <a href="#"><img src="{{ asset('frontend/assets/images/shope/del.png') }}" alt="product"></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="product-item">
                                <div class="p-thumb">
                                    <a href="#"><img src="{{ asset('frontend/assets/images/shope/03.jpg') }}" alt="product"></a>
                                </div>
                                <div class="p-content">
                                    <a href="#">Product Text Here</a>
                                </div>
                            </td>
                            <td>$50</td>
                            <td>
                                <div class="cart-plus-minus">
                                    <div class="dec qtybutton">-</div>
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    <div class="inc qtybutton">+</div>
                                </div>
                            </td>
                            <td>$100</td>
                            <td>
                                <a href="#"><img src="{{ asset('frontend/assets/images/shope/del.png') }}" alt="product"></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="product-item">
                                <div class="p-thumb">
                                    <a href="#"><img src="{{ asset('frontend/assets/images/shope/04.jpg') }}" alt="product"></a>
                                </div>
                                <div class="p-content">
                                    <a href="#">Product Text Here</a>
                                </div>
                            </td>
                            <td>$100</td>
                            <td>
                                <div class="cart-plus-minus">
                                    <div class="dec qtybutton">-</div>
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    <div class="inc qtybutton">+</div>
                                </div>
                            </td>
                            <td>$200</td>
                            <td>
                                <a href="#"><img src="{{ asset('frontend/assets/images/shope/del.png') }}') }}" alt="product"></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="product-item">
                                <div class="p-thumb">
                                    <a href="#"><img src="{{ asset('frontend/assets/images/shope/05.jpg') }}" alt="product"></a>
                                </div>
                                <div class="p-content">
                                    <a href="#">Product Text Here</a>
                                </div>
                            </td>
                            <td>$200</td>
                            <td>
                                <div class="cart-plus-minus">
                                    <div class="dec qtybutton">-</div>
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    <div class="inc qtybutton">+</div>
                                </div>
                            </td>
                            <td>$400</td>
                            <td>
                                <a href="#"><img src="{{ asset('frontend/assets/images/shope/del.png') }}') }}" alt="product"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cart-bottom">
                <div class="cart-checkout-box">
                    <div class="coupon">
                        <input type="text" name="coupon" placeholder="Coupon Code..." class="cart-page-input-text">
                        <input type="submit" value="Apply Coupon">
                    </div>
                    <div class="cart-checkout">
                        <input type="submit" value="Update Cart">
                        <input type="submit" value="Proceed to Checkout">
                    </div>
                </div>
                <div class="shiping-box">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="calculate-shiping">
                                <h3>Calculate Shipping</h3>
                                <div class="outline-select">
                                    <select>
                                        <option value="volvo">United Kingdom (UK)</option>
                                        <option value="saab">Bangladesh</option>
                                        <option value="saab">Pakisthan</option>
                                        <option value="saab">India</option>
                                        <option value="saab">Nepal</option>
                                    </select>
                                    <span class="select-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                </div>
                                <div class="outline-select shipping-select">
                                    <select>
                                        <option value="volvo">State/Country</option>
                                        <option value="saab">Dhaka</option>
                                        <option value="saab">Benkok</option>
                                        <option value="saab">Kolkata</option>
                                        <option value="saab">Kapasia</option>
                                    </select>
                                    <span class="select-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" name="coupon" placeholder="Postcode/ZIP" class="cart-page-input-text"/>	
                                <button type="submit">Update Total</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="cart-overview">
                                <h3>Cart Totals</h3>
                                <ul>
                                    <li>
                                        <span class="pull-left">Cart Subtotal</span>
                                        <p class="pull-right">$ 0.00</p>
                                    </li>
                                    <li>
                                        <span class="pull-left">Shipping and Handling</span>
                                        <p class="pull-right">Free Shipping</p>
                                    </li>
                                    <li>
                                        <span class="pull-left">Order Total</span>
                                        <p class="pull-right">$ 2940.00</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>