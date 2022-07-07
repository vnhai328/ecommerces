@extends('backend.layouts.app')

@section('content')
	<div class="row">
		<div class="col-lg-8 col-xxl-6 mx-auto">
			<div class="card">
				<div class="card-header d-block d-md-flex">
					<h3 class="h6 mb-0">{{ translate('Update your system') }}</h3>
{{--					<span>{{ translate('Current verion') }}: {{ get_setting('current_version') }}</span>--}}
				</div>
				<div class="card-body">
					<form action="{{ route('update') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row gutters-5">
							<div class="col-md">
        						<div class="input-group " data-toggle="aizuploader" data-type="archive">
        							<div class="input-group-prepend">
        								<div class="input-group-text bg-soft-secondary">{{ translate('Browse') }}</div>
        							</div>
        							<div class="form-control file-amount">{{ translate('Choose File') }}</div>
        							<input type="hidden" name="update_zip" value="" class="selected-files">
        						</div>
        						<div class="file-preview box"></div>
							</div>
							<div class="col-md-auto">
								<button type="submit" class="btn btn-primary btn-block">{{ translate('Update Now') }}</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection