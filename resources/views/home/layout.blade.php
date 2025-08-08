@include("home.partial.header")
   <main>
        @yield('content')
        @yield('login')
        @yield('register')
        @yield('profile')
        @yield('singleBlog')
    </main>
@include("home.partial.footer")

    