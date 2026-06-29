<?php
// Check if form data exists
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data with proper validation
    $fullname = htmlspecialchars($_POST['fullname'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $course = htmlspecialchars($_POST['course'] ?? '');
    $address = htmlspecialchars($_POST['address'] ?? '');
    
    // Check if any field is empty
    if (empty($fullname) || empty($email) || empty($phone) || empty($course) || empty($address)) {
        header("Location: index.php?error=missing_fields");
        exit();
    }
} else {
    // If accessed directly without POST data
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 550px;
            animation: slideUp 0.6s ease;
        }
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        h2 {
            color: #333;
            margin-bottom: 10px;
            text-align: center;
        }
        .success-badge {
            background: #2ecc71;
            color: white;
            padding: 8px 20px;
            border-radius: 50px;
            display: inline-block;
            font-size: 14px;
            font-weight: 600;
            margin: 10px 0 25px 0;
            text-align: center;
            width: 100%;
        }
        .detail-card {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 15px;
            border-left: 4px solid #667eea;
            transition: all 0.3s ease;
        }
        .detail-card:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        .label {
            font-size: 12px;
            text-transform: uppercase;
            color: #888;
            font-weight: 600;
            letter-spacing: 1px;
        }
        .value {
            font-size: 18px;
            color: #333;
            margin-top: 5px;
            font-weight: 500;
            word-wrap: break-word;
        }
        .btn-back {
            display: inline-block;
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            margin-top: 10px;
            letter-spacing: 1px;
        }
        .btn-back:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(245, 87, 108, 0.4);
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #999;
            font-size: 13px;
        }
        @media (max-width: 600px) {
            .container {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>✅ Registration Successful</h2>
        <div class="success-badge">🎉 Your details have been submitted</div>
        
        <div class="detail-card">
            <div class="label">👤 Full Name</div>
            <div class="value"><?php echo $fullname; ?></div>
        </div>

        <div class="detail-card">
            <div class="label">📧 Email Address</div>
            <div class="value"><?php echo $email; ?></div>
        </div>

        <div class="detail-card">
            <div class="label">📱 Phone Number</div>
            <div class="value"><?php echo $phone; ?></div>
        </div>

        <div class="detail-card">
            <div class="label">🎓 Course</div>
            <div class="value"><?php echo $course; ?></div>
        </div>

        <div class="detail-card">
            <div class="label">📝 Address</div>
            <div class="value"><?php echo nl2br($address); ?></div>
        </div>

        <a href="index.php" class="btn-back">⬅ Back to Form</a>
        <div class="footer">PHP Form Test • Cloud Hosting Ready</div>
    </div>
</body>
</html>