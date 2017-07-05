@include('layouts.head')

<header class="w-100 bg-white bg-right pv3">
  @include('layouts.navbar')
</header>

<section class="mt5 mw8 w-100 center ph3-m ph2-l">

    <div class="mb5 pa3 pa0-l">
        <h1 class="mb2">Tell us your needs.</h1>
        <p>Hire our top-notch team of developers to bring AI and chatbots to your organization.</p>
    </div>

    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach

    <form method="POST" action="/bot/create">
        {{ csrf_field() }}
        <div class="form-group mb3">
          <label class="f5 b db mb1 ml3 ml0-l">What would you like to build?</label>
          <div class="dt pa3 pa0-l" >
            <div class="radioholder fl tc w-100 w-25-l ba br3 bw2 b--black-10 mv2 mr3-l">
              <label class="" for="r1">
                <div class="ph3 pv3">
                  <input id="r1" class="o-0 dn" type="checkbox" value="1" name="type[]"></input>
                  <img class="db center pt1" src="{{ url('/dist/img/icon_bot.svg')}}"  alt="">
                  <h4 class="mt3 mb1" for="r1">Custom Chatbot</h4>
                  <p class="mv0 silver">A customized chatbot build to fit your needs</p>
                </div>
              </label>
            </div>
            <div class="radioholder fl tc w-100 w-25-l ba br3 bw2 b--black-10 mv2 mr3-l ">
              <label class="" for="r2">
                <div class="ph3 pv3">
                  <input id="r2" class="o-0 dn" type="checkbox" value="2" name="type[]" ></input>
                  <img class="db center pt1" src="{{ url('/dist/img/icon_workflow.svg')}}"  alt="">
                  <h4 class="mt3 mb1">Workflow Automation</h4>
                  <p class="mv0 silver">A workflow automation build around the apps your use</p>
                </div>
              </label>
            </div>
            <div class="radioholder fl tc w-100 w-25-l ba br3 bw2 b--black-10 mv2 mr3-l ">
              <label class="" for="r3">
                <div class="ph3 pv3">
                  <input id="r3" class="o-0 dn" type="checkbox" value="3" name="type[]"></input>
                  <img class="db center pt1" src="{{ url('/dist/img/icon_custom.svg')}}" alt="">
                  <h4 class="mt3 mb1">A specific need</h4>
                  <p class="mv0 silver">Create AI applications to fit your specific case</p>
                </div>
              </label>
            </div>
          </div>
        </div>

        <div class="form-group mb1">
            <div class="w-80 w-30-l dt pa3 pl0-l">
                <label class="f5 b db mb2">What's you estimated monthly budget?</label>
                <select class="measure input-reset ba br3 bw2 b--black-10 pa3 ph3 mb2 db w-100 " required name="estimated_budget">
                    <option value="1">$500 - $1,000</option>
                    <option value="2">$2,000 - $10,000</option>
                    <option value="3">$20,000 - $50,000</option>
                </select>
            </div>
        </div>

        <div class="form-group mb1">
            <div class="w-100 w-60-l dt pa3 pl0-l">
                <label for="comment" class="f5 b db mb2">Project Details</label>
                <textarea id="comment" class="input-reset ba br3 bw2 b--black-10 pa1 ph3 pt3 pb6 mb2 br2 w-100" name="description" required aria-describedby="comment-desc" placeholder="Tell us about any additional project details that we should know"></textarea>
                <!-- <small id="comment-desc" class="f6 black-60">Helper text for a form control. Can use this text to <a href="#" class="link underline black-80 hover-blue">link to more info.</a></small> -->
            </div>
        </div>

        <div class="form-group mb6">
            <div class="w-100 dt mb2">
                <div class="fl w-100 w-30-l pa3 pl0-l">
                    <label for="full_name" class="f5 b db mb2">Full Name</label>
                    <input id="full_name" class="input-reset ba br3 bw2 b--black-10 pa3 ph3 mb2 db w-100" name="full_name" type="text" aria-describedby="name-desc" placeholder="Jhon Smith">
                    <!-- <small id="name-desc" class="f6 black-60 db mb2">Helper text for the form control.</small> -->
                </div>
                <div class="fl w-100 w-30-l pa3 pl0-l ml1-l">
                    <label for="company_name" class="f5 b db mb2">Company Name <span class="normal">(optional)</span></label>
                    <input id="company_name" class="input-reset ba br3 bw2 b--black-10 pa3 ph3 mb2 db w-100" name="company_name" type="text" aria-describedby="company_name-desc" placeholder="Company Inc.">
                    <!-- <small id="company_name-desc" class="f6 black-60 db mb2">Helper text for the form control.</small> -->
                </div>
            </div>

            <div class="w-100 dt mb5">
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

            <div class="pa3 pa0-l">
                <button type="submit" class="grow f6 f5-ns tc-m dib br-pill ba ph4 pv2 cta">Get started with your project <img class="ml2 v-mid" height="19px" src="{{ url('/dist/img/r-arrow.svg')}}" alt="cta"></button>
            </div>

        </div>
    </form>
</section>
@include('layouts.footer')
