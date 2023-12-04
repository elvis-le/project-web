<section>
    <form id="myForm" method="post" class="update-password-form mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label for="current_password">Current Password</label>
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <label for="password">New Password</label>
            <x-text-input id="new_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <label for="password_confirmation">Confirm Password</label>
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <button id="saveBtn">Save</button>
        </div>
    </form>
</section>
