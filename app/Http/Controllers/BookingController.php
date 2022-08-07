<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\day;
use App\Models\Venue;
use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;

class BookingController extends Controller
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
    //booking api
    public function booking(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'venueid' => 'required',
            'userid'  => 'required',
            'slotid'  => 'required',
            'dayid'   =>  'required',
            'date'    => 'required'
            
            

        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()->first()], 200);
        } else {
            $venueid = $request->venueid;
            $userid = $request->userid;
            $slotid = $request->slotid;
            $day_id  = $request->dayid;
            $date =  $request->date; 
            $day = Carbon::createFromFormat('d-m-Y', $date)->format('l'); 
            $dayId = day::select('id')->where('day', $day)->first();
            $dayId = $dayId->id;
            $data = Booking::where('userid','=',$userid)->select('userid')->get(); 
            $datebooking = Booking::where('date','=', $date)->select('userid')->get(); 
            $count =count($datebooking); 
            $currentmonth = Carbon::now()->month; 
            $e = explode('0', $date); 
            $d = explode('-', $e[2]);
            $t = $d[0];  
            
            
            if($currentmonth != $t){
                return response()->json(['message' => 'Limit bookings to one month maximum please use June 2022 as only month that can be booked ']);
            }
            
            if($count =='0'){ 
            $booking = Booking::create([
                'userid'=>$userid,
                'venueid'=>$venueid,
                'timeslotid'=>$slotid,
                'dayid' =>$day_id,
                'date'  =>$date,
                'status' =>'yes'
                ]);
                $bookingdata =  Booking::join('users','users.id','=','bookings.userid')
                                    ->join('venues','venues.id','=','bookings.venueid')
                                    ->join('timeslots','timeslots.id','=','bookings.timeslotid')
                                    ->where('bookings.userid','=',$userid)
                                    ->where('bookings.date','=',$date)
                                    ->select('users.name','venues.name as venuename','venues.venuetype','bookings.date','timeslots.time')->get();
                return response()->json(['message' => 'Your Booking Successfully Completed','data'=>$bookingdata]);
            }else{

                return response()->json(['message' => 'one slot can be booked by one user per day']);

            }
       }
    }
    //
    //rank get api
    public function venuescategoriserank(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'catogeryid' => 'required',
            'userid'     => 'required'
            
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()->first()], 200);
        } else {

            $catogeryid = $request->catogeryid;
            $userid = $request->userid;
            $data = Booking::where('userid','=',$userid)->count(); 
            if($data >= '15')
            {
                return response()->json(['status' => true, 'message' =>'your rank is GOLD']);
            }elseif($data == '10'){
                return response()->json(['status' => true, 'message' =>'your rank is Silver']);
            }elseif($data == '5'){
                return response()->json(['status' => true, 'message' =>'your rank is Bronze']);
            }else{
                return response()->json(['status' => true, 'message' =>'your rank is uncategorised']);
            }

        }
    }
//

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        //
    }
}
