<nav {{ $attributes->merge(['class' => 'fixed col-span-1 justify-self-end'])}}>
    <ul {{ $attributes->merge(['class' => 'flex flex-col items-end gap-3
        text-soft-pink'])}}>
        <x-nav-item href="/" class="{{ request()->is('/') ? 'active' : '' }}">{{ 'home' }}</x-nav-item>
        <x-nav-item href="about" class="{{ request()->is('about') ? 'active' : '' }}">{{ 'about me' }}</x-nav-item>
        <x-nav-item href="ux" class="{{ request()->is('ux') ? 'active' : '' }}">{{ 'ux research' }}</x-nav-item>
        <x-nav-item href="dev" class="{{ request()->is('dev') ? 'active' : '' }}">{{ 'development' }}</x-nav-item>
        <x-nav-item href="contact" class="{{ request()->is('contact') ? 'active' : '' }}">{{ 'contact' }}</x-nav-item>
    </ul>
</nav>
