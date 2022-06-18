@props(['category'])

<li>
    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
        <span class="flex-1 whitespace-nowrap">{{$category->name}}</span>
    </a>
</li>