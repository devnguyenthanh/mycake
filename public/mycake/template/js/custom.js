
function deleteNew(id) 
{
    if (confirm("Bạn Chắc Chắn Muốn Xóa Bài Viết Chưa?")) {
        $.ajax({
            type: 'POST',
            dataType:"json",
            url: '/news/delete/' + id,
            headers:{         
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id: id
            },
            success: function (data) {
                alert('Đã xóa bài viết thành công')
                location.reload();
            },
            error: function (data) {
                alert('Xóa bài viết lỗi');
            }
        });
    }
}

function deleteProduct(id)
{
    if(confirm("Bạn Chắc Chắn Muốn Xóa Sản Phẩm Này Chưa?")) {
        $.ajax({
            type: 'POST',
            dataType: "json",
            url: '/products/delete/' + id,
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id: id
            },
            success: function (data) {
                alert('Đã xóa sản phẩm thành công')
                location.reload();
            },
            error: function (data) {
                alert('Xóa sản phẩm lỗi');
            }
        });
    }
}

function deleteContact(id)
{
    if(confirm("Bạn Chắc Chắn Muốn Xóa Thông Tin Này Chưa?")) {
        $.ajax({
            type: 'POST',
            dataType: "json",
            url: '/contacts/delete/' + id,
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id: id
            },
            success: function (data) {
                alert('Đã xóa thông tin thành công')
                location.reload();
            },
            error: function (data) {
                alert('Xóa thông tin lỗi');
            }
        });
    }
}




