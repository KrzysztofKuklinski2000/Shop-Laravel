<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="text-3xl text-white">Lista produktow</h1>
            </div>
            <div class="col-6">
                <a class="float-right" href="{{ route('product.create') }}">
                    <button class="px-4 py-2 m-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                        Button
                    </button>
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nazwa</th>
                        <th scope="col">Opis</th>
                        <th scope="col">Ilosc</th>
                        <th scope="col">Cena</th>
                        <th scope="col">Akcje</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->amount}}</td>
                        <td>{{ $product->price}}</td>
                        <td>
                            <a href="{{route('product.edit', $product->id)}}">
                                <button class="btn btn-success btn-sm">E</button>
                            </a>
                            <a href="{{route('product.show', $product->id)}}">
                                <button class="btn btn-primary btn-sm">P</button>
                            </a>
                            <button class="btn btn-danger btn-sm delete" data-id="{{$product->id}}">X</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
</x-app-layout>
<script>
    const deleteUrl = "{{ url('products') }}/";
</script>
@vite(['resources/js/delete.js'])