<x-user-layout>
    <x-slot name="page_title">
        {{ __('Reset Password') }}
    </x-slot>

    <section>
        <x-panel icon="cube" header="{{ __('Reset Password') }}">
            @if (session('status'))
                <div
                    class="mb-4 font-medium text-sm text-white flex flex-row items-centerjustify-center p-4 rounded-lg bg-[#219654]">
                    {{ session('status') }}
                </div>
            @endif 

            <form action="{{ route('password.email') }}" method="POST">
                @csrf

                <div class="flex flex-col">
                    {{-- line attribute --}}
                    <div class="grid grid-cols-5 pb-6 pt-6 items-center border-b border-on-surface-900">
                        <div class="col-span-1 text-on-surface-500 font-bold">
                            <label>{{ __('Email') }}</label>
                        </div>
                        <div class="col-span-4 text-on-surface-600">
                            <x-text-input name="email" value="{{ old('email') }}"
                                          placeholder="{{ __('Please input this field') }}" />
                        </div>
                    </div>
                </div>

                <div class="flex flex-row justify-end mt-10">
                    <x-button type="reset"
                              class="bg-transparent text-on-surface-500 px-0 py-0 hover:text-on-surface-600 hover:bg-transparent">
                        {{ __('Reset') }}
                    </x-button>

                    <x-button type="submit" class="text-base font-normal">
                        {{ __('Reset Password') }}
                    </x-button>
                </div>
            </form>
        </x-panel>
    </section>
</x-user-layout>
