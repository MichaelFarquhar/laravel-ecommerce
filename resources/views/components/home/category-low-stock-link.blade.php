@props(['sort'])

<li>
    <a wire:click="getLowStockProducts" class="flex items-center py-2 px-4 text-base font-normal text-gray-900 rounded-lg dark:text-white cursor-pointer
        {{$sort== 'low-stock' ? 'bg-gray-100 dark:bg-gray-700' : 'hover:bg-gray-100 dark:hover:bg-gray-700'}}
    ">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span class="ml-3">Almost Gone</span>
    </a>
</li>