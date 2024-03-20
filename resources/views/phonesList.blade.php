<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Card Template</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .product-card {
      border: 1px solid #dee2e6;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .product-img {
      height: 200px;
      overflow: hidden;
    }
    .product-img img {
      width: 100%;
      height: auto;
    }
    .product-info {
      padding: 20px;
    }
    .product-title {
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .product-price {
      font-size: 1.1rem;
      color: #007bff;
      margin-bottom: 10px;
    }
    .product-description {
      font-size: 1rem;
      color: #6c757d;
      margin-bottom: 20px;
    }
    .btn {
      background-color: #007bff;
      color: #fff;
      border-radius: 20px;
      transition: all 0.3s ease;
    }
    .btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-4 mb-4">
      @foreach($record as $hai)
        <div class="product-card">
            <div class="product-img">
                <img src="{{ asset('/img/'.$hai->image) }}" alt="Product Image">
            </div>
            <div class="product-info">
            <h3 class="product-title">{{ $hai->phone_name }}</h3>
            <p class="product-price">{{ $hai->price }}</p>
            <ul class="product-description">
                <li>{{ $hai->color }}</li>
                <li>{{ $hai->size }}</li>
                <li>{{ $hai->processor }}</li>
                <li>{{ $hai->ram }}</li>
                <li>{{ $hai->storage }}</li>
                <li>{{ $hai->camera }}</li>
                <li>{{ $hai->display }}</li>
            </ul>
            <button class="btn btn-sm">Add to Cart</button>
            </div>
        </div>
      @endforeach
    </div>
    <!-- Add more product cards here if needed -->
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>