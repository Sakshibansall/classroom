<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Book Form</title>
    <link rel="stylesheet" href="sell.css">
</head>

<body>
    <div class="container">
        <h1>Sell Your Book</h1>
        <form action="book.php" method="POST">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" id="author" name="author" required>
            </div>

            <div class="form-group">
            <label for="condition">Condition of Book:</label>
            <select id="condition" name="conditionbook">
                <option value="new">New</option>
                <option value="likeNew">Like New</option>
                <option value="good">Good</option>
                <option value="fair">Fair</option>
                <option value="poor">Poor</option>
            </select><br>
            </div>

            <div class="form-group">
                <label for="price">Price (₹):</label>
                <input type="number" id="price" name="price"  required>
            </div>
            <div class="form-group">
                <label for="cover">Cover Image:</label>
                <input type="file" id="cover" name="cover" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>