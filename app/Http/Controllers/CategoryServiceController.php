<?php

namespace App\Http\Controllers;

use App\Models\CategoryService;
use App\Http\Requests\StoreCategoryServiceRequest;
use App\Http\Requests\UpdateCategoryServiceRequest;
use App\Models\Service;

class CategoryServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.services.category.index', [
            'categories' => CategoryService::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.services.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryServiceRequest $request)
    {
         $formFields = $request->validate([
            'service_category' => 'required',
        ]);

        CategoryService::create([
            'service_category' => $request->service_category,
        ]);

       return redirect(route('service-categories.index'))->with('success-message', 'Category added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryService  $categoryService
     * @return \Illuminate\Http\Response
     */
    public function show($categoryService)
    {
        $services = Service::with('category_service')->where('category_service_id', $categoryService)->get();
        return view('administrator.services.category.show', compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryService  $categoryService
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryService $categoryService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryServiceRequest  $request
     * @param  \App\Models\CategoryService  $categoryService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryServiceRequest $request, CategoryService $categoryService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryService  $categoryService
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryService $serviceCategory)
    {
        $serviceCategory->delete();
        return redirect(route('services.index'))->with('danger-message', 'Service Category Deleted Successfully');
    }
}
