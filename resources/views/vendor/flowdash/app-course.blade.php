@extends("flowdash::layouts.{$layout}", [
  'title' => 'Course',
  'user_header' => false
])

@section('content')
<div class="hero-banner bg-primary-dark d-flex flex-row align-items-center" style="height:250px;">
  <div class="{{ $containerClass ?? 'container' }} page__container">
    <div class="d-flex flex-column">
      <div>
        <div class="badge badge-primary">RUBY ON RAILS</div>
      </div>
      <h1 class="text-white mb-0">Build a Rails 5 application from Scratch</h1>
      <p class="lead text-white">This course will get you started with all the basics </p>
      <div class="my-2 text-white d-flex">
        <strong class="mr-4 "><i class="material-icons icon-16pt icon-light">weekend</i> Beginner</strong>
        <strong><i class="material-icons icon-16pt icon-light">watch_later</i> 2:42</strong>
      </div>
      <div class="mt-1">
        <div class="btn btn-light btn-rounded mr-2">Start Course</div><div class="btn btn-outline-light btn-rounded"><i class="material-icons">local_activity</i> Add to list</div>
      </div>
    </div>
  </div>
</div>

<div class="{{ $containerClass ?? 'container' }} page__container">
  <div class="row">
    <div class="col-md-4 order-12">
      <div class="card card-margin-md-negative-40">
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-light">
              <a href="{{ route('profile') }}" class="flex d-flex align-items-center text-body text-underline-0">
                <span class="avatar mr-3">
                  <img src="{{ asset('/vendor/flowdash/images/avatar/demi.png') }}" alt="avatar" class="avatar-img rounded-circle">
                </span>
                <span class="flex d-flex flex-column">
                  <strong>Adrian Demian</strong>
                  <small class="text-muted text-uppercase">AUTHOR</small>
                </span>
              </a>
          </li>
          <li class="list-group-item">
            <span class="mr-2">
              <a href="#" class="rating-link active"><i class="material-icons">star</i></a> 
              <a href="#" class="rating-link active"><i class="material-icons">star</i></a>
              <a href="#" class="rating-link active"><i class="material-icons">star</i></a>
              <a href="#" class="rating-link active"><i class="material-icons">star</i></a>
              <a href="#" class="rating-link active"><i class="material-icons">star_half</i></a>
            </span>
            <strong>4.7</strong>
            <span class="text-muted">(391 ratings)</span>
          </li>

          <li class="list-group-item">
            <strong>3872 people</strong> <span class="text-muted">completed this course</span>
          </li>
          <li class="list-group-item">
            <a href="" class="btn btn-facebook btn-rounded-social">
              <svg width="14px" style="fill: currentColor;" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook icon</title><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"/></svg>
            </a>
            <a href="" class="btn btn-twitter btn-rounded-social">
              <svg width="14px" style="fill: currentColor;"  role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter icon</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
            </a>
            <a href="" class="btn btn-secondary btn-rounded-social">
              <i class="material-icons">mail</i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-8">
      <div class="page__heading">
        <div class="mb-3"><strong class="text-dark-gray">DESCRIPTION</strong></div>
        <p>
          This course is for Rails newbies and anyone looking to get a solid foundation. It’s designed to teach you everything you need to start building web applications in Rails right away.
        </p>
      </div>
      
      <div class="card">
        <ul class="list-group list-lessons">
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">1. Wireframe</a>
            <div class="ml-auto d-flex align-items-center">
              <span class="badge badge-success mr-2">FREE</span>
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">2. Design with Sketch</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">3. Build static HTML/CSS with Bootstrap 4</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">4. Rails New Application</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">5. Github and push your first commit.</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">6. Add Bootstrap 4 to Rails</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">7. Include Designed SASS assets</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">8. Basics of Routing</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">9. Postgres Database</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">10. Setup Authentification with Devise</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">11. Design &amp; Code the User Account</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">12. Scaffold a Discussions Feature with Rails</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">13. Refactoring and Refining</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">14. Validations</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">15. Rails Testing</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">16. Create Staging and Production Servers</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
          <li class="list-group-item d-flex">
            <a href="{{ route('app-lesson') }}">17. Deploy your Rails App with Capistrano</a>
            <div class="ml-auto">
              <span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> 1:42</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection