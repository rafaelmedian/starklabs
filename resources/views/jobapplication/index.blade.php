@include('layouts.head')

<header class="w-100 bg-white bg-right pv3">
  @include('layouts.navbar')
</header>

<section class="mt5 mw8 w-100 center ph3-m ph2-l">
  <div class="mb5 pa3 pa0-l">
    <h1 class="mb2">Come work for us.</h1>
    <p>We are looking for top-notch developers capable of building AI and chatbots. Sounds like a good fit for you?</p>
  </div>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ secure_url('/jobapplication/create') }}">
      {{ csrf_field() }}
      <div class="form-group ">
        <div class="w-100 dt">
          <div class="fl w-100 w-30-l pa3 pl0-l">
            <label for="full_name" class="f5 b db mb2">Full Name</label>
            <input id="full_name" class="input-reset ba br3 bw2 b--black-10 pa3 ph3 mb2 db w-100" name="full_name" type="text" aria-describedby="name-desc" placeholder="Jhon Smith">
            <!-- <small id="name-desc" class="f6 black-60 db mb2">Helper text for the form control.</small> -->
          </div>
          <div class="fl w-100 w-30-l pa3 pl0-l ml1-l">
            <label for="years_experience" class="f5 b db mb2">Years of experience</label>
            <!-- <input id="years_experience" class="input-reset ba br3 bw2 b--black-10 pa3 ph3 mb2 db w-100" name="years_experience" type="number" aria-describedby="years_experience-desc" placeholder="3+ years"> -->
            <!-- <small id="company_name-desc" class="f6 black-60 db mb2">Helper text for the form control.</small> -->
            <select class="measure input-reset ba br3 bw2 b--black-10 pa3 ph3 mb2 db w-100 " required name="years_experience" aria-describedby="years_experience-desc">
              <option value="0">No experience</option>
              <option value="1">1 year</option>
              <option value="2">2 years</option>
              <option value="3">3 years</option>
              <option value="4">4 years</option>
              <option value="5">5 years</option>
              <option value="6">6 years</option>
              <option value="7">7 years</option>
              <option value="8">8 years</option>
              <option value="9">9 years</option>
              <option value="10">10 years</option>
              <option value="11">11 years</option>
              <option value="12">12 years</option>
              <option value="13">13 years</option>
              <option value="14">14 years</option>
              <option value="15">+15 years</option>
            </select>
          </div>
        </div>
        <div class="w-100 dt">
          <div class="fl w-100 w-30-l pa3 pl0-l">
            <label for="email" class="f5 b db mb2">Email</label>
            <input id="email" class="input-reset ba br3 bw2 b--black-10 pa3 ph3 mb2 db w-100" name="email" type="email" aria-describedby="email-desc" placeholder="example@gmail.com">
            <!-- <small id="email-desc" class="f6 black-60 db mb2">Helper text for the form control.</small> -->
          </div>
          <div class="fl w-100 w-30-l pa3 pl0-l ml1-l">
            <label for="location" class="f5 b db mb2">What's your location?</label>
            <input id="location" class="input-reset ba br3 bw2 b--black-10 pa3 ph3 mb2 db w-100" name="location" type="text" aria-describedby="location-desc" placeholder="United States">
            <!-- <small id="location-desc" class="f6 black-60 db mb2">Helper text for the form control.</small> -->
          </div>
        </div>
        <div class="w-100 dt">
          <div class="fl w-100 w-60-l pa3 pl0-l">
            <label for="portfolio" class="f5 b db mb2">Where’s your work? <span class="normal">(portfolio)</span></label>
            <textarea id="portfolio" class="input-reset ba br3 bw2 b--black-10 pa3 ph3 pt3 pb3 mb2 br2 w-100" name="portfolio" type="text" aria-describedby="portfolio-desc" placeholder="github, linkedin, personal site, etc…"></textarea>
            <!-- <small id="name-desc" class="f6 black-60 db mb2">Helper text for the form control.</small> -->
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="w-100 dt">
          <div class="fl w-50 w-30-l pa3 pl0-l">
            <label class="f5 b db mb2">What’s your typical hourly rate?</label>
            <select class="measure input-reset ba br3 bw2 b--black-10 pa3 ph3 mb2 db w-100 " required name="hourly_rate">
              <option value="1">20 - 40</option>
              <option value="2">40 - 60</option>
              <option value="3">60 - 80</option>
              <option value="3">80 - 100</option>
              <option value="4">+100</option>
            </select>
          </div>
          <div class="fl w-50 w-30-l pa3 pl0-l ml1-l">
            <label class="f5 b db mb2">Available hours a week</label>
            <select class="measure input-reset ba br3 bw2 b--black-10 pa3 ph3 mb2 db w-100 " required name="availability">
              <option value="1">10 - 15</option>
              <option value="2">15 - 25</option>
              <option value="3">25 - 35</option>
              <option value="3">35 - 45</option>
              <option value="4">+45</option>
            </select>
          </div>
        </div>
      </div>

      <div class="form-group mb5">
        <div class="dt w-100 w-60-l pa3 mb5 pl0-l">
          <label for="comment" class="f5 b db mb2">Tell us why you are interested.</label>
          <textarea id="comment" class="input-reset ba br3 bw2 b--black-10 pa3 ph3 pt3 pb6 mb2 br2 w-100" name="description" required aria-describedby="comment-desc" placeholder="Tell us about any additional project details that we should know"></textarea>
          <!-- <small id="comment-desc" class="f6 black-60">Helper text for a form control. Can use this text to <a href="#" class="link underline black-80 hover-blue">link to more info.</a></small> -->
        </div>
        <div class="pa3 pa0-l">
          <button type="submit" class="grow f6 f5-ns tc-m dib br-pill ba ph4 pv2 cta">Get started with your project
            <img class="ml2 v-mid" height="19px" src="{{ secure_asset('/dist/img/r-arrow.svg')}}" alt="cta">
          </button>
        </div>
      </div>
  </form>
</section>

@include('layouts.footer')
