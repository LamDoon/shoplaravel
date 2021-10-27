@extends('admin.main')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <div class="row" xmlns="http://www.w3.org/1999/html">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form validation <small>sub title</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form class="" action="" method="post" novalidate>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tên danh mục<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" value="{{$menu->name}}" required="required" />
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Danh mục</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" class='optional' name="parent_id" data-validate-length-range="5,15">
                                    <option value="0" {{$menu->parent_id == 0 ? 'selected' : ''}}>Danh mục cha</option>
                                    @foreach($menus as $menuParent)
                                        <option value="{{$menuParent->id}}"
                                                {{$menu->parent_id == $menuParent->id ? 'selected' : ''}}>
                                            {{$menuParent->name}}</option>
                                    @endforeach
                                </select></div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Đường dẫn</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="slug" value="{{$menu->slug}}"  required="required" />
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Mô tả ngắn</label>
                            <div class="col-md-6 col-sm-6">
                                <textarea class="form-control" value=""  name="description"  >{{$menu->description}}</textarea>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Chi tiết danh mục</label>
                            <div class="col-md-6 col-sm-6">
                                <textarea class="form-control" name="content" value=""  id="content" >{{$menu->content}}</textarea></div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Hiển thị</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="radio" type="radio" value="1" {{$menu->active ==1? 'checked=""' :''}}  name="active" id="active" />
                                <label for="active">Có</label></br>
                                <input class="radio" type="radio" value="0" {{$menu->active ==0? 'checked=""' :''}} name="active" id="no_active" />
                                <label for="no_active">Không</label>
                            </div>
                        </div>
                        <div class="ln_solid">
                            <div class="form-group">
                                <div class="col-md-6 offset-md-3">
                                    <button type='submit' class="btn btn-primary" name="submit">Submit</button>
                                    <button type='reset' class="btn btn-success">Reset</button>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection()
@section('footer')
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'content' );
    </script>
@endsection
