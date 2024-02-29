<?php

namespace App\Http\Controllers;

use App\Libraries\CmsApiLib;
use Illuminate\View\View;

class ServiceController extends Controller
{
    private $cmsApiLib;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cmsApiLib = new CmsApiLib();
    }

    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $USWebsite = $this->cmsApiLib->findWebsite();
        $projectTypes = $USWebsite['data']['project_types'] ?? [];

        return view('pages.services', compact('projectTypes'));
    }
}
