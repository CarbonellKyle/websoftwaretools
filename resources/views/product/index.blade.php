@extends('layouts.template')

@section('content')

<!--begin::Header-->
<div class="card-header border-0 pt-5">
    <h3 class="card-title align-items-start flex-column">
	    <span class="card-label fw-bolder fs-3 mb-1" style="color: #EF3B2D !important;">CRUD Operations</span>
		<span class="text-muted mt-1 fw-bold fs-7">Activity 1</span>
	</h3>
    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a product">
		<a href="{{ route('product.add') }}" class="btn btn-sm btn-light-primary" data-bs-target="#kt_modal_invite_friends">
		<!--begin::Svg Icon | path: icons/stockholm/Shopping/Cart4.svg-->
			<span class="svg-icon svg-icon-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<path opacity="0.25" d="M3.19406 11.1644C3.09247 10.5549 3.56251 10 4.18045 10H19.8195C20.4375 10 20.9075 10.5549 20.8059 11.1644L19.4178 19.4932C19.1767 20.9398 17.9251 22 16.4586 22H7.54138C6.07486 22 4.82329 20.9398 4.58219 19.4932L3.19406 11.1644Z" fill="#7E8299" />
					<path d="M2 9.5C2 8.67157 2.67157 8 3.5 8H20.5C21.3284 8 22 8.67157 22 9.5C22 10.3284 21.3284 11 20.5 11H3.5C2.67157 11 2 10.3284 2 9.5Z" fill="#7E8299" />
					<path d="M10 13C9.44772 13 9 13.4477 9 14V18C9 18.5523 9.44772 19 10 19C10.5523 19 11 18.5523 11 18V14C11 13.4477 10.5523 13 10 13Z" fill="#7E8299" />
					<path d="M14 13C13.4477 13 13 13.4477 13 14V18C13 18.5523 13.4477 19 14 19C14.5523 19 15 18.5523 15 18V14C15 13.4477 14.5523 13 14 13Z" fill="#7E8299" />
					<g opacity="0.25">
						<path d="M10.7071 3.70711C11.0976 3.31658 11.0976 2.68342 10.7071 2.29289C10.3166 1.90237 9.68342 1.90237 9.29289 2.29289L4.29289 7.29289C3.90237 7.68342 3.90237 8.31658 4.29289 8.70711C4.68342 9.09763 5.31658 9.09763 5.70711 8.70711L10.7071 3.70711Z" fill="#7E8299" />
						<path d="M13.2929 3.70711C12.9024 3.31658 12.9024 2.68342 13.2929 2.29289C13.6834 1.90237 14.3166 1.90237 14.7071 2.29289L19.7071 7.29289C20.0976 7.68342 20.0976 8.31658 19.7071 8.70711C19.3166 9.09763 18.6834 9.09763 18.2929 8.70711L13.2929 3.70711Z" fill="#7E8299" />
					</g>
				</svg>
			</span>
		<!--end::Svg Icon-->New Product</a>
	</div>
</div>
<!--end::Header-->

<!--begin::Body-->
<div class="card-body py-3">
    <h2 class="mt-4 text-center"><strong>Products</strong></h2><br>
    @if(Session::has('remove_product'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('remove_product')}}
        </div>
    @endif

	<!--begin::Table container-->
	<div class="table-responsive">
		<!--begin::Table-->
		<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
			<!--begin::Table head-->
			<thead>
				<tr class="fw-bolder text-muted">
                    <th class="min-w-150px">Name</th>
                    <th class="min-w-150px">Description</th>
                    <th class="min-w-150px">Price</th>
                    <th class="min-w-150px">Date Created</th>
                    <th class="min-w-150px" text-end>Action</th>
                </tr>
            </thead>
            <!--end::Table head-->
			<!--begin::Table body-->
            <tbody>
            @foreach ($products as $product)
				<tr>
                    <td>
                        <div class="d-flex align-items-center">
							<div class="d-flex justify-content-start flex-column">
								<p class="text-dark fw-bolder text-hover-primary fs-6">{{$product->name}}</p>
							</div>
						</div>
					</td>
                    <td>
                        <div class="d-flex align-items-center">
							<div class="d-flex justify-content-start flex-column">
								<p class="text-dark fw-bolder text-hover-primary fs-6">{{$product->description}}</p>
							</div>
						</div>
					</td>
                    <td>
                        <div class="d-flex align-items-center">
							<div class="d-flex justify-content-start flex-column">
								<p class="text-dark fw-bolder text-hover-primary fs-6">{{$product->price}}</p>
							</div>
						</div>
					</td>
                    <td>
                        <div class="d-flex align-items-center">
							<div class="d-flex justify-content-start flex-column">
								<p class="text-dark fw-bolder text-hover-primary fs-6">{{$product->created_at}}</p>
							</div>
						</div>
					</td>
                    <td class="text-end">
						<a href="/product/view/{{$product->id}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
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
						<a href="/product/edit/{{$product->id}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
							<!--begin::Svg Icon | path: icons/stockholm/Communication/Write.svg-->
							<span class="svg-icon svg-icon-3">
								<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
									<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<a href="/product/remove/{{$product->id}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
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