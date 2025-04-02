<x-guest-layout>
    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nazwa')" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" maxlength="500" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- description -->
        <div>
            <x-input-label for="description" :value="__('Opis')" />
            <x-text-input id="description" class="block w-full mt-1" type="text" maxlength="1500" name="description" :value="old('description')" autofocus />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Amount -->
        <div>
            <x-input-label for="amount" :value="__('Ilosc')" />
            <x-text-input id="amount" class="block w-full mt-1" type="number" min="0" name="amount" :value="old('amount')" required autofocus autocomplete="amount" />
            <x-input-error :messages="$errors->get('amount')" class="mt-2" />
        </div>

        <!-- Price -->
        <div class="mt-4">
            <x-input-label for="price" :value="__('Cena')" />
            <x-text-input id="price" class="block w-full mt-1" type="number" step="0.01" min="0" name="price" :value="old('price')" required autocomplete="price" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>

        <!-- Image -->
        <div class="mt-4">
            <x-input-label for="image" :value="__('Zdjęcie')" />
            <x-text-input id="image" class="block w-full mt-1" type="file" name="image" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-4">
                {{ __('Zapisz') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>