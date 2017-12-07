{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Products
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('product.list')}}">Product List</a></li>
                </ul>
                <ul>
                    <li><a href="{{route('products.register')}}">Add Product</a></li>
                </ul>
                <ul>
                    <li><a href="{{route('products.category')}}">Add Categories</a></li>
                </ul>
                <ul>
                    <li><a href="{{route('content.index')}}">Add Contents</a></li>
                </ul>
                <ul>
                    <li><a href="{{route('products.orders')}}">Orders</a></li>
                </ul>
                {{--<ul>--}}
                    {{--<li><a href="{{route('wallpaper')}}">Add wallpaper</a></li>--}}
                {{--</ul>--}}
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->