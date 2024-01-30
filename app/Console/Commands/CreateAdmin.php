<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class CreateAdmin extends Command
{
    /**
     *
     * @var string
     */
    protected $signature = 'app:create-admin';

    /**
     *
     * @var string
     */
    protected $description = 'Create admin of app';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        try {
            $enteredData = [
                'name' => $this->ask('Admin name?'),
                'email' => $this->ask('Admin email?'),
                'password' => $this->secret('Admin password?'),
            ];

            $validated = validator($enteredData, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', Rules\Password::defaults()],
            ])->validate();

            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);

            $this->info("User created");
            $this->info("Email: " . $user->email);
            $this->info("Password: " . $validated['password']);

        } catch (\Exception $error) {
            $this->error($error->getMessage());
        }

    }
}
