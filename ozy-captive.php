<html>
<head>
<style>
/* Add your CSS styles here */
.container {
    display: flex;
    flex-direction: column;
    align-items: center;
}
</style>
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form action="/login" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <button onclick="window.location.href='ozy-captive.php?action=register'">Register</button>
</div>
</body>
</html>