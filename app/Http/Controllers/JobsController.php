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
            $job->isUrgent = '1';
            

            $editJob = jobs::all()->where('dept_name', $request->input('cbo_dept_name'));
            $this->pushRankDown($editJob);
            
            $job->rank = '1';
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
            $job->isHiring = '1';
            $job->save();
            
            $this->editRank($job->job_id, $job->rank, $request->input('txt_rank'), $job->dept_name);
            //               <job_id>     <origRank>           <newRank>            <deptName>
            
            $address = $this->getDashboardAddress($job->dept_name);
            return redirect('/dashboard#'.$address);
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



    /* CUSTOM FUNCTIONS */
    
    /* ----------------------------------------------------------- */
    /* ACTIVATE/DEACTIVATE ALGORITHMS */    
    public function deactivate($id) /* Deactivate a job opening */
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

    
    public function activate($id) /* Activate a job opening */
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


    /* ----------------------------------------------------------- */
    /* MARKING/UNMARKING URGENT ALGORITHMS */
    
    public function markUrgent($id) /* Marking a job opening as "Urgent" */
    {
        if (Auth::check())
        {
            $job = jobs::find($id);
            $job->isUrgent = '1';
            $job->save();
            
            $address = $this->getDashboardAddress($job->dept_name);
            return redirect('/dashboard#'.$address);
        }
        else
            return redirect('/admin/login');
    }

    
    public function unmarkUrgent($id) /* Removing marking of a job opening as "Urgent" */
    {
        if (Auth::check())
        {
            $job = jobs::find($id);
            $job->isUrgent = '0';
            $job->save();
            
            $address = $this->getDashboardAddress($job->dept_name);

            return redirect('/dashboard#'.$address);
        }
        else
            return redirect('/admin/login');
    }

    /* ----------------------------------------------------------- */
    /* RANKING ALGORITHMS*/
    
    public function editRank($id, $origRank, $newRank, $dept) /* Function containing algorithms when editing ranks */
    {
        // Validation of input Variables
        if ($origRank == "") // sets $origRank to the last rank if initially null
        {
            $lastRank = jobs::all()->where('dept_name', $dept)->sortBy('rank')->last()->rank;
            $origRank = $lastRank + 1;
        }

        if ($newRank < 1) // $sets $newRank to 1 if initially 0 or negative
            $newRank = 1;
        
        
        /* CASE 1: Changing rank to a lower value (Higher Priority) */
        if ($newRank < $origRank) /* When editing a rank to a lower value/higher priority */
        {
            $editJob = jobs::all()->where('rank', $newRank)->where('dept_name', $dept);
            if (count($editJob) > 0) /* checks if the new Rank is currently assigned */
            {
                for ($ctr = ($origRank-1); $ctr >= $newRank; $ctr--)
                {
                    $editJob = jobs::all()->where('rank', $ctr)->where('dept_name', $dept);
                    $this->pushRankDown($editJob);              
                }
            }
        }

        /* CASE 2: Changing rank to a higher value (Lower Priority) */
        elseif ($newRank > $origRank) /* When editing a rank to a higher value/lower priority */
        {
            $lastRank = jobs::all()->where('dept_name', $dept)->sortBy('rank')->last()->rank;
            
            for ($ctr = ($origRank+1); $ctr <= $newRank; $ctr++)
            {
                $editJob = jobs::all()->where('rank', $ctr)->where('dept_name', $dept);
                $this->pushRankUp($editJob);
            }

            if ($newRank > $lastRank)
                $newRank = $lastRank;
        }
        

        /* Assignment of new rank to the selected job */
        $editJob = jobs::find($id);
        $editJob->rank = $newRank;
        $editJob->save();
    }

    public function pushRankDown($editJob) /* Increase rank by 1 (lower priority) */
    {
        foreach($editJob as $job)
        {
            $edit = jobs::find($job->job_id);
            $edit->rank = ($job->rank + 1);
            $edit->save();
        }
    }

    public function pushRankUp($editJob) /* Decrease rank by 1 (higher priority) */
    {
        foreach($editJob as $job)
        {
            $edit = jobs::find($job->job_id);
            $edit->rank = ($job->rank - 1);
            $edit->save();
        }
    }


    /* ----------------------------------------------------------- */
    /* REDIRECTING ALGORITHMS*/
    
    public function getDashboardAddress($deptName) /* function in getting address for redirecting dashboard to its corresponding department tab */
    {
        if ($deptName == 'IT and IT-Enabled Services')
            $address = 'IT';

        else if ($deptName == 'Finance and Accounting')
            $address = 'Finance';

        else if ($deptName == 'Legal Support Service')
            $address = 'Legal';

        else if ($deptName == 'Sales and Marketing')
            $address = 'Sales';
        
        return $address;
    }
}
