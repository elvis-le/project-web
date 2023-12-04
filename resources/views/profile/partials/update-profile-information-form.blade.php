<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="form-user-information mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="user-image">
            <img id="img" src="{{Auth::user()->img}}">
        </div>

        <div>
            <label for="name">Name:</label>
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <label for="email">Email:</label>
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <label for="password">Password:</label>
            <input id="password" name="password" type="button" data-bs-toggle="modal" data-bs-target="#myModal" value="Change Password">
        </div>

        <div class="gender">
            <label for="gender">Gender:</label>
            <input id="male" name="gender" type="radio" value="male" class="mt-1 block w-full" @if('male' == Auth::user()->gender) checked @endif/>
            <label for="male" style="font-weight: 500">Male</label>
            <input id="female" name="gender" type="radio" value="female" class="mt-1 block w-full" @if('female'== Auth::user()->gender) checked @endif/>
            <label for="female" style="font-weight: 500">Female</label>
        </div>

        <div>
            <label for="birthday">Birthday:</label>
            <input id="birthday" name="birthday" type="date" class="mt-1 block w-full" value="{{ Auth::user()->birthday }}"/>
        </div>

        <div>
            <label for="input">Image:</label>
            <x-text-input id="input" name="image" type="file" class="mt-1 block w-full" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="save-btn">{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
