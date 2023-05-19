<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('notes.store') }}">
            @csrf
            <input
                type="text"
                name="title"
                id="title"
                placeholder="{{ __('Note Title') }}"
            >
            <textarea
                name="description"
                placeholder="{{ __('Write the body of the note') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Submit') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>
