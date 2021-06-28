<?php
    $menu = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Mobihub</a>
      </div>
  
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown <?php if($menu =='dealer' || $menu =='product' || $menu =='brand' || $menu =='product-category' || $menu =='sub-category'){?> active <?php } ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Product <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="/admin/dealer">Dealer</a></li>
              <li><a href="/admin/brand">Brand</a></li>
              <li><a href="/admin/product-category">Category</a></li>
              <li><a href="/admin/sub-category">Sub Category</a></li>
              <li class="divider"></li>
              <li><a href="/admin/product">Product All</a></li>
            </ul>
          </li>
           
          <li class="<?php if($menu =='news'){?> active <?php } ?>"><a href="/admin/news">News</a></li>
          <li class="<?php if($menu =='slide'){?> active <?php } ?>"><a href="/admin/slide">Slide</a></li>
          <li class="<?php if($menu =='scalefusion'){?> active <?php } ?>"><a href="/admin/scalefusion">ScaleFusion</a></li>
          <li class=""><a href="#">User</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class=""><a href="#">Report</a></li>
          <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>