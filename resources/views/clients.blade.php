<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sales</title>
    <link rel="icon" href="img/logo.png" type="image/png">

    <link rel="stylesheet" href="{{asset('myassets/css/bootstrap1.min.css')}}" />

    <link rel="stylesheet" href="{{asset('myassets/vendors/themefy_icon/themify-icons.css')}}" />

    <link rel="stylesheet" href="{{asset('myassets/vendors/niceselect/css/nice-select.css')}}" />

    <link rel="stylesheet" href="{{asset('myassets/vendors/owl_carousel/css/owl.carousel.css')}}" />

    <link rel="stylesheet" href="{{asset('myassets/vendors/gijgo/gijgo.min.css')}}" />

    <link rel="stylesheet" href="{{asset('myassets/vendors/font_awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('myassets/vendors/tagsinput/tagsinput.css')}}" />

    <link rel="stylesheet" href="{{asset('myassets/vendors/datepicker/date-picker.css')}}" />

    <link rel="stylesheet" href="{{asset('myassets/vendors/scroll/scrollable.css')}}" />

    <link rel="stylesheet" href="{{asset('myassets/vendors/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('myassets/vendors/datatable/css/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('myassets/vendors/datatable/css/buttons.dataTables.min.css')}}" />

    <link rel="stylesheet" href="{{asset('myassets/vendors/text_editor/summernote-bs4.css')}}" />

    <link rel="stylesheet" href="{{asset('myassets/vendors/morris/morris.css')}}">

    <link rel="stylesheet" href="{{asset('myassets/vendors/material_icon/material-icons.css')}}" />

    <link rel="stylesheet" href="{{asset('myassets/css/metisMenu.css')}}">

    <link rel="stylesheet" href="{{asset('myassets/css/style1.css')}}" />
    <link rel="stylesheet" href="{{asset('myassets/css/colors/default.css" id="colorSkinCSS')}}">
</head>

<body class="crm_body_bg">
    @include('includes.sidebar')

    <section class="main_content dashboard_part large_header_bg">
        <div class="main_content_iner ">
            <div class="container-fluid p-0 sm_padding_15px">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Clients</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header">
                                        <h4>Clients List</h4>
                                        <div class="box_right d-flex lms_block">
                                            <div class="serach_field_2">
                                                <div class="search_inner">
                                                    <form active="#">
                                                        <div class="search_field">
                                                            <input type="text" placeholder="Search content here...">
                                                        </div>
                                                        <button type="submit"> <i class="ti-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="add_button ms-2">
                                                <a href="{{route('addClients')}}" class="btn btn-success">Add Client</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="QA_table mb_30">
                                        @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show">
                                            {{ session('success') }}
                                        </div>
                                        @endif
                                        <table class="table lms_table_active ">
                                            
                                            <thead>
                                                <tr>
                                                    <th scope="col">First Name</th>
                                                    <th scope="col">Last Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Contacts</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            @foreach ($clients as $client)
                                            <tbody>
                                                <tr>
                                                    <td>{{$client ->first_name }}</td>
                                                    <td>{{$client ->last_name }}</td>
                                                    <td>{{$client ->email }}</td>
                                                    <td>{{$client ->contacts }}</td>
                                                    <td>{{$client ->address }}</td>
                                                    <td>
                                                        <a href="{{url('edit_client/'.$client->id)}}" class="btn btn-success">Edit</a>
                                                        <a href="{{url('delete_client/'.$client->id)}}" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>