<?php

namespace App\Http\Controllers;

use App\Jobs\SendReminderEmail;
use Illuminate\Http\Request;

class SendReminderEmailController extends Controller
{
    //
    public function index(Request $request)
    {
        //for ($i=0;$i<=100;$i++)
        //{
        //    dispatch(new SendReminderEmail("email".$i));
        //}

        for ($i=101;$i<120;$i++)
        {
            dispatch(new SendReminderEmail("email".$i));
        }
    }
}
