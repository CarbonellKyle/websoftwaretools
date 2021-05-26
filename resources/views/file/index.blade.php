@extends('layouts.template')

@section('content')

<!--begin::Header-->
<div class="card-header border-0 pt-5">
    <h3 class="card-title align-items-start flex-column">
	    <span class="card-label fw-bolder fs-3 mb-1" style="color: #EF3B2D !important;">File Uploading</span>
		<span class="text-muted mt-1 fw-bold fs-7">Activity 2</span>
	</h3>
    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to upload new file">
		<a href="{{ route('file.add') }}" class="btn btn-sm btn-light-primary" data-bs-target="#kt_modal_invite_friends">
		    <!--begin::Svg Icon | path: icons/stockholm/Files/File.svg-->
            <span class="svg-icon svg-icon-2">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
						<rect fill="#000000" x="6" y="11" width="9" height="2" rx="1" />
						<rect fill="#000000" x="6" y="15" width="5" height="2" rx="1" />
					</g>
				</svg>
			</span>
		<!--end::Svg Icon-->Add File</a>
	</div>
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body py-3">
    <h2 class="mt-4 text-center"><strong>Uploaded Files</strong></h2><br>
    @if(Session::has('delete_file'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('delete_file')}}
        </div>
    @endif

    <?php $i = 0; ?>
	<!--begin::Table container-->
	<div class="table-responsive">
		<!--begin::Table-->
		<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
			<!--begin::Table head-->
			<thead>
				<tr class="fw-bolder text-muted">
                    <th class="min-w-150px">Filename</th>
                    <th class="min-w-150px">FileType</th>
                    <th class="min-w-150px">Date Created</th>
                    <th class="min-w-150px">Date Updated</th>
                    <th class="min-w-150px" text-end>Action</th>
                </tr>
            </thead>
            <!--end::Table head-->
			<!--begin::Table body-->
            <tbody>
            @foreach ($files as $file)
				<tr>
				    <td>
                        <div class="d-flex align-items-center">
							<div class="d-flex justify-content-start flex-column">
								<p class="text-dark fw-bolder text-hover-primary fs-6">{{$file->filename}}</p>
							</div>
						</div>
					</td>
                    <td>
                        <div class="d-flex align-items-center">
							<div class="d-flex justify-content-start flex-column">
								<p class="text-dark fw-bolder text-hover-primary fs-6">{{$file->filetype}}</p>
							</div>
						</div>
					</td>
                    <td>
                        <div class="d-flex align-items-center">
							<div class="d-flex justify-content-start flex-column">
								<p class="text-dark fw-bolder text-hover-primary fs-6">{{$file->created_at}}</p>
							</div>
						</div>
					</td>
                    <td>
                        <div class="d-flex align-items-center">
							<div class="d-flex justify-content-start flex-column">
								<p class="text-dark fw-bolder text-hover-primary fs-6">{{$file->updated_at}}</p>
							</div>
						</div>
					</td>
                    <td class="text-end">
						<a href="/file/view/{{$file->id}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
						    <!--begin::Svg Icon | path: icons/stockholm/General/Settings-1.svg-->
							<span class="svg-icon svg-icon-3">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									    <rect x="0" y="0" width="24" height="24" />
										<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
										<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
									</g>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<a href="/file/edit/{{$file->id}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
							<!--begin::Svg Icon | path: icons/stockholm/Communication/Write.svg-->
							<span class="svg-icon svg-icon-3">
								<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
									<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<a href="/file/delete/{{$file->id}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
							<!--begin::Svg Icon | path: icons/stockholm/General/Trash.svg-->
							<span class="svg-icon svg-icon-3">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
										<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
									</g>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
					</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection