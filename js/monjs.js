function togglePasswordVisibility(inputElement) {
    return function () {
        var type = inputElement.attr('type') === 'password' ? 'text' : 'password';
        inputElement.attr('type', type);
    };
}

$('.show-old-pwd').hover(togglePasswordVisibility($('.oldpwd')));
$('.show-new-pwd').hover(togglePasswordVisibility($('.newpwd')));