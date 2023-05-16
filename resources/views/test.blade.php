<!DOCTYPE html>
<html>

<head>
    <title>MyBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
</head>

<body>
    <div class="container">
        <!-- <div class="panel-heading">
            <button type="button" id="btn-modal-add" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah data
            </button>
        </div>
        @if(count($post) > 0)
        <table class="table table-striped tblpost">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $num_val = 0
                @endphp
                @foreach ($post as $object)
                @php
                $num_val++
                @endphp
                <tr>
                    <th scope="row">{{$num_val}}</th>
                    <td>{{$object->title}}</td>
                    <td>{{$object->body}}</td>
                    <td>{{$object->slug}}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger">
                            Delete
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h1>Data Not Found</h1>
        @endif
    </div> -->

        <div class="panel-heading">
            <button type="button" id="btn-modal-add" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah data
            </button>
        </div>
        <table class="table table-striped tblpost">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>


    <!-- @foreach ($post as $object)
    <h1>{{$object->title}}</h1>
    <div>{{$object->body}}</div>
    <div>{{$object->slug}}</div>
    @endforeach -->

    <!-- <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <button type="button" id="btn-modal-add" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah data
                    </button>
                </div>
                <div class="panel-body">
                    <div class="col-md-12 form-group">
                        <div class="table-responsive">
                            <table class="table table-list">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Product</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Title</label>
                            <input type="text" class="form-control form-control-sm title" />
                        </div>
                        <div class="col-sm-12 form-group">
                            <label>Body</label>
                            <input type="text" class="form-control form-control-sm body" />
                            <!-- <input type="text" class="form-control form-control-sm harga-produk" name="currency-field" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="1,000,000.00"> -->
                        </div>
                        <div class="col-sm-12 form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control form-control-sm slug" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-save">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script> -->
    <script type="text/javascript">
        // function startRefresh() {

        //     // $.get('', function(data) {
        //     //     $(".tblpost").html(data);
        //     // });
        // }
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }

            });

            oTable = $('.tblpost').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ 'api/posts-list' }}",
                "columns": [{
                        data: '_id',
                        ordertable: false,
                        sortable: false,
                        className: 'text-center',
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }

                    },
                    {
                        data: 'title',
                        className: 'text-center',

                    },
                    {
                        data: 'body',
                        className: 'text-center',

                    },
                    {
                        data: 'slug',
                        ordertable: false,
                        sortable: false,
                        className: 'text-center'

                    },
                    // {
                    //     data: 'action',
                    //     ordertable: false,
                    //     sortable: false,
                    //     className: 'text-center'

                    // }
                ]
            });

            console.log(oTable);

            $(document).on('click', '#btn-modal-add', function() {
                $('#exampleModal').modal('show');
            });

            $(document).on('click', '.btn-save', function() {
                console.log("click");
                $.ajax({
                    type: 'POST',
                    url: "{{ route('posts.store') }}",
                    data: {
                        title: $('.title').val(),
                        body: $('.body').val(),
                        slug: $('.slug').val()
                    },
                    success: function(data) {
                        $('#exampleModal').modal('hide');
                        // oTable.ajax.reload(null,true);
                        // startRefresh();
                        $('.title').val(''),
                            $('.body').val(''),
                            $('.slug').val('')
                    }
                });

            });

        })
    </script>
</body>

</html>