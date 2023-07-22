<div class="main-menu menu-fixed
     @if(themesetting(Auth::id()) == null)
       menu-light
         @else
        @if(themesetting(Auth::id())->theme == 'light-layout')
        menu-light
        @else
        menu-dark
        @endif
    @endif
    menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('dashboard') }}">
                    <h2 class="brand-text"> {{ __('Admin') }}</h2>
                </a></li>
            <li class="nav-item nav-toggle">
                <a id="toggle" class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('dashboard') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span><span class="badge badge-light-warning badge-pill ml-auto mr-1"></span></a>

            </li>
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
            </li>
            {{-- my Section  --}}

            {{-- for Banner  --}}

            <li class=" nav-item"><a  class="@yield('header') d-flex align-items-center" href="{{ route('headertextview') }}"><i data-feather='clipboard'></i><span class="menu-title text-truncate" data-i18n="Service">Update Banner</span></a>
                {{-- <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{ route('headertextview') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Update Banner</span></a>
                    </li>

                </ul> --}}
            </li>

            {{-- End Header  --}}


            <li class=" nav-item"><a class="@yield('service') d-flex align-items-center" href="#"><i data-feather='cpu'></i><span class="menu-title text-truncate" data-i18n="Service">Service</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{ route('admin.serviceview') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Create</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{ route('admin.servicetableview') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">List</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{ route('admin.updateserviceview') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Update Service</span></a>
                    </li>
                </ul>
            </li>



            {{-- for team --}}
            <li class=" nav-item"><a class="@yield('team') d-flex align-items-center" href="#"><i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="Service">Team</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{ route('admin.teamview') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Create</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{ route('admin.teamtable') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">List </span></a>
                    </li>
                </ul>
            </li>

            {{-- end team --}}

            {{-- Blog --}}
            <li class=" nav-item"><a class="@yield('blog') d-flex align-items-center" href="#"><i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="Service">Blog</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{ route('blog.create') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Create</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{ route('blog.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">List </span></a>
                    </li>
                </ul>
            </li>

            {{-- Case Studies --}}

            <li class=" nav-item"><a class="@yield('recentwork') d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Service">Recent Work</span></a>
                <ul class="menu-content">
                    <li><a  class="d-flex align-items-center" href="{{ route('admin.addrecentwork') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List"> Create</span></a>
                    </li>

                    <li><a class="d-flex align-items-center" href="{{ route('admin.managerecentwork') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List"> List</span></a>
                    </li>

                    <li><a class="d-flex align-items-center" href="{{ route('recentwork.button.show') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List"> Update Button</span></a>
                    </li>

                </ul>
            </li>

               {{--End Case Studies --}}

               {{-- Client Feedback --}}

               <li class=" nav-item"><a class=" @yield('feedback') d-flex align-items-center" href="#"><i data-feather='frown'></i><span class="menu-title text-truncate" data-i18n="Service">Client Feedback</span></a>
                <ul class="menu-content">
                    <li><a  class="d-flex align-items-center" href="{{ route('feedback.addview') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List"> Create</span></a>
                    </li>

                    <li><a class="d-flex align-items-center" href="{{ route('feedback.show') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                    </li>

                </ul>
            </li>

            {{-- Client Message  --}}


            <li class=" nav-item"><a class=" @yield('clientmessage') d-flex align-items-center" href="#"><i data-feather='message-square'></i><span class="menu-title text-truncate" data-i18n="Service">Client Message</span></a>
                <ul class="menu-content">
                    <li><a  class="d-flex align-items-center" href="{{ route('customer.message.show') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List"> Show Message</span></a>
                    </li>


                </ul>
            </li>

            {{-- Project area --}}

            <li class=" nav-item"><a class=" @yield('projectarea') d-flex align-items-center" href="{{ route('project.area.updateview') }}"><i data-feather='rss'></i><span class="menu-title text-truncate" data-i18n="Service">Update Project</span></a>
                {{-- <ul class="menu-content">
                    <li><a  class="d-flex align-items-center" href="{{ route('project.area.updateview') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List"> Update Project</span></a>
                    </li>


                </ul> --}}
            </li>

            {{-- Experience Area --}}

            <li class=" nav-item"><a class=" @yield('experiencearea') d-flex align-items-center" href="{{ route('experience.area.updateview') }}"><i data-feather='dribbble'></i><span class="menu-title text-truncate" data-i18n="Service">Update About Us</span></a>
            </li>

            {{-- Contact section  --}}

            <li class=" nav-item"><a class=" @yield('contact') d-flex align-items-center" href="{{ route('contact.updateview') }}"><i data-feather='phone-forwarded'></i><span class="menu-title text-truncate" data-i18n="Service">Update Contact</span></a>
                {{-- <ul class="menu-content">
                    <li><a  class="d-flex align-items-center" href="{{ route('contact.updateview') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Update Contact</span></a>
                    </li>
                </ul> --}}
            </li>
            <li class=" nav-item"><a class=" @yield('trust') d-flex align-items-center" href="#"><i data-feather='sunset'></i><span class="menu-title text-truncate" data-i18n="Service">Trust Us</span></a>
                <ul class="menu-content">
                    <li><a  class="d-flex align-items-center" href="{{ route('trust.addview') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Create</span></a>
                    </li>

                    <li><a  class="d-flex align-items-center" href="{{ route('trust.show') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                    </li>


                </ul>
            </li>

            {{-- title Section  --}}

            <li class=" nav-item"><a class=" @yield('title') d-flex align-items-center" href="{{ route('title.show') }}"><i data-feather='type'></i><span class="menu-title text-truncate" data-i18n="Service">Update Title</span></a>
            </li>

            {{-- Social Area <Section>/Section> --}}
                <li class=" nav-item"><a class=" @yield('social_url') d-flex align-items-center" href="{{ route('social.url.update.view') }}"><i data-feather='link'></i></i><span class="menu-title text-truncate" data-i18n="Service">Social Url Update</span></a>
                </li>

                <li class=" nav-item"><a class=" @yield('copyright') d-flex align-items-center" href="{{ route('copyright.update.view') }}"><i data-feather='clipboard'></i><span class="menu-title text-truncate" data-i18n="Service">Update Copyright</span></a>
                </li> <br>

                <li class=" nav-item"><a class=" @yield('social_url') d-flex align-items-center" href="{{ route('generalsetting.update.view') }}"><i data-feather='link'></i></i><span class="menu-title text-truncate" data-i18n="Service">General Setting</span></a>
                </li>

            {{-- End my Section  --}}

        </ul>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function(){
        $('#dark').click(function(){
            $.ajax({
                url: "{{ route('theme.color') }}",
                type: "GET",
                success: function(data){
                }
            })
        });

        $('#toggle').click(function(){
        $.ajax({
            url: "{{ route('theme.toggle') }}",
            type: "GET",
            success: function(data)
            {

            }

        })
    });

    })
</script>





