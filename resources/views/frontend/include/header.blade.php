
<div class="col-sm-12 col-md-12 col-lg-2 bg-primary p-0 sliderWrapper">
    <i class="fa fa-bars bars fa-2x text-primary"></i>
    <i class="fa fa-search searchIcon fa-2x text-primary"></i>
    <div class="text-center p-3 branding bg-white __border-right __border-bottom">
        <a href="{{url('/')}}">
            <img width="80%" class="mx-auto" src="{{asset('frontend/img/logo.png')}}" alt="HD&S Media Group">
        </a>
    </div>
    <div class="input-group search">
              <span class="input-group-btn">
                <button class="btn __border-raduis __background-primary2" type="button"><i class="fa fa-search text-white"></i></button>
              </span>
        <input type="text" class="form-control __border-raduis __background-primary2 pt-2 pb-2" placeholder="Search for..." aria-label="Search for...">
    </div>
    <ul class="sidebar-menu">
        <li class="pt-4 pr-4 text-right closeIcon"><i class="fa fa-times-circle fa-lg text-white" aria-hidden="true"></i></li>
        <li {{ (Request::is('about') ? 'class=active' : '') }}><a href="{{url('about')}}">HD&S Media Group</a></li>
        <li {{ (Request::is('teamMojo') ? 'class=active' : '') }}><a href="{{url('teamMojo')}}">Team Mojo</a></li>
        <li {{ (Request::is('service') ? 'class=active' : '') }}><a href="{{url('service')}}">Our Services</a></li>
        <li {{ (Request::is('ourTeam') ? 'class=active' : '') }}><a href="{{url('ourTeam')}}">Meet Our Team</a></li>
        <li {{ (Request::is('photoAlbum') ? 'class=active' : '') }}><a href="{{url('photoAlbum')}}">Photo Gallery</a></li>
        <li {{ (Request::is('career') ? 'class=active' : '') }}><a href="{{url('career')}}">Careers</a></li>
    </ul>
</div>