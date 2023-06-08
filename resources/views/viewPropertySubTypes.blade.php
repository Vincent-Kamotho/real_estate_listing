<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/sales-html/Layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 May 2023 15:21:41 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Property Subtypes</title>
    <link rel="icon" href="{{asset('myassets/img/logo.png')}}" type="image/png">

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
                                        <h1 class="m-0">Property Subtypes</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="white_box_tittle list_header">
                                    <h4>Property Subtypes Listing</h4>
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
                                            <a href="{{route('property_subtypes1')}}" class="btn btn-success">Add Propety Type</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Property Type</th>
                                            <th scope="col">Property Subtype</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    @foreach ($propertyTypes as $propertyType)
                                    <tbody>
                                        <tr>
                                            <td>{{$propertyType->property_types}}</td>
                                            <td>{{$propertyType->property_subtypes }}</td>
                                            <td>
                                                <a href="{{url('edit_property_subtype/'.$propertyType->id)}}" class="btn btn-success">Edit</a>
                                                <a href="{{url('delete_property_type/'.$propertyType->id)}}" class="btn btn-danger">Delete</a>
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


    </section>

    <script src="{{asset('myassets/js/jquery1-3.4.1.min.js')}}"></script>

    <script src="{{asset('myassets/js/popper1.min.js')}}"></script>

    <script src="{{asset('myassets/js/bootstrap.min.html')}}"></script>

    <script src="{{asset('myassets/js/metisMenu.js')}}"></script>

    <script src="{{asset('myassets/vendors/count_up/jquery.waypoints.min.js')}}"></script>

    <script src="{{asset('myassets/vendors/chartlist/Chart.min.js')}}"></script>

    <script src="{{asset('myassets/vendors/count_up/jquery.counterup.min.js')}}"></script>

    <script src="{{asset('myassets/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('myassets/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('myassets/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('myassets/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('myassets/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('myassets/vendors/datatable/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('myassets/vendors/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('myassets/vendors/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('myassets/vendors/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('myassets/vendors/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('myassets/vendors/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('myassets/js/chart.min.js')}}"></script>

    <script src="{{asset('myassets/vendors/progressbar/jquery.barfiller.js')}}"></script>

    <script src="{{asset('myassets/vendors/tagsinput/tagsinput.js')}}"></script>

    <script src="{{asset('myassets/vendors/text_editor/summernote-bs4.js')}}"></script>
    <script src="{{asset('myassets/vendors/am_chart/amcharts.js')}}"></script>

    <script src="{{asset('myassets/vendors/scroll/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('myassets/vendors/scroll/scrollable-custom.js')}}"></script>
    <script src="{{asset('myassets/vendors/chart_am/core.js')}}"></script>
    <script src="{{asset('myassets/vendors/chart_am/charts.js')}}"></script>
    <script src="{{asset('myassets/vendors/chart_am/animated.js')}}"></script>
    <script src="{{asset('myassets/vendors/chart_am/kelly.js')}}"></script>
    <script src="{{asset('myassets/vendors/chart_am/chart-custom.js')}}"></script>

    <script src="{{asset('myassets/js/custom.js')}}"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/sales-html/Layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 May 2023 15:21:41 GMT -->


</html>