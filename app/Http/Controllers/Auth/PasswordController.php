<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $output = ""; // Initialize the $output variable

        if ($request->ajax()) {
            $output .= '<div>
            <label for="current_password">Current Password</label>
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get(' . $request->current_password . ')" class="mt-2" />' .
                '</div>

            <div>
                <label for="password">New Password</label>
                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get(' . $request->password . ')" class="mt-2" />
            </div>

            <div>
                <label for="password_confirmation">Confirm Password</label>
                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get(' . $request->password_confirmation . ')" class="mt-2" />
            </div>

            <div class="flex items-center gap-4">
                <button id="saveBtn">Save</button>
            </div>';

            return response($output);
        }

        return back()->with('status', 'password-updated');
    }
};

