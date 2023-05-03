<x-layout>
    @section('title')
        {{ 'polianna.dev' }}
    @endsection
    @section('h1')
        {{ 'nice to meet you' }}
    @endsection
    @section('content')
        <div class="space-y-7">
            <p>
                My name is <span class="font-bold text-terra-cotta">Polianna Paim</span>.
            </p>
            <p>
                I am a Brazilian <span class="text-terra-cotta">full-stack developer</span> and <span class="text-terra-cotta">UX researcher</span>, passionate about creating meaningful experiences.
            </p>
            <p>
                I am always seeking to improve my knowledge and skills through personal projects.
            </p>
            <p>
                I believe that collaboration and feedback are essential for the success of an idea. I always strive to work in an agile and efficient manner.
            </p>
        </div>

        <div class="profile w-64 h-64 rounded-full align-bottom">
            <div class="w-64 h-64 bg-eu bg-no-repeat bg-bottom bg-cover"></div>
        </div>

        <x-a-button href="/about">{{ 'who am I?' }}</x-a-button>
    @endsection
</x-layout>
