
        <li style="background-image: url({{asset('img/slider_1.jpg)')}}" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading">{{$titre}}</h1>
                  <p class="probootstrap-subheading">{{$sousTitre}}</p>
                </div>
              </div>
            </div>
          </div>
        </li>
                  {{$slot}}
