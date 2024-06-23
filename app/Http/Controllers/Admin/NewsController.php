<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('admin.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'readmore' => 'required|string',
            'keyword' => 'required|string',
            'image' => 'nullable|file',
            'date' => 'nullable|string'
        ]);
        if($request->hasFile('image')){
            $data['image'] = Storage::disk('public')->put('/news/image', $data['image']);
        }

        $time = new DateTime("");
        $time->setTimezone(new DateTimeZone("Europe/Moscow"));
        $time = $time->format("Y-m-d H:i");
        $data['date'] = $time;

        try {
            News::CreateOrFirst($data);
        } catch (\Exception $exception) {            
            return $exception->getMessage();
        }

        return redirect()->route('new.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $news = News::where('id', $id)->first();
        $categori = Categories::where('id', $news->keyword)->first();
        return view('admin.news.show', compact('news', 'categori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $categories = Categories::all();
        $news = News::where('id', $id)->first();
        return view('admin.news.edit', compact('news', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'readmore' => 'required|string',
            'keyword' => 'required|string',
            'image' => 'nullable|file',
        ]);

        if($request->hasFile('image')){
            $data['image'] = Storage::disk('public')->put('/news/image', $data['image']);
        }

        News::where('id', $id)->update($data);

        return redirect()->route('new.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $new = News::find($id);
        if(!$new) {
            return abort(404);
        }
        $new->delete();
        return redirect()->route('new.index');
    }
}
