<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
    <section>
        <div class="container">
          <h1>Voeg een nieuw project toe</h1>
          <form method="POST" action="{{ url('create') }}" novalidate>
						@csrf
						<div class="form-group">
							<label>Project naam</label>
							<input type="text" name="title" id="title" placeholder="Projectname" value="{{ old('title') }}" required />
					
						</div>
						<div class="form-group">
							<label>Content</label>
							<input type="text" name="content" id="content" placeholder="content" value="{{ old('content') }}" required />
						</div>
            <div class="form-group">
							<label>image</label>
							<input type="text" name="image" id="image" placeholder="image" value="{{ old('image') }}" required />
						</div>
            <div class="form-group">
							<label>slug</label>
							<input type="text" name="slug" id="slug" placeholder="slug" value="{{ old('slug') }}" required />
						</div>
						
						<button type="submit">Toevoegen</button>
					  </form>		
        </div>
    </section>
</body>

</html>