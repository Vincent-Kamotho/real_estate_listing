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
    <div class="container-fluid">
        <!-- Header -->
        <div class="row">
            <div class="col">
                <!-- Add your header content here -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Main Content -->
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <!-- Add your sidebar content here -->
                <div class="sidebar">
                    <ul id="sidebarMenu" class="sidebar-menu">
                        <li class = "active">
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#category2" aria-expanded="false" aria-controls="category2">
                                <span class="caret"></span>Configuration
                            </a>
                            <ul id="category2" class="collapse nested">
                                <li><a href="{{route('property_types')}}">Property Types</a></li>
                                <li><a href="{{route('property_sub_types')}}">Property Subtypes</a></li>
                                <li><a href="{{route('add_property')}}">Property Subtype Hierarchies</a></li>
                            </ul>
                        </li>  
                    </ul>
                </div>
            </div>
            <!-- Main Content Area -->
            <div class="col-md-9">
                <!-- Add your main content here -->
                <h1>Form Section</h1>
                <form>
                    <div class="row">
                        <div class="col">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
