<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobs;

class PagesController extends Controller
{   
    // Redirects to the Home page
    public function index()
    {
        $title = 'Welcome to PBO Global';
        return view('home.index')->with('title',$title);
    }
    
    //Redirects to the Gallery Page
    public function gallery()
    {
        $title = 'Gallery';
        return view('home.gallery')->with('title',$title);
    }
    
    //Redirects to the Job Opportunities of IT and It Enabled Services
    public function itservices()
    {
        $dept_name = 'IT and IT-Enabled Services';
        $headers = jobs::all()->where('dept_name', $dept_name)->where('isHiring', '1')->sortBy('rank');
        
        return view('opportunities.jobs')
            ->with('headers', $headers)
            ->with('dept_name', $dept_name);
    }
    
    //Redirects to the Job Opportunities of Finance and Accounting
    public function financeaccounting()
    {
        $dept_name = 'Finance and Accounting';
        $headers = jobs::all()->where('dept_name', $dept_name)->where('isHiring', '1')->sortBy('rank');
        
        return view('opportunities.jobs')
            ->with('headers', $headers)
            ->with('dept_name', $dept_name);
    }
    
    //Redirects to the Job Opportunities of Legal Support Service
    ppublic function legalsupport()
    {
        $dept_name = 'Legal Support Service';
        $headers = jobs::all()->where('dept_name', $dept_name)->where('isHiring', '1')->sortBy('rank');
        
        return view('opportunities.jobs')
            ->with('headers', $headers)
            ->with('dept_name', $dept_name);
    }
    
    //Redirects to the Job Opportunities of Sales and Marketing Admin
    public function salesmarketing()
    {
        $dept_name = 'Sales and Marketing';
        $headers = jobs::all()->where('dept_name', $dept_name)->where('isHiring', '1')->sortBy('rank');
        
        return view('opportunities.jobs')
            ->with('headers', $headers)
            ->with('dept_name', $dept_name);
    }
}
