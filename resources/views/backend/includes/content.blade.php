<div class="row match-height">
    <!-- Medal Card -->
    <div class="col-xl-4 col-md-6 col-12">
        <div class="card card-congratulation-medal">
            <div class="card-body">
                <h5>Congratulations 🎉 {{ Auth::user()->name }}</h5>
                <h4 class="card-text ">You have {{ $totalmessage }} Message</h4>
                <h3 class="mb-75 mt-4 pt-50">
                    <a href="javascript:void(0);">Unread Message({{ $message }} )</a>
                </h3>
                <a href="{{ route('customer.message.show') }}" class="btn btn-primary">View Message</a>
                
                {{-- <img src="{{ ('uploads/user/'.Auth::user()->image) }}app-assets/images/illustration/badge.svg" class="congratulation-medal" alt="Medal Pic" /> --}}
            </div>
        </div>
    </div>
    <!--/ Medal Card -->

    <!-- Statistics Card -->
    <div class="col-xl-8 col-md-6 col-12">
        <div class="card card-statistics mr-5">
            <div class="card-header ">
                <h4 class="card-title">Welcome Back {{ Auth::user()->name }}</h4>
                {{-- <div class="d-flex align-items-center">
                    <p class="card-text font-small-2 mr-25 mb-0">Updated {{ \Carbon\Carbon::today()}} </p>
                </div> --}}


                {{-- value="{{ \Carbon\Carbon::parse(request()->end_date)->format('Y-m-d') }} --}}
            </div>
            <div class="card-body statistics-body">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">
                            <div class="avatar bg-light-primary mr-2">
                                <div class="avatar-content">
                                    <i data-feather='slack'></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">{{ $service }}</h4>
                                <p class="card-text font-small-3 mb-0">Service</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">
                            <div class="avatar bg-light-info mr-2">
                                <div class="avatar-content">
                                    <i data-feather='users'></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <a href="{{ route('admin.teamview') }}" class="font-weight-bolder mb-0">{{ $team }}
                                <p class="card-text font-small-3 mb-0">Team Member</p> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                        <div class="media">
                            <div class="avatar bg-light-danger mr-2">
                                <div class="avatar-content">
                                    <i data-feather='activity'></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <a href="{{ route('admin.managerecentwork') }}" class="font-weight-bolder mb-0">{{ $recent_work }}
                                <p class="card-text font-small-3 mb-0">Recent Work</p> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="media">
                            <div class="avatar bg-light-success mr-2">
                                <div class="avatar-content">
                                    <i data-feather='award'></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <a href="{{ route('feedback.show') }}" class="font-weight-bolder mb-0">{{ $feedback }}
                                <p class="card-text font-small-3 mb-0">Feedback</p> </a>
                            </div>
                        </div>
                    </div>

                   <div class="m-2 ">
                    <a  href="{{ route('admin.serviceview') }}" class="btn btn-primary ">Add Service</a>
                    <a  href="{{ route('admin.teamview') }}" class="btn btn-primary ">Add Team</a>
                    <a  href="{{ route('admin.addrecentwork') }}" class="btn btn-primary  ">Add Recent Work</a>
                    <a  href="{{ route('feedback.addview') }}" class="btn btn-primary ">Add Feedback</a>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Statistics Card -->
</div>


<div class="col-12">
    <div class="card">
        <div class="card-header d-flex flex-sm-row flex-column justify-content-md-between align-items-start justify-content-start">
        
            <div class="d-flex align-items-center flex-wrap mt-sm-0 mt-1">
                <h5 class="font-weight-bolder mb-0 mr-1"></h5>
            
            </div>
        </div>
        <div class="card-body">
            <div id="line-chart"></div>
        </div>
    </div>
</div>

{{-- Bar Chart  --}}

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <!-- Bar Chart Starts -->
<div class="col-xl-6 col-12">
    <div class="card">
        <div class="card-header d-flex flex-sm-row flex-column justify-content-md-between align-items-start justify-content-start">
            <div>
                <p class="card-subtitle text-muted mb-25">Balance</p>
                <h4 class="card-title font-weight-bolder">$74,382.72</h4>
            </div>
            <div class="d-flex align-items-center mt-md-0 mt-1">
                <i class="font-medium-2" data-feather="calendar"></i>
                <input type="text" class="form-control flat-picker bg-transparent border-0 shadow-none" placeholder="YYYY-MM-DD" />
            </div>
        </div>
        <div class="card-body">
            <div id="bar-chart"></div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</div>
<!-- Bar Chart Ends -->












