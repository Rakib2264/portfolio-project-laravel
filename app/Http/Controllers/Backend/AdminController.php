<?php

namespace App\Http\Controllers\Backend;
use App\Models\IpAddress;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Service;
use App\Models\About;
use App\Models\Project;
use App\Models\SkillEducation;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;
use Spatie\FlareClient\View;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.main');
    }

    public function banner()
    {
        return view('backend.banner.banner');
    }

    public function bannerStore(Request $request)
    {

        $banner = new Banner();

        if ($request->image || $request->cv) {
            $image = $request->file('image');
            $customname = rand() . '.' . $image->getClientOriginalExtension();
            $path = public_path('backend/banner/' . $customname);
            'Image'::make($image)->resize(900, 680)->save($path);

            $cv = $request->file('cv');

            $customnamecv = rand() . '.' . $cv->getClientOriginalExtension();
            $pathcv = public_path('backend/cv/' . $customnamecv);
            File::put($pathcv, file_get_contents($cv));

            $banner->name = $request->name;
            $banner->banner_image = $customname;
            $banner->cv = $customnamecv;
            $banner->link = $request->link;
            $banner->save();
        } else {

            $banner->name = $request->name;
            $banner->link = $request->link;
            $banner->save();
        }

        return redirect()->route('bannermanage');
    }

    public function bannermanage()
    {
        $banner = Banner::all();
        return view("backend.banner.manage", compact('banner'));
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        return view("backend.banner.edit", compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);
        if ($request->image && $request->cv) {
            // Delete the old image and CV files if they exist
            $filePathcv = public_path('backend/cv/' . $banner->cv);
            $filePathbanner = public_path('backend/banner/' . $banner->banner_image);

            if (File::exists($filePathcv)) {
                File::delete($filePathcv);
            }

            if (File::exists($filePathbanner)) {
                File::delete($filePathbanner);
            }

            // Process and save the new image and CV files
            $image = $request->file('image');
            $customname = rand() . '.' . $image->getClientOriginalExtension();
            $path = public_path('backend/banner/' . $customname);
            'Image'::make($image)->resize(900, 680)->save($path);

            $cv = $request->file('cv');
            $customnamecv = rand() . '.' . $cv->getClientOriginalExtension();
            $pathcv = public_path('backend/cv/' . $customnamecv);
            File::put($pathcv, file_get_contents($cv));

            $banner->name = $request->name;
            $banner->banner_image = $customname;
            $banner->cv = $customnamecv;
            $banner->link = $request->link;
            $banner->update();
        } else {
            $banner->name = $request->name;
            $banner->link = $request->link;
            $banner->update();
        }

        return back();
    }

    public function delete($id)
    {
        $banner = Banner::find($id);

        if (File::exists(public_path('backend/cv/' . $banner->cv))) {
            File::delete(public_path('backend/cv/' . $banner->cv));
        }

        if (File::exists(public_path('backend/banner/' . $banner->banner_image))) {
            File::delete(public_path('backend/banner/' . $banner->banner_image));
        }

        $banner->delete();

        return back();
    }

    public function service()
    {
        return view('backend.service.manage');
    }

    public function servive(Request $request)
    {
        $service = new Service();
        $service->design = $request->web;
        $service->start = $request->start;
        $service->design_des = $request->desc;
        $service->save();
        return response()->json([
            'msg' => 'Data save',
        ]);
    }

    public function show()
    {

        $showservice = Service::all();
        return response()->json([
            'msg' => 'Data save',
            "allData" => $showservice,
        ]);
    }

    public function deleteservice($id)
    {
        $service = Service::find($id);

        $service->delete();
        return response()->json([
            'msg' => 'Data Deleted',

        ]);
    }

    public function editservice($id)
    {
        $service = Service::find($id);
        return response()->json([
            'allDataservice' => $service

        ]);
    }

    public function updateservice(Request $request, $id)
    {
        $serviceupdate = Service::find($id);
        $serviceupdate->design = $request->web;
        $serviceupdate->start = $request->start;
        $serviceupdate->design_des = $request->desc;
        $serviceupdate->update();

        return response()->json([
            'msg' => 'Data Updated',
        ]);
    }
    public function about()
    {
        $abouts = About::all();
        return view('backend.about.manage', compact('abouts'));
    }

    public function add()
    {

        return view('backend.about.add');
    }

    public function aboutstore(Request $request)
    {
        $about = new About();

        if ($request->imageone && $request->imagetwo) {
            $image1 = $request->file('imageone');
            $customname = rand() . '.' . $image1->getClientOriginalExtension();
            $path = public_path('backend/about/' . $customname);
            'Image'::make($image1)->resize(400, 400)->save($path);


            $image2 = $request->file('imagetwo');
            $customname2 = rand() . '.' . $image2->getClientOriginalExtension();
            $path2 = public_path('backend/about2/' . $customname2);
            'Image'::make($image2)->resize(400, 400)->save($path2);
        };

        $about->howmanyyearex = $request->howmanyyearex;
        $about->des1 = $request->des1;
        $about->des2 = $request->des2;
        $about->des3 = $request->des3;
        $about->des4 = $request->des4;
        $about->imageone =  $customname;
        $about->imagetwo = $customname2;
        $about->allclientsnum = $request->allclientsnum;
        $about->clientdes = $request->clientdes;
        $about->allprojectsnum = $request->allprojectsnum;
        $about->projectdes = $request->projectdes;
        $about->save();
        return back();
    }

    public function editabout($id)
    {
        $about = About::find($id);
        return view('backend.about.edit', compact('about'));
    }

    public function updateabout(Request $request, $id)
    {

        $aboutupdate = About::find($id);


        if ($request->imageone) {
            // Delete old images
            if (File::exists(public_path('backend/about/' . $aboutupdate->imageone))) {
                File::delete(public_path('backend/about/' . $aboutupdate->imageone));
            }
            $image1 = $request->file('imageone');
            $customname = rand() . '.' . $image1->getClientOriginalExtension();
            $path = public_path('backend/about/' . $customname);
            'Image'::make($image1)->resize(400, 400)->save($path);
            $aboutupdate->imageone =  $customname;
        };

        if ($request->imagetwo) {
            // Delete old images
            if (File::exists(public_path('backend/about2/' . $aboutupdate->imagetwo))) {
                File::delete(public_path('backend/about2/' . $aboutupdate->imagetwo));
            }
            $image2 = $request->file('imagetwo');
            $customname2 = rand() . '.' . $image2->getClientOriginalExtension();
            $path2 = public_path('backend/about2/' . $customname2);
            'Image'::make($image2)->resize(400, 400)->save($path2);

            $aboutupdate->imagetwo = $customname2;
        };


        $aboutupdate->howmanyyearex = $request->howmanyyearex;
        $aboutupdate->des1 = $request->des1;
        $aboutupdate->des2 = $request->des2;
        $aboutupdate->des3 = $request->des3;
        $aboutupdate->des4 = $request->des4;

        $aboutupdate->allclientsnum = $request->allclientsnum;
        $aboutupdate->clientdes = $request->clientdes;
        $aboutupdate->allprojectsnum = $request->allprojectsnum;
        $aboutupdate->projectdes = $request->projectdes;
        $aboutupdate->save(); // Use 'save()' instead of 'update()'

        return back();
    }

    public function deleteabout($id)
    {
        $deleteabout = About::find($id);
        // Delete old images
        if (File::exists(public_path('backend/about/' . $deleteabout->imageone))) {
            File::delete(public_path('backend/about/' . $deleteabout->imageone));
        }

        if (File::exists(public_path('backend/about2/' . $deleteabout->imagetwo))) {
            File::delete(public_path('backend/about2/' . $deleteabout->imagetwo));
        }
        $deleteabout->delete();
        return back();
    }

    public function addskill()
    {

        return view('backend.skilledu.add');
    }

    public function skillmanage()
    {
        $Skill_Exp_Education = SkillEducation::orderBy('id', 'desc')->get();

        return view('backend.skilledu.manage', compact('Skill_Exp_Education'));
    }

    public function skills(Request $request)
    {
        $SkillsExperienceEdu = new SkillEducation();
        $SkillsExperienceEdu->shortdes = $request->shortdes;
        $SkillsExperienceEdu->html = $request->html;
        $SkillsExperienceEdu->css = $request->css;
        $SkillsExperienceEdu->bootstrap = $request->bootstrap;
        $SkillsExperienceEdu->js = $request->js;
        $SkillsExperienceEdu->jquery = $request->jquery;
        $SkillsExperienceEdu->ajax = $request->ajax;
        $SkillsExperienceEdu->php = $request->php;
        $SkillsExperienceEdu->php_oop = $request->php_oop;
        $SkillsExperienceEdu->laravel = $request->laravel;
        $SkillsExperienceEdu->restapi = $request->restapi;
        $SkillsExperienceEdu->webdevdes = $request->webdevdes;
        $SkillsExperienceEdu->exyear = $request->exyear;
        $SkillsExperienceEdu->excompany = $request->excompany;
        $SkillsExperienceEdu->degree = $request->degree;
        $SkillsExperienceEdu->degyear = $request->degyear;
        $SkillsExperienceEdu->instiute = $request->instiute;
        $SkillsExperienceEdu->save();
        return response()->json([
            "msg" => "Save",
        ]);
    }


    public function showSkills()
    {
        $allexeduskshow = SkillEducation::all();
        return response()->json([
            "allDataa" => $allexeduskshow,
        ]);
    }

    public function deleteSkills($id)
    {
        $allexeduskdelete = SkillEducation::find($id);
        $allexeduskdelete->delete();
        return response()->json([
            'msg' => 'Deleted Successfully'
        ]);
    }

    public function editSkills($id)
    {
        $allexeduskedit = SkillEducation::find($id);
        return response()->json([
            'msg' => 'Edit Successfully',
            "editData" => $allexeduskedit
        ]);
    }

    public function updateSkills(Request $request, $id)
    {
        $allexeduskupdate = SkillEducation::find($id);
        $allexeduskupdate->shortdes = $request->shortdes;
        $allexeduskupdate->html = $request->html;
        $allexeduskupdate->css = $request->css;
        $allexeduskupdate->bootstrap = $request->bootstrap;
        $allexeduskupdate->js = $request->js;
        $allexeduskupdate->jquery = $request->jquery;
        $allexeduskupdate->ajax = $request->ajax;
        $allexeduskupdate->php = $request->php;
        $allexeduskupdate->php_oop = $request->php_oop;
        $allexeduskupdate->laravel = $request->laravel;
        $allexeduskupdate->restapi = $request->restapi;
        $allexeduskupdate->webdevdes = $request->webdevdes;
        $allexeduskupdate->exyear = $request->exyear;
        $allexeduskupdate->excompany = $request->excompany;
        $allexeduskupdate->degree = $request->degree;
        $allexeduskupdate->degyear = $request->degyear;
        $allexeduskupdate->instiute = $request->instiute;
        $allexeduskupdate->save();
        return response()->json([
            "msg" => "Save",
        ]);
    }

    public function projectadd()
    {
        return view('backend.myproject.add');
    }

    public function projectstore(Request $request)
    {


        if ($request->image) {
            $image = $request->file('image');
            $customName = rand() . "." . $image->getClientOriginalExtension();
            $location = public_path('backend/project/' . $customName);

            'Image'::make($image)->resize(508, 508)->save($location);
        }

        $project = new Project();
        $project->name = $request->name;
        $project->image = $customName;

        $project->save();

        return redirect()->route('projectmanage')->with('success', 'Project Saved');
    }

    public function projectmanage()
    {
        $projects = Project::all();
        return view('backend.myproject.manage', compact('projects'));
    }

    public function projectedit($id)
    {
        $project = Project::find($id);
        return view('backend.myproject.edit', compact('project'));
    }

    public function projectstoreupdate(Request $request, $id)
    {
        $project = Project::find($id);

        if (!$project) {
            // Handle the case where the project with the given ID does not exist.
            return redirect()->route('projectmanage')->with('error', 'Project not found');
        }

        if ($request->image) {
            // Delete old images
            if (File::exists(public_path('backend/project/' . $project->image))) {
                File::delete(public_path('backend/project/' . $project->image));
            }

            $image = $request->file('image');
            $customName = rand() . "." . $image->getClientOriginalExtension();
            $location = public_path('backend/project/' . $customName);

            'Image'::make($image)->resize(508, 508)->save($location);
            $project->name = $request->name;
            $project->image = $customName;

            $project->save();
        }

        return redirect()->route('projectmanage')->with('success', 'Project Updated');
    }

    public function projectdelete($id)
    {
        $deleteproject = Project::find($id);
        // Delete old images
        if (File::exists(public_path('backend/project/' . $deleteproject->image))) {
            File::delete(public_path('backend/project/' . $deleteproject->image));
        }


        $deleteproject->delete();
        return redirect()->route('projectmanage')->with('success', 'Deleted');
    }


    public function teamadd()
    {
        return view('backend.team.add');
    }



    public function teamstore(Request $request)
    {

        if ($request->image) {
            $image = $request->file('image');
            $customNamee = rand() . "." . $image->getClientOriginalExtension();
            $locatione = public_path('backend/team/' . $customNamee);
            'Image'::make($image)->resize(650, 550)->save($locatione);
        }

        $team = new Team();
        $team->name = $request->name;
        $team->occupation = $request->occupation;
        $team->image = $customNamee;
        $team->save();
        return redirect()->route('teammanage')->with('success', 'Team Member Added');

    }

    public function teammanage()
    {
        $teammembers = Team::all();
        return view('backend.team.manage', compact('teammembers'));
    }

    public function teamedit($id){
        $teamedit = Team::find($id);
        return view('backend.team.edit', compact('teamedit'));
    }

    public function teamupdate(Request $request, $id)
    {
        $teamu = Team::find($id);

        // Check if the team member exists
        if (!$teamu) {
            return redirect()->route('teammanage')->with('error', 'Team Member not found');
        }

        // Check if a new image is provided
        if ($request->hasFile('image')) {
            // Delete old image
            if (File::exists(public_path('backend/team/' . $teamu->image))) {
                File::delete(public_path('backend/team/' . $teamu->image));
            }

            $image = $request->file('image');
            $customNameeee = rand() . "." . $image->getClientOriginalExtension();
            $locationeee = public_path('backend/team/' . $customNameeee);

            // Use the Image class from the Intervention Image package
            'Image'::make($image)->resize(650, 550)->save($locationeee);

            // Update team member with new image
            $teamu->image = $customNameeee;
        }

        $teamu->name = $request->name;
        $teamu->occupation = $request->occupation;

        $teamu->save();

        return redirect()->route('teammanage')->with('success', 'Team Updated');
    }





    public function teamdelete($id){
        $deleteteam = Team::find($id);
        // Delete old images
        if (File::exists(public_path('backend/team/' . $deleteteam->image))) {
            File::delete(public_path('backend/team/' . $deleteteam->image));
        }


        $deleteteam->delete();
        return redirect()->route('teammanage')->with('success', 'Deleted');
    }
}
