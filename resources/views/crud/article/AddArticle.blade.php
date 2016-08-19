@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Articles</div>

                <div class="panel-body">
                    
					<form method="POST" action="/article/add">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="title">Title</label>
							<input type="text" name="title" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label for="body">Body</label>
							<textarea name="body" class="form-control" rows="7" required="required"></textarea>
						</div>
						<div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
					


                </div>
            </div>
        </div>
    </div>
</div>
@endsection