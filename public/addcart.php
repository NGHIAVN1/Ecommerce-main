<div class="header__top">
        <div>
            <a href="/" class="header__logo">
                <i class="iconnewglobal-logo"></i>
            </a>
            
<form action="/tim-kiem" onsubmit="return suggestSearch(event);" class="header__search">
    <input id="skw" type="text" class="input-search" onkeyup="suggestSearch(event);" placeholder="Bạn tìm gì..." name="key" autocomplete="off" maxlength="100">
    <button type="submit">
        <i class="icon-search"></i>
    </button>
    <div id="search-result"></div>
</form>
<a href="/lich-su-mua-hang" class="name-order">
    Tài khoản &amp; Đơn hàng
</a>
<a href="/cart" class="header__cart menu-info">
    <div class="box-cart">
        <i class="iconnewglobal-cart"></i>
        <span class="cart-number"></span>
    </div>
    <span>Giỏ hàng</span>
</a>
   </div>
    </div>