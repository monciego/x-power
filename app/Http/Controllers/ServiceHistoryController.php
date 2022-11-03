<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceHistory;
use Illuminate\Http\Request;

class ServiceHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceHistory = ServiceHistory::with('user', 'service')->where('user_id', auth()->id())->latest()->paginate(5);
        return view('user.services.service-history.index', compact('serviceHistory'));
    }
        /**
     * Avail service
     *
     * @return \Illuminate\Http\Response
     */
    public function availService(Service $service)
    {

        if($service->is_available === 0) {
             abort(403, 'This service is not available!');
        }

        return view('user.services.avail-service', [
            'service' => $service
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email|string|max:255',
            'message' => 'required|string',
            'contact_number' => 'required|string|max:255',
            'contact_person' => 'nullable',
        ]);

        ServiceHistory::create([
            'user_id' => $request->user_id,
            'service_id' => $request->service_id,
            'customer_name' => $request->customer_name,
            'subject' => $request->subject,
            'email' => $request->email,
            'message' => $request->message,
            'contact_number' => $request->contact_number,
            'contact_person' => $request->contact_person,
            'transaction_number' => $this->transactionNumber(),
        ]);

        return redirect(route('service-history.index'))->with('success-message', 'Thank you for availing our service!');
    }

        /**
     * Generates transaction number
     *
     * @return response()
     */
    public function transactionNumber()
    {
        $transaction_number = random_int(1000000000, 9999990000);

        return $transaction_number;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceHistory  $serviceHistory
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceHistory $serviceHistory)
    {
        $serviceHistory = ServiceHistory::where('user_id', auth()->id())->findOrFail($serviceHistory->id);
        return view('user.services.service-history.show', compact('serviceHistory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceHistory  $serviceHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceHistory $serviceHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceHistory  $serviceHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceHistory $serviceHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceHistory  $serviceHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceHistory $serviceHistory)
    {
        //
    }
}
