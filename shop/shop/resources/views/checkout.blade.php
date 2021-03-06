@extends('layouts.master')
@section('title', 'Home Page')
@section('popup')
@parent
@endsection
@section('sidebar')
@parent
@endsection

@section('content')
<div class="coupon-area pt-100 pt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="coupon-accordion">
                    <!-- ACCORDION START -->
                    <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                    <div id="checkout-login" class="coupon-content">
                        <div class="coupon-info">
                            <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est
                                sit amet ipsum luctus.</p>
                            <form action="#">
                                <p class="form-row-first">
                                    <label>Username or email <span class="required">*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row-last">
                                    <label>Password <span class="required">*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row">
                                    <input type="submit" value="Login">
                                    <label>
                                        <input type="checkbox">
                                        Remember me
                                    </label>
                                </p>
                                <p class="lost-password">
                                    <a href="#">Lost your password?</a>
                                </p>
                            </form>
                        </div>
                    </div>
                    <!-- ACCORDION END -->
                    <!-- ACCORDION START -->
                    <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                    <div id="checkout_coupon" class="coupon-checkout-content">
                        <div class="coupon-info">
                            <form action="#">
                                <p class="checkout-coupon">
                                    <input type="text" class="code" placeholder="Coupon code">
                                    <input type="submit" value="Apply Coupon">
                                </p>
                            </form>
                        </div>
                    </div>
                    <!-- ACCORDION END -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- coupon-area end -->
<!-- checkout-area start -->
<form method="post">
    <div class="checkout-area pb-100 pt-15 pb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="checkbox-form mb-sm-40">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="country-select clearfix mb-30">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list mb-sm-30">
                                    <label>First Name <span class="required">*</span></label>
                                    <input type="text" name="ten" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list mb-30">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input type="text" name="ho" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" name="diachi" placeholder="Street address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list mtb-30">
                                    <input type="text" name="CTdiachi"
                                        placeholder="Apartment, suite, unit etc. (optional)">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list mb-30">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" name="thanhpho" placeholder="Town / City">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list mb-30">
                                    <label>State / County <span class="required">*</span></label>
                                    <input type="text" name="quocgia" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list mb-30">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input type="text" name="zip" placeholder="Postcode / Zip">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list mb-30">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input type="email" name="email" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list mb-30">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" name="sdt" placeholder="Number Phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list create-acc mb-30">
                                    <input id="cbox" type="checkbox">
                                    <label>Create an account?</label>
                                </div>
                                <div id="cbox_info" class="checkout-form-list create-accounts mb-25">
                                    <p class="mb-10">Create an account by entering the information below. If you are a
                                        returning customer please login at the top of the page.</p>
                                    <label>Account password <span class="required">*</span></label>
                                    <input type="password" placeholder="password">
                                </div>
                            </div>
                        </div>
                        <div class="different-address">
                            <div class="ship-different-title">
                                <h3>
                                    <label>Ship to a different address?</label>
                                    <input id="ship-box" type="checkbox">
                                </h3>
                            </div>
                            <div id="ship-box-info">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>First Name <span class="required">*</span></label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" placeholder="Street address">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" placeholder="Town / City">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>State / County <span class="required">*</span></label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input type="text" placeholder="Postcode / Zip">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input type="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" placeholder="Postcode / Zip">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-notes">
                                <div class="checkout-form-list">
                                    <label>Order Notes</label>
                                    <textarea id="checkout-mess" cols="30" rows="10"
                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            <span class="product-quantity"> </span>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount"></span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Cart Subtotal</th>
                                        <td><span class="amount">$1000</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td><span class=" total amount">$10000</span>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingone">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Direct Bank Transfer
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingone"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Make your payment directly into our bank account. Please use your Order
                                                ID as the payment reference. Your order won???t be shipped until the funds
                                                have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingtwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Cheque Payment
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingtwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Please send your cheque to Store Name, Store Street, Store Town, Store
                                                State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingthree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                PayPal
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingthree"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Pay via PayPal; you can pay with your credit card if you don???t have a
                                                PayPal account.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="inserthoadon"
                                style="background-color:red;width:120px;height:30px;color:white;margin:10px 0 0 0;float:right;border:none"
                                value="PAY">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection