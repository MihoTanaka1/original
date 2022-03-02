@include("parts.header")
    <main class="py-4">
        {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
        @yield('content')
    </main>
@include("parts.footer")