<!-- ===========================================HEADER>>>START=========================================== -->

<?php include("header.php") ?>

<section class="_cd_er_aq">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="_cd_er_aa">
          <ol>
            <li>OUR INITIATIVES</li>
            <li>BADHEIN SABKE KADAM</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- ===========================================BADHEIN SABKE KADAM=========================================== -->

<section class="_bd_we_xs_qw">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="_hg_we_fe">
          <h2>Badhein Sabke Kadam:<span>Delhi Chapter</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="_mn_cd_we_vd">
          <img src="./assets/images/kadam.png" style="display: block;margin-left: auto;margin-right: auto; width: 30%;" />

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="_mn_cd_we_vd">
          <h5 style="color:gray;">Under the Delhi Chapter of Badhein Sabke Kadam, we are working in collaboration with the Department of Women and Child Development, Government of Delhi to provide both online and offline supplementary education (in a hybrid mode) to the children of the Child Care Institutions (CCIs).</h5>
          <h5 style="color:gray;">Team Delhi Chapter has been able to tap into 34 students with an educator base of 18 teachers spread across 9 Child Care Institutions. Our educators are mostly students enrolled in different Universities, along with working professionals and homemakers who are provided training under the teaching modules specially designed for these children.</h5>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===========================================Going Digital============================================== -->
<section class="_bd_we_xs_qw">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="_hg_we_fe">
          <h2>Going<span>Digital</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="_mn_cd_we_vd">
          <h5 style="color:gray;">Due to the COVID-19 pandemic situation and keeping in mind the safety of all, the classes have been taking place in online mode. The Delhi Chapter has completed its first batch of educators successfully.</h5>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===========================================MEET OUR PARTNERS=========================================== -->

<section class="_bd_we_xs_qw">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="_hg_we_fe">
          <h2>Meet<span>Our Partners</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="_mn_cd_we_vd">
          <div id="owl-carouselPartners" class=" owl-theme">

            <div class="item">
              <img src="assets/images/service1.png">
            </div>

            <div class="item">
              <img src="assets/images/service2.png">
            </div>

            <div class="item">
              <img src="assets/images/ccl.png">
            </div>

            <div class="item">
              <img src="assets/images/bsk.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ===========================================HOLISTIC DEVELOPMENT=========================================== -->

<section class="_bd_we_xs_qw">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="_hg_we_fe">
          <h2>Holistic<span>Development</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="_mn_cd_we_vd">
          <div class="row mx-md-n5">
            <div class="col px-md-5">
              <div class="p-3 border bg-light" style="    min-height: 340px; margin-bottom: 21px;">
                <h5 style="text-align: center;">FOR EDUCATORS</h5>
                <strong style="color:gray;">With Firki's wide range of available modules and professional training of 2 weeks, our educators become essentially equipped to shape the future of children associated with Badhein Sabke Kadam.</strong>
                <br />
                <img style="margin:33px 0px 18px 106px" src="./assets/images/firks.png">
              </div>
            </div>
            <div class="col px-md-5">
              <div class="p-3 border bg-light" style="min-height: 340px; margin-bottom: 21px;">
                <h5 style="text-align: center;">FOR STUDENTS</h5>
                <strong style="color:gray;">A strong personality development and holistic learning framework with regular extra-curricular activities such as:</strong>
                <br />
                <ul style="margin:0 35px">
                  <li style="list-style-type: disclosure-closed;color:gray;">Dance</li>
                  <li style="list-style-type: disclosure-closed;color:gray;">Arts & Crafts</li>
                  <li style="list-style-type: disclosure-closed;color:gray;">Music & Singing</li>
                  <li style="list-style-type: disclosure-closed;color:gray;">Yoga & Movement Therapy</li>
                  <li style="list-style-type: disclosure-closed;color:gray;">Storytelling and Group Discussions</li>
                  <li style="list-style-type: disclosure-closed;color:gray;">Poem recitals, etc.</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>



<!-- ====================================FOOTER>>>STARTED==================================== -->

<?php include("footer.php") ?>



<script>
  $("#owl-carouselPartners").addClass("owl-carousel");

  $('#owl-carouselPartners').owlCarousel({
    items: 6,
    loop: true,
    margin: 80,
    nav: true,
    autoplay: true,
    autoWidth: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 6
      }
    }

  });
</script>