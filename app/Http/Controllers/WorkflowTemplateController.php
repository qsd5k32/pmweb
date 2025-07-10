<?php

namespace App\Http\Controllers;

use App\Models\WorkflowTemplate;
use Illuminate\Http\Request;

class WorkflowTemplateController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Workflow Templates',
            'data' => WorkflowTemplate::all()
        ]);
    }
    public function list()
    {
        $list = WorkflowTemplate::select('id', 'Code', 'TemplateName', 'TemplateNote')->get();
        return response()->json([
            'message' => 'Workflow Templates',
            'data' => $list
        ]);
    }
}
