<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body style="background-color:#C0C0C0">
  <form action = "{{route('add_property')}}" method = "POST" enctype="multipart/form-data">
    @csrf
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
  <div class="row" style = "margin-top:40px; margin-left:15px;">
    <div class="form-group col-md-5">
        <label for="inputItemName" style="margin-bottom:15px;">Name of Item</label>
        <input type="text" class="form-control" name="item_name" placeholder="Item name" required = "required"/>
    </div>
    <div class="form-group col-md-5">
        <label for="inputPrice" style="margin-bottom:15px;">Price of Item</label>
        <input type="text" class="form-control" name="item_price" placeholder="KES" required = "required"/>
    </div>
    

    <div class="form-group col-md-8">
        <label for="inputItemImage" style="margin-bottom:10px;margin-top:15px;">Image</label>
        <input type="file" class="form-control" name="image">
    </div>
    

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <div>
                <label for="inputItemType" style="margin-bottom:15px;margin-top:15px;">Type of Property</label>
            </div>
            <select class="custom-select" name="property_type" id="property_type">
                <option selected>Choose...</option>
                <option value="Vehicles">Vehicles</option>
                <option value="Mobile Phones and Tablets">Mobile Phones and Tablets</option>
                <option value="Electronics">Electronics</option>
                <option value="Home Furniture & Appliances">Home Furniture & Appliances</option>
                <option value="Health & Beauty">Health & Beauty</option>
                <option value="Fashion">Fashion</option>
            </select>
        </div>
    </div>
    

    <div>
        <div class="form-group col-md-5">
            <label for="inputItemDescription" style="margin-bottom:10px;margin-top:15px;">Item Description</label>
            <textarea class = "form-control" name="item_description" id="item_description" rows="3" required="required"></textarea>
        </div>
    </div>

    <div style="margin-top:25px;">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

  </div>
</form>
  </body>
</html>