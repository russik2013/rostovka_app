var userData = [
    {
        id: '1',
        text: 'Администратор'
    },
    {
        id: '2',
        text: 'Модератор'
    },
    {
        id: '3',
        text: 'Пользователь'
    }
],
    userType = $('.user__type');

$(userType).select2({
    data: userData
});

$(userType).val(2).trigger('change');