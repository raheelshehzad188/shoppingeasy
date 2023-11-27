@extends('admins.master')
<style>
    label{
        text-align: left !important;
    }
    .bootstrap-tagsinput{
        width:100% !important;
    }
</style>
@section('title','Setting')

@section('setting','active')


@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Setting Form</h5>
                </div>
                <div class="ibox-content">
                    <form action="/admin/setting" class="form-horizontal" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group"><label class="col-sm-12 control-label">Site Title:</label>
                            <div class="col-sm-12"><input type="text" value="<?php echo isset($edit->site_title	) ? htmlspecialchars($edit->site_title	) : null; ?>" required class="form-control" name="site_title"></div>
                        </div>
                         <div class="form-group"><label class="col-sm-12 control-label">Seo Title:</label>
                            <div class="col-sm-12"><input type="text" value="<?php echo isset($edit->title	) ? htmlspecialchars($edit->title	) : null; ?>" required class="form-control" name="title"></div>
                        </div>
                         <div class="form-group"><label class="col-sm-12 control-label">Seo Description:</label>
                            <div class="col-sm-12"><input type="text" value="<?php echo isset($edit->description) ? htmlspecialchars($edit->description) : null; ?>" required class="form-control" name="description"></div>
                        </div>
                         <div class="form-group"><label class="col-sm-12 control-label">Seo Keyword:</label>
                            <div class="col-sm-12"><input type="text" value="<?php echo isset($edit->keywords) ? htmlspecialchars($edit->keywords) : null; ?>" required class="form-control" name="keywords"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12 control-label">Favicon:</label>
                            <!--<input type="file" require  accept="image/png, image/gif, image/jpeg" class="form-control" <?php echo isset($edit->video_link) ? 'required' : ''; ?>   name="logo">-->
                            <div class="col-sm-12"><input type="file" onchange="readURL(this);" <?php echo isset($edit->id) ? null : "required"; ?> accept="image/png, image/gif, image/jpeg" class="form-control" name="logo1">
                            <img src="<?php echo isset($edit->logo1) ? asset($edit->logo1) : null; ?>"  alt="" <?php echo ($edit->logo1 != null) ? 'style="width:100px;"' : 'style="display:none;width:100px;"'; ?>></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12 control-label">Header Logo:</label>
                            <!--<input type="file" require  accept="image/png, image/gif, image/jpeg" class="form-control" <?php echo isset($edit->video_link) ? 'required' : ''; ?>   name="logo">-->
                            <div class="col-sm-12"><input type="file" onchange="readURL(this);" <?php echo isset($edit->id) ? null : "required"; ?> accept="image/png, image/gif, image/jpeg" class="form-control" name="logo">
                            <img src="<?php echo isset($edit->logo) ? asset($edit->logo) : null; ?>"  alt="" <?php echo ($edit->logo != null) ? 'style="width:100px;"' : 'style="display:none;width:100px;"'; ?>></div>
                        </div>
                        <div class="form-group"><label class="col-sm-12 control-label">Email:</label>
                            <div class="col-sm-12"><input type="text" value="<?php echo isset($edit->email) ? htmlspecialchars($edit->email) : null; ?>" required class="form-control" name="email"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-12 control-label">Phone Number:</label>
                            <div class="col-sm-12"><input type="text" value="<?php echo isset($edit->phone) ? htmlspecialchars($edit->phone) : null; ?>" required class="form-control" name="phone"></div>
                        </div>
                        
                        <div class="form-group"><label class="col-sm-12 control-label">Second Phone Number:</label>
                            <div class="col-sm-12"><input type="text" value="<?php echo isset($edit->phonetwo) ? htmlspecialchars($edit->phonetwo) : null; ?>" required class="form-control" name="phonetwo"></div>
                        </div>
                        
                        <div class="form-group"><label class="col-sm-12 control-label">Instagram Link:</label>
                            <div class="col-sm-12"><input type="text" value="<?php echo isset($edit->instagram) ? htmlspecialchars($edit->instagram) : null; ?>" required class="form-control" name="instagram"></div>
                        </div>
                        
                      
                    
                        
                        <div class="form-group">
                            <label class="col-sm-12 control-label">Home Image:</label>
                            <!--<input type="file" require  accept="image/png, image/gif, image/jpeg" class="form-control" <?php echo isset($edit->video_link) ? 'required' : ''; ?>   name="logo">-->
                            <div class="col-sm-12"><input type="file" onchange="readURL(this);" <?php echo isset($edit->id) ? null : "required"; ?> accept="image/png, image/gif, image/jpeg" class="form-control" name="homepage_image_one">
                            <img src="<?php echo isset($edit->homepage_image_one) ? asset($edit->homepage_image_one) : null; ?>"  alt="" <?php echo ($edit->homepage_image_one != null) ? 'style="width:100px;"' : 'style="display:none;width:100px;"'; ?>></div>
                        </div>
                        
                       
                        <div class="form-group">
                            <label class="col-sm-12 control-label">Home Image 2:</label>
                            <!--<input type="file" require  accept="image/png, image/gif, image/jpeg" class="form-control" <?php echo isset($edit->video_link) ? 'required' : ''; ?>   name="logo">-->
                            <div class="col-sm-12"><input type="file" onchange="readURL(this);" <?php echo isset($edit->id) ? null : "required"; ?> accept="image/png, image/gif, image/jpeg" class="form-control" name="homepage_image_two">
                            <img src="<?php echo isset($edit->homepage_image_two) ? asset($edit->homepage_image_two) : null; ?>"  alt="" <?php echo ($edit->homepage_image_two != null) ? 'style="width:100px;"' : 'style="display:none;width:100px;"'; ?>></div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-12 control-label">Home Image 3:</label>
                            <!--<input type="file" require  accept="image/png, image/gif, image/jpeg" class="form-control" <?php echo isset($edit->video_link) ? 'required' : ''; ?>   name="logo">-->
                            <div class="col-sm-12"><input type="file" onchange="readURL(this);" <?php echo isset($edit->id) ? null : "required"; ?> accept="image/png, image/gif, image/jpeg" class="form-control" name="homepage_image_3">
                            <img src="<?php echo isset($edit->homepage_image_3) ? asset($edit->homepage_image_3) : null; ?>"  alt="" <?php echo ($edit->homepage_image_3 != null) ? 'style="width:100px;"' : 'style="display:none;width:100px;"'; ?>></div>
                        </div>
                    
                        
                         <div class="form-group">
                            <label class="col-sm-12 control-label">Home Image 4:</label>
                            <!--<input type="file" require  accept="image/png, image/gif, image/jpeg" class="form-control" <?php echo isset($edit->video_link) ? 'required' : ''; ?>   name="logo">-->
                            <div class="col-sm-12"><input type="file" onchange="readURL(this);" <?php echo isset($edit->id) ? null : "required"; ?> accept="image/png, image/gif, image/jpeg" class="form-control" name="homepage_image_4">
                            <img src="<?php echo isset($edit->homepage_image_4) ? asset($edit->homepage_image_4) : null; ?>"  alt="" <?php echo ($edit->homepage_image_4 != null) ? 'style="width:100px;"' : 'style="display:none;width:100px;"'; ?>></div>
                        </div>
                   
                        
                        <div class="form-group"><label class="col-sm-12 control-label">Address:</label>
                            <div class="col-sm-12">
                                <textarea class="summernote" name="homepage_footer" rows="5">
                                    <?php echo isset($edit->homepage_footer) ? htmlspecialchars($edit->homepage_footer) : null; ?>
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-12 control-label">Footer Text:</label>
                            <div class="col-sm-12">
                                <textarea class="summernote" name="footer" rows="5">
                                    <?php echo isset($edit->footer_text) ? htmlspecialchars($edit->footer_text) : null; ?>
                                </textarea>
                            </div>
                        </div>
                        
                       
                        @if(isset($edit->id))
                        <input type="hidden" name="hidden_id" value="{{$edit->id}}">
                        @endif
                        <div class="form-group">
                            <div class="col-sm-10"><button class="btn btn-md btn-primary" type="submit"><strong>Save</strong></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
  </div>
@endsection

@push('scripts')

<script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $(input).parent().find('img').attr('src', e.target.result).show();
            };
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    
</script>

@endpush