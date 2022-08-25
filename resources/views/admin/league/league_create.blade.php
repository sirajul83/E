@extends('admin.layouts.master')
@section('title', "Leage Create")
@section('main_content')

<div class="content-wrapper">
    <div class="row">
       <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Leage Create </h4>
                    <form class="form-sample" action="{{ route('league.store_league_cateory')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Leage Name</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" id="name"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Short Name</label>
                                        <div class="col-sm-8">
                                        <input type="text" class="form-control" name="short_name" id="short_name" />
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> Logo</label>
                                    <div class="col-sm-10">
                                    <input type="file" class="form-control" name="logo" id="logo" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"></label>
                                        <div class="col-sm-8">
                                            <img width="100px" height="90px" src="{{ asset('')}}" id="imgPreview" />
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-success ml-4">Submit</button>
                            </div>   
                        </div>        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js_script')
 <script>
    logo.onchange = evt => {
        const [file] = logo.files
        if (file) {
            imgPreview.src = URL.createObjectURL(file)
        }
    }
 </script>   
@endsection   