<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Utility;
use Validator;
use Stripe;
 
class StripeController extends Controller
{
    public function paymentStripe($id)
    {
        $order = Order::where('id', $id)->get();
        return view('stripe', ['order'=> $order]);
    }
 
    public function postPaymentStripe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_no' => 'required',
            'ccExpiryMonth' => 'required',
            'ccExpiryYear' => 'required',
            'cvvNumber' => 'required',
            //'amount' => 'required',
        ]);
 
        $input = $request->except('_token');
 
        if ($validator->passes()) { 
            $stripe = Stripe::setApiKey(env('STRIPE_SECRET'));
             
            try {
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number' => $request->get('card_no'),
                        'exp_month' => $request->get('ccExpiryMonth'),
                        'exp_year' => $request->get('ccExpiryYear'),
                        'cvc' => $request->get('cvvNumber'),
                    ],
                ]);
 
                if (!isset($token['id'])) {
                    return redirect()->route('stripe.add.money');
                }
                 
                $charge = $stripe->charges()->create([
                    'card' => $token['id'],
                    'currency' => 'MYR',
                    'amount' => 20.49,
                    'description' => 'wallet',
                ]);
                 
                if($charge['status'] == 'succeeded') {
                    return redirect()->route('welcome');
                } else {
                    return redirect()->route('addmoney.paymentstripe')->with('error','Money not add in wallet!');
                }
            } catch (Exception $e) {
                return redirect()->route('addmoney.paymentstripe')->with('error',$e->getMessage());
            } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                return redirect()->route('addmoney.paymentstripe')->with('error',$e->getMessage());
            } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                return redirect()->route('addmoney.paymentstripe')->with('error',$e->getMessage());
            }
        }
    }
}