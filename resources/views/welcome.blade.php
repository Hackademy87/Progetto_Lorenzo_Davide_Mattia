<x-layout>

@foreach($products as $product)
   <a href="{{route('products.show',$product)}}"> <x-cards :Product="$product" ></x-cards></a>
@endforeach

</x-layout>