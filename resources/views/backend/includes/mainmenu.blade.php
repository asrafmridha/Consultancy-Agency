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
                    <span class="brand-logo">
                        <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                            <defs>
                                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                    <stop stop-color="#000000" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                    <g id="Group" transform="translate(400.000000, 178.000000)">
                                        <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                        <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                        <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                        <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                        <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <h2 class="brand-text">Vuexy</h2>
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





