<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\RefWithdraw;
use Auth;
use App\Investment;


class RefWithdrawController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if user has no referal bonuse or has not invested
        //session use id
        $id = Auth::id();

        //get investment details
        $investment = Investment::where("user_id",$id)->first();

        //if user has not invested yet
        if(count($investment) < 1){
            //pass detail with view
            return redirect('/home')->with('message', 'You have no active investment plan yet');
        }

        if($investment->ref_bonuse <= 0 || $investment->ref_bonuse == NULL){
            //pass detail with view
            return redirect('/home')->with('message', 'You Do not have a referral bonus');
        }

        //user make first request to withdraw after 10days
        //get investment date
        $invest_date = auth()->user()->user_investment->created_at; //date of investment
        $withdraw_date = date('y-m-d', strtotime($invest_date." ". ' + 5 days')); //withdraq date
        $today = date('y-m-d'); //todays date

        //if today - investment date >= 10 withdraw
        if($today >= $withdraw_date) {
            $user = auth()->user()->user_investment;
            //save in database
            $withdraw = new RefWithdraw;
            $withdraw->user_id = $user->user_id;
            $withdraw->bundle_plan = $user->bundle_plan;
            $withdraw->email = $user->email;
            $withdraw->amount = $user->ref_bonuse;
            $withdraw->wallet_id = $user->wallet_id;
            $withdraw->wallet_email = $user->wallet_email;
            $withdraw->user_id = $user->id;
            $withdraw->save();
            return redirect('/home')->with('status', 'Ref Withdrawer Request Receive, payments are done on fridays');
        }else{

            return redirect('/home')->with('error', 'Ref Bonuse must mature for 5 days at least');
        }
    }
}
