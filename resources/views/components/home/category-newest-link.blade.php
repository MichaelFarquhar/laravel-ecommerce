@props(['sort'])

<li>
    <a wire:click="getNewestProducts" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white cursor-pointer
        {{$sort == 'newest' ? 'bg-gray-100 dark:bg-gray-700' : 'hover:bg-gray-100 dark:hover:bg-gray-700'}}
    ">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <span class="ml-3">Recently Added</span>
    </a>
</li>