
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
