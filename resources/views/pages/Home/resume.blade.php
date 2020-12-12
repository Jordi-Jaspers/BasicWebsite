@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
				<div class="card-header"><b>Resume</b>
					<div class='embed-responsive' style='padding-bottom:140%'>
						<iframe src='/PDF/Resume_JORDI_JASPERS.pdf' width='100%' height='100%'>
							<p>It appears you don't have a PDF plugin for this browser. You can <a href="/home/resume/download">
								click here to download the PDF file.</a>
							</p>
						</iframe>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- src="/PDF/Resume_JORDI_JASPERS.pdf" -->