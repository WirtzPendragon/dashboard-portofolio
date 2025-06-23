<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        try {
            $projects = Project::all();
            
            return response()->json([
                'success' => true,
                'message' => 'Data proyek berhasil diambil',
                'data' => $projects
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data proyek',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}