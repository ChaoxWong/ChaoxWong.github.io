<?php /* Template Name: dashboard */ ?>
<?php get_header(); ?>
<?php if (have_posts()) :
 while (have_posts()) :
        the_post(); 
        $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
        <div style="height:500px;background-image:url('<?php echo $featured_img_url; ?>');  background-position: top left;	background-size: 100%;	background-repeat: repeat-y" >
   <?php endwhile;
  endif; ?>
  </div>

<div class="py-5" style="padding-bottom: 0rem !important;">
<div class="container">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
          <?php /*
          <h1>Airtable GetJSON</h1>
          <div class="card card-body bg-light" style="width:100%; margin-bottom:20px;">
              <h5>Airtable API Demo</h5>
              <p id="welcome">Using jQuery getJSON and Airtable API for fun!</p>
              <p id="demo">Airtable is a wonderful spreadsheet-like database with many useful features for data modeling and basic analytics. 
              When used with other data visualization libraries, it can be a great tool for rapid prototyping.
          </div><!-- end well -->
          */
          ?>
          <!-- Sign and date the page, it's only polite! -->
          <div class='db-buttons'> 
            <button type="button" class="btn btn-success" id='get_data1'>Table</button>
            <button type="button" class="btn btn-warning" id='get_data2'>Charts</button>
            <button type="button" class="btn btn-info" id='clear_tables'>Remove</button>
          </div>
          <div class="table-responsive">
                <!--table id="table1" width="100%" class="table table-bordered"></table-->
          </div><!-- table responsive -->
          <div class="table-responsive">
                <!--table id="table2" width="100%" class="table table-bordered"></table-->
          </div><!-- table responsive -->
          <div class="row">
            <div class="col-sm-12">
                <div id="chart"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div id="chart1"></div>
            </div>
            <div class="col-sm-6">
                <div id="chart2"></div>
            </div>
      </div><!--end first row-->
        <br>
        <h1></h1>
      <div class="row"><!-- begin second row -->
              <div class="col-sm-6">
                <form>
                  <div class="form-group">
                      <select id="filter" class="form-control form-control-sm" style="width:auto; display:inline;" onchange="place_marker()">
                        <option value="" selected disabled>Please select</option>
                        <option value="0">HKU</option>
                        <option value="1">Kowloon Science Musuem</option>
                        <option value="2">Victoria Peak</option>
                        <option value="3">HK Cultural Center</option>
                        <option value="4">Choi Hung</option>
                        <option value="5">Lan Kwai Fong</option>
                        <option value="6">CUHK</option>
                        <option value="7">HKBU</option>
                        <option value="8">North Point</option>
                        <option value="9">Victoria Harbour</option>
                        <option value="10">Mong Kok</option>
                        <option value="11">Happy Valley</option>
                      </select>
                      <button type="button" class="btn btn-outline-primary btn-sm" id='roll_up' onclick="show_districts();">Destinations</button>
                      <button type="button" class="btn btn-outline-primary btn-sm" id="roll_up" onclick="clear_map();" style="
                          border-style: solid;
                          border-width: 1px;
                          border-color: #327ab7;
                      ">Reset</button>
                      <button type="button" class="btn btn-outline-primary btn-sm" id='roll_up' onclick="remove_map();">Remove</button>
                </div>           
                </form>  
                <div id="map" style="width: 100%; height: 300px"></div>
                </div><!-- end column-->
                <div class="col-sm-6">
                    <div class="table-responsive">
                        <table id="table1" width="100%" class="table table-bordered"></table>
                    </div><!-- table responsive -->
                </div><!-- end column -->
      </div><!--end row-->
</div><!--end container-->
</div><!--end py-5-->
<br><br>
<div class="section" style="background:black; margin-left: -20rem; margin-right: -20rem;">
            <div class="container" style="padding: 10px 0 10px 0;">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <a><i class="fa fa-2x fa-fw fa-instagram fa-inverse"></i></a>
                    </div>
                    <div class="col-md-3 text-center">
                        <a><i class="fa fa-2x fa-fw fa-twitter fa-inverse"></i></a>
                    </div>
                    <div class="col-md-3 text-center">
                        <a><i class="fa fa-2x fa-fw fa-facebook fa-inverse"></i></a>
                    </div>
                    <div class="col-md-3 text-center">
                        <a><i class="fa fa-2x fa-fw fa-github fa-inverse"></i></a>
                    </div>
                </div>
            </div>
</div>
<script type="text/javascript" language="javascript" src="<?php bloginfo("template_url") ?>/app.js"></script>
<!--script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>