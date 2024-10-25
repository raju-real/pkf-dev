<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BasicController extends Controller
{
    public function profile() {
        $user = Auth::user();
        return view('admin.profile',compact('user'));
    }
    public function websiteSettings() {
        return view('admin.basic.website_settings');
    }

    public function updateWebsiteSettings(Request $request)
{
    $this->validate($request, [
        'company_name' => 'required|string|max:100',
        'email' => 'required|email|max:50',
        'mobile' => 'required|max:20',
        'phone' => 'required|max:20',
        'address' => 'required|string|max:2000',
        'welcome_message_title' => 'required|string|max:1000',
        'welcome_message' => 'required|string|max:2000',
        'youtube_video_link' => 'required|string|max:2000',
        'google_map_url' => 'required|string|max:2000',
        'about_us_title' => 'required|string|max:500',
        'about_us' => 'required|string|max:5000',
        'about_us_image' => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
        'mission_vission' => 'required|string|max:5000',
        'privacy_policy' => 'required|string|max:5000',
        'footer_text' => 'required|string|max:2000',
    ]);

    // Fetch all keys from the request
    $keys = array_keys($request->all());

    // Prepare the setting data array
    $setting_data = [];

    foreach ($keys as $key) {
        $setting_data[$key] = $request->input($key, '');
    }
    if ($request->hasFile('about_us_image')) {
        $setting_data['about_us_image'] = uploadImage($request->file('about_us_image'), 'assets/files/images/website');
    } else {
        $setting_data['about_us_image'] = siteSetting()['about_us_image'];
    }

    // Convert the settings data to JSON and save it
    $newJsonString = json_encode($setting_data, JSON_PRETTY_PRINT);
    file_put_contents(base_path('assets/json/site_setting.json'), $newJsonString);

    return redirect()->route('admin.website-settings')->with(updateMessage());
}


    public function assetList() {
        $data = Asset::with('inventories','notes')->first();
        return view('admin.basic.asset_list',compact('data'));
    }

    public function editAsset() {
        $data = Asset::with('inventories')->first();
        $page_title = "Edit Asset";
        $route = route('admin.update-asset');
        return view('admin.basic.asset_edit',compact('data','page_title','route'));
    }

    public function updateAsset(Request $request) {

        $data = Asset::first();
        $data->bank_account_holder_name = $request->bank_account_holder_name;
        $data->bank_name = $request->bank_name;
        $data->bank_branch_name = $request->bank_branch_name;
        $data->bank_account_number = $request->bank_account_number;
        $data->current_balance = $request->current_balance;
        $data->save();
        if(isset($request->item_name) AND sizeof($request->item_name) > 0){
            AssetInventory::truncate();
            foreach($request->item_name as $key => $item){
                $asset_inventory = new AssetInventory();
                $asset_inventory->asset_id = $data->id;
                $asset_inventory->item_name = $request->item_name[$key] ?? "None";
                $asset_inventory->item_quantity = $request->item_quantity[$key] ?? 0;
                $asset_inventory->save();
            }
        }

        if(isset($request->note) AND sizeof($request->note) > 0){
            AssetNote::truncate();
            foreach($request->note as $key => $note){
                $asset_note = new AssetNote();
                $asset_note->asset_id = $data->id;
                $asset_note->note = $request->note[$key] ?? "None";
                $asset_note->save();
            }
        }
        return redirect()->route('admin.asset-list')->with(savedMessage());
    }

    public function notifications() {
        $data = Notification::query();
        $data->where('notification_for',Auth::id());
        $data->when(request()->get('creation_date'),function($query) {
            $data->whereDate('created_at',date('Y-m-d',strtotime(request()->get('creation_date'))));
        });
        $notifications = $data->latest()->paginate(50);
        Notification::where('notification_for',Auth::id())->update(['read_status' => true]);
        return view('admin.notifications',compact('notifications'));
    }
}
