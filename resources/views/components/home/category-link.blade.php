@props(['category', 'sort'])

<li>
    <a 
        wire:click="getCategory({{$category->id}}, '{{$category->slug}}')" 
        class="flex items-center py-2 px-4 text-base font-normal cursor-pointer text-gray-900 rounded-lg dark:text-white
        {{$sort == $category->slug ? 'bg-gray-100 dark:bg-gray-700' : 'hover:bg-gray-100 dark:hover:bg-gray-700'}}"
    >
        <span class="flex-1 whitespace-nowrap">{{$category->name}}</span>
    </a>
</li>