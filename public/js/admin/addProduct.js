var categoryData = [
    {
        id: '1',
        text: 'Категория 1'
    },
    {
        id: '2',
        text: 'Категория 2'
    },
    {
        id: '3',
        text: 'Категория 3'
    },
    {
        id: '4',
        text: 'Категория 4'
    },
    {
        id: '5',
        text: 'Категория 5'
    },
    {
        id: '6',
        text: 'Категория 6'
    },
    {
        id: '7',
        text: 'Категория 7'
    }
];
$('.category--select').select2({
    data: categoryData,
    placeholder: 'Выберите категорию'
});

var manufacturerData = [
    {
        id: '1',
        text: 'Производитель 1'
    },
    {
        id: '2',
        text: 'Производитель 2'
    },
    {
        id: '3',
        text: 'Производитель 3'
    },
    {
        id: '4',
        text: 'Производитель 4'
    },
    {
        id: '5',
        text: 'Производитель 5'
    },
    {
        id: '6',
        text: 'Производитель 6'
    },
    {
        id: '7',
        text: 'Производитель 7'
    }
];
$('.manufacturer--select').select2({
    data: manufacturerData,
    placeholder: 'Выберите производителя'
});

var currencyData = [
    {
        id: '1',
        text: 'Производитель 1'
    },
    {
        id: '2',
        text: 'Производитель 2'
    },
    {
        id: '3',
        text: 'Производитель 3'
    },
    {
        id: '4',
        text: 'Производитель 4'
    },
    {
        id: '5',
        text: 'Производитель 5'
    },
    {
        id: '6',
        text: 'Производитель 6'
    },
    {
        id: '7',
        text: 'Производитель 7'
    }
];
$('.currency--select').select2({
    data: currencyData,
    placeholder: 'Выберите валюту'
});

var sizeData = [
    {
        id: '1',
        text: 'Производитель 1'
    },
    {
        id: '2',
        text: 'Производитель 2'
    },
    {
        id: '3',
        text: 'Производитель 3'
    },
    {
        id: '4',
        text: 'Производитель 4'
    },
    {
        id: '5',
        text: 'Производитель 5'
    },
    {
        id: '6',
        text: 'Производитель 6'
    },
    {
        id: '7',
        text: 'Производитель 7'
    }
];
$('.size--select').select2({
    data: sizeData,
    placeholder: 'Выберите размер'
});

var seasonData = [
    {
        id: '1',
        text: 'Производитель 1'
    },
    {
        id: '2',
        text: 'Производитель 2'
    },
    {
        id: '3',
        text: 'Производитель 3'
    },
    {
        id: '4',
        text: 'Производитель 4'
    },
    {
        id: '5',
        text: 'Производитель 5'
    },
    {
        id: '6',
        text: 'Производитель 6'
    },
    {
        id: '7',
        text: 'Производитель 7'
    }
];
$('.season--select').select2({
    data: seasonData,
    placeholder: 'Выберите размер'
});

var typeData = [
    {
        id: '1',
        text: 'Производитель 1'
    },
    {
        id: '2',
        text: 'Производитель 2'
    },
    {
        id: '3',
        text: 'Производитель 3'
    },
    {
        id: '4',
        text: 'Производитель 4'
    },
    {
        id: '5',
        text: 'Производитель 5'
    },
    {
        id: '6',
        text: 'Производитель 6'
    },
    {
        id: '7',
        text: 'Производитель 7'
    }
];
$('.type--select').select2({
    data: typeData,
    placeholder: 'Выберите размер'
});

$('.switch-toggle-event').change(function() {
    console.log('Show ' + $(this).prop('checked'));
});

$('.available--product').change(function() {
    console.log('Available ' + $(this).prop('checked'));
});

var d = new Date();

var month = d.getMonth()+1;
var day = d.getDate();

var output = d.getFullYear() + '/' +
    ((''+month).length<2 ? '0' : '') + month + '/' +
    ((''+day).length<2 ? '0' : '') + day;

$('.add--date').val(output);

$("#input-44").fileinput({
    uploadUrl: '/file-upload-batch/2',
    maxFilePreviewSize: 10240,
    allowedFileExtensions: ["jpg", "png"],
    language: 'ru',
    resizeImage: true,
    maxFileSize: 1500
});
