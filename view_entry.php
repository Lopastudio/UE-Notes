<?php
$entries = json_decode(file_get_contents('entries.json'), true);
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Entry</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4"><?php echo $entries[$id]['title']; ?></h1>
    <p><?php echo $entries[$id]['content']; ?></p>

    <a href="index.php" class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back to Entries</a>
</div>

</body>
</html>
