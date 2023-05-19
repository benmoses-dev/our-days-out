<x-app-layout>
    @foreach($items as $item)
        <div class="p-6 flex space-x-2">
            <div class="flex-1">
                <div>
                    <small class="ml-2 text-sm text-gray-600">{{ $item->created_at->format('j M Y, g:i a') }}</small>
                </div>
                <p class="mt-4 ml-2 text-lg text-gray-900">{{ $item->name }}</p>
                <p class="mt-4 ml-2 text-sm text-gray-900">{{ $item->description }}</p>
            </div>
        </div>
    @endforeach
</x-app-layout>
