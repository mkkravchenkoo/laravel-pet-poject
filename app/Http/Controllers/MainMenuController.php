<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MainMenuController extends Controller
{
    public const MAIN_MENU_KEY = 'main-menu';

    private function getMenu()
    {
        return Config::query()->where('name', self::MAIN_MENU_KEY)->first();
    }

    public function store(Request $request)
    {
        $validated = validator($request->all(), [
            'link' => ['required', 'string'],
            'text' => ['required', 'string'],
        ])->validate();

        $validated['id'] = Str::random(9);

        $menuConfig = $this->getMenu();

        if ($menuConfig) {
            $data = json_decode($menuConfig->value);
            if (!is_array($data)) {
                $data = [];
            }
            array_push($data, $validated);
            $menuConfig->value = json_encode($data);
        } else {
            $menuConfig = new Config([
                'name' => self::MAIN_MENU_KEY,
                'value' => json_encode([$validated])
            ]);
        }
        $menuConfig->save();

        return back()->with('success', 'Added new item');
    }

    public function update()
    {

    }

    public function edit()
    {
        $menuConfig = $this->getMenu();
        $mainMenuItems = $menuConfig ? $menuConfig->value : json_encode([]);

        return view('admin.menu.edit', ['mainMenuItems' => json_decode($mainMenuItems)]);
    }

    public function destroy()
    {

    }
}
