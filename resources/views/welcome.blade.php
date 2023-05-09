<x-layout>
    @section('h1')
        {{ 'nice to meet you' }}
    @endsection
    @section('content')
        <x-div class='flex flex-col items-center gap-5 pb-20'>
            <div class='flex flex-col items-center gap-3
                lg:flex lg:flex-row lg:items-center lg:gap-5'>
                    <div class='profile w-44 h-44 rounded-full align-bottom'>
                        <div class='w-44 h-44 bg-eu bg-no-repeat bg-bottom bg-cover'></div>
                    </div>
                <p class=''>
                    My name is <span class='font-bold text-terra-cotta'>Polianna Paim</span>.<br>
                    I am a Brazilian <span class='text-terra-cotta'>full-stack developer</span> & <span class='text-terra-cotta'>UX researcher</span>, passionate about creating meaningful experiences.<br>
                </p>
            </div>
            <p>
                I am always seeking to improve my knowledge and skills through personal projects.<br>
                I believe that collaboration and feedback are essential for the success of an idea. I always strive to work in an agile and efficient manner.
            </p>
            <x-a-button href='/about'>{{ 'who am I?' }}</x-a-button>
        </x-div>
    @endsection
</x-layout>
