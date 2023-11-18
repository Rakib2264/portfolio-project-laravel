<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Service;
use App\Models\About;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Project;
use App\Models\SkillEducation;
use App\Models\Team;

class FrontendController extends Controller{
    public function index(){

        $banner = Banner::latest()->first();
        $Services = Service::orderBy("id", "desc")->take(4)->get();
        $abouts = About::latest()->get();
        $peojects = Project::all();
        $skills = SkillEducation::all();
        $members = Team::latest()->limit(3)->get();
         return view('frontend.master',compact('banner','Services','abouts','peojects','members','skills'));
    }

    public function contactstore(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->msg = $request->msg;
        $contact->save();
        return redirect()->route('home')->with('info', 'Message Sent');

    }

    public function contactmanage(){
        $contactmanage = Contact::all();
        return view('backend.contact.manage',compact('contactmanage'));
    }

    public function contactdelete($id){
        $contactdelete = Contact::find($id);
        $contactdelete->delete();
        return redirect()->route('contactmanage')->with('success', 'Deleted');
     }
}
