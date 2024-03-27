<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách nhân viên</title>
</head>
<body>
    <h1>Danh sách nhân viên</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>TÊN NHÂN VIÊN </th>
            <th> NƠI SINH</th>
            <th>GIỚI TÍNH   </th>
            <th>PHÒNG BAN  </th>
            <th>LƯƠNG  </th>




        </tr>
        <?php
        // Thông tin kết nối tới cơ sở dữ liệu MySQL
        $servername = "localhost"; // Tên máy chủ
        $username = "root"; // Tên người dùng MySQL
        $password = ""; // Mật khẩu MySQL
        $database = "qlnhansu"; // Tên cơ sở dữ liệu

        // Tạo kết nối
        $conn = new mysqli($servername, $username, $password, $database);

        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Kết nối không thành công: " . $conn->connect_error);
        }
        $limit = 5;

        // Xác định trang hiện tại
        $page = isset($_GET['page']) ? $_GET['page'] : 1;

        // Tính offset
        $offset = ($page - 1) * $limit;
        $sql = "SELECT * FROM nhanvien LIMIT $limit OFFSET $offset";

        // Câu truy vấn SQL
        $sql = "SELECT * FROM nhanvien";

        // Thực thi truy vấn
        $result = $conn->query($sql);

        // Kiểm tra nếu có kết quả trả về
        if ($result->num_rows > 0) {
            // Xuất dữ liệu từ mỗi hàng
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
               
                echo "<td>" . $row["MaNV"] . "</td>";
                echo "<td>" . $row["TenNV"] . "</td>";
                echo "<td>" . $row["NoiSinh"] . "</td>";
                echo "<td>";
                if ($row["Phai"] == "NAM") {
                    echo "<img src='man.jpg' alt='Man' style='width: 50px; height: 50px;'>";
                } else {
                    echo "<img src='woman.jpg' alt='Woman' style='width: 50px; height: 50px;'>";
                }
                echo "<td>" . $row["MaPhong"] . "</td>";
                echo "<td>" . $row["Luong"] . "</td>";
               
                
            
                echo "</tr>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Không có dữ liệu nhân viên</td></tr>";
        }

        // Đóng kết nối
        $conn->close();
        ?>
    </table>
    <br>

</body>
</html>
