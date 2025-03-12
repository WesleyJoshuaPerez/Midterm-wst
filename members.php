<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members Description</title>
    <link rel="stylesheet" href="frontend/styles/members.css">
</head>
<body>
    <?php include 'backend/members.php'; ?>
    <div class="header-links">
        <a href="#">Admin Page</a>
        <a href="#">Project Description</a>
        <a href="#">Members</a>
        <a href="#">Logout</a>
    </div>
    <div class="container">
        <h1>Members Description</h1>
        <div class="members">
            <?php foreach ($members as $member): ?>
                <div class="member-info">
                    <img src="<?= $member['image'] ?>" alt="Member Avatar">
                    <p><strong>Name:</strong> <?= $member["name"] ?></p>
                    <p><strong>Birthdate:</strong> <?= $member["birthdate"] ?></p>
                    <p><strong>Address:</strong> <?= $member["address"] ?></p>
                    <p><strong>Role:</strong> <?= $member["role"] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>