<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <script>
            @if(Session::has('success_message'))
                toastr.success("{{ Session::get('success_message') }}")
            @endif
        </script>
    <div class="registration-form">

        <form action="/add" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" name="phoneName" class="form-control item" id="phoneName" placeholder="Phone Name">
            </div>
            <div class="form-group">
                <input type="text" name="price" class="form-control item" id="price" placeholder="Price">
            </div>
            <div class="form-group">
                <input type="text" name="color" class="form-control item" id="color" placeholder="Color">
            </div>
            <div class="form-group">
                <input type="text" name="size" class="form-control item" id="size" placeholder="Size">
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control item" id="image" placeholder="Camera" accept=".gif,.jpg,.jpeg,.png,.svg,">
            </div>


            <h4 class="ml-2">Specifications</h4>
            <div class="form-group">
                <input type="text" name="processor" class="form-control item" id="processor" placeholder="Processor">
            </div>
            <div class="form-group">
                <select id="inputState" name="ram" class="form-control item p-2" required>
                    <option selected>Choose RAM...</option>
                    <option>2GB</option>
                    <option>3GB</option>
                    <option>4GB</option>
                    <option>6GB</option>
                    <option>8GB</option>
                    <option>12GB</option>
                    <option>16GB</option>
                  </select>
            </div>
            <div class="form-group">
                <select id="inputState" name="storage" class="form-select form-control item p-2" required>
                    <option selected>Choose Storage...</option>
                    <option>16GB</option>
                    <option>32GB</option>
                    <option>64GB</option>
                    <option>128GB</option>
                    <option>256GB</option>
                    <option>512GB</option>
                    <option>1TB</option>
                    <option>2TB</option>
                  </select>
            </div>
            <div class="form-group">
                <input type="text" name="camera" class="form-control item" id="camera" placeholder="Camera" >
            </div>
            <div class="form-group">
                <input type="text" name="display" class="form-control item" id="display" placeholder="Display">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-block create-account" value="Submit">
            </div>

        </form>
    </div>
    </div>


</body><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>
