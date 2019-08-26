<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investment;
use App\User;

class PaymentImgController extends Controller
{
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/payment_img_upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //validate img
        $this->validate(request(), [
            'payment_proof' => 'image|max:1999',
        ]);

        //get imge name with ext
        $filenameWithExt = $request->file('payment_proof')->getClientOriginalName();
        //jxt file name 
        $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //jxt ext
        $fileExtention = $request->file('payment_proof')->getClientOriginalExtension();
        //add unique to img
        $fileNameToStore = $fileName.'_'.time().'.'.$fileExtention;
        //store img
        $path = $request->file('payment_proof')->storeAs('public/payment_img', $fileNameToStore);
        
        //find user by user id in invest table
        $investment = Investment::where("user_id",$id)->first();
        $investment->payment_img = $fileNameToStore;
        $investment->save();

        if(auth()->user()->investments->count() == 1) {

            //get expected withdraw amount
        
            //update weekly withdraw
            $amount = $investment->amount;
            $percent = 10;
            $constant = 100; //constant for calc %
            $percent_return = ($percent/$constant) * $amount; // get 10% of the invested amount
            $expected_withrawer = $percent_return; //10% of invt


            //update ref bonuse
            //get ref email from user table
            $ref_email = auth()->user()->ref;

            //if user was not referred
            if($ref_email == 'none' || is_null($ref_email) ){
                //pass detail with view
                return redirect('/home');
            }else{
                //locate ref with email in investment table
                $ref_locate = Investment::where("email",$ref_email)->first();
                //get ref amount column
                $ref_amount = $ref_locate->ref_bonuse;

                //if ref bonuse is empty
                if(is_null($ref_amount)){

                    //get ref bonuse amount 10%

                    //insert into reff amount
                    $ref_locate->ref_bonuse = $expected_withrawer;
                    $ref_locate->save();
                    return redirect('/home');
                }else{
                    //get ref bonuse amount
                    $ref_sum = $ref_locate->ref_bonuse + $expected_withrawer;
                    //insert into reff amount
                    $ref_locate->ref_bonuse = $ref_sum;
                    $ref_locate->save();
                    return redirect('/home');
                }
            }
        }else{
            return redirect('/home');
        }
        
        //return redirect('/home','investment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

}
