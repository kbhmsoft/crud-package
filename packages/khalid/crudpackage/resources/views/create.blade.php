<!-- create.blade.php -->
<h1>Create Crud</h1>

<form action="{{ route('crud.store') }}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <!-- Add other fields as needed -->
    <button type="submit">Create</button>
</form>
