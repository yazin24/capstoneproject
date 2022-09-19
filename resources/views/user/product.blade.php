<base href="/public">
<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
       </div>
       <div class="row">
         @foreach($product as $products)
          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="{{url('product_details',$products->id)}}" class="option1">
                     Product Details
                      </a>

                    <a href="{{route('product_details',$products->id)}}">
                     <input type="submit" class="rounded-pill option2 p-3 w-100 h-auto" value="Buy Now">
                    </a>
                        
                      
                   </div>
                </div>
                <div class="img-box">
                   <img src="/product/{{$products->image}}" alt="">
                </div>
                <div class="detail-box">
                   <h5>
                      {{$products->title}}
                   </h5>
                   <h6>
                     ₱{{number_format($products->price)}}
                   </h6>
                </div>
             </div>
          </div>
          @endforeach
       <span class="pt-5">
         {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
       </span>
           
     

          
         </div>
 </section>