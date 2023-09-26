 <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-extra-dark-gray my-4">
  @php
$currentRouteName = \Route::currentRouteName();
@endphp
        @foreach(Route::getRoutes() as $route)
        @if (str_starts_with($route->getName(), 'home.'))
            @php
                $routeName = ucwords(str_replace('home.', '', $route->getName()));
            @endphp  
                                <li class="padding-15px-bottom border-bottom border-color-medium-gray">
                                    <a href="{{ route($route->getName()) }}"   class="{{ $currentRouteName === $route->getName() ? 'active' : '' }}" class="text-tussock-hover">{{  Str::title(str_replace('_', ' ', $routeName)) }}</a>
                                </li>
                       @endif
            @endforeach
</ul>