<?php

namespace App\Http\Controllers;

use App\Models\Slide;

class SlideController extends Controller
{
    protected function validateSlide(?Slide $slide = null): array
    {
        $slide ??= new Slide();
        return request()->validate([
            'title' => 'required',
            'image' => $slide->exists ? ['image'] : ['required', 'image'],
            'background' => $slide->exists ? ['image'] : ['required', 'image'],
            'text' => 'required',
            'link' => 'required',
        ]);
    }

    public function index()
    {
        return view('admin.slider.index', [
            'sliders' =>  Slide::paginate(50)
        ]);
    }

    public function store()
    {
        $slider = Slide::create(array_merge($this->validateSlide(), [
            'image' => request()->file('image')->store('slider'),
            'background' => request()->file('background')->store('slider')
        ]));

        return redirect()->route('slider.edit', ['slider' => $slider->id])->with('success', 'Added!');
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function edit(Slide $slider)
    {
        return view('admin.slider.edit', [
            'slider' => $slider
        ]);
    }

    public function update(Slide $slider)
    {
        $attributes = $this->validateSlide($slider);

        if ($attributes['image'] ?? false) {
            $attributes['image'] = request()->file('image')->store('thumbnails');
        }
        if ($attributes['background'] ?? false) {
            $attributes['background'] = request()->file('background')->store('thumbnails');
        }

        $slider->update($attributes);

        return back()->with('success', 'Slider Updated!');

    }

    public function destroy(Slide $slider)
    {
        $slider->delete();
        return back()->with('success', 'Slider Deleted!');
    }
}
