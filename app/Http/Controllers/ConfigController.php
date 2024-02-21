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
        'working-time',
        'fb-link'
    ];

    public function index()
    {
        $config = Config::whereIn('name', $this->keys)->get()->getAssoc();

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
