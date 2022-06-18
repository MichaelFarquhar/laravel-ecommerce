<div class="flex justify-between space-x-16">
    <aside class="md:w-1/4 sm:w-1/3" aria-label="Sidebar">
        <div class="overflow-y-auto py-4 px-4 fixed bg-gray-50 rounded dark:bg-gray-800">
            <ul class="space-y-2">
                <x-home.category-newest-link :sort="$sort"/>
                <x-home.category-low-stock-link :sort="$sort"/>
            </ul>

            <x-home.category-label />
            <ul class="space-y-2">
                @foreach ($categories as $category)
                    <x-home.category-link :category="$category" :sort="$sort"/>
                @endforeach
            </ul>
        </div>
    </aside>
    <div>
        <h1 class="text-white font-semibold text-3xl mb-6">{{str($sort)->ucfirst()}}</h1>
        <div class="grid xl:grid-cols-3 lg:grid-cols-2 xs:grid-cols-1 gap-8 w-full">
            @foreach ($products as $product)
                <x-home.product-card :product="$product" />
            @endforeach
        </div>
    </div>

    <livewire:toast />
</div>
