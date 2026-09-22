<x-layout>
    <h1 class="text-2xl font-bold mb-6">
        Game reviews
    </h1>
    <div class="space-y-4">
        @foreach ($gameReviews as $gameReview)
            <h2 class="font-bold text lg">
                {{$gameReview['game_title']}}
            </h2>
            <p class="text-gray-700 mt-2">
                {{$gameReview['review']}}
            </p>
            <p class="text-gray-400 mt-3">
                Reviewed by: {{$gameReview['author']}} &middot; {{$gameReview['rating']}} /5
            </p>

        @endforeach
    </div>
</x-layout>
