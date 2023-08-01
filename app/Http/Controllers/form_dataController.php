<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emp_skill;
use App\Models\personal_info;
use Carbon\Carbon;
use Mail;


class form_dataController extends Controller
{
    public function storeInformation2(Request $request)
    {
        // dd("2");
        // dd($request->android);
        $new = new emp_skill();
        $new->technical_skill = $request->careers_technical_skills;
        $new->personal_attribute = $request->careers_personal_attributes;
        $new->professional_detail = $request->careers_professional_history;
        $new->work_areas = $request->careers_work_areas;
        $new->dislike_current_company = $request->careers_dislike_about_current_company;
        $new->describe_co_workers = $request->careers_coworker_describe_as_person;
        $new->change_company_reason = $request->careers_reason_for_looking_job;
        $new->night_sheeft = $request->careers_ready_to_work_in_night_shift;
        $new->family_background = $request->careers_describe_family_background;
        $new->save();
        $new1 = new personal_info();
        $new1->position_applied = $request->android;
        // $services->qr_type = $req->qrType;
        $new1->u_age = $request->careers_age;
        $new1->u_gender = $request->careers_gender;
        $new1->u_location = $request->careers_current_location;
        $new1->u_qualification = $request->careers_qualification;
        $new1->ssc = json_encode($request->careers_educations_ssc);
        $new1->hsc = json_encode($request->careers_educations_hsc);
        $new1->graducation = json_encode($request->careers_educations_graducation);
        $new1->pg_diploma = json_encode($request->careers_educations_pg_diploma);
        $new1->other_graducation = json_encode($request->careers_educations_other_qualification);
        // $new->hsc = $request->careers_educations[hsc][school];
        // $new->graducation = $request->careers_qualification;
        // $new->pg_diploma = $request->careers_qualification;
        // $new->other_graducation = $request->careers_qualification;
        $new1->experience_year = $request->careers_experience;
        $new1->present_salary = $request->careers_present_salary;
        $new1->type_e_seeking = $request->careers_type_of_employment_seeking;
        // $new->resume = $request->careers_describe_family_background;
        $new1->u_gmail = $request->careers_contact_email;
        $new1->u_name = $request->careers_fullname;
        $new1->u_number  = $request->careers_contact_number;
        if ($request->hasFile('upload_file')) {
            $file = $request->file('upload_file');
            $image_name = basename($request->file('upload_file')->getClientOriginalName(), '.' . $request->file('upload_file')->getClientOriginalExtension()); //Image name
            $extension = $file->getClientOriginalExtension();
            $filename =  $image_name . '.' . $extension;
            $file->move('uploads/images', $filename);
            $new1->resume = $filename;
        }
        $new1->save();
        // return view('form');
        // return redirect('/');
        $data = [
            //   'subject' => $request->subject,
            'position_applied' => $request->android,
            'age' => $request->careers_fullname,
            'gender' => $request->careers_fullname,
            'location' => $request->careers_fullname,
            'qualification' => $request->careers_fullname,
            'ssc' => json_encode($request->careers_educations_ssc),
            'hsc' => json_encode($request->careers_educations_hsc),
            'graducation' => json_encode($request->careers_educations_graducation),
            'pg_diploma' => json_encode($request->careers_educations_pg_diploma),
            'other_graducation' => json_encode($request->careers_educations_other_qualification),
            'experience_year' => $request->careers_experience,
            'present_salary' => $request->careers_present_salary,
            'Type_e_seeking' => $request->careers_type_of_employment_seeking,
            'email' => $request->careers_contact_email,
            'name' => $request->careers_fullname,
            'phone' => $request->careers_contact_number,

        ];
        $u_gmail = $request->careers_contact_email;
        $u_name = $request->careers_fullname;
        $u_number  = $request->careers_contact_number;
        // $service = $request->select;
        Mail::send('email-template', $data, function ($message) use ($u_name) {
            $message->to(env('SOCIAL_EMAIL'), 'Webito Infotech')->subject('Thank You for Applying to Webito Infotech');
            $message->from(env('SOCIAL_EMAIL'), 'Webito Infotech');
        });
        Mail::send('email-user', $data, function ($message) use ($u_gmail, $u_name) {
            $message->to($u_gmail, $u_name)->subject('Thank You for Applying to Webito Infotech');
            $message->from(env('SOCIAL_EMAIL'), 'Webito Infotech');
        });
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
        // return back()->with(['message' => 'Email successfully sent!']);
        // return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
        // \Mail::send('contactMail', array(
        //     'u_name' => $new['careers_fullname'],
        //     'u_age' => $new['careers_age'],
        //     'u_gender' => $new['careers_gender'],
        //     'u_location' => $new['careers_current_location'],
        //     'u_qualification' => $new['careers_qualification'],
        // ), function ($message) use ($request) {
        //     $message->from($request->email);
        //     $message->to('shivalisavaliya012@gmail.com', 'Admin')->subject($request->get('subject'));
        // });
        // return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
//  public function sendEmail(Request $request)
//  {
//         $request->validate([
//             'email' => 'required|email',
//             //   'subject' => 'required',
//             'name' => 'required',
//             'content' => 'required',
//         ]);
//         $data = [
//             //   'subject' => $request->subject,
//             'name' => $request->name,
//             'email' => $request->email,
//             'content' => $request->content,
//             'phone' => $request->phone,
//             'select' => $request->select
//         ];
//          return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
//   }
    // public function storeInformation1(Request $request)
    // {
            // dd("1");
            // $request->validate([
            //     'name' => 'required',
            //     'u_gmail' => 'required|email',
            //     'u_number' => 'required|digits:10|numeric',
            // 'subject' => 'required',
            // 'message' => 'required',
            // ]);
            // return view('form');
            //     return redirect('/');
            // \Mail::send('contactMail', array(
            //     'u_name' => $new['careers_fullname'],
            //     'u_age' => $new['careers_age'],
            //     'u_gender' => $new['careers_gender'],
            //     'u_location' => $new['careers_current_location'],
            //     'u_qualification' => $new['careers_qualification'],
            // ), function ($message) use ($request) {
            //     $message->from($request->email);
            //     $message->to('shivalisavaliya012@gmail.com', 'Admin')->subject($request->get('subject'));
            // });
            // return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    // }
    public function index(Request $request)
    {
        $data = [];
        $localIP = getHostByName(getHostName());
        $getData = count(personal_info::where('time', '>=', Carbon::now()->subMinutes(5)->toDateTimeString())->where('ip', $localIP)->get());
        $data['getData'] = $getData;
        $data['getItemsOneDay'] = personal_info::where('ip', $localIP)->where('time', '>=', Carbon::now()->subdays(1))->get();
        return view('career.hiring',$data);
    }
    public function capthcaFormValidate(Request $request)
    {
        $localIP = getHostByName(getHostName());
        $getData = count(personal_info::where('time', '>=', Carbon::now()->subMinutes(5)->toDateTimeString())->where('ip', $localIP)->get());
        if ($getData > 2) { //captcha validation match captcha
            $request->validate([
                'captcha' => 'required|captcha'
            ]);
        }
        $localIP = getHostByName(getHostName());
        $getItemsOneDay = count(personal_info::where([['ip', $localIP],['time', '>=', Carbon::now()->subdays(1)]])->get());
        if ($getItemsOneDay > 4) {       // form submit 5 times
            return redirect()->back()->with(['error' => 'You Are Fill The Form In 5 Times. Please Fill To After 48 Hour.....!']);
            // return redirect('contact-form')->with('error', 'You Are Fill The Form In 5 Times. Please Fill To After 48 Hour.....!');
        }
        $date = Carbon::now()->toDateTimeString();
        $new1 = new personal_info();
        $new1->position_applied = $request->android;
        // $services->qr_type = $req->qrType;
        $new1->u_age = $request->careers_age;
        $new1->u_gender = $request->careers_gender;
        $new1->u_location = $request->careers_current_location;
        $new1->u_qualification = $request->careers_qualification;
        $new1->ssc = json_encode($request->careers_educations_ssc);
        $new1->hsc = json_encode($request->careers_educations_hsc);
        $new1->graducation = json_encode($request->careers_educations_graducation);
        $new1->pg_diploma = json_encode($request->careers_educations_pg_diploma);
        $new1->other_graducation = json_encode($request->careers_educations_other_qualification);
        // $new->hsc = $request->careers_educations[hsc][school];
        // $new->graducation = $request->careers_qualification;
        // $new->pg_diploma = $request->careers_qualification;
        // $new->other_graducation = $request->careers_qualification;
        $new1->experience_year = $request->careers_experience;
        $new1->present_salary = $request->careers_present_salary;
        $new1->type_e_seeking = $request->careers_type_of_employment_seeking;
        // $new->resume = $request->careers_describe_family_background;
        $new1->u_gmail = $request->careers_contact_email;
        $new1->u_name = $request->careers_fullname;
        $new1->u_number  = $request->careers_contact_number;
        if ($request->hasFile('upload_file')) {
            $file = $request->file('upload_file');
            $image_name = basename($request->file('upload_file')->getClientOriginalName(), '.' . $request->file('upload_file')->getClientOriginalExtension()); //Image name
            $extension = $file->getClientOriginalExtension();
            $filename =  $image_name . '.' . $extension;
            $file->move('uploads/images', $filename);
            $new1->resume = $filename;
        }
        $new1->time = $date;
        $new1->ip = $localIP;
        $new1->save();
        $new = new emp_skill();
        $new->technical_skill = $request->careers_technical_skills;
        $new->personal_attribute = $request->careers_personal_attributes;
        $new->professional_detail = $request->careers_professional_history;
        $new->work_areas = $request->careers_work_areas;
        $new->dislike_current_company = $request->careers_dislike_about_current_company;
        $new->describe_co_workers = $request->careers_coworker_describe_as_person;
        $new->change_company_reason = $request->careers_reason_for_looking_job;
        $new->night_sheeft = $request->careers_ready_to_work_in_night_shift;
        $new->family_background = $request->careers_describe_family_background;
        $new->time = $date;
        // $data->timeone = $date2;
        $new->ip = $localIP;
        $new->save();
        $data = [];
        $getItemsOneDay = count(personal_info::where('ip', $localIP)->where('created_at', '>=', Carbon::now()->subdays(1))->get()); //count betwwen current time and 24 hour time
        $getData = count(personal_info::where('time', '>=', Carbon::now()->subMinutes(5)->toDateTimeString())->where('ip', $localIP)->get()); //count betwwen current time and 5 min time
        // dd($getData);
        $data['getData'] = $getData;
        $data = [
            //   'subject' => $request->subject,
            'position_applied' => $request->android,
            'age' => $request->careers_fullname,
            'gender' => $request->careers_fullname,
            'location' => $request->careers_fullname,
            'qualification' => $request->careers_fullname,
            'ssc' => json_encode($request->careers_educations_ssc),
            'hsc' => json_encode($request->careers_educations_hsc),
            'graducation' => json_encode($request->careers_educations_graducation),
            'pg_diploma' => json_encode($request->careers_educations_pg_diploma),
            'other_graducation' => json_encode($request->careers_educations_other_qualification),
            'experience_year' => $request->careers_experience,
            'present_salary' => $request->careers_present_salary,
            'Type_e_seeking' => $request->careers_type_of_employment_seeking,
            'email' => $request->careers_contact_email,
            'name' => $request->careers_fullname,
            'phone' => $request->careers_contact_number,
        ];
        $u_gmail = $request->careers_contact_email;
        $u_name = $request->careers_fullname;
        $u_number  = $request->careers_contact_number;
        // $service = $request->select;
        Mail::send('email-template', $data, function ($message) use ($u_name) {
            $message->to(env('SOCIAL_EMAIL'), 'Webito Infotech')->subject('Thank You for Applying to Webito Infotech');
            $message->from(env('SOCIAL_EMAIL'), 'Webito Infotech');
        });
        Mail::send('email-user', $data, function ($message) use ($u_gmail, $u_name) {
            $message->to($u_gmail, $u_name)->subject('Thank You for Applying to Webito Infotech');
            $message->from(env('SOCIAL_EMAIL'), 'Webito Infotech');
        });
        // return redirect('contact-form')->with($data, $getItemsOneDay);
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
        // return redirect('contact-form');
    }
    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            //   'subject' => 'required',
            'name' => 'required',
            'content' => 'required',
        ]);
        $data = [
            //   'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content,
            'phone' => $request->phone,
            'select' => $request->select
        ];
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
