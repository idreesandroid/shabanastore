@extends('layouts.admin')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Create Blog Post</h3>
                        </div>
                        <form>
                            <div class="card-body">
                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>Title: </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="post_title">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <!-- phone mask -->
                                <div class="form-group">
                                    <label>Description:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                        </div>
                                        <textarea type="text" class="form-control" id="post_description"></textarea>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="form-group">
                                    <input type="submit" class="btn btn-info" value="Create Post" id="createPost">
                                </div>
                            </div>
                        <!-- /.card-body -->
                        </form>
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col (left) -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script>
        $(document).ready(function() {
            $("#createPost").on('click',function(){
                alert('title');

            var title = $("#post_title").val();
            if(!title.length){
                $("#post_title").focus();
                alert('Please insert the title');
                return false;
            }
            var post_description = $("#post_description").val();
            if(!post_description.length){
                $("#post_description").focus();
                alert('Please emter post description');
                return false;
            }
            var json_data = {
                'title' : title,
                'description' : post_description,
                '_token' : "{{ csrf_token() }}"
            };
            $.ajax({
                url : "{{ route('store.blog') }}",
                type: "POST",
                data: json_data,
                success : function(data) {
                    if(data){
                        $("#title").val("");
                        $("#selectedVendorsInAddModel").val("");
                        $("#add_MapData").val("");
                        $("#addStatus").val("");
                        $("#addCollectionModel .close").click();
                        Swal.fire('Collection Area created', 'You clicked the button!','success').then((result) => {
                            if(result.isConfirmed) {
                                location.reload(true);
                            }
                        });
                    }
                },
                error: function(){
                    swal.fire("Error Completion Task!", "Error in Create Collection Area error", "error").then((result) => {
                        if(result.isConfirmed) {
                            location.reload(true);
                        }
                    });
                }
            });
        });
    });
    </script>

@endsection

