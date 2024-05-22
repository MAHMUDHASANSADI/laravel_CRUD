<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD-C</title>
</head>

<body>
    {{-- <div class="bg-dark py-3">
        <h2 class="text-white text-center">Simple Crud</h2>
    </div> --}}
    <div class="container">
        <div class="justify-content-center">
            <a href="{{ route('product.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="row d-flex justify-content-center">
            @if (Session::has('success'))
                <div class="col-md-10">
                    <div class="aler alert-success">{{ Session::get('success') }}</div>
                </div>
            @endif
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-3">
                    <div class="card-header bg-dark">
                        <h3 class="text-primary">Products</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Sku</th>
                                <th>Price</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            @if ($products->count() > 0)
                                @foreach ($products as $key => $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->sku }}</td>
                                        <td>{{ $product->price }}</td>

                                        <td><a href="{{ route('product.edit', $product->id) }}"
                                                class="btn btn-primary text-dark">edit</a>
                                            <a href="#" onclick="deleteProduct({{ $product->id }}); "
                                                class="btn btn-danger text-dark">delete</a>
                                            <form id="delete-product-from-{{ $product->id }}"
                                                action="{{ route('product.delete', $product->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>




                </div>

            </div>

        </div>
    </div>
</body>

</html>
<script>
    function deleteProduct(id) {
        if (confirm('are you sure?')) {
            document.getelementById('delete-product-from' + id).submit();

        }
    }
</script>
