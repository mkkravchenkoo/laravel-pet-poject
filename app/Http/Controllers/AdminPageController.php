<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Validation\Rule;

class AdminPageController extends Controller
{
     protected function validatePage(?Page $page = null): array
        {
            $page ??= new Page();
            return request()->validate([
                'title' => 'required',
                'thumbnail' => $page->exists ? ['image'] : ['required', 'image'],
                'slug' => ['required', Rule::unique('pages', 'slug')->ignore($page)],
                'body' => 'required',
            ]);
        }

        public function index()
        {
            return view('admin.page.index', [
                'pages' =>  Page::paginate(50)
            ]);
        }

        public function store()
        {
            $page = Page::create(array_merge($this->validatePage(), [
                'thumbnail' => request()->file('thumbnail')->store('page')
            ]));

            return redirect()->route('page.edit', ['page' => $page->id])->with('success', 'Added!');
        }

        public function create()
        {
            return view('admin.page.create');
        }

        public function edit(Page $page)
        {
            return view('admin.page.edit', [
                'page' => $page
            ]);
        }

        public function update(Page $page)
        {
            $attributes = $this->validatePage($page);

            if ($attributes['thumbnail'] ?? false) {
                $attributes['thumbnail'] = request()->file('thumbnail')->store('page');
            }

            $page->update($attributes);

            return back()->with('success', 'Page Updated!');

        }

        public function destroy(Page $page)
        {
            $page->delete();
            return back()->with('success', 'Page Deleted!');
        }
}
