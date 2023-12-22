<!-- index.blade.php -->
<h1>Crud List</h1>

@foreach($cruds as $crud)
    <p>{{ $crud->name }}</p>
    <!-- Add other fields as needed -->
@endforeach
