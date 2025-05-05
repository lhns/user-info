<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Info</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 2rem;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            padding: 1.5em;
            margin: auto;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border-top: 1px solid #ddd;
        }
        th, td {
            text-align: left;
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f1f1f1;
            width: 30%;
        }
        ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>User Information</h2>
    <table>
        <tr>
            <th>Username</th>
            <td><?= htmlspecialchars($_SERVER['HTTP_REMOTE_USER'] ?? 'N/A') ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= htmlspecialchars($_SERVER['HTTP_REMOTE_EMAIL'] ?? 'N/A') ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= htmlspecialchars($_SERVER['HTTP_REMOTE_NAME'] ?? 'N/A') ?></td>
        </tr>
        <tr>
            <th>Roles</th>
            <td>
                <ul>
                    <?php
                    $groups = explode(',', $_SERVER['HTTP_REMOTE_GROUPS'] ?? '');
                    foreach ($groups as $group) {
                        $cleanGroup = trim($group);
                        if ($cleanGroup) {
                            echo '<li>' . htmlspecialchars($cleanGroup) . '</li>';
                        }
                    }
                    ?>
                </ul>
            </td>
        </tr>
    </table>
</div>

</body>
</html>
