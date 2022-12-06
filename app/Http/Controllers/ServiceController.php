<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\CategoryService;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.services.index', [
             'services' => Service::latest()->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.services.create', [
            'categories' => CategoryService::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
         $formFields = $request->validate([
            'service_name' => 'required',
            'service_price_range' => 'required',
            'category_service_id' => 'required',
        ]);

        Service::create([
            'service_name' => $request->service_name,
            'category_service_id' => $request->category_service_id,
            'service_price_range' => $request->service_price_range,
            'service_description' => $request->service_description,
            'is_available' => $request->is_available === 'on',
        ]);

        return redirect(route('services.index'))->with('success-message', 'Service added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('administrator.services.show', [
            'service' => $service
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
         return view('administrator.services.edit', [
              'categories' => CategoryService::all()
        ])->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
          $formFields = $request->validate([
             'service_name' => 'required',
            'service_price_range' => 'required',
            'category_service_id' => 'required',
        ]);

            $service->update([
            'service_name' => $request->service_name,
            'category_service_id' => $request->category_service_id,
            'service_price_range' => $request->service_price_range,
            'service_description' => $request->service_description,
            'is_available' => $request->is_available === 'on',
        ]);

         return redirect(route('services.index'))->with('success-message', 'Service updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect(route('services.index'))->with('message', 'Service Deleted Successfully');
    }
}
