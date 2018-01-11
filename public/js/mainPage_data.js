var TopSallesData= [],
    data = [],
    productTheme = $('#template');

$.ajax({
    method: "POST",
    url: $('meta[name="api_url"]').attr('content'),
    data: {category_id : 1}
}).done(function( msg ) {
    for(var i= 0; i < msg.length; i++ ) {
        data[i] = {
            dataID: msg[i].id,
            imgUrl: $('meta[name="root-site"]').attr('content') + '/images/products/'+msg[i].photo.photo_url,
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
}) .fail(function( msg ) {

});


$.ajax({
    method: "POST",
    url: $('meta[name="top_tovar_url"]').attr('content'),
    data: {category_id : 1}
}).done(function( msg ) {
    for(var i= 0; i < msg.length; i++ ) {
        TopSallesData[i] = {
            dataID: i,
            imgUrl: $('meta[name="root-site"]').attr('content') + '/images/products/'+msg[i].photo.photo_url,
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
    $(productTheme).tmpl(TopSallesData).appendTo('#topSalles');
}) .fail(function( msg ) {

});
