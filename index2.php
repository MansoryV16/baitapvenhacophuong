 <!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Chủ Bài Tập</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #74ABE2, #5563DE);
            text-align: center;
            padding-top: 50px;
            margin: 0;
        }
        h1 {
            color: white;
            margin-bottom: 30px;
            font-size: 2.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        .menu {
            background: white;
            display: inline-block;
            padding: 30px 50px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }
        .menu a {
            display: block;
            text-decoration: none;
            font-weight: bold;
            color: #5563DE;
            padding: 12px;
            margin: 8px 0;
            border: 2px solid #5563DE;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        .menu a:hover {
            background: #5563DE;
            color: white;
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(85,99,222,0.4);
        }
    </style>
</head>
<body>
    <h1>Chọn Bài Tập</h1>
    <div class="menu">
        <a href="bai1.php">Bài 1</a>
        <a href="bai2.php">Bài 2</a>
        <a href="Bai3_pheptinh.php">Bài 3</a>
        <a href="Bai4_index.php">Bài 4</a>
    </div>
</body>
</html>