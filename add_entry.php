<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newEntry = [
        'title' => $_POST['title'],
        'content' => $_POST['content']
    ];

    $entries = json_decode(file_get_contents('entries.json'), true);
    $entries[] = $newEntry;
    file_put_contents('entries.json', json_encode($entries));

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Entry</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">Add New Entry</h1>

    <form action="" method="post" class="space-y-4">
        <label for="title" class="block font-semibold">Title:</label>
        <input type="text" id="title" name="title" required class="block w-full border border-gray-300 rounded px-3 py-2">

        <label for="content" class="block font-semibold">Content:</label>
        <textarea id="content" name="content" required class="block w-full border border-gray-300 rounded px-3 py-2"></textarea>

        <input type="submit" value="Submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    </form>
</div>

</body>
</html>
