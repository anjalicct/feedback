<?php

namespace Anjalicct\Feedback;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FeedbackController extends Controller
{
    public function index(){
        return view('feedback::feedbackform');
    }

    public function submit(Request $request){
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'message' => 'required',
        ]);
        
        $time = Carbon::now();
        
        $data = ['name' => $request->name, 'email' => $request->email, 'message' => $request->message, 'created_at' => $time->toDateTimeString(), 'updated_at' => $time->toDateTimeString()];
        DB::table('feedback')->insert($data);

        return view('feedback::feedbackform');
    }
}
