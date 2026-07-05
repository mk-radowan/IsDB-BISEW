<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        return view('toastr');
    }

    public function notification($type)
    {
        $messages = [
            'success' => 'User created successfully.',
            'info' => 'User updated successfully.',
            'warning' => 'User can not access page.',
            'error' => 'This is testing error.',
        ];

        if (! array_key_exists($type, $messages)) {
            return redirect()->route('notifications.index')->with('error', 'Invalid notification type.');
        }

        return redirect()->route('notifications.index')->with($type, $messages[$type]);
    }

}
