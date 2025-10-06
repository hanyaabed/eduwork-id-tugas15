<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">MyEcommerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home_page') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('product_page') }}">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('cart_page') }}">Cart</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Checkout</a></li>
            </ul>
        </div>
    </div>
</nav>