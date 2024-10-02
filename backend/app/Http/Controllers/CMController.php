<?php

namespace App\Http\Controllers;

use App\Models\CM;
use App\Models\User;
use Illuminate\Http\Request;

class CMController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields =$request->validate([
            'user_id'=>['required'],
            'dayStart'=>['required','date '],
            'dayFinish'=>['required','date '],
            'cm'=>['required','string'],
            'QC'=>['required','string'],
            'timeStart'=>['required','string'],
            'timeFinish'=>['required','string']
        ]);


        CM::create($formFields);

        return response()->noContent();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CM  $cM
     * @return \Illuminate\Http\Response
     */
    public function show(CM $cM)
    {
        $user = User::select('id','firstName','lastName','post')->get();
        $id = $cM->whereDate('created_at', date('Y-m-d'))
        ->get('id');
        $userToDay = $cM->whereDate('created_at', date('Y-m-d'))
        ->groupBy('user_id')
        ->havingRaw('COUNT(*) > 0')
        ->get('user_id');
        $data= [
           'message' => $cM->all(),
           'user' => $user,
           'id'=> $id,
           'userToDay' => $userToDay
        ];
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CM  $cM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CM $cM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CM  $cM
     * @return \Illuminate\Http\Response
     */
    public function destroy(CM $cM)
    {
        //
    }
}
