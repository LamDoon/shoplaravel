$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id, url) {
    if(confirm('Bạn có chắc chắn muốn xoá danh mục?')){
        $.ajax({
            type: 'DELETE',
            datatype: 'JSON',
            data: {id},
            url: url,
            success: function (result) {
                if (result.error == false){
                    alert(result.message);
                    location.reload();
                }else {
                    alert('Xoá lỗi, vui lòng thử lại.');
                }

            }
        })
    }

}
