@if(Session::has('deleted_user'))

		<p class="bg-danger">{{session('deleted_user')}}</p>

		@elseif(Session::has('updated_user'))
			<p class="bg-success">{{session('updated_user')}}</p>

		@elseif(Session::has('created_user'))
			<p class="bg-success">{{session('created_user')}}</p>

@endif
