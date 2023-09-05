<x-layout>

@foreach($products as $product)
   <a class="text-decoration-none" href="{{route('products.show',$product)}}"><x-cards :Product="$product" ></x-cards></a>
@endforeach

</x-layout>