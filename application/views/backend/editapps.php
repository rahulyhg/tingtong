<div class="row">
<div class="col s12">
<h4 class="pad-left-15">Edit apps</h4>
</div>
</div>
<div class="row">
<form class='col s12' method='post' action='<?php echo site_url("site/editappssubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class="row">
<div class="input-field col s6">
<label for="Order">Order</label>
<input type="text" id="Order" name="order" value='<?php echo set_value('order',$before->order);?>'>
</div>
</div>
<input type="file" id="normal-field" class="form-control" name="image" value='<?php echo set_value('image',$before->image);?>'>
<div class="row">
			<div class="file-field input-field col m6 s12">
				<span class="img-center big image1">
                   			<?php if ($before->image == '') {
} else {
    ?><img src="<?php echo base_url('uploads').'/'.$before->image;
    ?>">
						<?php
} ?></span>
				<div class="btn blue darken-4">
					<span>Image</span>
					<input name="image" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate image1" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image', $before->image);?>">
				</div>
		
			</div>
<span style="line-height: 600%;color:#B5ACAC">Size of Image should be between 450px and 943px.</span>
		</div>
<div class="row">
<div class="input-field col s6">
<label for="Title">Title</label>
<input type="text" id="Title" name="title" value='<?php echo set_value('title',$before->title);?>'>
</div>
</div>
    <div class="row">
<div class="input-field col s6">
<label for="ios">Ios</label>
<input type="text" id="ios" name="ios" value='<?php echo set_value('ios',$before->ios);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="android">Android</label>
<input type="text" id="android" name="android" value='<?php echo set_value('android',$before->android);?>'>
</div>
</div>
<div class="row">
<div class="col s6">
<button type="submit" class="btn btn-primary waves-effect waves-light  blue darken-4">Save</button>
<a href='<?php echo site_url("site/viewapps"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel</a>
</div>
</div>
</form>
</div>
