@extends('Admin.layout')
@section('admin.content')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Import Excel File</h4>
                        <div class="mb-5">
                            <form action="{{url('/data-import')}}" class="dropzone" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="fallback">
                                    <input name="excel_file" type="file" multiple="multiple">
                                </div>
                                    @error('excel_file')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="mdi mdi-cloud-upload display-4 text-muted"></i>
                                    </div>
                                    
                                    <h4>Drop files here or click to upload.</h4>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                             <div class="row mb-3">
                                    <label for="txtCityBilling" class="col-lg-3 col-form-label">Main Member Name</label>
                                    <div class="col-lg-9">
                                        <input id="txtCityBilling" name="main_member" type="text" class="form-control">
                                        <div class="text-center mt-3">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">Send Files</button>
                                        </div>
                                    </div>
                             </div>
                                   
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

</div>
      
       

@endsection