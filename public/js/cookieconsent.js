window.addEventListener("load", function () {
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#000"
            },
            "button": {
                "background": "#fff",
                "text": "#000000"
            }
        },
        "content": {
            "message": "Този сайт използва \"бисквитки\" (cookies).",
            "dismiss": "Разбрах го!",
            "link": "Научете повече",
            "href": "/cookie_policy"
        }
    })
});