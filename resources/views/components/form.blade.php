



<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" >

@csrf

  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" name="name" class="form-control">
    
  </div>
  <!-- <div class="mb-3">
    <label  class="form-label">Categoria</label>
    <select class="form-control" name="category_id">

    <option value="null" disabled >seleziona una categoria</option>
   
    <option value=""></option>
    
  </select>
  </div> -->
  <div class="mb-3">
                    <label for="tags me-3">Tags</label>
        
                    @foreach ($materials as $material)
                        <div class="btn-group m-2" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="{{ $material->id }}" autocomplete="off"
                                name="materialId[]" value="{{ $material->id }}">
                            <label class="btn btn-outline-primary text-black border-black"
                                for="{{ $material->id }}">{{ $material->name }}</label>
                        </div>
                    @endforeach
                </div>


<!-- 
  <div class="mb-3">
    <label  class="form-label">Genere</label>
    <select class="form-control" name="category_id">

    <option value="null" disabled >seleziona un genere</option>
    
    <option value=""></option>
    
  </select>
  </div> -->

  <div class="mb-3">
    <label  class="form-label">Prezzo</label>
    <input type="numeric" name='price' class="form-control" >
  </div>

  <div class="mb-3">
    <label  class="form-label">descrizione</label>
    <input type="text" name='description' class="form-control" >
  </div>


  <div class="mb-3">
    <label  class="form-label">Foto</label>
    <input type="file" name="img" class="form-control" >
  </div>
  
  <button type="submit" class="btn btn-success">Aggiungi</button>
</form>