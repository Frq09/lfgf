<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;

class ReportController extends Controller
{
    public function str_report(Request $request, Report $report)
    {
        $input = $request['reports'];
        $userId = Auth::id();
        $report->user_id = $userId;
        $report->fill($input)->save();
        return redirect('/show');
    }
}
