<?php $__env->startSection('title'); ?>
    Tambah Artikel
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Create New Post</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Posts</a></div>
        <div class="breadcrumb-item">Create New Post</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Create New Post</h2>
      <p class="section-lead">
        On this page you can create a new post and fill in all fields.
      </p>

      <div class="row">
        <div class="col-md-12">
            <form action="<?php echo e(route('admin.post-artikel')); ?>" method="post" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                      <h4>Write Your Post</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="title">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                        <div class="col-sm-12 col-md-7">
                          <select class="form-control selectric" name="kategori">
                            <option value="Tech">Tech</option>
                            <option value="News">News</option>
                            <option value="Political">Political</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                        <div class="col-sm-12 col-md-7">
                          <textarea rows="12" class="summernote" name="artikel"></textarea>
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                        <div class="col-sm-12 col-md-7">
                          <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="thumbnail" id="image-upload" />
                          </div>
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                        <div class="col-sm-12 col-md-7">
                          <input name="tag" type="text" class="form-control inputtags">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                          <select class="form-control selectric" name="status">
                            <option value="Publish">Publish</option>
                            <option value="Draft">Draft</option>
                            <option value="Pending">Pending</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                          <button class="btn btn-primary">Create Post</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <?php echo csrf_field(); ?>
            </form>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js-libraries'); ?>
<script src="<?php echo e(asset('assets/modules/summernote/summernote-bs4.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/jquery-selectric/jquery.selectric.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
<script src="<?php echo e(asset('assets/js/page/features-post-create.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css-libraries'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/summernote/summernote-bs4.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/jquery-selectric/selectric.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')); ?>">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Server\www\tukangketik\resources\views/admin/tambah-artikel.blade.php ENDPATH**/ ?>