@extends('layouts.master')

@section('title')
	Laravel Shopping Cart
@endsection

@section('content')
	<div class="row">
			<div class="col-sm-6 col-md-4 offset-md-4 offset-sm-3">
				<h1>Checkout</h1>
				<h4>Your Total: ${{ $total }}</h4>	
				<form action="/pay" method="POST" id="checkout-form">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" id="name" class="form-control" required>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label for="address">Address</label>
								<input type="text" id="address" class="form-control" required>
							</div>
						</div>

						<hr>

						<div class="col-md-12">
							<div class="form-group">
								<label for="card-name">Card Hold Name</label>
								<input type="text" id="card-name" class="form-control" required>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label for="credit-number">Credit Card Number</label>
								<input type="text" id="credit-number" class="form-control" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="card-expiry-month">Expiration Month</label>
								<input type="text" id="card-expiry-month" class="form-control" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="card-expiry-year">Expiration Year</label>
								<input type="text" id="card-expiry-year" class="form-control" required>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label for="card-cvc">CVC</label>
								<input type="text" id="card-cvc" class="form-control" required>
							</div>
						</div>

						{{ csrf_field() }}
						<button type="submit" class="btn btn-success">Buy now</button>
				</form>

				<form action="/pay" method="POST">
  					<script
    				src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    				data-key="pk_test_TYooMQauvdEDq54NiTphI7jx"
    				data-amount="999"
    				data-name="Stripe.com"
    				data-description="Example charge"
    				data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    				data-locale="auto"
    				data-zip-code="true">
  					</script>
				</form>
			</div>
	</div>
@endsection