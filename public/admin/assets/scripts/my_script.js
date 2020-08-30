// = = = = = = = = = = = = = = = = Phần này của modal (hiện thị notification & error) = = = = = = = = = = = = = = = =
$('#notificationModal').modal('show');
$('#errorModal').modal('show');

// = = = = = = = = = = = = = = = = Phần này xử lý ảnh thumbnail cho <input type=image> = = = = = = = = = = = = = = = =
function changeImg(input){
    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
    if(input.files && input.files[0]){
        var reader = new FileReader();
        //Sự kiện file đã được load vào website
        reader.onload = function(e){
            //Thay đổi đường dẫn ảnh
            $('#thumbnail').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
//Khi click #thumbnail thì cũng gọi sự kiện click #image
$(document).ready(function() {
    $('#thumbnail').click(function(){
        $('#image').click();
    });
});
