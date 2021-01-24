@extends('layouts.admin')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Product Information</h3>
                        </div>
                        <div class="card-body">
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                                <label>Title: </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="product_title">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <!-- phone mask -->
                            <div class="form-group">
                                <label>Product Price in Rs:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="product_price">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label>Code:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                                </div>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label>Description:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Product Color & Size</h3>
                        </div>
                        <div class="card-body">
                            <!-- Color Picker -->
                            <div class="form-group">
                                <label>Select Product Color:</label>
                                <select class="form-control">
                                    <option>Red</option>
                                    <option>Green</option>
                                    <option>Blue</option>
                                </select>
                            </div>
                            <!-- /.form group -->
                            <!-- Color Picker -->
                            <div class="form-group">
                                <label>Select Product Size:</label>
                                <select class="form-control">
                                    <option>Large</option>
                                    <option>Xtra Large</option>
                                    <option>Small</option>
                                </select>
                            </div>
                            <!-- /.form group -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col (left) -->
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Category</h3>
                        </div>
                        <div class="card-body">
                            <!-- Date -->
                            <div class="form-group">
                                <label>Product Category:</label>
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Select Product Category</option>
                                        <option value="forchild">Ladies</option>
                                        <option value="forchild">Gents</option>
                                        <option>Child</option>
                                    </select>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label>Product Type:</label>
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Select Product Type</option>
                                        <option value="forchild">T-Shirt</option>
                                        <option>Blazers</option>
                                        <option>Sun Glasses</option>
                                        <option>Pent</option>
                                        <option>Shoes</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.form group -->
                            <!-- Date range -->

                            <!-- /.form group -->
                            <!-- Date and time range -->
                            <div class="form-group">
                                <label>Product Brnad:</label>
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Select Product Brand</option>
                                        <option value="forchild">Addidas</option>
                                        <option>Nike</option>
                                        <option>Bata</option>
                                    </select>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <!-- Date and time range -->
                            <div class="form-group">
                                <label>Fashion Location:</label>
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Select Fashion Location</option>
                                        <option value="forchild">Turkish</option>
                                        <option>Pakistani</option>
                                        <option>Indian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Product seasonality:</label>
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Select Product Season</option>
                                        <option value="forchild">Winter</option>
                                        <option>Summer</option>
                                        <option>Spring</option>
                                        <option>Fit for All Weather</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Product Status:</label>
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Select Product Status</option>
                                        <option value="forchild">Sale</option>
                                        <option>New</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.form group -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- iCheck -->
                </div>
                <!-- /.col (right) -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div id="actions" class="row">
                                <div class="col-lg-6">
                                    <div class="btn-group w-100">
                                       <span class="btn btn-success col fileinput-button">
                                       <i class="fas fa-plus"></i>
                                       <span>Add files</span>
                                       </span>
                                        <button type="submit" class="btn btn-primary col start">
                                            <i class="fas fa-upload"></i>
                                            <span>Start upload</span>
                                        </button>
                                        <button type="reset" class="btn btn-warning col cancel">
                                            <i class="fas fa-times-circle"></i>
                                            <span>Cancel upload</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center">
                                    <div class="fileupload-process w-100">
                                        <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table table-striped files" id="previews">
                                <div id="template" class="row mt-2">
                                    <div class="col-auto">
                                        <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                                    </div>
                                    <div class="col d-flex align-items-center">
                                        <p class="mb-0">
                                            <span class="lead" data-dz-name></span>
                                            (<span data-dz-size></span>)
                                        </p>
                                        <strong class="error text-danger" data-dz-errormessage></strong>
                                    </div>
                                    <div class="col-4 d-flex align-items-center">
                                        <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                        </div>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <div class="btn-group">
                                            <button class="btn btn-primary start">
                                                <i class="fas fa-upload"></i>
                                                <span>Start</span>
                                            </button>
                                            <button data-dz-remove class="btn btn-warning cancel">
                                                <i class="fas fa-times-circle"></i>
                                                <span>Cancel</span>
                                            </button>
                                            <button data-dz-remove class="btn btn-danger delete">
                                                <i class="fas fa-trash"></i>
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script></script>
@endsection

