@include('Backend.layouts.includes.header')
{{-- <div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="{{ asset('Backend/backend_asset/vendors') }}/images/deskapp-logo.svg" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div> --}}



@include('Backend.layouts.includes.sidebar')

<div class="main-container">
    @yield('maincontent')
</div>
<!-- welcome modal end -->
@include('Backend.layouts.includes.script')
</body>

</html>
