
<x-backend.master>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">

                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3 class="mb-3">{{$journalist->count()}}</h3>
                                <span>Total Journalist</span>
                            </div>
                            <div class="card-icon "><i class="fas fa-user"></i></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<x-slot name="script">
    <script !src="">

    </script>
</x-slot>
</x-backend.master>
