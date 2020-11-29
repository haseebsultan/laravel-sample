<!DOCTYPE html>
<html lang="en">

<head>
@include("admin.head")
</head>
<body id="kt_body" class="page-loading-enabled page-loading header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

<!--begin::Main-->

		@include("admin/partials/_header-mobile");
		<div class="d-flex flex-column flex-root">

			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">

				@include("admin/partials/_aside");

				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

					@include("admin/partials/_header");

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                        @yield('content');


{{--                        @include("partials/_subheader/subheader-v1");--}}

{{--						@include("partials/_content");--}}
					</div>

					<!--end::Content-->

{{--					@include("admin/partials/_footer");--}}
				</div>

				<!--end::Wrapper-->
			</div>

			<!--end::Page-->
		</div>

		<!--end::Main-->
@include("admin.foot")
</body>

</html>
