
@extends('layouts.application')
@section('content')

<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">View Posts</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">View Posts</p>
        </div>
    </div>
</div>

        @foreach ($posts as $post )
		<div class="card">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="post.html">
						<div><a href = ""><img class="w-100 rounded-circle mb-3 mb-sm-0" src =  "{{ asset($post->imagepath) }}"> </a>
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block">
						<h4 class="card-text"><h2 class="card-title"><a href="post.html">{{ $post->name }}</a></h2>
                            <h4 class="card-text">{{ substr(strip_tags($post->body), 0, 150) }}

						<div class="metafooter">
							<div class="wrapfooter">

								<span class="author-meta">
                                    <span class="post-name"><a href="author.html"><b>Posted:&nbsp;</b>{{$post->created_at->diffForHumans()}}</a></span><br/>
															</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->

        @endforeach







	</div>

	<!-- End Featured
	================================================== -->

@endsection
