<?php

namespace App\Http\Controllers;

use App\Models\Cheklist;
use Illuminate\Http\Request;
use App\Models\Mission;
use App\Models\User;

class CheklistController extends Controller
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
        $user = $request->input('user');
        $checks = $request->input('allMissions');
        $userId = $user['id'];


        foreach ($checks as $check => $completed) {
            $type = (boolean) $completed;
            $status = $type ?'Done':'No completed' ;
            Cheklist::create([
                'user_id'=>$userId,
                'mission_id'=>$check,
                'Done/Ongoing'=>$status
              ]);
        }

        return response()->noContent();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cheklist  $cheklist
     * @return \Illuminate\Http\Response
     */
    public function show(Cheklist $cheklist)
    {
        $userId = $cheklist->whereDate('created_at', date('Y-m-d'))
        ->groupBy('user_id')
        ->havingRaw('COUNT(*) > 1')
        ->get('user_id');
        if($userId === NULL ){
            $userId= 0;
        }
        $infos = User::select('id','firstName','lastName','post')->whereIn('id',$userId)->get();
        $missions = Mission::select('mission','id','locality')->get();
        $locality = Mission::select('locality')->distinct()->get();

        $data = [
            'list'=>$cheklist->all(),
            'infos'=>$infos,
            'missions'=>$missions,
            'sender'=>$userId ,
            'LC'=>$locality
        ];
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cheklist  $cheklist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cheklist $cheklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cheklist  $cheklist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cheklist $cheklist)
    {
        //
    }
}
