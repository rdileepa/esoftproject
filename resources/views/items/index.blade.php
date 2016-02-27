@extends('layouts.masterlayout')

@section("sidebar")

      @foreach($categories as $category)
      <div class="sidebar-content">
      <a href="{{URL::to('showcategory')}}/{{$category->cat_id}}" class="category" data-catid="{{$category->cat_id}}" name="_token" value="{{ csrf_token() }}"><div class="left-topic-title">{{$category->cat_title}}</div>
      <div class="left-topic-desc">{{$category->cat_description}}</div></a>
      </div>
      @endforeach
     
@endsection

@section("banner1")
  <div class="lcd-title"> New Year Sale!<br />
          Great HDTV Deals! <br />
          <br />
          <img src="{{URL::to('images/findout.jpg')}}" alt="" /></div>
@endsection

@section("banner2")
  <div class="sale-title"> New Year Sale!</div>
        <div class="sale-desc"> Lorem ipsum dolor sit amet, consectetdipisicing elit, sed do eiusmod tempor incididabore et dolore magna aliqua. Ut enim ad mieniauis nostrud exercitation ullamco laboris nisiliquip ex ea. Lorem ipsum dolor sit amet, consecur adipisicing elit, sed do eiusmod tempcidi <br />
          <br />
          <img src="images/findout.jpg" alt="" /></div>
@endsection

@section("content")

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
@endsection