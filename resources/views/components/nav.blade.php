<nav {{ $attributes->merge(['class' => 'fixed col-span-1 justify-self-end'])}}>
    <ul {{ $attributes->merge(['class' => 'flex flex-col items-end gap-3
        text-soft-pink'])}}>
        <x-nav-item href="/">{{ 'home' }}</x-nav-item>
        <x-nav-item href="/about" class="active">{{ 'about me' }}</x-nav-item>
        <x-nav-item href="/ux">{{ 'ux research' }}</x-nav-item>
        <x-nav-item href="/dev">{{ 'development' }}</x-nav-item>
        <x-nav-item href="/contact">{{ 'contact' }}</x-nav-item>
    </ul>
</nav>