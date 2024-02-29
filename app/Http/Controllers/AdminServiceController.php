<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminServiceController extends Controller
{
    protected function validateService(?Service $service = null): array
    {
        $service ??= new Service();
        return request()->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'icon' => 'required',
            'thumbnail' => $service->exists ? ['image'] : ['required', 'image'],
            'slug' => ['required', Rule::unique('services', 'slug')->ignore($service)],
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }

    public function index()
    {
        return view('admin.service.index', [
            'services' =>  Service::paginate(50)
        ]);
    }

    public function store()
    {
        $service = Service::create(array_merge($this->validateService(), [
            'thumbnail' => request()->file('thumbnail')->store('service')
        ]));

        return redirect()->route('service.edit', ['service' => $service->id])->with('success', 'Added!');
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function edit(Service $service)
    {
        return view('admin.service.edit', [
            'service' => $service
        ]);
    }

    public function update(Service $service)
    {
        $attributes = $this->validateService($service);

        if ($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('service');
        }

        $service->update($attributes);

        return back()->with('success', 'service Updated!');

    }

    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('success', 'Service Deleted!');
    }
}
