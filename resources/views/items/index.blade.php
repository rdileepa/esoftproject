@extends('layouts.masterlayout')

@section("sidebar")

      @foreach($categories as $category)
      <div class="sidebar-content">
      <a href="/showcategory/{{$category->cat_id}}"><div class="left-topic-title">{{$category->cat_title}}</div>
      <div class="left-topic-desc">{{$category->cat_description}}</div></a>
      </div>
      @endforeach
     
@endsection

@section("content")


<div class="gallery-name1" style="margin-left:15px;padding-top:7px;"> </div>
        <div style="clear:both;">
        <div id="ajax-cat">
        @foreach($items as $item)
          <a href="/products/{{$item->item_id}}"><div class="gallery-product3"> <img src="{{$item->image}}" alt="" />
            <div class="gallery-name">{{$item->item_name}}</div>
            <div class="gallery-price">Rs.{{$item->item_price}}</div>
            <img src="images/goshop.jpg" alt="" />
            </div></a>
        @endforeach
        </div> 
        </div>
@endsection