<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,400&display=swap"
            rel="stylesheet">
        <script src="https://kit.fontawesome.com/fa18a5fe5d.js"
            crossorigin="anonymous"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet" />
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
        <link rel="stylesheet" href="../../css/index.css">
        <title>Nhân Viên</title>
    </head>
    <body>
        <header>
            <div class="wrapper">
                <div class="content">
                    <img src="../../image/logo-utt-border.png" alt="Logo trường">
                </div>
                <div class="sidebar">
                    <ul class="navbar">
                        <li>
                            <div class="navbar-link">
                                <span>
                                    <i class='bx bx-grid-alt'></i>
                                    <span>Trang chủ</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <div class="navbar-link">
                                <span class="btn-dropdown">
                                    <i class='bx bx-list-ul'></i>
                                    <span>Sinh viên</span>
                                    <i class='bx bx-chevron-down'></i>
                                </span>
                                <ul>
                                    <li>
                                        <span class="title">
                                            <i class='fa fa-address-book'></i>
                                            <a style="color:black;" href="./numberstudent.php"><span>Danh sách sinh viên</span></a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <i class='bx bx-user-plus'></i>
                                            <a style="color:black;" href="./addstudent.php"><span>Cập nhật thông tin</span></a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <i class='fa fa-search'></i>
                                            <a style="color:black;" href="./searchstudent.php"><span>Tìm kiếm thông tin</span></a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="navbar-link">
                                <span class="btn-dropdown">
                                    <i class='bx bxs-school'></i>
                                    <span>Phòng</span>
                                    <i class='bx bx-chevron-down'></i>
                                </span>
                                <ul>
                                    <li>
                                        <span class="title">
                                            <i class='bx bx-search'></i>
                                            <span>Tìm phòng</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <i class="fa-solid fa-bed"></i>
                                            <span>Cập nhật</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <i class="fa-solid fa-hospital-user"></i>
                                            <span>Thêm sinh viên</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="navbar-link">
                                <span class="btn-dropdown">
                                    <i class='bx bx-file'></i>
                                    <span>Hợp đồng</span>
                                    <i class='bx bx-chevron-down'></i>
                                </span>
                                <ul>
                                    <li>
                                        <span class="title">
                                            <i class='bx bx-search'></i>
                                            <span>Tìm kiếm</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <i class='bx bxs-file-plus'></i>
                                            <span>Cập nhật</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="navbar-link">
                                <span class="btn-dropdown">
                                    <i class="fa-brands fa-servicestack"></i>
                                    <span>Dịch vụ</span>
                                    <i class='bx bx-chevron-down'></i>
                                </span>
                                <ul>
                                    <li>
                                        <span class="title">
                                            <i class='fa fa-lightbulb-o'></i>
                                            <a style="color:black;" href="./electric.php"><span>Cập nhật số điện</span></a>
                                        </span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <i class="fa fa-tint"></i>
                                            <a style="color:black;" href="./water.php"><span>Cập nhật số nước</span></a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <i class="fa fa-credit-card"></i>
                                            <span>Phí dịch vụ chung</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="navbar-link">
                                <span class="btn-dropdown">
                                    <i class="fa-solid fa-sack-dollar"></i>
                                    <span>Hóa đơn</span>
                                    <i class='bx bx-chevron-down'></i>
                                </span>
                                <ul>
                                    <li>
                                        <span class="title">
                                            <i class='bx bx-search'></i>
                                            <span>Tìm kiếm</span>
                                        </span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <i class="fa-solid fa-sack-dollar"></i>
                                            <span>Cập nhật</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="navbar-link">
                                <span class="btn-dropdown">
                                    <i class="fa-solid fa-signal"></i>
                                    <span>Thống kê</span>
                                    <i class='bx bx-chevron-down'></i>
                                </span>
                                <ul>
                                    <li>
                                        <span class="title">
                                            <i class='bx bx-search'></i>
                                            <span>Số lượng sinh viên</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <i
                                                class="fa-solid fa-file-invoice-dollar"></i>
                                            <span>Doanh thu</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="topnav">
            <div class="logo-nav">
                <img src="../../image/logo-utt-border.png" alt>
            </div>
            <div class="navbar__icons">
                <div class="navbar__icon"></div>
            </div>
            <!-- nav menu -->
            <div class="nav-right">
                <div class="nav-notifi">
                    <i class='bx bxs-bell-ring'></i>
                </div>
                <div class="message-box">
                    <i class='bx bxl-messenger'></i>
                </div>
                <div class="user-info">
                    <img src="../../image/employee-icon-png.png" alt="Logo-icon">
                </div>
            </div>
            <!-- info-menu-user -->
            <div class="sub-info" id="submenu">
                <ul>
                    <li>
                        <a href>
                            <i class='bx bx-cog'></i>
                            <span>Cài đặt</span>
                        </a>
                    </li>
                    <li>
                        <a href>
                            <i class="fa-regular fa-circle-question"></i>
                            <span>Trợ giúp</span>
                        </a>
                    </li>
                    <li>
                        <a href>
                            <i class='bx bxs-notifi-dots'></i>
                            <span>Đóng góp</span>
                        </a>
                    </li>
                    <li>
                        <a href>
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <span>Đăng xuất</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- notifi-box- menu -->
            <div class="sub-notifis">
                <div class="top-notifi">
                    <h3>Thông báo</h3>
                    <span>
                        <a href="">
                            <button>Tất Cả</button>
                        </a>
                        <a href="">
                            <button>Chưa đọc</button>
                        </a>
                    </span>
                </div>
                <div style="gap: 1.5rem; padding-left: 10px; font-weight: 600;">
                    <span>Mới</span>
                </div>
                <div class="body-notifi">
                    <ul>
                        <li><img src="../../image/logo-user-sv.png" alt="ảnh sv"></li>
                        <li>
                            <span><h5>Chào mừng bạn đến với nhóm web</h5></span>
                            <span><h6>Hãy trả lời thắc mắc</h6></span>
                        </li>
                    </ul>
                    <ul>
                        <li><img src="../../image/logo-user-sv.png" alt="ảnh sv"></li>
                        <li>
                            <span><h5>Chào mừng bạn đến với nhóm web</h5></span>
                            <span><h6>Hãy trả lời thắc mắc</h6></span>
                        </li>
                    </ul>
                    <ul>
                        <li><img src="../../image/logo-user-sv.png" alt="ảnh sv"></li>
                        <li>
                            <span><h5>Chào mừng bạn đến với nhóm web</h5></span>
                            <span><h6>Hãy trả lời thắc mắc</h6></span>
                        </li>
                    </ul>
                    <ul>
                        <li><img src="../../image/logo-user-sv.png" alt="ảnh sv"></li>
                        <li>
                            <span><h5>Chào mừng bạn đến với nhóm web</h5></span>
                            <span><h6>Hãy trả lời thắc mắc</h6></span>
                        </li>
                    </ul>
                    <ul>
                        <li><img src="../../image/logo-user-sv.png" alt="ảnh sv"></li>
                        <li>
                            <span><h5>Chào mừng bạn đến với nhóm web</h5></span>
                            <span><h6>Hãy trả lời thắc mắc</h6></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- message-menu -->
            <div class="message-menus">
                <div class="top-message-menu">
                    <h3>Chat</h3>
                    <span>
                        <i class='bx bx-search'></i>
                        <input type="text" placeholder="Search">
                    </span>
                </div>
                <div style="gap: 1.5rem; padding-left: 10px; font-weight: 600;">
                    <span>Mới</span>
                </div>
                <div class="body-message-menu">
                    <ul>
                        <li><img src="../../image/logo-user-sv.png" alt="ảnh sv"></li>
                        <li>
                            <span><h5>Nguyễn Hoàng Việt</h5></span>
                            <span><h6>Chào bạn</h6></span>
                        </li>
                    </ul>
                    <ul>
                        <li><img src="../../image/logo-user-sv.png" alt="ảnh sv"></li>
                        <li>
                            <span><h5>Đoàn Đức Tùng</h5></span>
                            <span><h6>Chào bạn</h6></span>
                        </li>
                    </ul>
                    <ul>
                        <li><img src="../../image/logo-user-sv.png" alt="ảnh sv"></li>
                        <li>
                            <span><h5>Ngọc Trinh</h5></span>
                            <span><h6>làm quen</h6></span>
                        </li>
                    </ul>
                    <ul>
                        <li><img src="../../image/logo-user-sv.png" alt="ảnh sv"></li>
                        <li>
                            <span><h5>Người lạ</h5></span>
                            <span><h6>Chào bạn</h6></span>
                        </li>
                    </ul>
                    <ul>
                        <li><img src="../../image/logo-user-sv.png" alt="ảnh sv"></li>
                        <li>
                            <span><h5>Người lạ</h5></span>
                            <span><h6>Hãy trả lời thắc mắc</h6></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
    <script src="../../js/main.js"></script>
</html>