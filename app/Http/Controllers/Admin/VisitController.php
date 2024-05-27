<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;
use DateTime;
use DateTimeZone;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
      
      $data = ([
        'student_id' => "required|string",
        'date_attendance' => 'required|string',
      ]); 
      
      $url_segment = $request->segment(2);
      $data['student_id'] = User::where('link', $url_segment)->first()['id'];

      $time = new DateTime("");
      $time->setTimezone(new DateTimeZone("Europe/Moscow"));
      $time = $time->format("Y-m-d H:i:s");
      $data['date_attendance'] = $time;

      Attendance::CreateOrFirst($data);


      return redirect()->route('show.visit');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show()
    {
      $attendance = Attendance::all();
      $attendance = $attendance->reverse();
      $user = User::where('role_id', '2')->get();
      $user = $user->reverse();
      
      return view('admin.visits.show', compact('attendance', 'user'));
    }
   
}