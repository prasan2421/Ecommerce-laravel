<div  class="top-bar">
<div style="color:white" class="top-bar-left">
<h4 class="brand-title">
<a href="{{route('index')}}">
<i class="fa fa-home fa-lg" aria-hidden="true">
</i>
  MC-MyKey Shirts
                    </a>
                                 </h4>
                                   </div>
                                     <div class="top-bar-right">
<ol class="menu">

        <li>
            <form action="{{route('search')}}" method="get" class="form-inline">
                {{csrf_field()}}
                <div class="form-group " >
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Search..." id="search" style="width: 200px; height: 40px;" value="{{isset($search) ? $search :''}}">
                    </div>
                    <div class="form-group " >
                        <button class="button small" type="submit">Search</button>
                    </div>
                </div>
            </form>

        </li>

<li>
 <a href="{{route('shirts')}}">
SHIRTS
                        </a>
                          </li>
                            <li>
                            <a href="{{route('index.content')}}">
CONTENT
                        </a>
                          </li>
    <li>
        @if(Auth::guard('clients')->check())
            <div style="color: #FFFFFF;">  {{Auth::user()->name}} </div>

            <div style="color: #FFFFFF;">

            @if ( Auth::user()->gender==0)
                    male
            @elseif(Auth::user()->gender==1)
            female
            @else
            not specified</div>
        @endif


        <a href="{{route('client.logout')}}">

              Logout

        </a>
            @else

            <a href="{{route('client.login')}}">


                    LOGIN

            </a>
            @endif

    </li>
                            <li>
                            <a href="{{route('cart.index')}}">
<i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
</i>
  CART
                            <span class="alert badge">
{{Cart::count()}}
</span>
  </a>
    </li>
      </ol>
        </div>
          </div>