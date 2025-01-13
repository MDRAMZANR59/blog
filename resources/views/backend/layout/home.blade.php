@extends('backend.app')
@section('Content')
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header p-3">
                <h3 class="d-inline">Blog List</h3>
                <!-- Add Blog Button -->
                <a href="{{ route('blogForm') }}" class="btn btn-primary btn-sm float-end">Add Blog</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th width="100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

@push('script')
<script type="text/javascript">
    $(function () {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            iDisplayLength: 25,
            retrieve: true,

            ajax: "{{ route('admin') }}",

            columns: [
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'description', name: 'description'},
                {data: 'image', name: 'image', render: function(data, type, row) {
                    return data ? '<img src="{{ asset('images') }}/'+ data +'" alt="image" style="width: 50px; height: 50px;">' : 'No image';
                }},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>
@endpush

@endsection
