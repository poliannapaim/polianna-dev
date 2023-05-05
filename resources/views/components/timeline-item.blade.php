<li class='flex items-start space-x-3'>
    <div class='flex-1 space-y-3'>
        <div class='w-600 flex items-end justify-between'>
            <span class='text-terra-cotta text-base font-bold uppercase'>{{ $title }}</span>
            <a rel='noopener noreferrer'
            href="{{ $link }}"
            target='_blank'
            class='inline-flex items-center px-3 py-1 space-x-2 rounded-full
            text-terra-cotta text-sm font-bold
            border border-terra-cotta group'>
                <span class='group-hover:font-black'>{{ $info }}</span>
            </a>
        </div>
    </div>
</li>