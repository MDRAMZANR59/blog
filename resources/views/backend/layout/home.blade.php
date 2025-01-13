@extends('backend.app')
@section('Content')
<body>
    <div class="container">
        <div class="card mt-5">
            <h3 class="card-header p-3">Blog List</h3>
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

<script type="text/javascript">
    $(function () {

      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('admin') }}",  // Update to point to the correct route for blogs
          columns: [
            //   {data: 'DT_RowIndex', name: 'DT_RowIndex'},  // Index column for row number
              {data: 'title', name: 'title'},  // Blog post title
              {data: 'description', name: 'description'},  // Blog post description
              {data: 'image', name: 'image', orderable: false, searchable: false},  // Optional image column
              {data: 'action', name: 'action', orderable: false, searchable: false}  // Action column for view/edit buttons
          ]
      });

    });
  </script>

@endsection
