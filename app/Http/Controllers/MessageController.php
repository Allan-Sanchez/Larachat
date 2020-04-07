<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    //
    public function index()
    {
        $userId = auth()->id();

        return Message::select('id',DB::raw("IF(`from_id`=$userId, 1 , 0) as written_by_me"),'created_at','content')->get();
    }
    public function store(Request $request)
    {
        # code...
        $message = new Message();
        $message->from_id = auth()->id();
        $message->to_id = $request->to_id;
        $message->content = $request->content;
        $saved = $message->save();

        $data= [];
        $data['success'] = $saved;
        return $data;
    }
}

