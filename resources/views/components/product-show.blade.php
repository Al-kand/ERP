<div
    class="w-[630px] h-[387px] relative bg-gray-700 border border-black px-[12px] py-[27px] text-white font-normal text-[11px]  font-['Roboto'] leading-[11px] text-left">
    <h2 class="leading-[11px] text-xl font-bold mb-[30px]" x-text="product.name"></h2>
    <div class="mb-[18px]">
        <span class="text-white text-opacity-70 w-[77px] inline-block">Артикул</span>
        <span x-text="product.article"></span>
    </div>
    <div class="mb-[18px]">
        <span class="text-white text-opacity-70 w-[77px] inline-block">Название</span>
        <span x-text="product.name"></span>
    </div>
    <div class="mb-[18px]">
        <span class="text-white text-opacity-70 w-[77px] inline-block">Статус</span>
        <span x-text="product.status"></span>
    </div>
    <div class="mb-[18px]">
        <span class="text-white text-opacity-70 w-[77px] align-top inline-block">Статус</span>
        <div class="inline-block leading-[13px]">
            <template x-for="(name, index) in product.data">
                <span>
                    <span x-text="index + ': '"></span>
                    <span x-text="name"></span><br>
                </span>
            </template>
        </div>
    </div>
    <button @click="editProduct(product.id)"
        class="w-[20px] h-[20px] right-[63px] top-[23px] absolute p-[4px] bg-black bg-opacity-40">
        <x-icon::edit class="fill-stone-300 w-[12px] h-[12px]" />
    </button>

    <form x-bind:action="`/products/${product.id}`" method="post">
        @csrf
        @method('delete')
        <button type="submit"
            class="w-[20px] h-[20px] right-[41px] top-[23px] p-[4px] absolute bg-black bg-opacity-40">
            <x-icon::delete class="fill-stone-300 w-[12px] h-[12px]" />
        </button>
    </form>



    <button @click="hide" class="w-[30px] h-[30px] right-[5px] top-[18px] absolute ">
        <x-icon::close />
    </button>
</div>
