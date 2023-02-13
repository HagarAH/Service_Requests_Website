@extends('layouts.main')
@section('content')
    <!-- BEGIN Page Content -->
    <!-- the #js-page-content id is needed for some plugins to initialize -->
    <div class="page-content">
        <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-th-list'></i> @yield('title')  Listesi
                        </h1>
                    </div>

                    <div id="panel-1" class="panel col-12">

                        <div class="panel-container show">
                            <div class="panel-content">

                                <!-- datatable start -->
                                <table id="dt-basic-example"
                                       class="table table-bordered table-hover table-striped w-100">
                                    <thead class="bg-primary-600">
                                    @yield('head')
                                    </thead>
                                    <tbody>
                                    @yield('body')
                                    </tbody>
                                </table>
                                <!-- datatable end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script>
        $(document).ready(function () {

            // initialize datatable
            $('#dt-basic-example').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    dom:
                    /*	--- Layout Structure
                        --- Options
                        l	-	length changing input control
                        f	-	filtering input
                        t	-	The table!
                        i	-	Table information summary
                        p	-	pagination control
                        r	-	processing display element
                        B	-	buttons
                        R	-	ColReorder
                        S	-	Select

                        --- Markup
                        < and >				- div element
                        <"class" and >		- div with a class
                        <"#id" and >		- div with an ID
                        <"#id.class" and >	- div with an ID and a class

                        --- Further reading
                        https://datatables.net/reference/option/dom
                        --------------------------------------
                     */
                        "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        {
                            text: 'Ekle',
                            action: function () {
                                window.location.href = @yield('route')
                            },
                            className: 'btn-outline-info btn-sm mr-1'
                        },
                    ],
                    columnDefs: [

                        {
                            "targets": 0,
                            "width": "5%"
                        },
                    ],
                });

        });

    </script>
@endsection
