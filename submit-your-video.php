<?php include("header.php"); ?>
<div class="our-collection">
<div class="container">
    <div class="d-flex" style="
    justify-content: space-between;
">
<h1>Submit Your Video</h1>
<div class="short-list">
Select Category: <div class="select-custom">
    <select name="orderby" class="form-control">
                  <option value="menu_order" selected="selected">Singing</option>
                 <option value="latest">Modeling</option>
                <option value="date">Dancing</option>
                <option value="mosted rated">Comedy</option>
                <option value="popular">Acting</option>
                <option value="popular">Spoken Word</option>
               
                                        </select>
                                    </div>
        </div>
</div>
</div>

</div>
<section class="light-gray design-process-section" id="process-tab">
<div class="container">
    <div class="row">
      <div class="col-xs-12"> 
        <!-- design process steps--> 
        <!-- Nav tabs -->
        <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
          <li role="presentation" class="active"><a href="#discover" aria-controls="discover" role="tab" data-toggle="tab"><i class="fa fa-play"></i>
            <p>Upload Video</p>
            </a></li>
          <li role="presentation"><a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
<p>Add Details</p> </a></li>
          <li role="presentation"><a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab"><i class="fa fa-check" aria-hidden="true"></i>
            <p>Submit Video</p>
            </a></li>
          
        </ul>
        <!-- end design process steps--> 
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="discover">
            <div class="design-process-content">
              <form action="" method="POST" enctype="multipart/form-data">
   
     
          <div class="form-group">
           
            <div class="preview-zone hidden">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <div><b>Preview</b></div>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-danger btn-xs remove-preview">
                      <i class="fa fa-times"></i> Reset This Form
                    </button>
                  </div>
                </div>
                <div class="box-body"></div>
              </div>
            </div>
            <div class="dropzone-wrapper">
              <div class="dropzone-desc">
                <img src="images/upload-icon.png" />
                <h3>Select Video files to upload</h3>
				<p>Or Drag and drop video files</p>
              </div>
              <input type="file" name="img_logo" class="dropzone">
            </div>
          </div>
      

     
        <div class="col-md-12 text-center">
          <button type="submit" class="btn_upload">Upload Videos</button>
       
      </div>
  
  </form>
             </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="strategy">
            <div class="design-process-content">
              <iframe width="100%" height="450" src="https://www.youtube.com/embed/9xwazD5SyVg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			  
			  <div class="row givevideo">
			  <div class="col-md-12">
			  <label>Give Your Video a Category</label>
			  </div>
			  <div class="col-md-6">
			  <div class="form-group">
			  
			 <select class="form-control">
			 <option>Select Category</option>
			 <option>Select Category</option>
			 <option>Select Category</option>
			 <option>Select Category</option>
			 <option>Select Category</option>
			 </select>
			  </div>
			  </div>
			  
			  <div class="col-md-6">
			  <div class="form-group">
			  
			 <select class="form-control">
			 <option>Select Sub Category</option>
			 <option>Select Sub Category</option>
			 <option>Select Sub Category</option>
			 <option>Select Sub Category</option>
			 <option>Select Sub Category</option>
			 </select>
			  </div>
			  </div>
			  
			  <div class="col-md-12">
			  <div class="form-group">
			  <label>Give Your Video Title</label>
			 <input type="text" class="form-control"/>
			  </div>
			  </div>
			   <div class="col-md-12">
			  <div class="form-group">
			  <label>Discribe your Video</label>
			 <textarea class="form-control"></textarea>
			  </div>
			  </div>
			  <div class="col-md-12 text-right">
          <button type="submit" class="btn_upload">Submit</button>
       
      </div>
			  
			  </div>
              </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="optimization">
            <div class="design-process-content">
              <div class="submited_video">
			  <div class="textbox_c">
			  <div class="criclebox-logo">
			  Logo Will Come Here
			  </div>
			  <p>Your <span>Video</span> Submitted sucessfully</p>
			  </div>
			  
			  </div>
			  
			  
               </div>
          </div>
          
      </div>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>
<script>
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var href = $(e.target).attr('href');
        var $curr = $(".process-model  a[href='" + href + "']").parent();

        $('.process-model li').removeClass();

        $curr.addClass("active");
        $curr.prevAll().addClass("visited");
    });
</script>