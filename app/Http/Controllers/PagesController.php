<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobs;

class PagesController extends Controller
{
    // $data = array
    // (
    //     'titleindex' => 'Welcome to PBO Global',
    // );

    public function index()
    {
        $title = 'Welcome to PBO Global';
        return view('home.index')->with('title',$title);
    }
    
    public function Admin()
    {
        $title = 'Welcome Admin';
        $jobs_finance = jobs::all()->where('dept_name', 'Finance and Accounting');
        $jobs_it = jobs::all()->where('dept_name', 'IT and IT Enabled Services');
        $jobs_law = jobs::all()->where('dept_name', 'Legal Support Service');
        $jobs_market = jobs::all()->where('dept_name', 'Sales and Marketing Admin');

        return view('AdminOnly.adminpage')
            ->with('title',$title)
            ->with('jobs_finance', $jobs_finance)
            ->with('jobs_it', $jobs_it)
            ->with('jobs_law', $jobs_law)
            ->with('jobs_market', $jobs_market);
    }
    public function login()
    {
        $title = 'Welcome to PBO Global';
        return view('AdminOnly.loginpage')->with('title',$title);
    }
    public function gallery()
    {
        $title = 'Gallery';
        return view('home.gallery')->with('title',$title);
    }
    public function itservices()
    {
        $dept_name = 'IT and IT-Enabled Services';
        $headers = jobs::all()->where('dept_name', $dept_name)->where('isHiring', '1');
        //return $headers;
        
        return view('home.jobs')
            ->with('headers', $headers->sortBy('rank'))
            ->with('dept_name', $dept_name);
    }
    public function financeaccounting()
    {
        $dept_name = 'Finance and Accounting';
        $headers = jobs::all()->where('dept_name', $dept_name)->where('isHiring', '1');
        //return $headers;
        
        return view('home.jobs')
            ->with('headers', $headers->sortBy('rank'))
            ->with('dept_name', $dept_name);
    }
    public function legalsupport()
    {
        $dept_name = 'Legal Support Service';
        $headers = jobs::all()->where('dept_name', $dept_name)->where('isHiring', '1');
        //return $headers;
        
        return view('home.jobs')
            ->with('headers', $headers->sortBy('rank'))
            ->with('dept_name', $dept_name);
    }
    public function salesmarketing()
    {
        $dept_name = 'Sales and Marketing';
        $headers = jobs::all()->where('dept_name', $dept_name)->where('isHiring', '1');
        //return $headers;
        
        return view('home.jobs')
            ->with('headers', $headers->sortBy('rank'))
            ->with('dept_name', $dept_name);
    }
}
