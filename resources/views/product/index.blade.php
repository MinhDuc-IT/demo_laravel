<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background: #fff;
            transition: transform 0.2s;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .product-card h3 {
            margin-top: 0;
            color: #007bff;
        }
        .product-price {
            font-size: 20px;
            font-weight: bold;
            color: #28a745;
            margin: 10px 0;
        }
        .btn-add-product {
            display: inline-block;
            padding: 12px 24px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .btn-add-product:hover {
            background: #218838;
        }
        .nav-link {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 16px;
            background: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .nav-link:hover {
            background: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Danh sách sản phẩm</h1>
        
        <a href="{{ route('product.add') }}" class="btn-add-product">+ Thêm mới sản phẩm</a>
        
        <div class="product-list">
            <div class="product-card">
                <h3>Laptop Dell XPS 15</h3>
                <p>Laptop cao cấp với màn hình 15 inch, CPU Intel i7, RAM 16GB</p>
                <div class="product-price">25.000.000 đ</div>
            </div>
            
            <div class="product-card">
                <h3>iPhone 15 Pro Max</h3>
                <p>Điện thoại thông minh với camera 48MP, chip A17 Pro</p>
                <div class="product-price">32.000.000 đ</div>
            </div>
            
            <div class="product-card">
                <h3>Samsung Galaxy S24 Ultra</h3>
                <p>Flagship Android với bút S Pen, màn hình 6.8 inch</p>
                <div class="product-price">28.000.000 đ</div>
            </div>
            
            <div class="product-card">
                <h3>MacBook Pro M3</h3>
                <p>Laptop Apple với chip M3, màn hình Retina 14 inch</p>
                <div class="product-price">45.000.000 đ</div>
            </div>
            
            <div class="product-card">
                <h3>AirPods Pro 2</h3>
                <p>Tai nghe không dây với chống ồn chủ động</p>
                <div class="product-price">6.500.000 đ</div>
            </div>
            
            <div class="product-card">
                <h3>iPad Air 5</h3>
                <p>Tablet Apple với chip M1, màn hình 10.9 inch</p>
                <div class="product-price">18.000.000 đ</div>
            </div>
        </div>
        
        <a href="{{ route('home') }}" class="nav-link">← Về trang chủ</a>
    </div>
</body>
</html>

