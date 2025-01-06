<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Resources\NotificationResource;

class NotificationController extends Controller
{
    public function store(Request $request)
    {
        $notification = Notification::create($request->all());
        return new NotificationResource($notification);
    }

    public function update($id, Request $request)
    {
        $notification = Notification::findOrFail($id);
        $notification->update($request->all());
        return new NotificationResource($notification);
    }

    public function destroy($id)
    {
        Notification::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

