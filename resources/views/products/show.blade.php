<x-layout>

<section class="container dettagli position-relavtive mt-5">
    <div class="row">
        <div class="col-12 col-md-5">
            <img class="img-fluid" src="{{ Storage::url($product->img)}}" alt="">
        </div>
        
            <div class="row">
                <div class="col-6">
                    <h2>nome :</h2>
                </div>
                <div class="col-6">
                    <h2>{{$product->name}}</h2>
                </div>
            </div>

        
            <div class="row">
                <div class="col-6">
                    <h2>prezzo :</h2>
                </div>
                <div class="col-6">
                    <h2>{{$product->price}}€</h2>
                </div>
            </div>

            <div class="row">
            <div class="col-6">
            <h2>materiali :</h2>
            </div>
            <div>
            <h2>{{$product->getMaterials()}}</h2>
            </div>
          

            
            <div class="row">
                <div class="col-6">
                    <h2>descrizione :</h2>
                </div>
                <div class="col-6">
                    <h2>{{$product->description}}</h2>
                </div>
            </div>

        </div>
    </div>
</section>


</x-layout>