<x-guest-layout>
    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Nazwa')" />
        <x-text-input id="name" class="block w-full mt-1" type="text" name="name" maxlength="500" :value=" $product->name" disabled />
    </div>

    <!-- description -->
    <div>
        <x-input-label for="description" :value="__('Opis')" />
        <x-text-input id="description" class="block w-full mt-1" type="text" maxlength="1500" name="description" :value=" $product->description" disabled />
    </div>

    <!-- Amount -->
    <div>
        <x-input-label for="amount" :value="__('Ilosc')" />
        <x-text-input id="amount" class="block w-full mt-1" type="number" min="0" name="amount" :value=" $product->amount" disabled />
    </div>

    <!-- Price -->
    <div class="mt-4">
        <x-input-label for="price" :value="__('Cena')" />
        <x-text-input id="price" class="block w-full mt-1" type="number" step="0.01" min="0" name="price" :value=" $product->price" disabled />
    </div>

    <!-- Category -->
    <div class="mt-4">
        <x-input-label for="category" :value="__('Kategoria')" />
        <select id="category" class="block mt-1" type="number" step="0.01" min="0" name="category_id" disabled>
            @if($product->hasCategory())
            <option>{{$product->category->name}}</option>
            @else
            <option>Brak</option>
            @endif
        </select>
    </div>

    <div class="mt-4">
        <img class="object-cover  w-[200] h-[100px] transition-all duration-300 group-hover:scale-125"
            src="{{ asset('storage/' . $product->image_path) }}"
            alt="Zdjęcie produktu" />
    </div>

</x-guest-layout>