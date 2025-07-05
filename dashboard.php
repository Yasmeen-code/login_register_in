<?php
session_start();

if (!isset($_SESSION['user_name'])) {
    header("Location: index.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #120f2f;
      color: #fff;
      font-family: sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .dashboard-box {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      padding: 30px 50px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(111, 115, 255, 0.3);
      text-align: center;
    }

    h1 {
      color: #a78bfa;
    }

    .logout-btn {
      margin-top: 20px;
      padding: 10px 20px;
      background: #6f73ff;
      border: none;
      border-radius: 8px;
      color: #120f2f;
      font-weight: bold;
      cursor: pointer;
    }

    .logout-btn:hover {
      background: #a78bfa;
    }
  </style>
</head>
<body>

  <div class="dashboard-box">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h1>
    <p>You have successfully logged in to your dashboard.</p>
    <form action="logout.php" method="post">
      <button class="logout-btn" type="submit">Logout</button>
    </form>
  </div>

</body>
</html>
