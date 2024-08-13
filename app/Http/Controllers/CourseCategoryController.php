<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = CourseCategory::all();

        return view('pages.course-category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.course-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        CourseCategory::create($request->all());

        return redirect()->route('course-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = CourseCategory::find($id);

        return view('pages.course-category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = CourseCategory::find($id);

        return view('pages.course-category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        CourseCategory::find($id)->update($request->all());

        return redirect()->route('course-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CourseCategory::find($id)->delete();

        return redirect()->route('course-category.index');
    }
}
