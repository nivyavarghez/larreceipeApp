<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>RecipeApp - The food world in one place</title>
</head>
<style>
    /* General styles */
body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f7f7f7;
    color: #333;
    text-align: center; /* Fix text alignment */
}

header {
    background-color: #ff6b6b;
    color: white;
    padding: 20px 0;
}

header h1 {
    margin: 0;
    font-size: 2.5em;
}

header p {
    margin: 10px 0 0;
    font-size: 1.2em; /* Fix font size */
}

main {
    padding: 40px 20px;
}

section {
    margin-bottom: 30px;
}

img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    
}
.image:hover{
    transform: scale(1.0); /* Adjust the scale factor for zoom level */

}

/* Button styles */
button {
    background-color: #ff6b6b;
    color: white;
    border: none;
    padding: 15px 30px;
    font-size: 1em;
    margin: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #e55d5d;
}

button:focus {
    outline: none;
}

</style>
<body>
    <header>
        <h1>RecipeApp</h1>
        <p>Your one-stop destination for delicious recipes!</p>
    </header>
     
    <main>
        <section>
            <h2>Welcome to RecipeApp</h2>
            <p><b>The world of Recipes :)</b></p>
            <img class="image" src="{{ asset('images/food1.jpg') }}" alt="Delicious Recipes" width="500">
            <section>
            <button onclick="location.href=">Login</button>
            <button onclick="location.href=">Register</button>
        </section>
        </section>

        
    </main>
</body>
</html>
