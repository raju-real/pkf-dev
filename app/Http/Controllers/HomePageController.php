<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Mail\SendMail;
use App\Models\Service;
use App\Models\Publication;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use App\Models\PeopleDirectory;
use App\Models\ServiceCategory;
use App\Models\ServiceSubcategory;
use App\Models\PublicationCategory;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class HomePageController extends Controller
{
    public function index()
    {
        return view('website.pages.home');
    }

    public function allPublications()
    {
        $data = Publication::query();
        $data->latest();
        $data->when(request()->get('SearchTerm'), function ($query) {
            $search = request()->get('SearchTerm');
            $query->where('title', 'LIKE', "%{$search}%");
        });
        $data->when(request()->get('category'), function ($query) {
            $category_slug = request()->get('category');
            $id = PublicationCategory::whereSlug($category_slug)->first()->id;
            $query->where('category_id', $id);
        });
        // $grid_results = $data->skip(0)->take(4)->get();
        // $list_results = $data->skip(4)->take(10)->paginate(6);
        $results = $data->paginate(10);
        return view('website.pages.publication_list', compact('results'));
    }

    public function publicationDetails($slug)
    {
        $publication = Publication::whereSlug($slug)->first();
        return view('website.pages.publication_details', compact('publication'));
    }

    public function allServices()
    {
        $data = Service::query();
        $data->latest();
        $data->when(request()->get('SearchTerm'), function ($query) {
            $search = request()->get('SearchTerm');
            $query->where('title', 'LIKE', "%{$search}%");
        });
        $data->when(request()->get('category'), function ($query) {
            $category_slug = request()->get('category');
            $id = ServiceCategory::whereSlug($category_slug)->first()->id;
            $query->where('category_id', $id);
        });
        $data->when(request()->get('subcategory'), function ($query) {
            $subcategory_slug = request()->get('subcategory');
            $id = ServiceSubcategory::whereSlug($subcategory_slug)->first()->id;
            $query->where('subcategory_id', $id);
        });
        // $grid_results = $data->skip(0)->take(4)->get();
        // $list_results = $data->skip(4)->take(10)->paginate(6);
        $results = $data->paginate(10);
        return view('website.pages.service_list', compact('results'));
    }

    public function serviceDetails($slug)
    {
        $service = Service::whereSlug($slug)->first();
        return view('website.pages.service_details', compact('service'));
    }

    public function allNews()
    {
        $data = News::query();
        $data->latest();
        $data->when(request()->get('SearchTerm'), function ($query) {
            $search = request()->get('SearchTerm');
            $query->where('title', 'LIKE', "%{$search}%");
        });
        $data->when(request()->get('category'), function ($query) {
            $category_slug = request()->get('category');
            $id = NewsCategory::whereSlug($category_slug)->first()->id;
            $query->where('category_id', $id);
        });
        // $grid_results = $data->skip(0)->take(4)->get();
        // $list_results = $data->skip(4)->take(10)->paginate(6);
        $results = $data->paginate(10);
        return view('website.pages.news_list', compact('results'));
    }

    public function newsDetails($slug)
    {
        $news = News::whereSlug($slug)->first();
        return view('website.pages.news_details', compact('news'));
    }

    public function allPeoples()
    {
        $data = PeopleDirectory::query();
        $data->when(request()->get('name'), function ($query) {
            $search = request()->get('name');
            $query->where('name', 'LIKE', "%{$search}%")->orWhere('description', "LIKE", "%{$search}%");
        });
        $data->when(request()->get('department'), function ($query) {
            $query->where('department_id', request()->get('department'));
        });
        $peoples = $data->latest()->get();
        return view('website.pages.people_lists', compact('peoples'));
    }

    public function peopleDetails($slug)
    {
        $people = PeopleDirectory::whereSlug($slug)->first();
        return view('website.pages.people_details', compact('people'));
    }

    public function aboutUs() {
        return view('website.pages.about_us');
    }
    public function contactUs() {
        return view('website.pages.contact_us');
    }

    public function searchContent()
    {
        $search = request()->get('SearchTerm');
        $publications = Publication::where('title', 'LIKE', "%{$search}%")->select('title', 'slug', 'description')->get();
        $news = News::where('title', 'LIKE', "%{$search}%")->select('title', 'slug', 'description')->get(); // Convert to array
        $services = Service::where('title', 'LIKE', "%{$search}%")->select('title', 'slug', 'description')->get(); // Convert to array
        return view('website.pages.search_results',compact('publications','news','services'));
    }

    public function searchContentMerge()
    {
        $search = request()->get('SearchTerm');

        // Fetch and map each collection with the type property
        $publications = Publication::where('title', 'LIKE', "%{$search}%")
            ->select('title', 'slug', 'description')
            ->get()
            ->map(function ($item) {
                $item->type = 'publication';
                return $item;
            })
            ->toArray(); // Convert to array

        $news = News::where('title', 'LIKE', "%{$search}%")
            ->select('title', 'slug', 'description')
            ->get()
            ->map(function ($item) {
                $item->type = 'news';
                return $item;
            })
            ->toArray(); // Convert to array

        $services = Service::where('title', 'LIKE', "%{$search}%")
            ->select('title', 'slug', 'description')
            ->get()
            ->map(function ($item) {
                $item->type = 'service';
                return $item;
            })
            ->toArray(); // Convert to array

        // Merge all arrays into a single collection
        $results = collect(array_merge($publications, $news, $services));

        // Optionally, return as JSON
        return response()->json($results);
    }

    public function storeMessage(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'mobile' => 'required|max:20',
            'message' => 'required|max:1000'
        ]);
        $mail_data = [
            'subject' => $request->name.' wants to contact with you',
            'body' => $request->message,
            'title' => 'Someone wants to contact with you.',
            'mobile' => $request->mobile,
            'name' => $request->name,
            'email' => $request->email
        ];

        try {
            $mailSent = Mail::to(siteSetting()['email'])->send(new SendMail($mail_data));

            if (!$mailSent) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Your message has been sent successfully'
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Mail sending success, but no recipients accepted.'
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Mail sending failed: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Message not sent. Something went wrong!'
            ]);
        }
    }
}
