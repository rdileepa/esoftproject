<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Shop Online</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="{{URL::to('style/style.css')}}" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{{URL::to('js/sites.js')}}"></script>



<!--[if IE]>
<link href="style/style-ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<center>
  <div class="wrapper">
    <div class="logo"> Shop<strong>Online</strong></div>
    <div class="menu">
      <ul class="solidblockmenu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">User Guide</a></li>
        <li><a href="#">Reviews</a></li>
        <li><a href="#">Hot Deals</a></li>
        <li><a href="#">FAQ's</a></li>
      </ul>
      <div class="clear"></div>
    </div>
  </div>
  <div class="search">
    <div class="search-text"> Search the world of shopping!&nbsp;
      <input type="text" size="40" />
      &nbsp;&nbsp;</div>
    <div style="float:left; margin-left:5px; margin-top:10px;">
      <input type="image" src="{{URL::to('images/search.jpg')}}" />
    </div>
  </div>
  <div class="hot-search">
    <div class="hot-search-text"> Hot Searches: Apple iPod Nano, Hugo Boss Clothing, HD DVD Player, DSLR Camera, Toshiba 32&quot; LCD TV, Unsecured Loans, Excersise Machines..</div>
  </div>
  <div class="body-wrapper single-product">



    

    <div class="body-right">
      <div class="body-right-box1">
        <div class="right-topic-title"> Favourite Items</div>
        <br />
        <div style="width:170px;padding-left:10px;"> <img src="{{URL::to('images/mobile.jpg')}}" style="float:left; margin-right: 0px;" alt="" />
          <div style="width:140px; text-align:right; padding-left:3px;">
            <div class="product-title"> Nokia 8800 Arte</div>
            <div class="product-price"> prices &nbsp;from &nbsp;&pound;749.99</div>
            <div class="product-compare"> <u>Compare..</u>&nbsp;<img src="{{URL::to('images/proceed.jpg')}}" style="padding-top: 3px;" alt="" /></div>
          </div>
        </div>
        <br />
        <div style="width:170px;padding-left:10px;padding-top:3px;"> <img src="{{URL::to('images/mobile.jpg')}}" style="float:left; margin-right: 0px;" alt="" />
          <div style="width:140px; text-align:right; padding-left:3px;">
            <div class="product-title"> Nokia 8800 Arte</div>
            <div class="product-price"> prices &nbsp;from &nbsp;&pound;749.99</div>
            <div class="product-compare"> <u>Compare..</u>&nbsp;<img src="{{URL::to('images/proceed.jpg')}}" style="padding-top: 3px;" alt="" /></div>
          </div>
        </div>
        <br />
        <div style="width:170px;padding-left:10px;padding-top:1px;"> <img src="{{URL::to('images/mobile.jpg')}}" style="float:left; margin-right: 0px;" alt="" />
          <div style="width:140px; text-align:right; padding-left:3px;">
            <div class="product-title"> Nokia 8800 Arte</div>
            <div class="product-price"> prices &nbsp;from &nbsp;&pound;749.99</div>
            <div class="product-compare"> <u>Compare..</u>&nbsp;<img src="{{URL::to('images/proceed.jpg')}}" style="padding-top: 3px;" alt="" /></div>
          </div>
        </div>
        <br />
        <div style="width:170px;padding-left:10px;padding-top:2px;"> <img src="{{URL::to('images/mobile.jpg')}}" style="float:left; margin-right: 0px;" alt="" />
          <div style="width:140px; text-align:right; padding-left:3px;">
            <div class="product-title"> Nokia 8800 Arte</div>
            <div class="product-price"> prices &nbsp;from &nbsp;&pound;749.99</div>
            <div class="product-compare"> <u>Compare..</u>&nbsp;<img src="{{URL::to('images/proceed.jpg')}}" style="padding-top: 3px;" alt="" /></div>
          </div>
        </div>
        <br />
        <div style="width:170px;padding-left:10px;padding-top:2px;"> <img src="{{URL::to('images/mobile.jpg')}}" style="float:left; margin-right: 0px;" alt="" />
          <div style="width:140px; text-align:right; padding-left:3px;">
            <div class="product-title"> Nokia 8800 Arte</div>
            <div class="product-price"> prices &nbsp;from &nbsp;&pound;749.99</div>
            <div class="product-compare"> <u>Compare..</u>&nbsp;<img src="{{URL::to('images/proceed.jpg')}}" style="padding-top: 3px;" alt="" /></div>
          </div>
        </div>
      </div>
      <div class="separator"> &nbsp;</div>
      <div class="body-right-ad1"> &nbsp;</div>
      <div class="separator"> &nbsp;</div>
      <div class="body-right-ad2"> &nbsp;</div>
      <div class="separator"> &nbsp;</div>
      <div class="body-right-ad3"> &nbsp;</div>
    </div>
    <div class="divider1"> &nbsp;</div>
    <div class="body-middle">
      
      <div class="separator-middle"> &nbsp;</div>
      <div class="body-middle-box2">
        <div class="sale-title"> {{$items[0]->item_name}}</div>
        <img src="{{$items[0]->image}}" alt="" />
        <div class="sale-desc"> {{$items[0]->item_description}} <br />
          <br />
         <a href="/addcart/{{$items[0]->item_id}}"> <img src="{{URL::to('images/buy_button.png')}}" alt="" /></a></div>
      </div>
      <div class="separator-middle"> &nbsp;</div>
      
    </div>
    
    
  </div>
  <div class="separator-main"> &nbsp;</div>
  <div class="footer">
    <div class="footer-text" style="padding-top:10px;margin-left:20px;"> <a href="#" class="nav1">Home</a>&nbsp;&nbsp;<span style="color:#dbdbdb">|</span>&nbsp;&nbsp;<a href="#" class="nav1">Categories</a>&nbsp;&nbsp;<span style="color:#dbdbdb">|</span>&nbsp;&nbsp;<a href="#" class="nav1">User Guide</a>&nbsp;&nbsp;<span style="color:#dbdbdb">|</span>&nbsp;&nbsp;<a href="#" class="nav1">Reviews</a>&nbsp;&nbsp;<span style="color:#dbdbdb">|</span>&nbsp;&nbsp;<a href="#" class="nav1">Hot Deals</a>&nbsp;&nbsp;<span style="color:#dbdbdb">|</span>&nbsp;&nbsp;<a href="#" class="nav1">FAQ&#8217;s</a>&nbsp;&nbsp;<span style="color:#dbdbdb">|</span>&nbsp;&nbsp;<a href="#" class="nav1">Contact</a>&nbsp;&nbsp;<span style="color:#dbdbdb">|</span>&nbsp;&nbsp;<a href="#" class="nav1">Privacy Policy</a></div>
    <div class="footer-text" style="padding-top:20px;margin-left:20px;"> Copyright &copy; 2003-2008 <a href="#">www.My Template.com.</a> All Rights Reserved.
      <div class="desby">Designed By: <a href="http://www.elegant-templates.com">Elegant Web Templates</a></div>
    </div>
  </div>
</center>

</body>
</html>