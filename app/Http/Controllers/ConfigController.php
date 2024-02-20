<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{

    private $keys = [
        'phone',
        'address',
        'email',
    ];

    public function index()
    {
        $configRaw = Config::whereIn('name', $this->keys)->get();
        $config = array_reduce($this->keys, function ($result, $key) use ($configRaw) {
            $found = $configRaw->first(function($item) use ($key) {
                return $item->name == $key;
            });
            $result[$key] = $found?->value;
            return $result;
        }, []);

        return view('admin.config.index', ['config' => $config, 'configFields' => $this->keys]);
    }

    public function update(Request $request)
    {
        $updatedConfig = array_reduce($this->keys, function ($result, $key) use ($request) {
            $result[] = ['name' => $key, 'value' => $request->get($key) ?? ''];
            return $result;
        }, []);

        Config::upsert($updatedConfig, $this->keys);

        return redirect()->route('admin.config.update')->with('success', 'Updated!');
    }
}
