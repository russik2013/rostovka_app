var TopSallesData= [
    {
        dataID: 0,
        imgUrl: "img/product-img/22imv.jpg",
        name: "YG-109-B Style Baby 1",
        rostovka: "8",
        box: "16",
        type: "25-30",
        price: 375,
        full__price: 1230,
        rostovka__price: 600,
        real_id: 0,
        product_url: 'product_inner'
    },
    {
        dataID: 1,
        imgUrl: "img/product-img/26imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "8",
        box: "16",
        type: "25-30",
        price: 375,
        full__price: 1230,
        rostovka__price: 600,
        real_id: 0,
        product_url: 'product_inner'
    },
    {
        dataID: 2,
        imgUrl: "img/product-img/21imv.jpg",
        name: "M-165 Clibee ",
        rostovka: "8",
        box: "16",
        type: "25-30",
        price: 375,
        full__price: 1230,
        rostovka__price: 600,
        real_id: 0,
        product_url: 'product_inner'
    },
    {
        dataID: 3,
        imgUrl: "img/product-img/23imv.jpg",
        name: "M-05 Style Clibee ",
        rostovka: "8",
        box: "16",
        type: "25-30",
        price: 375,
        full__price: 1230,
        rostovka__price: 600,
        real_id: 0,
        product_url: 'product_inner'
    },
    {
        dataID: 4,
        imgUrl: "img/product-img/prod2.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "8",
        box: "16",
        type: "25-30",
        price: 375,
        full__price: 1230,
        rostovka__price: 600,
        real_id: 0,
        product_url: 'product_inner'
    },
    {
        dataID: 5,
        imgUrl: "img/product-img/24imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "8",
        box: "16",
        type: "25-30",
        price: 375,
        full__price: 1230,
        rostovka__price: 600,
        real_id: 0,
        product_url: 'product_inner'
    },
    {
        dataID: 6,
        imgUrl: "img/product-img/25imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "8",
        box: "16",
        type: "25-30",
        price: 375,
        full__price: 1230,
        rostovka__price: 600,
        real_id: 0,
        product_url: 'product_inner'
    },
    {
        dataID: 7,
        imgUrl: "img/product-img/27imv.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "8",
        box: "16",
        type: "25-30",
        price: 375,
        full__price: 1230,
        rostovka__price: 600,
        real_id: 0,
        product_url: 'product_inner'
    },
    {
        dataID: 8,
        imgUrl: "img/product-img/prod1.jpg",
        name: "CQ-23-pink Style Baby ",
        rostovka: "8",
        box: "16",
        type: "25-30",
        price: 375,
        full__price: 1230,
        rostovka__price: 600,
        real_id: 0,
        product_url: 'product_inner'
    },
    {
        dataID: 9,
        imgUrl: "img/product-img/2imv.jpg",
        name: "YG-109-B Style Baby",
        rostovka: "8",
        box: "16",
        type: "25-30",
        price: 375,
        full__price: 1230,
        rostovka__price: 600,
        real_id: 0,
        product_url: 'product_inner'
    }
],
    data = [],
    productTheme = $('#template');


$.ajax({
    method: "POST",
    url: $('meta[name="api_url"]').attr('content'),
    data: {category_id : 1}
}).done(function( msg ) {

    for(var i= 0; i < msg.length; i++ ) {
        data[i] = {
            dataID: i,
            imgUrl: "img/product-img/2imv.jpg",
            name: msg[i].name,
            rostovka: msg[i].rostovka_count,
            box: msg[i].box_count,
            type: msg[i].types,
            price: msg[i].prise,
            full__price: msg[i].full__price,
            rostovka__price: msg[i].rostovka__price,
            real_id: msg[i].id,
            product_url: msg[i].product_url + '/' + i,
            option_type: 'full__price' // Или full__price или rostovka__price
        };

    }

    $(productTheme).tmpl(data).appendTo('#newest');
    // GetData(data)
}) .fail(function( msg ) {

});


$(productTheme).tmpl(TopSallesData).appendTo('#topSalles');
//$(productTheme).tmpl(data).appendTo('#newest');
