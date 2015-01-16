<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="slide">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
				<div class="item active">
				  <img src="<?php echo base_url('frontassets/img/cheque.jpg'); ?>" class="img" />
				  <!--<div class="slideads" style=" /* margin-top: -25px; */ z-index: 999; background: #1F1C0B; position: absolute; bottom: 0px; width: 100%; padding: 10px 0;">
					  <p style="   margin-bottom: 0px;">Possession Ready <span class="bluecolor">3 BHK Luxury Apartments</span> @ Sector 72, Gurgaon  <span class="know_more">know more ></span>.</p>
					</div>-->
				  <div class="carousel-caption">
					
				  </div>
				</div>
				<div class="item">
				  <img src="<?php echo base_url('frontassets/img/banner2.jpg'); ?>" class="img" />
				 <!-- <div class="slideads" style=" /* margin-top: -25px; */ z-index: 999; background: #1F1C0B; position: absolute; bottom: 0px; width: 100%; padding: 10px 0;">
					  <p style="   margin-bottom: 0px;">Possession Ready <span class="bluecolor">3 BHK Luxury Apartments</span> @ Sector 72, Gurgaon  <span class="know_more">know more ></span>.</p>
					</div>-->
				  <div class="carousel-caption">
					
				  </div>
				</div>
				<!--<div class="item ">
				  <img src="img/banner.png" class="img" />
				 <!-- <div class="slideads" style=" margin-top: -33px;">
					  <p>Possession Ready <span class="bluecolor">3 BHK Luxury Apartments</span> @ Sector 72, Gurgaon  <span class="know_more">know more ></span>.</p>
					</div>
				  <div class="carousel-caption">
					
				  </div>
				</div>-->
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div>
			
		</div>
        
      </div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-3">
            <div class="cityblock red">
              <h4>Mumbai</h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="cityblock blue">
              <h4>Pune</h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="cityblock green">
              <h4>Banglore</h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="cityblock purple">
              <h4>Hyderabad</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="citysel">
          <select >
            <option>ABC</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="searchproperties">
          <h3>Search Properties</h3>
          <div class="searchform">
            <div class="row">
              <div class="col-md-6">
                <input type="text" placeholder="Eg : Locality, Builder projects"/>
              </div>
              <div class="col-md-6">
                <?php
					echo form_dropdown('searchpropertytype',$propertytype,set_value('propertytype'),'class=" searchpropertytype" 	');
				?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <select >
                  <option>Price</option>
                </select>
				 <?php
					$searchprice = array(
						"" => "PRICE",
						"1" => "1",
						"2" => "2",
						"3" => "3",
						"4" => "4",
					);
					echo form_dropdown('searchprice',$searchprice,set_value('searchprice'),'class=" searchprice" 	');
				  ?>
              </div>
              <div class="col-md-3">
                 <?php
					echo form_dropdown('searchcity',$city,set_value('city'),'class=" searchcity" 	');
				  ?>
              </div>
              <div class="col-md-3">
                <?php
					$searchbedroom = array(
						"" => "BEDROOMS",
						"1" => "1",
						"2" => "2",
						"3" => "3",
						"4" => "4",
					);
					echo form_dropdown('searchbedroom',$searchbedroom,set_value('searchbedroom'),'class=" searchbedroom" 	');
				  ?>
              </div>
              <div class="col-md-3">
                <input type="submit" value="SEARCH"/>
              </div>
            </div>
          </div>
          <p> &gt; 408 New Projects &gt; 18869 New Properties. </p>
        </div>
      </div>
      <div class="col-md-4"><img src="<?php echo base_url('frontassets/img/ad1.jpg') ;?>" class="img" style="height:315px;" /></div>
    </div>
    <div class="row">
      <div class="col-md-6"><img src="<?php echo base_url('frontassets/img/bannerad2.jpg'); ?>" class="img" /></div>
      <div class="col-md-2">
        <div class="block red">
          <h3>Register for</h3>
          <h3>Prelaunch</h3>
          <h3>Offers</h3>
          <a href="" class="btn btn-danger">Click here</a></div>
      </div>
      <div class="col-md-2">
        <div class="block blue">
          <h2>Book your</h2>
          <h2>Property</h2>
          <h2 class="darkbluecolor">Online</h2>
          <a href="" class="btn btn-primary">Book Now</a></div>
      </div>
      <div class="col-md-2">
        <div class="block green">
          <h2>Home Loans</h2>
          <h3 class="innergreen">Check Eligibility</h3>
          <h3 class="innergreen">apply online !</h3>
          <a href="" class="btn btn-success">Apply Now</a></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="block block2 blue">
          <h3>Premium Projects</h3>
        </div>
      </div>
    </div>
    <h2 class="redcolor center">MUMBAI</h2>
    <div class="row">
      <div class="col-md-12">
        <div class="coro">
          <div class="title">
            <h4>Pre-Pre Launch Projects</h4>
          </div>
          <div class="corocontent">
			<div class="slider1">
				<div class="slide">
					<div class="coro_data">
						<div class="car_img">
							<img src="<?php echo base_url('frontassets/img/carousel/img1.jpg') ;?>">
						</div>
						<p class="coro_red_title carousel_title">Geet Siddhi</p>
						<p class="flat_info">
							<b>2 BHK </b>, Aparment <br>
							Moshi by Nemichand <br>
							Bhandari Associats
						</p>
						<button class="btn btn-xs coro-btn red" type="button">VIEW DETAILS</button>
					</div>
					<p class="slider_bottom">
						Finance Partner HHFC
					</p>
				</div>
				<div class="slide">
					<div class="coro_data">
						<div class="car_img">
							<img src="<?php echo base_url('frontassets/img/carousel/img2.jpg'); ?>">
						</div>
						<p class="coro_green_title carousel_title">Geet Siddhi</p>
						<p class="flat_info">
							<b>2 BHK </b>, Aparment <br>
							Moshi by Nemichand <br>
							Bhandari Associats
						</p>
						<button class="btn btn-xs coro-btn red" type="button">VIEW DETAILS</button>
					</div>
					<p class="slider_bottom">
						Finance Partner HHFC
					</p>
				</div>
				<div class="slide">
					<div class="coro_data">
						<div class="car_img">
							<img src="<?php echo base_url('frontassets/img/carousel/img3.jpg'); ?>">
						</div>
						<p class="coro_black_title carousel_title">Geet Siddhi</p>
						<p class="flat_info">
							<b>2 BHK </b>, Aparment <br>
							Moshi by Nemichand <br>
							Bhandari Associats
						</p>
						<button class="btn btn-xs coro-btn red" type="button">VIEW DETAILS</button>
					</div>
					<p class="slider_bottom">
						Finance Partner HHFC
					</p>
				</div>
				<div class="slide">
					<div class="coro_data">
						<div class="car_img">
							<img src="<?php echo base_url('frontassets/img/carousel/img4.jpg'); ?>">
						</div>
						<p class="coro_orange_title carousel_title">Geet Siddhi</p>
						<p class="flat_info">
							<b>2 BHK </b>, Aparment <br>
							Moshi by Nemichand <br>
							Bhandari Associats
						</p>
						<button class="btn btn-xs coro-btn red" type="button">VIEW DETAILS</button>
					</div>
					<p class="slider_bottom">
						Finance Partner HHFC
					</p>
				</div>
				<div class="slide">
					<div class="coro_data">
						<div class="car_img">
							<img src="<?php echo base_url('frontassets/img/carousel/img1.jpg'); ?>">
						</div>
						<p class="coro_red_title carousel_title">Geet Siddhi</p>
						<p class="flat_info">
							<b>2 BHK </b>, Aparment <br>
							Moshi by Nemichand <br>
							Bhandari Associats
						</p>
						<button class="btn btn-xs coro-btn red" type="button">VIEW DETAILS</button>
					</div>
					<p class="slider_bottom">
						Finance Partner HHFC
					</p>
				</div>
			</div>
			
		  </div>
        </div>
        <div class="coro">
          <div class="title">
            <h4>Launch Projects</h4>
          </div>
          <div class="corocontent">
			<div class="slider1">
				<div class="slide">
					<div class="coro_data">
						<div class="car_img">
							<img src="<?php echo base_url('frontassets/img/carousel/img1.jpg') ;?>">
						</div>
						<p class="coro_red_title carousel_title">Geet Siddhi</p>
						<p class="flat_info">
							<b>2 BHK </b>, Aparment <br>
							Moshi by Nemichand <br>
							Bhandari Associats
						</p>
						<button class="btn btn-xs coro-btn red" type="button">VIEW DETAILS</button>
					</div>
					<p class="slider_bottom">
						Finance Partner HHFC
					</p>
				</div>
				<div class="slide">
					<div class="coro_data">
						<div class="car_img">
							<img src="<?php echo base_url('frontassets/img/carousel/img2.jpg'); ?>">
						</div>
						<p class="coro_green_title carousel_title">Geet Siddhi</p>
						<p class="flat_info">
							<b>2 BHK </b>, Aparment <br>
							Moshi by Nemichand <br>
							Bhandari Associats
						</p>
						<button class="btn btn-xs coro-btn red" type="button">VIEW DETAILS</button>
					</div>
					<p class="slider_bottom">
						Finance Partner HHFC
					</p>
				</div>
				<div class="slide">
					<div class="coro_data">
						<div class="car_img">
							<img src="<?php echo base_url('frontassets/img/carousel/img3.jpg'); ?>">
						</div>
						<p class="coro_black_title carousel_title">Geet Siddhi</p>
						<p class="flat_info">
							<b>2 BHK </b>, Aparment <br>
							Moshi by Nemichand <br>
							Bhandari Associats
						</p>
						<button class="btn btn-xs coro-btn red" type="button">VIEW DETAILS</button>
					</div>
					<p class="slider_bottom">
						Finance Partner HHFC
					</p>
				</div>
				<div class="slide">
					<div class="coro_data">
						<div class="car_img">
							<img src="<?php echo base_url('frontassets/img/carousel/img4.jpg'); ?>">
						</div>
						<p class="coro_orange_title carousel_title">Geet Siddhi</p>
						<p class="flat_info">
							<b>2 BHK </b>, Aparment <br>
							Moshi by Nemichand <br>
							Bhandari Associats
						</p>
						<button class="btn btn-xs coro-btn red" type="button">VIEW DETAILS</button>
					</div>
					<p class="slider_bottom">
						Finance Partner HHFC
					</p>
				</div>
				<div class="slide">
					<div class="coro_data">
						<div class="car_img">
							<img src="<?php echo base_url('frontassets/img/carousel/img1.jpg'); ?>">
						</div>
						<p class="coro_red_title carousel_title">Geet Siddhi</p>
						<p class="flat_info">
							<b>2 BHK </b>, Aparment <br>
							Moshi by Nemichand <br>
							Bhandari Associats
						</p>
						<button class="btn btn-xs coro-btn red" type="button">VIEW DETAILS</button>
					</div>
					<p class="slider_bottom">
						Finance Partner HHFC
					</p>
				</div>
			</div>
			
		  </div>
        </div>
        <div class="last coro">
          <div class="title">
            <h4>Upcoming Projects</h4>
          </div>
         <div class="corocontent">
			<div class="slider1">
				<div class="slide">
					<div class="coro_data">
						<div class="car_img">
							<img src="<?php echo base_url('frontassets/img/carousel/img1.jpg') ;?>">
						</div>
						<p class="coro_red_title carousel_title">Geet Siddhi</p>
						<p class="flat_info">
							<b>2 BHK </b>, Aparment <br>
							Moshi by Nemichand <br>
							Bhandari Associats
						</p>
						<button class="btn btn-xs coro-btn red" type="button">VIEW DETAILS</button>
					</div>
					<p class="slider_bottom">
						Finance Partner HHFC
					</p>
				</div>
				<div class="slide">
					<div class="coro_data">
						<div class="car_img">
							<img src="<?php echo base_url('frontassets/img/carousel/img2.jpg'); ?>">
						</div>
						<p class="coro_green_title carousel_title">Geet Siddhi</p>
						<p class="flat_info">
							<b>2 BHK </b>, Aparment <br>
							Moshi by Nemichand <br>
							Bhandari Associats
						</p>
						<button class="btn btn-xs coro-btn red" type="button">VIEW DETAILS</button>
					</div>
					<p class="slider_bottom">
						Finance Partner HHFC
					</p>
				</div>
				<div class="slide">
					<div class="coro_data">
						<div class="car_img">
							<img src="<?php echo base_url('frontassets/img/carousel/img3.jpg'); ?>">
						</div>
						<p class="coro_black_title carousel_title">Geet Siddhi</p>
						<p class="flat_info">
							<b>2 BHK </b>, Aparment <br>
							Moshi by Nemichand <br>
							Bhandari Associats
						</p>
						<button class="btn btn-xs coro-btn red" type="button">VIEW DETAILS</button>
					</div>
					<p class="slider_bottom">
						Finance Partner HHFC
					</p>
				</div>
				<div class="slide">
					<div class="coro_data">
						<div class="car_img">
							<img src="<?php echo base_url('frontassets/img/carousel/img4.jpg'); ?>">
						</div>
						<p class="coro_orange_title carousel_title">Geet Siddhi</p>
						<p class="flat_info">
							<b>2 BHK </b>, Aparment <br>
							Moshi by Nemichand <br>
							Bhandari Associats
						</p>
						<button class="btn btn-xs coro-btn red" type="button">VIEW DETAILS</button>
					</div>
					<p class="slider_bottom">
						Finance Partner HHFC
					</p>
				</div>
				<div class="slide">
					<div class="coro_data">
						<div class="car_img">
							<img src="<?php  echo base_url('frontassets/img/carousel/img1.jpg'); ?>">
						</div>
						<p class="coro_red_title carousel_title">Geet Siddhi</p>
						<p class="flat_info">
							<b>2 BHK </b>, Aparment <br>
							Moshi by Nemichand <br>
							Bhandari Associats
						</p>
						<button class="btn btn-xs coro-btn red" type="button">VIEW DETAILS</button>
					</div>
					<p class="slider_bottom">
						Finance Partner HHFC
					</p>
				</div>
			</div>
			
		  </div>
        </div>
        
      </div>
    </div>
  </div>
</div>