function GetWidth(diff) {
    if (diff == undefined) {
        diff = 30;
    }
    return $("#MainContainer").width() - diff;
}

function GetHeight() {
    //debugger;
    return $(window).height();
}


function GetCountryDescription(country, countries) {
    for (var i = 0; i < countries.length; i++) {
        if (country == countries[i].Code) {
            return countries[i].Description;
        }
    }

    return "";
}