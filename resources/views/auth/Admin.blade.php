@extends('layouts.app')
@section('content')
<div class="col-md-7 col-md-offset-2">
<div class="panel panel-default">
    <ul class="list-inline pull-center">
        <li class="col-md-6 col-md-offset-4"><h1><i><b><u> ADMIN PANEL </u></b></i></h1> </li>
        
        </li>  
    </ul>


<!-- Categories -->
	<div class="panel-body">
	<table class="table" width="50%">
		<tr>
			<td><h2> Categories </h2></td>
		</tr>
		<tr style= "width:15px; height:20px; overflow:scroll visible;">
		@foreach($categories as $category)
			<td>
				{{$category->name}}
			<div class="form-group pull-right" >
	            <a href="/admin/category/{{$category->id}}/delete"><button type="submit" class="btn btn-primary"> Delete </button></a>

	    </tr>
			</td>
		@endforeach
		</div>
		<tr>
		<td>
		<form class="form-horizontal" method="POST" action="/admin">
		
		{{ csrf_field() }}
		
		<div class="col-md-10">
            <input name="name" type="text" value=""  class="form-control" placeholder="New Category">
        </div>
        <div class="col-md-2">         
	        <div class="form-group pull-right" >
	            <button type="submit" class="btn btn-primary"> Add</button>

	        </div>
        </div>


		</form>
		</td>
		</tr>
	</table>

<!-- Pricing model -->
	<table class="table" width="50%">
		<tr>
			<td><h2> Location </h2></td>
		</tr>
		<!-- Add foreach -->
		<tr>
			<td>
		@foreach($locations as $location)
				<tr>
					<td>
						{{$location->name}}
			<div class="form-group pull-right" >
	            <a href="/admin/location/{{$location->id}}/delete"><button type="submit" class="btn btn-primary"> Delete </button></a>
	        </div>

					</td>
				</tr>
		@endforeach
			</td>
		</tr>
		<!-- endforeach -->
		<tr>
		<td>
		
		<form class="form-horizontal" method="POST" action="/admin/add_location">
		{{ csrf_field() }}
		
		<div class="col-md-10">
            <input name="name" type="text" value=""  class="form-control" placeholder="New Location">
        </div>
        <div class="col-md-2">         
	        <div class="form-group pull-right" >
	            <button type="submit" class="btn btn-primary"> Add</button>
	        </div>
        </div>

		</form>
		</td>
		</tr>
	</table>




<!-- Pricing Rates -->
	<table class="table" width="50%">
		<tr>
			<td><h2> Pricing Rates </h2></td>
		</tr>
		@foreach ($pricing_rates as $pricing_rate)
			<tr>
				<td>
					{{$pricing_rate->name}}
			<div class="form-group pull-right" >
	            <a href="/admin/pricing_rate/{{$pricing_rate->id}}/delete"><button type="submit" class="btn btn-primary"> Delete </button></a>
	        </div>
				</td>
			</tr>
		@endforeach
		<tr>
		<td>
		<form class="form-horizontal" method="POST" action="/admin/add_pricing_rate">
		{{ csrf_field() }}
		
		<div class="col-md-10">
            <input name="name" type="text" value=""  class="form-control" placeholder="New Pricing Rates">
        </div>
        <div class="col-md-2">         
	        <div class="form-group pull-right" >
	            <button type="submit" class="btn btn-primary"> Add</button>
	        </div>
        </div>

		</form>
		</td>
		</tr>
	</table>
	
</div>

</div></div>





























@endsection
