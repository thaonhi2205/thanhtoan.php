<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset\css\style.css">
    <style>
        .form-group {
            margin-bottom: 15px;
        }

        .total-amount {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .radio-group {
            margin-bottom: 20px;
        }

        .radio-group input[type="radio"] {
            margin-right: 10px;
        }

        .btn-submit {
            width: 100%;
        }
         /* Footer Section */
.footer-section {
    background-color: #fdf5e6;
    padding: 20px 0;
    font-family: Arial, sans-serif;
    color: #000;
    border-top: 2px solid black;
    border-bottom: 2px solid black;
  }
  
  /* Footer Top */
  .footer-top {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 20px 50px;
  }
  
  .footer-menu {
    list-style: none;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    margin: 0;
    padding: 0;
    width: 100%;
  }
  
  .footer-menu li {
    flex: 1 1 200px;
  }
  
  .footer-menu h3 {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 10px;
  }
  
  .footer-menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .footer-menu ul li {
    margin: 5px 0;
  }
  
  .footer-menu ul li a {
    text-decoration: none;
    color: #000;
    font-size: 14px;
    transition: color 0.3s ease;
  }
  
  .footer-menu ul li a:hover {
    color: #cc0000;
  }
  
  /* Social Icons */
  .social-icons {
    display: flex;
    gap: 10px;
    margin: 10px 0;
  }
  
  .social-icons a img {
    width: 24px;
    height: 24px;
  }
  
  .certification img {
    width: 100px;
    margin-top: 10px;
  }
  
  /* Footer Bottom */
  .footer-bottom {
    text-align: center;
    padding: 10px 50px;
    font-size: 12px;
    line-height: 1.5;
    color: #333;
  }
    </style>
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 shadow-sm" style="width: 100%; max-width: 500px;">
            <h2 class="text-center mb-4">Thanh Toán</h2>
            <form id="paymentForm" method="POST">
                <div class="mb-3">
                    <label for="discountCode" class="form-label">Mã Giảm Giá</label>
                    <input type="text" id="discountCode" name="discountCode" class="form-control"
                        placeholder="Nhập mã giảm giá (nếu có)">
                </div>

                <div class="radio-group">
                    <label class="form-label">Chọn Hình Thức Thanh Toán</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="momo" value="momo"
                            checked>
                        <label class="form-check-label" for="momo">Momo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="vnpay" value="vnpay">
                        <label class="form-check-label" for="vnpay">VNPay</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="shoppePay"
                            value="shoppePay">
                        <label class="form-check-label" for="shoppePay">Shopee Pay</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="totalAmount" class="form-label">Tổng Cộng</label>
                    <input type="text" id="totalAmount" name="totalAmount" class="form-control total-amount"
                        value="50,000 VNĐ" readonly>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-submit">Thanh Toán</button>
                </div>
            </form>

            <div id="message" class="text-center mt-3"></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('paymentForm').addEventListener('submit', function (event) {
            event.preventDefault();

            const discountCode = document.getElementById('discountCode').value;
            const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;


            window.location.href = 'qr.php';
        });
    </script>

</body>

</html>