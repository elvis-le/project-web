<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LockController extends Controller
{
    public function lock(Request $request)
    {
        User::where('id', $request->id)->update(['isLock' => 1]);

        return redirect('/admin/customer');
    }

    public function unlock(Request $request)
    {
        User::where('id', $request->id)->update(['isLock' => 0]);

        return redirect('/admin/customer');
    }
}
