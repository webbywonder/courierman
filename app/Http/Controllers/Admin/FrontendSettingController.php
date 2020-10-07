<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\GeneralSetting;
use Intervention\Image\Facades\Image;
use App\Model\Social;
use Illuminate\Validation\Rule;
use App\Model\VisitorMessage;
use App\Model\Service;
use App\Model\Testimonial;
use App\Model\Faq;

class FrontendSettingController extends Controller {

    public function logoicon() {
        return view('admin.frontendSetting.logoicon');
    }

    public function logoiconUpdate(Request $request) {
        $request->validate([
            'logo' => 'image|mimes:png',
            'favicon_icon' => 'image|mimes:png',
        ]);
        if ($request->hasFile('logo')) {
            $logo = $request->logo;
            $imageObj = Image::make($logo);
            $imageObj->save('assets/frontend/images/logo.png');
        }

        if ($request->hasFile('favicon_icon')) {
            $favicon_icon = $request->favicon_icon;
            $imageObj = Image::make($favicon_icon);
            $imageObj->save('assets/frontend/images/favicon.png');
        }



        return back()->withSuccess('Information updated successfully');
    }

    public function social() {
        $socialList = Social::all();
        return view('admin.frontendSetting.sociallink', compact('socialList'));
    }

    public function socialAdd(Request $request, Social $social) {

        $request->validate([
            'name' => 'required|unique:socials|max:150',
            'code' => 'required|unique:socials|max:150',
            'link' => 'required|max:150',
        ]);

        $data = $request->all();

        $social->create($data);

        return back()->withSuccess('Information added successfully');
    }

    public function socialUpdate(Request $request, Social $social) {

        $request->validate([
            'name' => ['required',
                Rule::unique('socials')->ignore($social->id), 'max:150',
            ],
            'code' => ['required',
                Rule::unique('socials')->ignore($social->id), 'max:150',
            ],
            'link' => 'required|max:150',
        ]);

        $data = $request->all();

        $social->update($data);

        return back()->withSuccess('Information updated successfully');
    }

    public function socialDestroy($id) {
        Social::destroy($id);
        return back()->withSuccess('Information deleted successfully');
    }

    public function background() {
        return view('admin.frontendSetting.background');
    }

    public function backgroundUpdate(Request $request) {
        $request->validate([
            'header_background_image' => 'image|mimes:jpeg,jpg',
            'feature_background_image' => 'image|mimes:jpeg,jpg',
            'join_background_image' => 'image|mimes:jpeg,jpg',
        ]);
        if ($request->hasFile('header_background_image')) {
            $header_background_image = $request->header_background_image;
            $imageObj = Image::make($header_background_image);
            $imageObj->save('assets/frontend/images/banner.jpg');
        }
        if ($request->hasFile('testimonial_background_image')) {
            $testimonial_background_image = $request->testimonial_background_image;
            $imageObj = Image::make($testimonial_background_image);
            $imageObj->save('assets/frontend/images/features_slider.jpg');
        }
        if ($request->hasFile('breadcumb_background_image')) {
            $breadcumb_background_image = $request->breadcumb_background_image;
            $imageObj = Image::make($breadcumb_background_image);
            $imageObj->save('assets/frontend/images/breadcrumb.jpg');
        }
        return back()->withSuccess('Information updated successfully');
    }

    public function headertextsetting() {
        $setting = GeneralSetting::first();
        return view('admin.frontendSetting.headerText', compact('setting'));
    }

    public function headertextsettingUpdate(Request $request, GeneralSetting $setting) {

        $data = $request->all();
        $setting->update($data);
        return back()->withSuccess('Information updated successfully');
    }

    public function couriercount() {
        $setting = GeneralSetting::first();
        return view('admin.frontendSetting.couriercount', compact('setting'));
    }

    public function couriercountUpdate(Request $request, GeneralSetting $setting) {

        $data = $request->all();
        $setting->update($data);
        return back()->withSuccess('Information updated successfully');
    }

    public function aboutus() {
        $setting = GeneralSetting::first();
        return view('admin.frontendSetting.aboutus', compact('setting'));
    }

    public function updateAboutUs(Request $request) {
        $request->validate([
            'aboutus_title' => 'max:255',
            'aboutus_keyword' => 'max:255',
        ]);

        if ($request->hasFile('aboutus_image')) {
            $image = $request->aboutus_image;
            $imageObj = Image::make($image);
            $imageObj->resize(530, 482)->save('assets/frontend/images/aboutus.jpg');
        }

        $id = $request->get('id');
        $setting = GeneralSetting::find($id);
        $data = $request->all();
        $setting->update($data);

        return back()->withSuccess('Information updated successfully');
    }

    public function contactus() {
        $setting = GeneralSetting::first();
        return view('admin.frontendSetting.contactus', compact('setting'));
    }

    public function updateContactus(Request $request) {

        $request->validate([
            'contact_title' => 'max:255',
            'contact_phone' => 'max:255',
            'contact_email' => 'email|string|max:255',
        ]);

        $id = $request->get('id');
        $setting = GeneralSetting::find($id);
        $data = $request->all();
        $setting->update($data);

        return back()->withSuccess("Information updated successfully");
    }

    public function footer() {
        $setting = GeneralSetting::first();
        return view('admin.frontendSetting.footer', compact('setting'));
    }

    public function updateFooter(Request $request) {

        $id = $request->get('id');
        $setting = GeneralSetting::find($id);
        $data = $request->all();
        $setting->update($data);

        return back()->withSuccess("Information updated successfully");
    }

    public function showVisitorMessage() {
        $visitorMessageList = VisitorMessage::all();
        return view('admin.visitorMessage.list', compact('visitorMessageList'));
    }

    public function deleteVisitorMessage($id) {
        VisitorMessage::destroy($id);
        return back()->withSuccess("Information deleted successfully");
    }

    public function services() {
        $setting = GeneralSetting::first();
        $servicesList = Service::all();
        return view('admin.frontendSetting.service', compact('setting', 'servicesList'));
    }

    public function servicesUpdate(Request $request) {
        $request->validate([
            'service_title' => 'required|max:255',
        ]);
        $setting = GeneralSetting::first();
        $data = $request->all();
        $setting->update($data);
        return back()->withSuccess('Information updated successfully');
    }

    public function storeNewServices(Request $request, Service $service) {
        $request->validate([
            'title' => 'required',
            'icon' => 'required|max:150',
        ]);

        $data = $request->all();
        Service::create($data);

        return back()->withSuccess("Information added successfully");
    }

    public function updateNewServices(Request $request, Service $services) {
        $request->validate([
            'title' => 'required',
            'icon' => 'required|max:150',
        ]);

        $data = $request->all();

        $services->update($data);

        return back()->withSuccess("Information updated successfully");
    }

    public function deleteServices($id) {
        Service::destroy($id);
        return back()->withSuccess("Information deleted successfully");
    }

    public function testimonial() {
        $setting = GeneralSetting::first();
        $testimonialList = Testimonial::all();
        return view('admin.frontendSetting.testimonial', compact('setting', 'testimonialList'));
    }

    public function testimonialUpdate(Request $request) {
        $request->validate([
            'testimonial_title' => 'required|max:255',
        ]);
        $id = $request->get('id');
        $setting = GeneralSetting::find($id);
        $data = $request->all();
        $setting->update($data);
        return back()->withSuccess('Information updated successfully');
    }

    public function storeNewTestimonial(Request $request, Testimonial $testimonial) {
        $request->validate([
            'name' => 'required|max:255',
            'designation' => 'max:255',
            'comment' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png',
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageObj = Image::make($image);
            $imageObj->resize(352, 352)->save('assets/frontend/images/testimonial/' . $image->hashname());
            $data['image'] = $image->hashname();
        }
        $testimonial->create($data);
        return back()->withSuccess("Information added successfully");
    }

    public function updateNewTestimonial(Request $request, Testimonial $testimonial) {

        $request->validate([
            'name' => 'required|max:255',
            'designation' => 'max:255',
            'comment' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {

            if ($testimonial->image) {
                unlink('assets/frontend/images/testimonial/' . $testimonial->image);
            }
            $image = $request->image;
            $imageObj = Image::make($image);
            $imageObj->resize(352, 352)->save('assets/frontend/images/testimonial/' . $image->hashname());
            $data['image'] = $image->hashname();
        }

        $testimonial->update($data);

        return back()->withSuccess("Information updated successfully");
    }

    public function deleteTestimonial(Testimonial $testimonial) {

        if ($testimonial->image) {
            unlink('assets/frontend/images/testimonial/' . $testimonial->image);
        }
        Testimonial::destroy($testimonial->id);
        return back()->withSuccess("Information deleted successfully");
    }

    public function searchcourier() {
        $setting = GeneralSetting::first();
        return view('admin.frontendSetting.searchCourier', compact('setting'));
    }

    public function searchcourierUpdate(Request $request) {
        $request->validate([
            'search_courier_title' => 'required|max:255',
        ]);
        $id = $request->get('id');
        $setting = GeneralSetting::find($id);
        $data = $request->all();
        $setting->update($data);
        return back()->withSuccess('Information updated successfully');
    }

    public function faq() {
        $setting = GeneralSetting::first();
        $faqList = Faq::all();
        return view('admin.frontendSetting.faq', compact('setting', 'faqList'));
    }

    public function storeNewFaq(Request $request, Faq $faq) {
        $request->validate([
            'question' => 'required|max:255',
            'answer' => 'required',
        ]);

        $data = $request->all();

        $faq->create($data);

        return back()->withSuccess("Information added successfully");
    }

    public function updateNewFaq(Request $request, Faq $faq) {

        $request->validate([
            'question' => 'required|max:255',
            'answer' => 'required',
        ]);

        $data = $request->all();

        $faq->update($data);

        return back()->withSuccess("Information updated successfully");
    }

    public function deleteFaq(Faq $faq) {

        Faq::destroy($faq->id);
        return back()->withSuccess("Information deleted successfully");
    }

}
