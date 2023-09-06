<x-layout>
    @if ($products->isEmpty())
        <h1 class="text-center my-5">Non hai ancora prodotti</h1>
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Aggiungine uno</h3>
                </div>
            </div>
            <div class="row w-50 mx-auto">
                <x-form></x-form>
            </div>
        </div>
    @endif
    @foreach ($products as $product)
        <section class="container mt-5">
            <div class="row">
                <div class="col-12 col-md-3 my-3 bordi">
                    <div class="card" style="width: 18rem;height: 28rem;">
                        <img class="px-2 py-2" style="height:250px;" src="{{ Storage::url($product->img) }}"
                            alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->price }}€</p>
                            <p class="card-text">{{ $product->description }}</p>
                            <p>{{ $product->getMaterials() }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('edit.product', $product) }}"><button
                                            class="btn btn-secondary">Modifica</button></a>
                                </div>
                                <div class="col-6">
                                    <form action="{{ route('delete.product', $product) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Cancella</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach




</x-layout>
