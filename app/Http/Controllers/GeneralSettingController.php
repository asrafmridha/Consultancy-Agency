<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Storage;

class GeneralSettingController extends Controller
{
    public function index(){
        $generalSettings=GeneralSetting::first();
        return view('backend.generalSetting.edit',compact('generalSettings'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email'         => 'required|email',
            'alter_email'   => 'required|email',
            'company_name'  => 'required|string',
            'open_day'      => 'required|string',
            'open_day_time' => 'required|string',
            'close_day'     => 'required|string',
            'address'       => 'required|string',
            'phone'         => 'required',
            'alter_phone'   => 'required',
            'meta_keywords' => 'required|string',
            'meta_title'    => 'required|string',
            'meta_description'  => 'required|string',
            'copyright_text'    => 'required|string',
            'footer_description' => 'required|string',
            'logo'          => 'image',
            'favicon'       => 'image',
            'phone_image'   => 'required',
            'email_image'   => 'required',
            'watch_image'   => 'required',
            'about_bg'   => 'image',
            'service_bg'   => 'image',
            'project_bg'   => 'image',
            'contact_bg'   => 'image',
        ]);
        $generalSettings = GeneralSetting::find($id);
        if (!empty($_FILES['about_bg']['name'])) {
            $banner_image = 'image_1' . time() . '.' . pathinfo($_FILES['about_bg']['name'], PATHINFO_EXTENSION);
            !is_null($generalSettings->about_bg) && Storage::disk('public')->delete($generalSettings->about_bg);
            $about_bg = Storage::disk('public')->putFileAs('generalSetting', $request->file('about_bg'), $banner_image);
        } else {
            $about_bg = $generalSettings->about_bg;
        }
        if (!empty($_FILES['service_bg']['name'])) {
            $banner_image = 'image_2' . time() . '.' . pathinfo($_FILES['service_bg']['name'], PATHINFO_EXTENSION);
            !is_null($generalSettings->service_bg) && Storage::disk('public')->delete($generalSettings->service_bg);
            $service_bg = Storage::disk('public')->putFileAs('generalSetting', $request->file('service_bg'), $banner_image);
        } else {
            $service_bg = $generalSettings->service_bg;
        }
        if (!empty($_FILES['project_bg']['name'])) {
            $banner_image = 'image_3' . time() . '.' . pathinfo($_FILES['project_bg']['name'], PATHINFO_EXTENSION);
            !is_null($generalSettings->project_bg) && Storage::disk('public')->delete($generalSettings->project_bg);
            $project_bg = Storage::disk('public')->putFileAs('generalSetting', $request->file('project_bg'), $banner_image);
        } else {
            $project_bg = $generalSettings->project_bg;
        }
        if (!empty($_FILES['contact_bg']['name'])) {
            $banner_image = 'image_4' . time() . '.' . pathinfo($_FILES['contact_bg']['name'], PATHINFO_EXTENSION);
            !is_null($generalSettings->contact_bg) && Storage::disk('public')->delete($generalSettings->contact_bg);
            $contact_bg = Storage::disk('public')->putFileAs('generalSetting', $request->file('contact_bg'), $banner_image);
        } else {
            $contact_bg = $generalSettings->contact_bg;
        }
        if (!empty($_FILES['logo']['name'])) {
            $banner_image = 'image_5' . time() . '.' . pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($generalSettings->logo);
            $logo = Storage::disk('public')->putFileAs('generalSetting', $request->file('logo'), $banner_image);
        } else {
            $logo = $generalSettings->logo;
        }
        if (!empty($_FILES['favicon']['name'])) {
            $banner_image = 'image_6' . time() . '.' . pathinfo($_FILES['favicon']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($generalSettings->favicon);
            $favicon = Storage::disk('public')->putFileAs('generalSetting', $request->file('favicon'), $banner_image);
        } else {
            $favicon = $generalSettings->favicon;
        }
        if (!empty($_FILES['location_image']['name'])) {
            $banner_image = 'image_7' . time() . '.' . pathinfo($_FILES['location_image']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($generalSettings->location_image);
            $location_image = Storage::disk('public')->putFileAs('generalSetting', $request->file('location_image'), $banner_image);
        } else {
            $location_image = $generalSettings->location_image;
        }
        if (!empty($_FILES['phone_image']['name'])) {
            $banner_image = 'image_8' . time() . '.' . pathinfo($_FILES['phone_image']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($generalSettings->phone_image);
            $phone_image = Storage::disk('public')->putFileAs('generalSetting', $request->file('phone_image'), $banner_image);
        } else {
            $phone_image = $generalSettings->phone_image;
        }
        if (!empty($_FILES['email_image']['name'])) {
            $banner_image = 'image_9' . time() . '.' . pathinfo($_FILES['email_image']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($generalSettings->email_image);
            $email_image = Storage::disk('public')->putFileAs('generalSetting', $request->file('email_image'), $banner_image);
        } else {
            $email_image = $generalSettings->email_image;
        }
        if (!empty($_FILES['watch_image']['name'])) {
            $banner_image = 'image_10' . time() . '.' . pathinfo($_FILES['watch_image']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($generalSettings->watch_image);
            $watch_image = Storage::disk('public')->putFileAs('generalSetting', $request->file('watch_image'), $banner_image);
        } else {
            $watch_image = $generalSettings->watch_image;
        }
        $generalSettings->email  = $request->email;
        $generalSettings->company_name  = $request->company_name;
        $generalSettings->alter_email  = $request->alter_email;
        $generalSettings->phone  = $request->phone;
        $generalSettings->alter_phone  = $request->alter_phone;
        $generalSettings->address  = $request->address;
        $generalSettings->meta_title  = $request->meta_title;
        $generalSettings->meta_description  = $request->meta_description;
        $generalSettings->meta_keywords  = $request->meta_keywords;
        $generalSettings->copyright_text  = $request->copyright_text;
        $generalSettings->open_day  = $request->open_day;
        $generalSettings->open_day_time  = $request->open_day_time;
        $generalSettings->close_day  = $request->close_day;
        $generalSettings->footer_description  = $request->footer_description;
        $generalSettings->logo  = $logo;
        $generalSettings->favicon  = $favicon;
        $generalSettings->location_image  = $location_image;
        $generalSettings->phone_image  = $phone_image;
        $generalSettings->email_image  = $email_image;
        $generalSettings->watch_image  = $watch_image;
        $generalSettings->about_bg  = $about_bg;
        $generalSettings->service_bg  = $service_bg;
        $generalSettings->project_bg  = $project_bg;
        $generalSettings->contact_bg  = $contact_bg;
        $status = $generalSettings->save();
        if ($status) {
            return back()->with('success', "General Setting Updated Successfully");
        } else {
            return back()->with('error', "Something Went Wrong");
        }
    }
}
