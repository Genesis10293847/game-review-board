<x-layout>
    <form method="POST" action="{{ route('reviews.store') }}" class="bg-white-rounded-lg shadow p-5 space-y-3 mb-6">
        @csrf

        <div>
            <label for="author" class="block text-sm font-medium text-gray-700">
                Your Name:
            </label>
            <input type="text" id="author" name="author" value="{{ old('author') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            @error('author')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="game_title" class="block text-sm font-medium text-gray-700">
                Game Title:
            </label>
            <input type="text" id="game_title" name="game_title" value="{{ old('game_title') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            @error('game_title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
            <label for="review" class="block text-sm font-medium text-gray-700">
                Review:
            </label>
            <input type="text" id="review" name="review" value="{{ old('review') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            @error('review')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="rating" class="text-sm-font-medium text-gray-700">
                Rating:
            </label>

            <input type="number" id="rating" name="rating" value="{{ old('rating') }}" class="mt-1 block w-24 rounded-md border-gray-300 shadow-sm">
        </div>

        <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700"></button>

    </form>
    <div class="space-y-4">
        @forelse ($gameReviews as $gameReview)
            <x-game-review-card :game-review="$gameReview" />
        @empty
            <p class="text-gray-500 text-center">No game reviews yet. Be the first to post one!</p>
        @endforelse
    </div>
</x-layout>
