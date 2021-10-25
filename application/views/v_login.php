<div class="row">
    <div class="col-md-9 col-sm-9 col-md-offset-3">
        <h1>Login</h1>
        <div class="content-form-page">
            <div class="row">
                <div class="col-md-7 col-sm-7 ">
                    <form class="form-horizontal form-without-legend" role="form"  method="post" action=" <?php echo site_url('auth/authPost') ?>">
                    <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">Username <span class="require">*</span></label>
                        <div class="col-lg-8">
                        <input type="text" class="form-control" id="username" name="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
                        <div class="col-lg-8">
                        <input type="text" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                        <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>