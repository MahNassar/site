@extends('layout.master')

@section('content')
    @include('layout.header')
    <br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="col-md-12 text-center title">
            <h2>Order Now</h2>
            <div class="underline"><i class="fa fa-circle-thin"></i></div>
        </div>
        {!! Form::open(['url' => '/request_order', 'method' => 'post']) !!}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="username">Username <span style="color:#D0AD55;font-weight: bold;">*</span></label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter Your Name" maxlength="100" required>
                        <span style="color:#D0AD55;"  class="name_required">Name Field Is Required</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Your Phone Number" maxlength="15">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="landline">Land Line</label>
                        <input type="text" class="form-control" name="landline" id="landline" maxlength="15" placeholder="Enter Your Land Line">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email <span style="color:#D0AD55;font-weight: bold;">*</span></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" maxlength="90" required>
                        <span style="color:#D0AD55;"  class="email_required">Email field is REQUIRED and must be EMAIL format</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="product">Product Name <span style="color:#D0AD55;font-weight: bold;">*</span></label>
                        <input type="text" class="form-control" name="product" id="product" placeholder="Enter Product Name" maxlength="50" required>
                        <span style="color:#D0AD55;" class="product_required">Product Name Field Is Required</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="quantity">Quantity <span style="color:#D0AD55;font-weight: bold;">*</span></label>
                        <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Enter Order Quantity" required>
                        <span style="color:#D0AD55;"  class="quantity_required">Quantity Field Is Required</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="size">Product Size <span style="color:#D0AD55;font-weight: bold;">*</span></label>
                        <input type="text" class="form-control" name="size" id="size" placeholder="Enter Product Size" required>
                        <span style="color:#D0AD55;" class="size_required">Size Field Is Required</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="size">Notes</label>
                        <textarea type="text" class="form-control" name="notes" id="notes" placeholder="Enter Your Notes"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-default" onclick="check()">Order</button>
        {!! Form::close() !!}
    </div>
@endsection

<style>
    #header{
        background-color: #000000;
    }
    label{
        color: #6F6E6E!important;
    }
    button:hover{
        background-color: #FFF!important;
        border: 1px #D0AD55 solid !important;
    }
    .has-error{
        border: 1px red solid;
    }
</style>

<script>
    $('.name_required').hide();
    $('.email_required').hide();
    $('.product_required').hide();
    $('.quantity_required').hide();
    $('.size_required').hide();
    function check() {
        var name = $("#username").val();
        var order_email = $("#email").val();
        var order_product = $("#product").val();
        var Order_quantity = $("#quantity").val();
        var Order_size = $("#size").val();

        if (name == "" || name == null) {
            return false;
        }else if (order_email == "" || order_email == null) {
            return false;
        }else if (order_product == "" || order_product == null) {
            return false;
        }else if (Order_quantity == "" || Order_quantity == null) {
            return false;
        }else if (Order_size == "" || Order_size == null) {
            return false;
        }else {

        }
    }
</script>