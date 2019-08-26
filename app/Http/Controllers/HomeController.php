<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investment;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show user dashboard with investment details.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //session use id
        $id = Auth::id();

        //get investment details
        $investment = Investment::where("user_id",$id)->first();

        //if user has not invested yet
        if(count($investment) < 1){

            //pass detail with view
            return view('home', compact('investment'))->with('message', 'You have no active investment plan yet');
        }

        //if investment not yet approved
        if($investment->investment_status === 0){
            //pass detail with view
            return view('home', compact('investment'))->with('status', 'payment pending approval');
        }

        //if payment approved
        if($investment->investment_status === 1){

            //if this is first investment
            if(is_null($investment->due_earnings)){
                //update weekly withdraw
                $amount = $investment->amount;
                
                // for bronze
                if($investment->bundle_plan == "Bronze"){
                    $percent = 30;
                    $constant = 100; //constant for calc %
                    $percent_return = $percent/$constant * $amount; // get 10% of the invested amount
                    $expected_withrawer = $percent_return; //10% of invt

                    //update table
                    $investment->due_earnings = $expected_withrawer;
                    $investment->save();

                    //pass detail with view
                    return view('home', compact('investment'));
                }

                // for silver
                if($investment->bundle_plan == "Silver"){
                    $percent = 40;
                    $constant = 100; //constant for calc %
                    $percent_return = $percent/$constant * $amount; // get 10% of the invested amount
                    $expected_withrawer = $percent_return; //10% of invt

                    //update table
                    $investment->due_earnings = $expected_withrawer;
                    $investment->save();

                    //pass detail with view
                    return view('home', compact('investment'));
                }

                if($investment->bundle_plan == "Gold"){
                    $percent = 60;
                    $constant = 100; //constant for calc %
                    $percent_return = $percent/$constant * $amount; // get 10% of the invested amount
                    $expected_withrawer = $percent_return; //10% of invt

                    //update table
                    $investment->due_earnings = $expected_withrawer;
                    $investment->save();

                    //pass detail with view
                    return view('home', compact('investment'));
                }

                if($investment->bundle_plan == "Diamond"){
                    $percent = 80;
                    $constant = 100; //constant for calc %
                    $percent_return = $percent/$constant * $amount; // get 10% of the invested amount
                    $expected_withrawer = $percent_return; //10% of invt

                    //update table
                    $investment->due_earnings = $expected_withrawer;
                    $investment->save();

                    //pass detail with view
                    return view('home', compact('investment'));
                }
                
            }
            else{

                //get investment date
                $invest_date = $investment->created_at;
                //get due date
                $exp_withdraw_date = $investment->updated_at;
                //add 10 days to withdraw date
                $add_ten_date = date('y-m-d', strtotime($invest_date." ". ' + 10 days')); 
                //if due date is 10 times > than investment date

                if($exp_withdraw_date === $add_ten_date){
                    $nw_exp_withdraw = $investment->due_earnings + $investment->due_earnings;
                    
                    //update table
                    $investment->due_earnings = $nw_exp_withdraw;
                    $investment->save();
                    return view('home', compact('investment'));
                }else{
                    return view('home', compact('investment'));
                }
            }
                
        }else{
            //pass detail with view
            return view('home');
        }
    }
}
