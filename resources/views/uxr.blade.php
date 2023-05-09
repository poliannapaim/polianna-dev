<x-layout>
    @section('title')
        {{ 'uxr projects ·' }}
    @endsection
    @section('h1')
        {{ 'uxr projects' }}
    @endsection
    @section('content')
        <x-div>
            <x-h2>{{ 'case studies' }}</x-h2>
            <ol class='mt-10 relative border-l border-terra-cotta'>
                <x-timeline-item title='digital service for reporting domestic violence'
                link="{{ route('gina') }}"
                info="master's dissertation· 2020-2022"
                ></x-timeline-item>
                <x-timeline-item title='learning environment for D/deaf students'
                link="{{ route('leaf') }}"
                info='undergraduate research · 2018-2020'
                ></x-timeline-item>
            </ol>
        </x-div>
    @endsection
</x-layout>
