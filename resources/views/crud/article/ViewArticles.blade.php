@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Articles</div>

                <div class="panel-body">
                    <table>                    
						@foreach($articles as $article)
                    		<tr>
                    			<td>{{$article->title}}</td>
                    			<td>{{$article->title}}</td>
                    		</tr>
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection