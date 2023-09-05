<x-layout>
    <div class="container my-5">
        <div class="row">
            <form action="{{route('product.update',$product)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Prezzo</label>
                    <input type="numeric" name='price' class="form-control"
                        value="{{ $product->price }}" >
              </div>

              <div class="mb-3">
                    <label class="form-label">descrizione</label>
                    <input type="text" name='description' class="form-control"
                        value="{{ $product->description }}">
              </div>


              <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="img" class="form-control">
                    <img src="{{ Storage::url($product->img) }}" alt="{{ $product->name }}"
                        style="heigt:60px; width:60px;">
                </div>
                <button type="submit" class="btn btn-success">Modifica</button>
            </form>
        </div>
    </div>
</x-layout>
