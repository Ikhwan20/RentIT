<x-app-layout>
<div class = "flex space-x-10">
<div class='col-md-4 ml-40 mt-10 w-1/4'>
        <div class="card">
            <div class="card-header">
                Checkout Page
            </div>
            <div class="card-body">
                @if (Session::has('error'))
                    <font color="red">{{ Session::get('error') }}</font>
                @endif
                <form class="form-horizontal w-600" method="post" id="payment-form" role="form" action="{{ route('addmoney.stripe') }}" >
                @csrf
                    <div class="mb-3">
                        <label class='control-label'>Billing Address</label>
                        <input autocomplete='off' class='form-control address' size='30' type='text' name="address">
                    </div>
                    <div class="mb-3">
                        <label class='control-label'>Phone No.</label>
                        <input autocomplete='off' class='form-control phone' size='20' type='text' name="phone">
                    </div>
                    <div class="mb-3">
                        <label class='control-label'>Name On Card</label>
                        <input autocomplete='off' class='form-control phone' size='20' type='text' name="name">
                    </div>
                    <div class="mb-3">
                        <label class='control-label'>Card Number</label>
                        <input autocomplete='off' class='form-control card-number' size='20' type='text' name="card_no">
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label class='control-label'>CVV</label>
                            <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' name="cvvNumber">
                        </div>
                        <div class="col-auto">
                            <label class='control-label'>Expiration</label>
                            <input class='form-control card-expiry-month' placeholder='MM' size='4' type='text' name="ccExpiryMonth">
                        </div>
                        <div class="col-auto">
                            <label class='control-label'>Year</label>
                            <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text' name="ccExpiryYear">
                            <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='hidden' name="amount" value="300">
                        </div>
                    </div>

                    <div class="mb-3 mt-3">
                        <button class='form-control btn btn-success submit-button' type='submit'>Pay »</button>
                    </div>
                        
                    <div class="mb-3">
                        <div class='alert-danger alert' style="display:none;">
                                Please correct the errors and try again.
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class='col-md-4 ml-10 mt-10 w-1/4 '>
        <div class="card items-center">
            <div class="card-header">
                Utility Details
            </div>
            @foreach($utility as $util)
            <div class="card-body">
                <p class="text-3xl font-bold pl-10">{{ $util->name }}</p>
                <img src="{{ asset($util->photo) }}"></br>
                <p class="text-xl pl-10">Duration : ? hours</p>
                <span class="text-xl pl-10" itemprop="price">Total: RM ?</span>
            </div>
            @endforeach
        </div>
    </div>
</div>
</x-app-layout>