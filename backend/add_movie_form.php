<!-- Admin control of the movies -->
<!-- clear all using id if id in all input in same -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About movie</title>
</head>

<body>
    <form action="add_movie.php" method="post" name="about_movie">
        <label for="id">ID</label>
        <input type="number" name="id" id="id"><br><br>
        <label for="">Movie Title</label>
        <input type="text" id="title" name="title"><br><br>
        <label for="">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea><br><br>
        <label for="">Year</label>
        <input type="date" id="year" name="year"><br><br>
        <label for="">Genre</label>
        <select name="genre" id="genre">
            <option value="none">Select a genre</option>
            <option value="drama">Drama</option>
            <option value="comedy">Comedy</option>
            <option value="action">Action</option>
            <option value="thriller">Thriller</option>
        </select><br><br>
        <label for="">Rating</label>
        <input type="number" step=".1" id="rating" name="rating" max="10" min="0"><br><br>
        <!-- <button onclick="clearForm()">Clear All</button> -->
        <button type="submit">Add Movie</button>
    </form>


    <!-- <script>
    function clearForm() {
        document.getElementById('id').value = '';
        document.getElementById('title').value = '';
        document.getElementById('description').value = '';
        document.getElementById('year').value = '';
        document.getElementById('genre').value = 'none'; // Set default value
        document.getElementById('rating').value = '';
    }
</script> -->
</body>

</html>