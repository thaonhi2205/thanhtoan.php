<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/style.css">
    <style>
        .payment-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .qr-code {
            text-align: center;
        }

        .qr-code img {
            max-width: 100%;
            height: auto;
            max-height: 200px;
        }

        .timer {
            font-size: 1.25rem;
            color: red;
        }

        .details {
            width: 45%;
        }

        .payment-button {
            width: 100%;
            margin-top: 20px;
        }

        .confirmation-message {
            font-size: 1.25rem;
            color: green;
            text-align: center;
            display: none;
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
        <div class="card p-4 shadow-sm" style="width: 100%; max-width: 900px;">
            <h2 class="text-center mb-4">Thông Tin Thanh Toán</h2>

            <!-- Thanh toán thông tin -->
            <div class="payment-details">
                <div class="details">
                    <p><strong>Tên người mua:</strong> <span id="buyerName">Nguyễn Văn A</span></p>
                    <p><strong>Email:</strong> <span id="buyerEmail">nguyen@example.com</span></p>
                    <p><strong>Ngày giờ thanh toán:</strong> <span id="paymentDate"></span></p>
                    <div class="timer" id="timer">Thời gian còn lại: 5:00</div>

                    <button id="confirmPayment" class="btn btn-success payment-button">Xác nhận thanh toán</button>

                    <div class="confirmation-message" id="confirmationMessage">
                        Thanh toán thành công!
                    </div>
                </div>

                <div class="qr-code">
                    <img src="https://qrcode-gen.com/images/qrcode-default.png" alt="QR Code" id="qrCode">
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const user = JSON.parse(localStorage.getItem('user'));

        if (user) {
            document.getElementById('buyerName').textContent = user.hoten;
            document.getElementById('buyerEmail').textContent = user.email;
        } else {
            console.error("Không tìm thấy thông tin người mua trong localStorage");
        }

        document.getElementById('paymentDate').textContent = new Date().toLocaleString();

        let timeRemaining = 5 * 60;
        const timerElement = document.getElementById('timer');
        const countdown = setInterval(function () {
            const minutes = Math.floor(timeRemaining / 60);
            const seconds = timeRemaining % 60;
            timerElement.textContent = `Thời gian còn lại: ${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            timeRemaining--;

            if (timeRemaining < 0) {
                clearInterval(countdown);
            }
        }, 1000);

        document.getElementById('confirmPayment').addEventListener('click', function () {
            document.getElementById('confirmationMessage').style.display = 'block';
            setTimeout(() => {
                window.location.href = 'index.php';
            }, 2000);
        });
    </script>

<footer class="footer-section">
      <div class="footer-top">
        <ul class="footer-menu">
          <li>
            <h3>CGV Việt Nam</h3>
            <ul>
              <li><a href="#">Giới Thiệu</a></li>
              <li><a href="#">Tiện Ích Online</a></li>
              <li><a href="#">Thẻ Quà Tặng</a></li>
              <li><a href="#">Tuyển Dụng</a></li>
              <li><a href="#">Liên Hệ Quảng Cáo CGV</a></li>
              <li><a href="#">Dành cho đối tác</a></li>
            </ul>
          </li>
          <li>
            <h3>Điều khoản sử dụng</h3>
            <ul>
              <li><a href="#">Điều Khoản Chung</a></li>
              <li><a href="#">Điều Khoản Giao Dịch</a></li>
              <li><a href="#">Chính Sách Thanh Toán</a></li>
              <li><a href="#">Chính Sách Bảo Mật</a></li>
              <li><a href="#">Câu Hỏi Thường Gặp</a></li>
            </ul>
          </li>
          <li>
            <h3>Kết nối với chúng tôi</h3>
            <div class="social-icons">
              <a href="#"><img src="./images/facebook.png" alt="Facebook" /></a>
              <a href="#"><img src="./images/youtube.png" alt="YouTube" /></a>
              <a href="#"
                ><img src="./images/instagram.png" alt="Instagram"
              /></a>
              <a href="#"><img src="./images/zalo.png" alt="Zalo" /></a>
            </div>
            <a href="#" class="certification">
              <img
                src="./images/thongbaobocongthuong.png"
                alt="Đã Thông Báo Bộ Công Thương"
              />
            </a>
          </li>
          <li>
            <h3>Chăm sóc khách hàng</h3>
            <ul>
              <li>Hotline: 1900 6017</li>
              <li>Giờ làm việc: 8:00 - 22:00</li>
              <li>Email hỗ trợ: hoidap@cgv.vn</li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="footer-bottom">
        <p>
          <strong>CÔNG TY TNHH CJ CGV VIỆT NAM</strong><br />
          Giấy Chứng nhận đăng ký doanh nghiệp: 0303675393 đăng ký lần đầu ngày
          31/7/2008, được cấp bởi Sở Kế hoạch và Đầu tư Thành phố Hồ Chí
          Minh.<br />
          Địa chỉ: Lầu 2, số 7/28, Đường Thành Thái, Phường 14, Quận 10, Thành
          phố Hồ Chí Minh, Việt Nam.<br />
          Đường dây nóng (Hotline): 1900 6017<br />
          COPYRIGHT 2017 CJ CGV VIETNAM CO., LTD. ALL RIGHTS RESERVED
        </p>
      </div>
    </footer>
</body>
</html>