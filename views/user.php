<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Users</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <div class="flex justify-center items-center bg-gray-100 mt-3 p-3">
        <form action="../src/config/Database.php" method="post">
            <div>
                <label for="name" class="text-normal text-black">Name:</label>
                <input name="name" type="text" placeholder="Name" class="border-2 border-gray-300 p-2 rounded-lg mb-2">
            </div>
            <div>
                <label for="email" class="text-normal text-black">E-mail:</label>
                <input name="email" type="text" placeholder="Email"
                    class="border-2 border-gray-300 p-2 rounded-lg mb-2">
            </div>

            <div>
                <label for="password" class="text-normal text-black">Passoword:</label>
                <input name="password" type="text" placeholder="Password"
                    class="border-2 border-gray-300 p-2 rounded-lg mb-2">
            </div>
        </form>
    </div>

</body>

</html>