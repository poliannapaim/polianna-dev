<x-layout>
    @section('title')
        {{ 'ux research ·' }}
    @endsection
    @section('h1')
        {{ 'ux research projects' }}
    @endsection
    @section('content')
        <div>
            <x-h2>{{ 'educational background' }}</x-h2>
            <div class='max-w-xl mx-auto mt-10'>
                <ul class='space-y-12'>
                    <x-timeline-item title='Full-stack web developer'
                    link='https://github.com/poliannapaim'
                    info='self taught · 2022 -'
                    ></x-timeline-item>
                    <x-timeline-item title="Master's Degree in Informatics"
                    link='http://www.prppg.ufpr.br/site/ppginf/pb/'
                    info='ufpr · 2020-2022'
                    ></x-timeline-item>
                    <x-timeline-item title="Bachelor's Degree in Information Systems"
                    link='https://www.ufmt.br/'
                    info='ufmt · 2020-2022'
                    ></x-timeline-item>
                </ul>
            </div>
        </div>
    @endsection
</x-layout>
