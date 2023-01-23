<x-app-layout>
    <div class = "flex space-x-10">
    <div class='col-md-4 ml-40 mt-10 w-1/4'>
            <div class="card">
                <div class="card-header">
                    <b>Bank Account Details</b>
                </div>
                <div class="card-body">
                    @if (Session::has('error'))
                        <font color="red">{{ Session::get('error') }}</font>
                    @endif
                    <form class="form-horizontal w-600" method="get" id="payment-form" role="form" action="{{ route('welcome') }}" >
                    @csrf
                        
                        <div class="mb-3">
                            <label class='control-label'><b>Account Number</b></label>
                            <input autocomplete='off' class q='form-control phone' size='20' type='text' name="phone">
                        </div>
                        <div class="mb-3">
                            <label class='control-label'><b>Name On Account</b></label>
                            <input autocomplete='off' class='form-control phone' size='20' type='text' name="name">
                        </div>
                        <div class="mb-3">
                            <label class='control-label'><b>Bank</b></label> <br>
                            <select class="form-control" name="bank" id="bank">
                                <option value="null">select...</option>
                                <option value="maybank">Maybank</option>
                                <option value="cimb">CIMB Bank</option>
                                <option value="public">Public Bank Berhad</option>
                                <option value="honh">Hong Leong Bank</option>
                                <option value="ambank">AmBank</option>
                                <option value="uob">UOB Malaysia</option>
                                <option value="brak">Bank Rakyat</option>
                                <option value="ocbc">OCBC Bank Malaysia</option>
                                <option value="hsbc">HSBC Bank Malaysia</option>
                                <option value="islam">Bank Islam Malaysia</option>
                                <option value="affin">Affin Bank</option>
                                <option value="alliance">Alliance Bank Malaysia Berhad</option>
                                <option value="stdch">Standard Chartered Bank Malaysia</option>
                                <option value="mbsb">MBSB Bank Berhad</option>
                                <option value="citi">Citibank Malaysia</option>
                                <option value="bsn">Bank Simpanan Nasional</option>
                                <option value="agro">Agrobank</option>

                              </select>                        
                            </div>
                    <br>
                            <div class="mb-3">
                                <label class='control-label'><b>Damage Description</b></label>
                                <textarea class="form-control" id="damagedesc" rows="3"></textarea>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label class='control-label'><b>Photo of damaged utility</b></label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                    <br>

                        <div class="mb-3 mt-3">
                            <button class='form-control btn btn-success submit-button' type='submit'>Proceed</button>
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
                <div class="card-body">
                    <p class="text-3xl font-bold text-center">Utility Name</p>
                    <img src="https://cf.shopee.com.my/file/cdfc5d745058d9d8026c64ac0f8ff24d">
                </div>
            </div>
        </div>
        
    </div>
    </x-app-layout>