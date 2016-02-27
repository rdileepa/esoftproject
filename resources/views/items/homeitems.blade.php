<div id="center" class="column">
  <div class="gallery-name1" style="margin-left:15px;padding-top:7px;"> </div>
          <div style="clear:both;">
          <div id="ajax-cat">
          @foreach($items as $item)
            <a href="{{URL::to('products')}}/{{$item->item_id}}" class="shopitem" data-itemid="{{$item->item_id}}" name="_token" value="{{ csrf_token() }}"><div class="gallery-product3"> <img src="{{URL::to($item->image)}}" alt="" />
              <div class="gallery-name">{{$item->item_name}}</div>
              <div class="gallery-price">Rs.{{$item->item_price}}</div>
              <img src="{{URL::to('images/goshop.jpg')}}" alt="" />
              </div></a>
          @endforeach
          </div> 
          </div>
</div>