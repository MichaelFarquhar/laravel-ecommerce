<div class="flex justify-between space-x-16">
    <aside class="md:w-1/4 sm:w-1/2" aria-label="Sidebar">
        <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800">
            <ul class="space-y-2">
                <x-home.category-newest-link :sort="$sort"/>
                <x-home.category-low-stock-link :sort="$sort"/>
            </ul>

            <x-home.category-label />
            <ul class="space-y-2">
                @foreach ($categories as $category)
                    <x-home.category-link :category="$category" />
                @endforeach
            </ul>
        </div>
    </aside>
    <div class="grid xl:grid-cols-3 lg:grid-cols-2 xs:grid-cols-1 gap-8 w-full">
        @foreach ($products as $product)
            <div class="max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="/docs/images/products/product-1.png" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="mb-5 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$product->name}}</h5>
                    </a>
                    <div class="flex justify-between items-center">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">${{$product->price}}</span>
                        <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
