<!-- edit.blade.php -->
<h1>Edit Crud</h1>

<form action="{{ route('crud.update', $crud->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $crud->name }}" required>
    <!-- Add other fields as needed -->
    <button type="submit">Update</button>
</form>
