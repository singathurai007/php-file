<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            max-width: 500px;
            transition: transform 0.3s ease;
        }
        .container:hover {
            transform: translateY(-5px);
        }
        h2 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 600;
            border-bottom: 3px solid #667eea;
            padding-bottom: 10px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 0.5px;
        }
        input, select, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s ease;
            font-family: inherit;
            background: #fafafa;
        }
        input:focus, select:focus, textarea:focus {
            border-color: #667eea;
            outline: none;
            background: white;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
        }
        textarea {
            resize: vertical;
            min-height: 80px;
        }
        .btn-submit {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            letter-spacing: 1px;
            margin-top: 10px;
        }
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        }
        .btn-submit:active {
            transform: translateY(0);
        }
        .error {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 5px;
            display: none;
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
        <h2>📝 Student Registration</h2>
        
        <form action="display.php" method="POST">
            <div class="form-group">
                <label>👤MY NAME IS BILLA AND YOU?</label>
                <input type="text" name="fullname" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label>📧 Email Address</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label>📱 Phone Number</label>
                <input type="tel" name="phone" placeholder="Enter your phone number" required>
            </div>

            <div class="form-group">
                <label>🎓 Course</label>
                <select name="course" required>
                    <option value="">Select a course</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Business Administration">Business Administration</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Medicine">Medicine</option>
                    <option value="Arts & Design">Arts & Design</option>
                </select>
            </div>

            <div class="form-group">
                <label>📝 Address</label>
                <textarea name="address" placeholder="Enter your address" required></textarea>
            </div>

            <button type="submit" class="btn-submit">🚀 Submit</button>
        </form>
    </div>
</body>
</html>
