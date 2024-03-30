<?php
$entries = json_decode(file_get_contents('entries.json'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal Entries</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">Journal Entries</h1>

    <ul>
        <?php foreach ($entries as $key => $entry): ?>
            <li class="mb-2">
                <a href="view_entry.php?id=<?php echo $key; ?>" class="text-blue-500 hover:underline">
                    <?php echo $entry['title']; ?>
                </a>
                - <a href="edit_entry.php?id=<?php echo $key; ?>" class="text-green-500 hover:underline">Edit</a>
                - <a href="delete_entry.php?id=<?php echo $key; ?>" class="text-red-500 hover:underline">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <a href="add_entry.php" class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Entry</a>
</div>

</body>
</html>
