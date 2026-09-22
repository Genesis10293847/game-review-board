<!DOCTYPE html>
<html>
    <head>
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body>
        <nav class="bg-white border-b bprder-gray-200 px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-6">
                <a href="{{url('/')}}" class="text-xl font-bold text-indigo-600">
                    Game Review Board
                </a>
                <a href="{{url('/about')}}" class="text-sm text-gray-600 hover:underline">
                    About
                </a>
                <a href="{{url('/reviews')}}" class="text-sm text-gray-600 hover:underline">
                    Reviews
                </a>
            </div>
        </nav>
        <main class = "max-w-2x1 mx-auto py-8 px-4"><!-- main.max-w-2x1.mx-auto.py-8.px-4 -->
            {{  $slot  }}
        </main>
    </body>
</html>
{{--   git config --global user.email "20187546@s.ubaguio.edu"
  git config --global user.name "Genesis10293847" --}}
