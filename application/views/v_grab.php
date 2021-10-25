<div class="row margin-bottom-40">
    <!-- BEGIN SIDEBAR -->
    <div class="sidebar col-md-3 col-sm-3">
    <ul class="list-group margin-bottom-25 sidebar-menu">
        <li class="list-group-item clearfix active" ><a href="javascript:;"><i class="fa fa-angle-right"></i>Grab Data Pertandingan</a></li>
        <!--<li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i>Pemain</a></li>
        <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i>Turnament</a></li>-->
    </ul>
    </div>
    <!-- END SIDEBAR -->

    <!-- BEGIN CONTENT -->
    <div class="col-md-9 col-sm-9">
    <h1>Grab Data Pertandingan</h1>
    <div class="content-form-page">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <form class="form-horizontal" role="form" method="post" action=" <?php echo site_url('grab/getData') ?>">                    
                <div class="form-group">
                    <label for="email" class="col-lg-1 control-label">Url</label>
                    <div class="col-lg-11">
                        <textarea rows="10" cols="200" class="form-control" name="link" ></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-11 col-md-offset-1 padding-left-0 padding-top-5">
                    <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END SIDEBAR & CONTENT -->