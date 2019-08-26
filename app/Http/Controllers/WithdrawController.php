<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Withdraw;
use App\Investment;
use Auth;
use App\User;

class WithdrawController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //session use id
        $id = Auth::id();
        //get investment details
        $investment = Investment::where("user_id",$id)->first();

        //if user has not invested yet
        if(count($investment) < 1){
            //pass detail with view
            return redirect('/home')->with('message', 'You have no active investment plan yet');
        }

        //get investment date
        $invest_date = auth()->user()->user_investment->created_at; //date of investment

        $today = date('y-m-d'); //todays date
        $withdraw_date = date('y-m-d', strtotime($invest_date." ". ' + 30 days')); //withdraq date
        
        // for bronze
        if($investment->bundle_plan == "Bronze"){
            if($today >= $withdraw_date){ //if today - investment date >= 10 withdraw 

                //check if user has requested already
                $details = Withdraw::where("user_id",$id)->first();
                
                if(count($details)>= 1){
                    return redirect('/home')->with('message', 'You have a pending request being processed. Contact support for more details');
                }else{
                    //check if user has requested already
                    $user = auth()->user()->user_investment;
                    //save in database
                    $withdraw = new Withdraw;
                    $withdraw->user_id = $user->user_id;
                    $withdraw->bundle_plan = $user->bundle_plan;
                    $withdraw->email = $user->email;
                    $withdraw->amount = $user->amount;
                    $withdraw->wallet_id = $user->wallet_id;
                    $withdraw->wallet_email = $user->wallet_email;
                    $withdraw->due_earnings = $user->due_earnings;
                    $withdraw->user_id = $id;
                    $withdraw->save();
                    return redirect('/home')->with('message', 'Withdrawer Request Receive, payments will be done soon');
                }
            }else{
                return redirect('/home')->with('message', 'investment must mature for 30days');
            }
        }


        $withdraw_date2 = date('y-m-d', strtotime($invest_date." ". ' + 25 days')); //withdraq date
        // for silver
        if($investment->bundle_plan == "Silver"){
            if($today >= $withdraw_date2){ //if today - investment date >= 10 withdraw 

                //check if user has requested already
                $details = Withdraw::where("user_id",$id)->first();
                
                if(count($details)>= 1){
                    return redirect('/home')->with('message', 'You have a pending request being processed. Contact support for more details');
                }else{
                    //check if user has requested already
                    $user = auth()->user()->user_investment;
                    //save in database
                    $withdraw = new Withdraw;
                    $withdraw->user_id = $user->user_id;
                    $withdraw->bundle_plan = $user->bundle_plan;
                    $withdraw->email = $user->email;
                    $withdraw->amount = $user->amount;
                    $withdraw->wallet_id = $user->wallet_id;
                    $withdraw->wallet_email = $user->wallet_email;
                    $withdraw->due_earnings = $user->due_earnings;
                    $withdraw->user_id = $id;
                    $withdraw->save();
                    return redirect('/home')->with('message', 'Withdrawer Request Receive, payments will be done soon');
                }
            }else{
                return redirect('/home')->with('message', 'investment must mature for 25days');
            }
        }


        $withdraw_date3 = date('y-m-d', strtotime($invest_date." ". ' + 20 days')); //withdraq date
        // for Gold
        if($investment->bundle_plan == "Gold"){
            if($today >= $withdraw_date3){ //if today - investment date >= 10 withdraw 

                //check if user has requested already
                $details = Withdraw::where("user_id",$id)->first();
                
                if(count($details)>= 1){
                    return redirect('/home')->with('message', 'You have a pending request being processed. Contact support for more details');
                }else{
                    //check if user has requested already
                    $user = auth()->user()->user_investment;
                    //save in database
                    $withdraw = new Withdraw;
                    $withdraw->user_id = $user->user_id;
                    $withdraw->bundle_plan = $user->bundle_plan;
                    $withdraw->email = $user->email;
                    $withdraw->amount = $user->amount;
                    $withdraw->wallet_id = $user->wallet_id;
                    $withdraw->wallet_email = $user->wallet_email;
                    $withdraw->due_earnings = $user->due_earnings;
                    $withdraw->user_id = $id;
                    $withdraw->save();
                    return redirect('/home')->with('message', 'Withdrawer Request Receive, payments will be done soon');
                }
            }else{
                return redirect('/home')->with('message', 'investment must mature for 30days');
            }
        }


        $withdraw_date4 = date('y-m-d', strtotime($invest_date." ". ' + 15 days')); //withdraq date
        // for bronze
        if($investment->bundle_plan == "Diamond"){
            if($today >= $withdraw_date4){ //if today - investment date >= 10 withdraw 

                //check if user has requested already
                $details = Withdraw::where("user_id",$id)->first();
                
                if(count($details)>= 1){
                    return redirect('/home')->with('message', 'You have a pending request being processed. Contact support for more details');
                }else{
                    //check if user has requested already
                    $user = auth()->user()->user_investment;
                    //save in database
                    $withdraw = new Withdraw;
                    $withdraw->user_id = $user->user_id;
                    $withdraw->bundle_plan = $user->bundle_plan;
                    $withdraw->email = $user->email;
                    $withdraw->amount = $user->amount;
                    $withdraw->wallet_id = $user->wallet_id;
                    $withdraw->wallet_email = $user->wallet_email;
                    $withdraw->due_earnings = $user->due_earnings;
                    $withdraw->user_id = $id;
                    $withdraw->save();
                    return redirect('/home')->with('message', 'Withdrawer Request Receive, payments will be done soon');
                }
            }else{
                return redirect('/home')->with('message', 'investment must mature for 30days');
            }
        }
        
    }

    // withdraw method
    public function packages($mature_days){
        //get investment date
        $invest_date = auth()->user()->user_investment->created_at; //date of investment
        $today = date('y-m-d'); //todays date
        $withdraw_date = date('y-m-d', strtotime($invest_date." ". ' + $mature_days'." days")); //withdrawal date

        if($today >= $withdraw_date){ //if today - investment date >= maturity date
            //check if user has requested already
            $details = Withdraw::where("user_id",$id)->first();
            if(count($details)>= 1){
                return redirect('/home')->with('message', 'You have a pending request being processed. Contact support for more details');
            }else{
                //save in database
                $withdraw = new Withdraw;
                $withdraw->user_id = $user->user_id;
                $withdraw->bundle_plan = $user->bundle_plan;
                $withdraw->email = $user->email;
                $withdraw->amount = $user->amount;
                $withdraw->wallet_id = $user->wallet_id;
                $withdraw->wallet_email = $user->wallet_email;
                $withdraw->user_id = $user->id;
                $withdraw->save();
                return redirect('/home')->with('message', 'Withdrawer Request Receive, payments are done on fridays');
            }
        }
        if($today <= $withdraw_date){
            return redirect('/home')->with('message', 'investment must mature for '.$mature_days.' days at least');
        }
    }

    
}
