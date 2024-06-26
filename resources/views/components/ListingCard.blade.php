@props(['listed'])

<div class="col-lg-6">
    <div class="card border-0 shadow-sm">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{$listed->logo ? asset('storage/' . $listed->logo) : asset('/images/work.png')}}" class="img-fluid rounded-start d-none d-md-block"
                    alt="{{$listed['company']}}" />
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">
                        @auth
                        <a href="{{route('edit', $listed->id)}}" class="text-dark">{{$listed['title']}}</a>
                        @else
                        <a href="{{route('see_job_description', $listed->id)}}"
                            class="text-dark">{{$listed['title']}}</a>
                        @endauth
                    </h3>
                    <h5 class="card-subtitle mb-2 text-muted">{{$listed['company']}}</h5>
                    <div class="d-flex flex-wrap mb-3">

                        <x-tagListing :tags="$listed->tags" />

                    </div>

                    <p class="card-text"><i class="fa-solid fa-location-dot"></i> {{$listed['location']}}</p>
                </div>
            </div>
        </div>
    </div>
</div>