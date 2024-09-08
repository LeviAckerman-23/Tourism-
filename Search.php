<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Spots Finder - Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .search-form {
            margin-bottom: 20px;
        }
        .search-form input, .search-form select {
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 200px;
        }
        .search-form button {
            padding: 10px 20px;
            background: #f60;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .results {
            margin-top: 20px;
        }
        .result-item {
            background: #fff;
            padding: 20px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<header>
    <h1>Tourism Spots Finder</h1>
</header>

<div class="container">
    <form action="search.php" method="GET" class="search-form">
        <input type="text" name="keyword" placeholder="Search by keyword" value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
        <select name="category">
            <option value="">All Categories</option>
            <option value="Beaches" <?php echo (isset($_GET['category']) && $_GET['category'] == 'Beaches') ? 'selected' : ''; ?>>Beaches</option>
            <option value="Mountains" <?php echo (isset($_GET['category']) && $_GET['category'] == 'Mountains') ? 'selected' : ''; ?>>Mountains</option>
            <option value="Historical" <?php echo (isset($_GET['category']) && $_GET['category'] == 'Historical') ? 'selected' : ''; ?>>Historical Sites</option>
            <!-- Add more categories as needed -->
        </select>
        <button type="submit">Search</button>
    </form>

    <div class="results">
        <?php
        
        // Sample data representing tourist spots (in a real scenario, this would come from a database)
        $spots = [
            ['name' => 'Sunny Beach', 'category' => 'Beaches', 'description' => 'A beautiful sunny beach with golden sand.'],
            ['name' => 'Rocky Mountain', 'category' => 'Mountains', 'description' => 'A rugged mountain ideal for hiking and adventure.'],
            ['name' => 'Old Castle', 'category' => 'Historical', 'description' => 'A historic castle with a rich history.'],
            // Add more sample data as needed
        ];

        // Filtering logic
        $filteredSpots = [];
        if (isset($_GET['keyword']) || isset($_GET['category'])) {
            $keyword = isset($_GET['keyword']) ? strtolower($_GET['keyword']) : '';
            $category = isset($_GET['category']) ? $_GET['category'] : '';

            foreach ($spots as $spot) {
                if (
                    ($keyword === '' || strpos(strtolower($spot['name']), $keyword) !== false || strpos(strtolower($spot['description']), $keyword) !== false) &&
                    ($category === '' || $spot['category'] === $category)
                ) {
                    $filteredSpots[] = $spot;
                }
            }
        } else {
            $filteredSpots = $spots; // If no filter is applied, show all spots
        }

        // Displaying results
        if (count($filteredSpots) > 0) {
            foreach ($filteredSpots as $spot) {
                echo '<div class="result-item">';
                echo '<h2>' . htmlspecialchars($spot['name']) . '</h2>';
                echo '<p>Category: ' . htmlspecialchars($spot['category']) . '</p>';
                echo '<p>' . htmlspecialchars($spot['description']) . '</p>';
                // echo '<p>' . htmlspecialchars($spot['image']) . '</p>';
                // echo '<img src="' . $spot['image'] . '" alt="' . $spot['name'] . '">'; 
                echo '</div>';
            }
        } else {
            echo '<p>No results found.</p>';
        }
        ?>
    </div>
</div>

</body>
</html>
