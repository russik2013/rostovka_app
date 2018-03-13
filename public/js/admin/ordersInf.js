var copy_order = document.querySelector(".copy__order");
copy_order.onclick=function () {
    var ordText = document.querySelector(".ordText");
    ordText.select();
    document.execCommand("Copy");
};