<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Routing\Controller as BaseController;

class ChartController extends BaseController
{
    public function showStatics()
    {
        $stud_sub = DB::table('report')
            ->select('CampusName', DB::raw('COUNT(*) as total'))
            ->groupBy('CampusName')
            ->get();

        $data = [];
        foreach ($stud_sub as $stud) {
            $data[] = [
                'label' => $stud->CampusName,
                'y' => $stud->total
            ];
        }

        return view('Admin.staticss', ['data' => $data]);
    }
    public function showStaticsLeader()
    {
        $stud_sub = DB::table('report')
            ->select('Department', DB::raw('COUNT(*) as total'))
            ->groupBy('Department')
            ->get();

        $data = [];
        foreach ($stud_sub as $stud) {
            $data[] = [
                'label' => $stud->Department,
                'y' => $stud->total
            ];
        }

        return view('TeamLeader.statics', ['data' => $data]);
    }
}
