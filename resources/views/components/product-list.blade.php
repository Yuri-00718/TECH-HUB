<script src="https://www.paypal.com/sdk/js?client-id=Aeeb0jTe3Q84pU6ylaJibtj0iTzSfLWBjPz3C6T7Eo0kOvXS_bwRK2OL4Oo7FfTJUTlkQKhptD-LworF"></script>
<link rel="stylesheet" type="text/css" href="css/buttons-card.css">
<link rel="stylesheet" href="{{ asset('css/product-list.css') }}">

<div class="container-fluid py-5">
    <div class="col-10 mx-auto">
        <h1 class="text-center">Recommended Products</h1>
        <div class="filter">
        <label for="product-for-filter">Recommended For:</label>
        <select id="product-for-filter" class="form-select">
            <option value="">All Products</option>
            <option value="Student">Student</option>
            <option value="IT Professional">IT Professional</option>
            <option value="Editing">Editing</option>
            <option value="Budget Friendly">Budget Friendly</option>
            <option value="Gaming">Gaming</option>
        </select>
        </div>
        <div class="text-center my-4">
            {{$slot}}
        </div>


    <div class="row row-cols-4 gap-5 justify-content-center" id="product-list">
        @foreach($products as $product)
        <div class="card col p-0 product-item" data-price="{{$product['price']}}" data-product-for="{{$product['product_for']}}">
            <img src="{{ asset('/img/'.$product->img)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title">{{$product['product_name']}}</h4>
                <p class="card-text mb-2">Price: ₱{{$product['price']}}</p>
                <p class="card-text mb-0">Recommended For: {{$product['product_for']}}</p>
                @if($admin)
                <div class="d-flex gap-2">
                    <a href="/shop/edit/{{$product['id']}}" class="btn-dark-green text-decoration-none">Edit</a>
                    <form action="{{route('delete', ['id' => $product['id']])}}" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit" value="Delete" name="submit" class="btn btn-danger rounded-0 text-decoration-none" onclick="return confirm('Are you sure to delete?')">Delete </button>
                    </form>
                </div>
                @else
                <div id="paypal-button-container-{{$product['id']}}">
                    <script>
                        paypal.Buttons({
                            createOrder: function(data, actions) {
                                return actions.order.create({
                                    purchase_units: [{
                                        amount: {
                                            value: '{{$product['price']}}'
                                        }
                                    }]
                                });
                            },
                            onApprove: function(data, actions) {
                                return actions.order.capture().then(function(details) {
                                    console.log(details);
                                    window.location.href = "/shop/success";
                                });
                            }
                        }).render('#paypal-button-container-{{$product['id']}}');
                    </script>
                </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
<script>
        const filterSelect = document.querySelector('#product-for-filter');
        const cards = document.querySelectorAll('.card');

        function applyFilter() {
            let selectedFilterValue = filterSelect.value;

            // Filtering products by Recommended For
            cards.forEach(card => {
            let productFor = card.getAttribute('data-product-for');
            if(selectedFilterValue === '' || selectedFilterValue === productFor) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
            });
        }

        filterSelect.addEventListener('change', applyFilter);

        // Calling the function initially
        applyFilter();
</script>