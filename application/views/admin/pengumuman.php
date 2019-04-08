<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Pengumuman</li>
			</ol>
		</div><!--/.row-->
        <div class="container-fluid" style="margin-top:10px">
            <div class="card">        
                <h1 class="card-header">Pengumuman</h1><br>
                <div class="col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Tanggal
                            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                              <div class="panel-body">
                                <div id="calendar"></div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            Tulis Pengumuman
                            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                                <div class="panel-body">
                                <form class="form-horizontal" action="" method="post">
                                            <fieldset>
                                                <!-- Name input-->
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="name">Name</label>
                                                    <div class="col-md-9">
                                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                                    </div>
                                                </div>
                                            
                                                <!-- Email input-->
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="email">Isi :</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                                    </div>
                                                </div>
                                                
                                  <div class="col-sm-10 widget-right">
                                                    <button type="submit" class="btn btn-md btn-primary pull-right">Posting</button>
                                                    </div>
                                                    <div class="col-sm-2 widget-right">
                                                    <button type="submit" class="btn btn-danger btn-md pull-right">Cancel</button>
                                        </div>                    
                    </fieldset>
                 </form>
            </div>
        </div>
    </div>
</div>