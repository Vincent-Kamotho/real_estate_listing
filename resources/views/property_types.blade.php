<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                    <!-- Add your main content here -->
                <h1>Properties</h1>
                <form action = "{{route('add_property_type')}}" method = "POST">
                    @csrf
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    <div class="row">
                        <div class="col-md-8">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="property_name" placeholder="Enter your name">
                        </div>
                        
                    </div>
                     
                    <button type="submit" class="btn btn-primary" style="margin-top:20px;">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>