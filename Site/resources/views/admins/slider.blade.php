@extends('admins.master')

@section('title','Slider')

 @section('slider','active')


@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Sub Category Form</h5>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal" id="slider_form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group"><label class="col-lg-3 control-label">Slider Image</label>
                            <div class="col-lg-9"><input type="file" <?php echo isset($edit->id) ? "" : "required"; ?> name="slider_image" class="form-control">
                                @error('slider_image')
                                <span class="help-block m-b-none text-danger">{{$message}}</span>
                                @enderror
                                @if(isset($edit->id))
                                <img style="width:100px;" src="{{asset('')}}public/img/slider/{{$edit->slider_image}}" />
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Link</label>
                            <div class="col-lg-9">
                                <input value="<?php echo isset($edit->cid)? $edit->cid : ""; ?>" name="link" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Button</label>
                            <div class="col-lg-9">
                                <input value="<?php echo isset($edit->button)? $edit->button : ""; ?>" name="button" class="form-control">
                            </div>
                        </div>
                        <!--<div class="form-group">-->
                        <!--    <label class="col-lg-3 control-label">Categories</label>-->
                        <!--    <div class="col-lg-9">-->
                        <!--        <select name="cid" id="cars">-->
                        <!--            @foreach($categories as $category)-->
                        <!--            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>-->
                        <!--            @endforeach-->
                        <!--        </select>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Heading</label>
                            <div class="col-lg-9">
                                <input value="<?php echo isset($edit->heading)? $edit->heading : ""; ?>" name="heading" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Paragraph</label>
                            <div class="col-lg-9">
                                <textarea class="summernote" name="p" id="short_discriiption" style="height:500px">
                                            <?php echo isset($edit->p)? $edit->p : "" ; ?>
        
                                        </textarea>
                            </div>
                        </div>
                        @if(isset($edit->id))
                        <input type="hidden" name="hidden_id" value="{{$edit->id}}">
                        @endif
                        <div class="form-group"><label class="col-lg-3 control-label"></label>

                            <div class="col-lg-9">                  <button class="btn btn-sm btn-primary" type="submit"><strong>Save</strong></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Category List</h5>
            </div>
            <div class="ibox-content">
  
                <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th>Sr.No</th>
                <th>Slider Image</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @php $sr=1; @endphp
              @foreach ($sliders as $item)
                  <tr>
                    <td>{{$sr++}}</td>
                    <td><img style="width:100px;" src="{{asset('')}}public/img/slider/{{$item->slider_image}}"/></td>
                    <td>{{$item->created_at}}</td>
            
                    <td>
                        <a href="javascript:void(0)" data-href="{{route('admins.slider')}}/{{$item->id}}/{{'delete'}}"  class="btn btn-danger delete_record">Delete</a>
                        <a href="{{route('admins.slider')}}/{{$item->id}}" class="btn btn-warning ">Edit</a>
                    </td>
                  </tr>
              @endforeach
            </tbody>
            </table>
                </div>
  
            </div>
        </div>
    </div>
    </div>
  </div>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
        $(document).on("submit","#slider_form",function(e){
    $("#short_discriiption").val($('#short_discriiption').summernote('code'));
    
    return true;
    // e.preventDefault();
});

$(document).on("submit","#slider_form",function(e){
    if ($('#short_discriiption').summernote('codeview.isActivated')) {
        $('#short_discriiption').summernote('codeview.deactivate'); 
    }
});
});
</script>
@endpush
