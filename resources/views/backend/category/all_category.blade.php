<x-backend.master>
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-baseline">
                        <h4 class="m-0">All Categories</h4>
                        <button class="btn btn-sm btn-primary add_btn">Create Category+</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover" id="sortableTable">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Category Name</th>
                                <th scope="col" class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($categories->count() > 0)
                                @foreach($categories as $row)
                                    <tr>
                                        <th scope="row">{{$row->id}}</th>
                                        <td>{{$row->name}}</td>
                                        <td class="text-right">
                                            <button class="btn btn-primary btn-sm edit_btn" data-name="{{$row->name}}" data-id="{{$row->id}}">Edit</button>
                                            <a href="{{route('category.destroy', $row->id)}}" class="btn btn-primary btn-sm delete_btn">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" class="text-center">no data avilable</td>
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
            <form action="{{route('category.store')}}" method="post" id="modalForm">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input name="name" id="catName" type="text" class="form-control" placeholder="Category Name">
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

    <x-slot name="script">
        <script !src="">
            $('.edit_btn').click(function(){
                let name = $(this).attr('data-name');
                let id = $(this).attr('data-id');
                $('#createCat').modal('show');
                $('#catName').val(name);
                $('#modalForm').attr('action', '/category/update/'+id);
                $('#modalTitle').text('Edit Category');
            })

            $('.add_btn').click(function(){
                $('#createCat').modal('show');
                $('#catName').val('');
                $('#modalForm').attr('action', '/category/store');
                $('#modalTitle').text('Add Category');
            })
        </script>
    </x-slot>
</x-backend.master>
