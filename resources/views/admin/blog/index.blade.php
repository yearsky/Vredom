@extends('admin.layout.template')
@section('content')
<div class="projects-section">
      <div class="projects-section-header">
        <p>All Data Blog</p>
        <button type="button" data-toggle="modal" data-target="#mdl" class="view-btn" title="Tambah data">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="feather feather-list" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3h18v18H3zM12 8v8m-4-4h8"/></svg>
        </button>
      </div>
      <div class="projects-section-line">
        
        <div class="view-actions ">
          <button class="view-btn list-view " title="List View">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
              <line x1="8" y1="6" x2="21" y2="6" />
              <line x1="8" y1="12" x2="21" y2="12" />
              <line x1="8" y1="18" x2="21" y2="18" />
              <line x1="3" y1="6" x2="3.01" y2="6" />
              <line x1="3" y1="12" x2="3.01" y2="12" />
              <line x1="3" y1="18" x2="3.01" y2="18" /></svg>
          </button>
          <button class="view-btn grid-view active" title="Grid View">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
              <rect x="3" y="3" width="7" height="7" />
              <rect x="14" y="3" width="7" height="7" />
              <rect x="14" y="14" width="7" height="7" />
              <rect x="3" y="14" width="7" height="7" /></svg>
          </button>
        </div>
      </div>
      <div class="modal fade" id="mdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <form method="POST" action="{{url('blog/addnew')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Judul</label>
                  <input type="text" name="judul" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" id="message-text"></textarea>
                </div>
                  <div class="form-group">
                            <label for="exampleInputEmail1">Author</label>
                            <input type="text" name="author" class="nama form-control" id="exampleInputEmail1" placeholder="Cth: Admin">
                   </div>
                  <div class="form-group">
                          <label for="exampleInputFile">Image</label>
                          <div class="input-group">
                            
                              <div class="col-lg-10">
                                <input type="file" name="image" class="file-input-custom">
                            </div>
                          </div>
                    </div>
                    <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
      <!-- modal eedit -->
       


      <div class="project-boxes jsGridView">
     <table id="table_id" class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Image</th>
                <th>Author</th>
                <th>Created_at</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          @foreach($blog as $bg)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$bg->judul}}</td>
                <td>{!!limit($bg->deskripsi)!!}</td>
                <td><img class="img-fluid"
                  src="{{$bg->getImage()}}"
                   alt="User profile picture"></td></td>
                <td>{{$bg->author}}</td>
                <td>{{$bg->created_at}}</td>
                <td>
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-danger btn-sm  dropdown-toggle" data-toggle="dropdown">
                              Aksi
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" data-toggle="modal" data-target="#mdl{{$bg->id}}">Edit</a>
                              <form method="POST" action="{{ route('blog.destroy', [$bg->id]) }}">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                <!--  <a class="dropdown-item" href="{{ route('blog.destroy', [$bg->id]) }}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> -->
                              <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                              </form>
                              
                            </div>
                          </div>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      </div>
      @foreach($blog as $blg)
      <div class="modal fade" id="mdl{{$blg->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
               <form method="POST" action="/blog/{{$blg->id}}/update" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Judul</label>
                  <input type="text" value="{{$blg->judul}}" name="judul" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" id="message-text">{{$blg->deskripsi}}</textarea>
                </div>
                  <div class="form-group">
                            <label for="exampleInputEmail1">Author</label>
                            <input type="text" name="author" class="nama form-control" id="exampleInputEmail1" value="{{$blg->author}}" placeholder="Cth: Admin">
                   </div>
                  <div class="form-group">
                          <label for="exampleInputFile">Image</label>
                          <div class="input-group">
                            
                              <div class="col-lg-10">
                                <input type="file" name="image" class="file-input-custom">
                            </div>
                          </div>
                    </div>
                    <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
              </form>
             
            </div>
            
          </div>
        </div>
      </div>
       @endforeach
</div>
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready( function () {
    $('#table_id').DataTable( {
      order: [[ 0, "asc" ]],
      responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets: -1
        } ]
    });
});

</script>
@endsection