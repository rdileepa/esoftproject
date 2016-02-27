@extends('layouts.masterlayout')

@section("sidebar")

      @foreach($categories as $category)
      <div class="sidebar-content">
      <a href="{{URL::to('showcategory')}}/{{$category->cat_id}}" class="category" data-catid="{{$category->cat_id}}" name="_token" value="{{ csrf_token() }}"><div class="left-topic-title">{{$category->cat_title}}</div>
      <div class="left-topic-desc">{{$category->cat_description}}</div></a>
      </div>
      @endforeach
     
@endsection



@section("content")
    
      <div id="center" class="column">
      <div class="gallery-name1" style="margin-left:15px;padding-top:7px;"> </div>
          <div style="clear:both;">
     
            <div class="sale-title"> {{$items[0]->item_name}}</div>
                <img src="{{URL::to($items[0]->image)}}" alt="" />
                <div class="sale-desc"> {{$items[0]->item_description}} <br />
                  <br />
                 <a href="/addcart/{{$items[0]->item_id}}"> <img src="{{URL::to('images/buy_button.png')}}" alt="" /></a></div>
           </div>
      
      </div>
    
    
    
 

   @endsection

