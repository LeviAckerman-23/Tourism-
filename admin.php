                           <!-- UPDATED -->

<?php


$conn = new mysqli('localhost', 'root', '', 'tourism');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['add_user'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $role = 'user'; 
        $status = 1; // Default status as active when adding a new user
        $joined = date('Y-m-d H:i:s'); // Capturing joined date and time

        $stmt = $conn->prepare("INSERT INTO users (username, email, password, phone, city, role, status, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssis", $username, $email, $password, $phone, $city, $role, $status, $joined);
        $stmt->execute();
        $stmt->close();
    }

    elseif (isset($_POST['delete_user'])) {
        $id = $_POST['user_id'];
        $stmt = $conn->prepare("UPDATE users SET status = 0 WHERE user_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    elseif (isset($_POST['update_user'])) {
        $id = $_POST['user_id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];

        $stmt = $conn->prepare("UPDATE users SET username = ?, email = ?, phone = ?, city = ? WHERE user_id = ?");
        $stmt->bind_param("ssssi", $username, $email, $phone, $city, $id);
        $stmt->execute();
        $stmt->close();
    }

    elseif (isset($_POST['add_destination'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $address = $_POST['address'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $google_place_id = $_POST['google_place_id'];
        $category = $_POST['category'];
        $image_url = $_POST['image_url'];

        $stmt = $conn->prepare("INSERT INTO tourism_spots (name, description, address, latitude, longitude, google_place_id, category, image_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $name, $description, $address, $latitude, $longitude, $google_place_id, $category, $image_url);
        $stmt->execute();
        $stmt->close();
    }

    elseif (isset($_POST['delete_destination'])) {
        $id = $_POST['spot_id'];
        $stmt = $conn->prepare("DELETE FROM tourism_spots WHERE spot_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    elseif (isset($_POST['update_destination'])) {
        $id = $_POST['spot_id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $address = $_POST['address'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $google_place_id = $_POST['google_place_id'];
        $category = $_POST['category'];
        $image_url = $_POST['image_url'];

        $stmt = $conn->prepare("UPDATE tourism_spots SET name = ?, description = ?, address = ?, latitude = ?, longitude = ?, google_place_id = ?, category = ?, image_url = ? WHERE spot_id = ?");
        $stmt->bind_param("ssssssssi", $name, $description, $address, $latitude, $longitude, $google_place_id, $category, $image_url, $id);
        $stmt->execute();
        $stmt->close();
    }
}

$users = $conn->query("SELECT * FROM users WHERE status = 1"); // Only active users
$inactive_users = $conn->query("SELECT * FROM users WHERE status = 0"); // Only inactive users
$spots = $conn->query("SELECT * FROM tourism_spots");
$reviews = $conn->query("SELECT * FROM reviews");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; }
        .sidebar { width: 200px; background-color: #333; padding: 10px; color: white; height: 100vh; }
        .sidebar a { color: white; display: block; padding: 10px; text-decoration: none; }
        .sidebar a:hover { background-color: #575757; }
        .main { padding: 20px; flex-grow: 1; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        button { margin: 5px; padding: 10px; background-color: #28a745; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #218838; }
        form { display: inline; }
        .modal { display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.4); padding-top: 60px; }
        .modal-content { background-color: #fefefe; margin: 5% auto; padding: 20px; border: 1px solid #888; width: 80%; }
        .close { color: #aaa; float: right; font-size: 28px; font-weight: bold; }
        .close:hover, .close:focus { color: black; text-decoration: none; cursor: pointer; }
        label { display: block; margin-top: 10px; }
        input, select, textarea { display: block; margin-top: 5px; width: 100%; padding: 8px; }
        .actions { display: flex; justify-content: space-between; }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>VOYAGEVISTA</h2>
    <a href="?page=dashboard">Dashboard</a>
    <a href="?page=tourists">Tourists</a>
    <a href="?page=destinations">Destinations</a>
    <a href="?page=reviews">Reviews</a>
    <a href="?page=feedback">Feedback</a>
    <a href="?page=settings">Settings</a>
</div>

<div class="main">
    <?php
    if (!isset($_GET['page']) || $_GET['page'] == 'dashboard') {
        echo "<h1>Welcome Admin</h1><p>Here is your dashboard overview.</p>";
    }

    elseif ($_GET['page'] == 'tourists') {
        echo "<h1>User Management</h1>";

        echo "<h2>Active Users</h2>";
        echo "<table><tr><th>ID</th><th>Username</th><th>Email</th><th>Phone</th><th>City</th><th>Joined</th><th>Actions</th></tr>";
        while ($row = $users->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['user_id']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['city']}</td>
                    <td>{$row['created_at']}</td>
                    <td>
                        <form method='post' style='display:inline;'>
                            <input type='hidden' name='user_id' value='{$row['user_id']}'>
                            <button name='delete_user'>Deactivate</button>
                        </form>
                    </td>
                </tr>";
        }
        echo "</table>";

        // Inactive Users Table
        echo "<h2>Inactive Users</h2>";
        echo "<table><tr><th>ID</th><th>Username</th><th>Email</th><th>Phone</th><th>City</th><th>Joined</th></tr>";
        while ($row = $inactive_users->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['user_id']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['city']}</td>
                    <td>{$row['created_at']}</td>
                </tr>";
        }
        echo "</table>";
    }

    elseif ($_GET['page'] == 'destinations') {
        echo "<h1>Tourism Spot Management</h1>";
        echo "<button onclick='showAddDestinationForm()'>Add New Destination</button>";
        echo "<table><tr><th>ID</th><th>Name</th><th>Description</th><th>Latitude</th><th>Longitude</th><th>Category</th><th>Address</th><th>Actions</th></tr>";
        
        while ($row = $spots->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['spot_id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['description']}</td>
                    <td>{$row['latitude']}</td>
                    <td>{$row['longitude']}</td>
                    <td>{$row['category']}</td>
                    <td>{$row['address']}</td>
                    <td>
                        <form method='post' style='display:inline;'>
                            <input type='hidden' name='spot_id' value='{$row['spot_id']}'>
                            <button name='delete_destination'>Delete</button>
                        </form>
                        <button onclick='showEditDestinationForm({$row['spot_id']}, \"{$row['name']}\", \"{$row['description']}\", \"{$row['address']}\", \"{$row['latitude']}\", \"{$row['longitude']}\", \"{$row['google_place_id']}\", \"{$row['category']}\", \"{$row['image_url']}\")'>Edit</button>
                    </td>
                </tr>";
        }
        echo "</table>";
    }

    elseif ($_GET['page'] == 'reviews') {
        echo "<h1>User Reviews</h1>";
        echo "<table><tr><th>Review ID</th><th>Spot</th><th>Review</th><th>User ID</th><th>Rating</th><th>Actions</th></tr>";
        while ($row = $reviews->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['review_id']}</td>
                    <td>{$row['spot_id']}</td>
                    <td>{$row['user_id']}</td>
                    <td>{$row['rating']}</td>
                    <td>{$row['comment']}</td>
                    <td>{$row['created_at']}</td>
                </tr>";
        }
        echo "</table>";
    }
    ?>
</div>

<div id="userModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <form method="post">
            <h2 id="modalTitle">Add User</h2>
            <input type="hidden" name="user_id" id="userId">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone">
            <label for="city">City:</label>
            <input type="text" name="city" id="city" required>
            <button type="submit" name="add_user" id="submitButton">Add User</button>
            <button type="button" onclick="closeModal()">Cancel</button>
        </form>
    </div>
</div>


<div id="destinationModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeDestinationModal()">&times;</span>
        <form method="post">
            <h2 id="destinationModalTitle">Add Destination</h2>
            <input type="hidden" name="spot_id" id="spotId">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address">
            <label for="latitude">Latitude:</label>
            <input type="text" name="latitude" id="latitude">
            <label for="longitude">Longitude:</label>
            <input type="text" name="longitude" id="longitude">
            <label for="google_place_id">Google Place ID:</label>
            <input type="text" name="google_place_id" id="google_place_id">
            <label for="category">Category:</label>
            <select name="category" id="category">
                <option value="nature">Nature</option>
                <option value="historical">Historical</option>
                <option value="cultural">Cultural</option>
                <option value="adventure">Adventure</option>
            </select>
            <label for="image_url">Image URL:</label>
            <input type="text" name="image_url" id="image_url">
            <button type="submit" name="add_destination" id="submitDestinationButton">Add Destination</button>
            <button type="button" onclick="closeDestinationModal()">Cancel</button>
        </form>
    </div>
</div>

<script>
    function closeModal() {
        document.getElementById('userModal').style.display = 'none';
    }

    function showAddDestinationForm() {
        document.getElementById('destinationModalTitle').innerText = 'Add Destination';
        document.getElementById('submitDestinationButton').name = 'add_destination';
        document.getElementById('spotId').value = ''; 
        document.getElementById('name').value = '';
        document.getElementById('description').value = '';
        document.getElementById('address').value = '';
        document.getElementById('latitude').value = '';
        document.getElementById('longitude').value = '';
        document.getElementById('google_place_id').value = '';
        document.getElementById('category').value = 'nature'; // Reset to default
        document.getElementById('image_url').value = '';
        document.getElementById('destinationModal').style.display = 'block';
    }

    function showEditDestinationForm(spotId, name, description, address, latitude, longitude, googlePlaceId, category, imageUrl) {
        document.getElementById('destinationModalTitle').innerText = 'Edit Destination';
        document.getElementById('submitDestinationButton').name = 'update_destination';
        document.getElementById('spotId').value = spotId; 
        document.getElementById('name').value = name;
        document.getElementById('description').value = description;
        document.getElementById('address').value = address;
        document.getElementById('latitude').value = latitude;
        document.getElementById('longitude').value = longitude;
        document.getElementById('google_place_id').value = googlePlaceId;
        document.getElementById('category').value = category;
        document.getElementById('image_url').value = imageUrl;
        document.getElementById('destinationModal').style.display = 'block';
    }

    function closeDestinationModal() {
        document.getElementById('destinationModal').style.display = 'none';
    }
</script>

</body>
</html>
