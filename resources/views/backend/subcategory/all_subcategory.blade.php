
@extends('backend.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-baseline">
                        <h4 class="m-0">All Subcategories</h4>
                        <button class="btn btn-sm btn-primary add_btn">Create Subcategory+</button>
                    </div>
                    <div class="card-body subcat">
                        <select name="" id="subcat_filter">
                            <option value="all">All Category</option>
                            @foreach($categories as $row)
                                <option value="{{$row->id}}" @if(!empty($selectedCat) && $selectedCat == $row->id) selected @endif>{{$row->name}}</option>
                            @endforeach
                        </select>
                        <table class="table table-striped table-hover" id="sortableTable">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Subcategory Name</th>
                                <th scope="col">Under Category</th>
                                <th scope="col" class="text-right no-sorting">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($subcategories->count() > 0)
                                @foreach($subcategories as $row)
                                    <tr>
                                        <th scope="row">{{$row->id}}</th>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->category->name}}</td>
                                        <td class="text-right">
                                            <button class="btn btn-primary btn-sm edit_btn" data-name="{{$row->name}}" data-id="{{$row->id}}" data-catID="{{$row->category->id}}">Edit</button>
                                            <a href="{{route('subcategory.destroy', $row->id)}}" class="btn btn-primary btn-sm delete_btn">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" class="text-center">no data avilable</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="createCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{route('subcategory.store')}}" method="post" id="modalForm">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Add Subcategory</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="subcategory">Select Category:</label>
                            <select class="form-control" id="category" name="category_id">
                                <option class="default" value="">Select Category</option>
                                @foreach($categories as $row)
                                    <option value="{{$row->id}}" >{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input name="name" id="catName" type="text" class="form-control" placeholder="Subcategory Name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script !src="">
        $('.edit_btn').click(function(){
            let name = $(this).attr('data-name');
            let id = $(this).attr('data-id');
            let prevCat = $(this).attr('data-catID');
            $('#createCat').modal('show');
            $('#catName').val(name);
            $('#category option[value="' + prevCat + '"]').prop('selected', true);
            $('#modalForm').attr('action', '/subcategory/update/'+id);
            $('#modalTitle').text('Edit Subcategory');
        })

        $('.add_btn').click(function(){
            $('#createCat').modal('show');
            $('#modalForm').trigger("reset");
            $('#modalForm').attr('action', '/subcategory/store');
            $('#modalTitle').text('Add Subcategory');
        })

        $(document).on('change', '#subcat_filter', function(){
            loaderShow();
            let filtID = $(this).children("option:selected").val();
            window.location = '/subcategory/filter/'+filtID;
        })
    </script>
@endsection
