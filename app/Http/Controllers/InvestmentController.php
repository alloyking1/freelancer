<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investment;
use App\User;
use Auth;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/invest_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate request value from form input
        $this->validate(request(), [
            'bundle_plan' => 'required',
            'amount' => 'required',
            'wallet_id' => 'required',
            'wallet_email' => 'required',
        ]);
        
        $plan = $request['bundle_plan'];
        $amount = $request['amount'];
        $user = Auth::user();

        //check bundle plan for Bronze
        if($plan === "Bronze"){

            //check minimum amount
            if($amount >= 200 and $amount <= 999){
                $investment = new Investment;
                $investment->bundle_plan = $plan;
                $investment->email = $user->email;
                $investment->amount = $amount;
                $investment->wallet_id = $request['wallet_id'];
                $investment->wallet_email = $request['wallet_email'];
                $investment->user_id = $user->id;
                $investment->save();
                return redirect('/home/investment/img/'.$user->id)->with('message', 'do continue');  //add report message
            } else{
                //return view with message
                return view('dashboard/invest_form')->with('request', $request);
            }
        }

        //for silver
        if($plan === "Silver"){
            if($amount >= 1000 and $amount <= 9900){
                $investment = new Investment;
                $investment->bundle_plan = $plan;
                $investment->email = $user->email;
                $investment->amount = $amount;
                $investment->wallet_id = $request['wallet_id'];
                $investment->wallet_email = $request['wallet_email'];
                $investment->user_id = $user->id;
                $investment->save();
                return redirect('/home/investment/img/'.$user->id);
            } else{
                //return view with message
                return("your investment is below the minimum amount");
            }
        }

        //for gold
        if($plan === "Gold"){
            if($amount >= 10000 and $amount <= 49000){
                $investment = new Investment;
                $investment->bundle_plan = $plan;
                $investment->email = $user->email;
                $investment->amount = $amount;
                $investment->wallet_id = $request['wallet_id'];
                $investment->wallet_email = $request['wallet_email'];
                $investment->user_id = $user->id;
                $investment->save();
                return redirect('/home/investment/img/'.$user->id);
            } else{
                return("your investment is below the minimum amount");
            }
        }

        //for diamond
        if($plan === "Diamond"){
            if($amount >= 50000 and $amount <= 100000){
                $investment = new Investment;
                $investment->bundle_plan = $plan;
                $investment->email = $user->email;
                $investment->amount = $amount;
                $investment->wallet_id = $request['wallet_id'];
                $investment->wallet_email = $request['wallet_email'];
                $investment->user_id = $user->id;
                $investment->save();
                return redirect('/home/investment/img/'.$user->id);
            } else{
                return("your investment is below the minimum amount");
            }
        }
          
    }


}
