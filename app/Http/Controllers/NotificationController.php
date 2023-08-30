<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Events\MessageNotification;
use Validator;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo 'dddddddd';
    }

    public function create(){
        return view('notification.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = array(
            'message' => 'required|max:255'
        );
        $messages = array(
            'message.required' => 'The :attribute field is required!'
        );
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json(array('status' => 0, 'message' => $validator->errors()->first()));
        }

        $Notification = new Notification;
        $Notification->message = $request->message;

        if ($Notification->save()) {
            // return response()->json(array('status' => 1,
            //     'data' => $Notification,
            //     'message' => 'Saved successfully!'));
                $this->sendNotification($Notification->message);
        } else {
            return response()->json(array('status' => 0, 'message' => 'Save failed!'));
        }
    }

    public function sendNotification($message){
        event(new MessageNotification($message));
    }

    /**
     * Display the specified resource.
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notification $notification)
    {
        //
    }

    public function testing(){

    }
}
