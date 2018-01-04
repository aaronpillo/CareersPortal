<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobs;
use Illuminate\Support\Facades\Auth;
use DB;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //Redirects to the Admin Page
    public function index()
    {
        if (Auth::check())
        {
             $jobs_finance = jobs::all()->where('dept_name', 'Finance and Accounting')->sortBy('rank');
            $jobs_it = jobs::all()->where('dept_name', 'IT and IT-Enabled Services')->sortBy('rank');
            $jobs_law = jobs::all()->where('dept_name', 'Legal Support Service')->sortBy('rank');
            $jobs_market = jobs::all()->where('dept_name', 'Sales and Marketing')->sortBy('rank');
        
            return view('AdminOnly.adminpage')
                ->with('jobs_finance', $jobs_finance)
                ->with('jobs_it', $jobs_it)
                ->with('jobs_law', $jobs_law)
                ->with('jobs_market', $jobs_market);
        }
        else
            return redirect('/admin/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Redirects to the Add Page
    public function create()
    {
        if (Auth::check())
        {
            $title = 'Welcome Admin';
            return view('jobs.create')->with('title',$title);
        }
        else
            return redirect('/admin/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    //Adds a Job to the Database
    public function store(Request $request)
    {
        if (Auth::check())
        {
            $this->validate($request, [
            'cbo_dept_name'=>'required',
            'txt_job_title'=>'required',
            'txt_job_description'=>'required'
            ]);

            $job = new jobs;
            $job->dept_name = $request->input('cbo_dept_name');
            $job->job_title = $request->input('txt_job_title');
            $job->job_description = $request->input('txt_job_description');
            $job->responsibilities = $request->input('txt_responsibilities');
            $job->requirements = $request->input('txt_requirements');
            $job->advantages = $request->input('txt_advantages');
            $job->general_qualifications = $request->input('txt_general_qualifications');
            $job->isHiring = '1';
            $job->isUrgent = '0';
            $job->rank=$request->input('number_job_rank');
  
            $job->save();

            return redirect('/admin');
        }
        else
            return redirect('/admin/login');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    //Displays Job Information based on the id
    public function show($id)
    {
        if (Auth::check())
        {
            $job = jobs::find($id);
            return view('jobs.show')->with('entity', $job);
        }
        else
            return redirect('/admin/login');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    //Redirects to the Edit Page
    public function edit($id)
    {   
        if (Auth::check())
        {
            $job = Jobs::find($id);
        $title = 'Welcome Admin';
        return view('jobs.edit')->with('job', $job)->with('title',$title);
        }
        else
            return redirect('/admin/login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    //Updates a Job in the Database
    public function update(Request $request, $id)
    {
        if (Auth::check())
        {
            $this->validate($request, [
            'cbo_dept_name'=>'required',
            'txt_job_title'=>'required',
            'txt_job_description'=>'required'
            ]);

            $job = jobs::find($id);
            $job->dept_name = $request->input('cbo_dept_name');
            $job->job_title = $request->input('txt_job_title');
            $job->job_description = $request->input('txt_job_description');
            $job->responsibilities = $request->input('txt_responsibilities');
            $job->requirements = $request->input('txt_requirements');
            $job->advantages = $request->input('txt_advantages');
            $job->general_qualifications = $request->input('txt_general_qualifications');
            $job->isHiring; 
            $job->rank=$request->input('number_job_rank');
            $job->save();

            return redirect('/admin/job_opportunities/'.$id);
        }
        else
            return redirect('/admin/login');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    //Deactivate Job
    public function deactivate($id)
    {
        if (Auth::check())
        {
            $job = jobs::find($id);
            $job->isHiring = '0';
            $job->save();

            return redirect('/admin');
        }
        else
            return redirect('/admin/login');
        
    }
    
    //Activate Job
    public function activate($id)
    {
        if (Auth::check())
        {
            $job = jobs::find($id);
            $job->isHiring = '1';
            $job->save();

            return redirect('/admin');
        }
        else
            return redirect('/admin/login');
       
    }
    
    //Mark a Job as Urgent
      public function markUrgent($id)
    {
        if (Auth::check())
        {
            $job = jobs::find($id);
            $job->isUrgent = '1';
            $job->save();
            
            
            return redirect('/admin');
        }
        else
            return redirect('/admin/login');
    }
    //Unmark a Job not urgent 
    public function unmarkUrgent($id)
    {
        if (Auth::check())
        {
            $job = jobs::find($id);
            $job->isUrgent = '0';
            $job->save();

            return redirect('/admin');
        }
        else
            return redirect('/admin/login');
    }
}

            
  

            
               
                             
                               
