
document.getElementById('inputState').addEventListener('change', function() {
    var selectedRole = this.value;
    // Chọn các quyền tương ứng với vai trò Admin
    if (selectedRole === '1') {
        var rulesToCheck = ['rule0','rule1', 'rule2', 'rule3','rule4', 'rule5', 'rule6','rule7', 'rule8','rule9','rule'];
        // Duyệt qua mảng và thiết lập thuộc tính checked cho mỗi quy tắc
        rulesToCheck.forEach(function(rule) {
            document.getElementById(rule).checked = true;
        });
    }
    else if (selectedRole === '2') {
        //Xóa các select cũ
        var rulesToCheck = ['rule0','rule1', 'rule2', 'rule3','rule4', 'rule5', 'rule6','rule7', 'rule8','rule9','rule'];
        rulesToCheck.forEach(function(rule) {
            document.getElementById(rule).checked = false;
        });
        var rulesToCheck = ['rule1', 'rule2', 'rule3','rule4', 'rule5','rule8','rule9','rule'];
        // Duyệt qua mảng và thiết lập thuộc tính checked cho mỗi quy tắc
        rulesToCheck.forEach(function(rule) {
            document.getElementById(rule).checked = true;
        });
    }
    else if (selectedRole === '3') {
        var rulesToCheck = ['rule0','rule1', 'rule2', 'rule3','rule4', 'rule5', 'rule6','rule7', 'rule8','rule9','rule'];
        rulesToCheck.forEach(function(rule) {
            document.getElementById(rule).checked = false;
        });
        var rulesToCheck = ['rule8','rule'];
        // Duyệt qua mảng và thiết lập thuộc tính checked cho mỗi quy tắc
        rulesToCheck.forEach(function(rule) {
            document.getElementById(rule).checked = true;
        });
    }   
    else if (selectedRole === '4') {
        var rulesToCheck = ['rule0','rule1', 'rule2', 'rule3','rule4', 'rule5', 'rule6','rule7', 'rule8','rule9','rule'];
        rulesToCheck.forEach(function(rule) {
            document.getElementById(rule).checked = false;
        });
        var rulesToCheck = ['rule9','rule'];
        // Duyệt qua mảng và thiết lập thuộc tính checked cho mỗi quy tắc
        rulesToCheck.forEach(function(rule) {
            document.getElementById(rule).checked = true;
        });
    }
});



//Edit nhân viên
    // Sử dụng lớp chung cho tất cả nút "Edit"
    document.querySelectorAll('#edit-member-btn').forEach(function(button) {
        button.addEventListener('click', function () {
            // Lấy user ID từ thuộc tính data-user-id
            var userId = this.getAttribute('data-user-id');
            // Gửi yêu cầu Ajax đến Laravel route để lấy dữ liệu
            fetch('/admin/staff/api/getdetail/' + userId) // Thay thế đường dẫn phù hợp với route của bạn
                .then(response => response.json())
                .then(data => {
                    // Hiển thị dữ liệu lấy được trong modal
                    document.getElementById('inputname4').value = data.name;
                    document.getElementById('inputEmail4').value = data.email;
                    document.getElementById('inputPassword4').value = ''; // Đặt mật khẩu về trống, bạn có thể điều chỉnh tùy thuộc vào logic của bạn
                    document.getElementById('inputState4').value = data.role;
                })
                .catch(error => console.error('Error:', error));
        });
    });


