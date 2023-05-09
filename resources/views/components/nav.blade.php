<nav {{ $attributes->merge(['class' => 'w-full lg:w-fit
    lg:fixed lg:col-span-1 lg:justify-self-end'])}}>
    <ul {{ $attributes->merge(['class' => 'flex flex-col 
        text-soft-pink
        gap-5 items-center bg-terra-cotta p-10
        lg:gap-3 lg:items-end lg:bg-transparent lg:p-0'])}}>
        <x-nav-item href="/" class="{{ request()->is('/') ? 'active' : '' }}">{{ 'home' }}</x-nav-item>
        <x-nav-item href="about" class="{{ request()->is('about') ? 'active' : '' }}">{{ 'about me' }}</x-nav-item>
        <x-nav-item href="uxr" class="{{ request()->is('uxr') ? 'active' : '' }}">{{ 'uxr projects' }}</x-nav-item>
        <x-nav-item href="dev" class="{{ request()->is('dev') ? 'active' : '' }}">{{ 'dev projects' }}</x-nav-item>
        <x-nav-item href="contact" class="{{ request()->is('contact') ? 'active' : '' }}">{{ 'contact' }}</x-nav-item>
    </ul>
</nav>
