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
    <div class="bg-dark py-3">
        <h2 class="text-white text-center">Simple Crud</h2>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-3">
                    <div class="card-header bg-dark">
                        <h3 class="text-primary">Product Edit</h3>
                    </div>
                    <div class="justify-content-center">
                        <a href="{{ route('product.create', $product->id) }}" class="btn btn-primary">back</a>
                    </div>

                    <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="card-body h5">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input value="{{ old('name', $product->name) }}" type="text"
                                    class=" @error('name') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Name" name="name">
                                @error('name')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">SKU</label>

                                <input value="{{ old('sku', $product->sku) }}" type="text"
                                    class=" @error('name') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Sku" name="sku">

                                @error('sku')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Price</label>
                                <input value="{{ old('price', $product->price) }}" type="text"
                                    class=" @error('name') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Price" name="price">
                                @error('price')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <textarea name="description" placeholder="description" class="form-control" id="" cols="30"
                                    rows="10">{{ old('description', $product->description) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control form-control-lg" placeholder=""
                                    name="image">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Update</button>
                            </div>

                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>
</body>

</html>
