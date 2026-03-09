<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found | The Blue Reviewer</title>
    <link rel="stylesheet" href="css/style.css"> <!-- reuse your header/footer CSS -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f8f9fa;
            color: #1a1a1a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        .error-container {
            max-width: 600px;
            padding: 20px;
        }

        .error-container h1 {
            font-size: 6rem;
            color: var(--accent-blue);
        }

        .error-container h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .error-container p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 30px;
        }

        .error-container a {
            text-decoration: none;
            background: var(--accent-blue);
            color: #fff;
            padding: 12px 25px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .error-container a:hover {
            background: #0033aa;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>404</h1>
        <h2>Oops! Page Not Found</h2>
        <p>We couldn’t find the page you were looking for. Try going back to the homepage or checking out our latest reviews.</p>
        <a href="index.php">Go to Homepage</a>
    </div>
</body>
</html>
