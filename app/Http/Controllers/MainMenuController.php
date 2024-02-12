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
            $data[] = $validated;
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

    public function update(Request $request)
    {
        $menu = $request->post('main_menu');
        $menuConfig = $this->getMenu();
        $menuConfig->value = $menu ? json_encode(json_decode($menu)) : json_encode([]) ;
        $menuConfig->save();
        return back()->with('success', 'Menu updated');
    }

    public function edit()
    {
        $menuConfig = $this->getMenu();
        $mainMenuItems = $menuConfig ? $menuConfig->value : json_encode([]);
        return view('admin.menu.edit', ['mainMenuItems' => json_decode($mainMenuItems)]);
    }

    public function destroy($id)
    {
        $menuConfig = $this->getMenu();
        if($menuConfig){
            $data = json_decode($menuConfig->value, true);
            $filteredArr = array_filter($data, function ($item) use ($id) {
                return $item['id'] !== $id;
            });

            $filteredArr = array_map(function ($item) use ($id) {
                if(!empty($item['parent']) && $item['parent'] === $id){
                    unset($item['parent']);
                }
                return $item;
            }, $filteredArr);

            $filteredArr = array_values($filteredArr);

            $menuConfig->value = json_encode($filteredArr);
            $menuConfig->save();

            return back()->with('success', 'Item was removed');
        }
        return back()->with('success', 'Item can"t be removed');

    }
}
