$(document).ready(function () {
    $('#btn-loc').on('click', function () {
        var keyword = $('#txt-tu-khoa').val();

        var producerArr = [];
        $('.ck-producer:checked').each(function (i) {
            producerArr[i] = $(this).val();
        });

        var priceArr = [];

        $('.ck-price-array:checked').each(function (i) {
            priceArr[i] = $(this).val();
        });

        console.log(keyword);
        console.log(producerArr);

        loadData(keyword, producerArr, priceArr);
    });
});

function loadData(keyword, producerArr, priceArr) {
    $.ajax({
        type: 'GET',
        url: 'http://localhost:8000/' + 'xemsanpham/1',
        data: {
            'keyword': keyword,
            'producerArr': producerArr,
            'priceArr': priceArr
        },
        dataType: 'json',
        success: function(response) {
            console.log(response);
        },
        error: function(status) {
            console.log(status);
        }
    });
}