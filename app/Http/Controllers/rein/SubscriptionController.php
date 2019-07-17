<?php

namespace App\Http\Controllers\rein;

use App\Models\History;
use App\Models\Plan;
use App\Models\Subscription;
use App\Models\Template;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Exception;

class SubscriptionController extends Controller
{
    public function index(){
        $data=Subscription::where('user_id',Auth::user()->uuid);
        $data= $data->with('plan')->get();
        $plans      = Plan::where('period', 1)->with(['price'])->get();
        return view('rein.pages.subscription.index',compact('data','plans'));
    }

    public function store(Request $request){
        $subs = Subscription::create(['plan_id'=>$request->get('plan_id'),'user_id'=> Auth::user()->uuid]);
        return redirect(route('subscription.index'));
    }
}
