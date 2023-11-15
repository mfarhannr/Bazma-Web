@extends('layouts.app-pages')

@section('content')

  <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('.pa/foto/profil_sekolah.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white">Discover Your Potential Match  <span id="typed">Talent</span></h1>
            <p class="lead mb-4 text-white opacity-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
            <button type="submit" class="btn bg-white text-dark">Create Account</button>
           
          </div>
        </div>
      </div>
    </div>
  </header>



  <div class="card card-body  mx-3 mx-md-4 mt-n6 mb-4">
  <section>
    <div class="container">
      <div class="d-flex justify-content-center mt-lg-n5">
        <div class="card">
          <ul class="text-center mb-0 p-2">
            <li class="btn btn-info my-0" data-filter="all">All</li>
            <li class="btn my-0" data-filter="web-developer">Web Developer</li>
            <li class="btn my-0" data-filter="graphic-designer">Graphic Designer</li>
            <li class="btn my-0" data-filter="ui-ux-designer">UI/UX Designer</li>
            <li class="btn my-0" data-filter="digital-marketer">Digital Marketer</li>
          </ul>
        </div>
      </div>
  </section>

  <br>
  <br>
  <br>
<br>
  <div class="container talent ">
    <div class="row">
      <div class="itemBox col-lg-3 col-sm-6" data-item="ui-ux-designer" >
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image" href=".pa/tampilan/arif.html" >
                <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="hover-img img-fluid border-radius-lg" loading="lazy" >
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href=".pa/tampilan/arif.html" class="text-dark font-weight-bold">A. Fauzan Arif H.</a>
              </h5>
              <p>
                UI/UX Designer
              </p>
            </div>
          </div>
        </div>

      <div class="itemBox col-lg-3 col-sm-6" data-item="graphic-designer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/ahmad.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/ahmad.html" class="text-dark font-weight-bold">Ahmad Sibgatullah L.</a>
            </h5>
            <p>
              Graphic Designer
            </p>
          </div>
        </div>
      </div>

      <div class="itemBox col-lg-3 col-sm-6" data-item="graphic-designer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/arya.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/arya.html" class="text-dark font-weight-bold">Ardian Arya Putra</a>
            </h5>
            <p>
              Graphic Designer
            </p>
          </div>
        </div>
      </div>

      <div class="itemBox col-lg-3 col-sm-6" data-item="graphic-designer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/bayu.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/bayu.html" class="text-dark font-weight-bold">Bayu Bagaskara</a>
            </h5>
            <p>
              Graphic Designer
            </p>
          </div>
        </div>
      </div>



      <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/bintang.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/bintang.html" class="text-dark font-weight-bold">Bintang Riski Sulistio</a>
            </h5>
            <p>
              Web Developer
            </p>
          </div>
        </div>
      </div>

      <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/firman.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/firman.html" class="text-dark font-weight-bold">Firmansyah</a>
            </h5>
            <p>
              Web Developer
            </p>
          </div>
        </div>
      </div>


      <div class="itemBox col-lg-3 col-sm-6" data-item="graphic-designer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/hafis.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/hafis.html" class="text-dark font-weight-bold">Hafiz Alfitrah</a>
            </h5>
            <p>
              Graphic Designer
            </p>
          </div>
        </div>
      </div>


      <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/hamidzan.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/hamidzan.html" class="text-dark font-weight-bold">Hamidzan P.B</a>
            </h5>
            <p>
              Web Developer
            </p>
          </div>
        </div>
      </div>

      <div class="itemBox col-lg-3 col-sm-6" data-item="ui-ux-designer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/reski.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/reski.html" class="text-dark font-weight-bold">Muhammad Rizqi</a>
            </h5>
            <p>
              UI/UX Designer
            </p>
          </div>
        </div>
      </div>

      <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/ilham.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/ilham.html" class="text-dark font-weight-bold">Ilham Alfiansyah</a>
            </h5>
            <p>
              Web Developer
            </p>
          </div>
        </div>
      </div>

      <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/alam.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/alam.html" class="text-dark font-weight-bold">M. Alamsyah</a>
            </h5>
            <p>
              Web Developer
            </p>
          </div>
        </div>
      </div>

      <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/frahan.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/frahan.html" class="text-dark font-weight-bold">Muhammad Farhan</a>
            </h5>
            <p>
              Web Developer
            </p>
          </div>
        </div>
      </div>

      <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/frahan.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/fikri.html" class="text-dark font-weight-bold">M. Maulana Fikri</a>
            </h5>
            <p>
              Web Developer
            </p>
          </div>
        </div>
      </div>


      <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/syahru.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/syahru.html" class="text-dark font-weight-bold">Muhammad Syahru</a>
            </h5>
            <p>
              Web Developer
            </p>
          </div>
        </div>
      </div>

      <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/nabil.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/nabil.html" class="text-dark font-weight-bold">Nabil Rabbani</a>
            </h5>
            <p>
              Web Developer
            </p>
          </div>
        </div>
      </div>

      <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/husen.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/husen.html"  class="text-dark font-weight-bold">Vincent Rahadian U.</a>
            </h5>
            <p>
              Web Developer
            </p>
          </div>
        </div>
      </div>

      <div class="itemBox col-lg-3 col-sm-6" data-item="ui-ux-designer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/yuda.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/yuda.html" class="text-dark font-weight-bold">Wahyuda</a>
            </h5>
            <p>
              UI/UX Designer
            </p>
          </div>
        </div>
      </div>

      <div class="itemBox col-lg-3 col-sm-6" data-item="ui-ux-designer">
        <div class="card card-plain">
          <div class="card-header p-0 position-relative">
            <a class="d-block blur-shadow-image" href=".pa/tampilan/zaldi.html">
              <img src=".pa/foto/arya.png" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy">
            </a>
          </div>
          <div class="card-body px-0">
            <h5>
              <a href=".pa/tampilan/zaldi.html" class="text-dark font-weight-bold">Zaldi</a>
            </h5>
            <p>
              Graphic Designer
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- <section>
      <div class="container">
        <div class="d-flex justify-content-center mt-lg-n4">
          <div class="card">
            <ul class="text-center mb-0 p-2">
              <li class="btn btn-info my-0" data-filter="all">1</li>
              <li class="btn my-0" data-filter="web-developer">2</li>
              <li class="btn my-0" data-filter="graphic-designer">3</li>
              <li class="btn my-0" data-filter="ui-ux-designer">4</li>
              <li class="btn my-0" data-filter="digital-marketer">5</li>
            </ul>
          </div>
        </div>
    </section> -->
  </div>
  <script>
    let list = document.querySelectorAll('.btn');
    let itemBox = document.querySelectorAll('.itemBox');

    for (let i = 0; i < list.length; i++) {
      list[i].addEventListener('click', function () {
        for (let j = 0; j < list.length; j++) {
          list[j].classList.remove('btn-info');
        }
        this.classList.add('btn-info')

        let datafilter = this.getAttribute('data-filter');

        for (let k = 0; k < itemBox.length; k++) {
          itemBox[k].classList.remove('show');
          itemBox[k].classList.add('hide');

          if (itemBox[k].getAttribute('data-item') == datafilter || datafilter == "all") {
            itemBox[k].classList.remove('hide')
            itemBox[k].classList.add('show')
          }

        }
      })
    }
  </script>
  </div>
  @endsection