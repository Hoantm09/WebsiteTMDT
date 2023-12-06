//Xóa khách hàng
    // Sử dụng lớp chung cho tất cả nút "Delete"
    document.querySelectorAll('#delete-member-btn').forEach(function(button) {
        button.addEventListener('click', function () {
            // Lấy user ID từ thuộc tính data-user-id
            var userId2 = this.getAttribute('data-user-id');
            // Gửi yêu cầu Ajax đến Laravel route để lấy dữ liệu
            fetch('/admin/customer/api/getdetail/' + userId2) // Thay thế đường dẫn phù hợp với route của bạn
                .then(response => response.json())
                .then(data => {
                    // Hiển thị dữ liệu lấy được trong modal
                    document.getElementById('member-name').innerText = 'Xóa khách hàng ' + data.name + ' ?';

                    
                    //Xử lí khi bấm xác nhận xóa
                    var delete_submit = document.getElementById('delete-member-submit'); //
                    delete_submit.addEventListener('click',  function(){
                        var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
                        fetch('/admin/customer/delete-customer/' + userId2,{
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken,
                            },
                        })
                            .then(response => response.json())
                            .then(data =>{
                                location.href = location.href;
                            })
                    })
                })
                .catch(error => console.error('Error:', error));
        });
    }); 