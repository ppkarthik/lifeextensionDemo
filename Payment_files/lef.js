
//$(document).ready(function () {
document.write('<script src="https://tlstest.lifeextension.com/scripts/TLSTest.js" type="text/javascript"></script>');
var LEFCart={} 
$(function () {
    var displayBanner = function(email) {
        bootbox.confirm({
            message: "Please verify that the email address " + email + " is correct.",
            buttons: {
                confirm: {
                    label: 'Yes, this is my Email',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'No, I will make the correction',
                    className: 'btn-danger'
                }
            },
            callback: function(result) {
                if (result) {
                    PostEmailConfirm();
                }
            }
        });
    };

    var onBoardingOptOutMessage ="Wait! Are you sure you want to miss out on valuable health-related information from Life Extension?";
    var onBoardingYesButtonText = "Yes, I want to opt out";
    var onBoardingYesButtonClass = "btn-success";
    var onBoardingNoButtonText = "No, please keep them coming";
    var onBoardingNoButtonClass = "btn-danger";
       
    LEFCart.LEDisplayInvalidEmailBanner = displayBanner;
    LEFCart.LEOnBoardingMessage = onBoardingOptOutMessage;
    LEFCart.LEOnBoardingYesButtonText = onBoardingYesButtonText;
    LEFCart.LEOnBoardingNoButtonText = onBoardingNoButtonText;
    LEFCart.LEOnBoardingYesButtonClass = onBoardingYesButtonClass;
    LEFCart.LEOnBoardingNoButtonClass = onBoardingNoButtonClass;
});



function FormHelper(formName) {
    this.initLef = function initializeLef() {
        jQuery.validator.setDefaults({
            highlight: function (el, error, valid, _orig) {
                //alert(el);
                //debugger;
                //alert(el.value);

                $("#" + el.id).addClass('error');
                //_orig(el, error, valid);

            },
            unhighlight: function (el, error, valid, _orig) {

                $("#" + el.id).removeClass('error');
                //_orig(el, error, valid);

            }//,
            //errorLabelContainer: $("ul", $('div.error-container')),
            //wrapper: "li",
            //invalidHandler: function (form, validator) {
            //    var ul = $("div.error-container ul");
            //    if (ul.length > 0) {
            //        //$("#validationSummary").addClass("validation-summary-errors");
            //        //$("#validationSummary").removeClass("validation-summary-valid");
            //        ul.html("");
            //        for (var name in validator.errorList)
            //        ul.append("<li>" + validator.errorList[name].message + "</li>")
            //    }
            //}

        });


        //$.validator.addMethod("textOnly",
        //    function(value, element) {
        //        //alert(value);
        //        //return true;
        //        return !/[0-9]/.test(value);
        //    },
        //    "Alpha Characters Only."
        //);

    };
    this.subscribeOnValidationForElement = function subscribeFormChangeOnBlurForElement(callback, element) {
        $('#' + element).focusout(function () {
            return false;
        });
        $('#' + element).keyup(function () {
            return false;
        });

        $('#' + element).change(function () {
            callback({ eventArgs: true });
            return false;
        });
    };

    this.subscribeOnDropDownChange = function subscribeFormnDropDownChange(callback, element) {
        $(element).change(function () {
            callback({ eventArgs: this });
            return false;
        });
        $(element).mouseup(function () {
            callback({ eventArgs: this });
            return false;
        });
    };
    this.subscribeOnValidationForClass = function subscribeFormChangeOnBlurForElement(callback, className) {
        $('.' + className).focusout(function () {
            return false;
        });
        $('.' + className).keyup(function () {
            return false;
        });

        $('.' + className).change(function () {
            callback({ eventArgs: true });
            return false;
        });
    };
    this.subscribeOnPropertyChangeForElement = function subscribeFormOnChangeForElement(callback, element) {
        // debugger;
        $('#' + element).keyup(function () {

            callback({ eventArgs: true });
        });
    };
  }

function CheckImage(img, src) {
    if (typeof document.getElementById(img) != "undefined") {
        img.setAttribute("src", src);
        img.onerror = "";
    }
}
function SetElementAsRequired(formName, isRequired, elementName) {

    if (viewModel == undefined) {
        return;
    }

    if (isRequired) {
        if (!$("#" + elementName).is(".required")) {
            $("#" + elementName).addClass("required");
        }
    } else {
        if ($("#" + elementName).is(".required")) {
            $("#" + elementName).removeClass("required");
        }
    }
    $('#' + formName).validate().element("#" + elementName);
}
ko.bindingHandlers.executeOnEnter = {
    init: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        var allBindings = allBindingsAccessor();
        $(element).keypress(function (event) {
            var keyCode = (event.which ? event.which : event.keyCode);
            if (keyCode === 13) {
                allBindings.executeOnEnter.call(viewModel);
                return false;
            }
            return true;
        });
    }
};

function ShowProgressWindow(currentViewModel) {

    try {
        currentViewModel.ShowProgress(true);
        $("#progess").dialog({
            height: 180,
            modal: true,
            closeOnEscape: false,
            draggable: false,
            resizable: false
        });
        $(".ui-dialog-titlebar").hide();
    } catch (e) {

    }
}
function HideProgressWindow(currentViewModel) {

    try {
        currentViewModel.ShowProgress(false);
        $("#progess").dialog('close');

    } catch (e) {

    }
}

function GetQueryString(key) {
    key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexvalueString = "[\\?&]" + key + "=([^&#]*)";
    var regexvalue = new RegExp(regexvalueString);
    var keyvalue = regexvalue.exec(window.location.search);
    var val = "";
    if (keyvalue != null) {
        val = decodeURIComponent(keyvalue[1].replace(/\+/g, " "))
    }

    return val;

}

function OnClickGoTo(url) {
    window.location = url;
}

$.validator.addMethod("numberLEF",
            function (value, element) {
          element.value = $.trim(element.value);
          return this.optional(element) || /^(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/.test(element.value);
            },
                "Invalid Number"
            );

$.validator.addMethod("emailLEF",
            function (value, element) {
                element.value = $.trim(element.value);
                return this.optional(element) || /^([&\w\-\.]+)@((\[([0-9]{1,3}\.){3}[0-9]{1,3}\])|(([&\w\-]+\.)+)([a-zA-Z]{2,4}))$/.test(element.value);
            },
                "Invalid Email address"
            );

$.validator.addMethod("faxLEF",
            function (value, element) {
                element.value = $.trim(element.value);                
                var strippedNumber = element.value.replace(/[^0-9\-().\s+]/g, ''); //copy
                return this.optional(element) || strippedNumber == element.value;
            },
                "Enter a valid phone number"
            );



$.validator.addMethod("CCExp",
           function (value, element, params) {
             var minMonth = new Date().getMonth() + 1;
             var minYear = new Date().getFullYear();
             var $month = $(params.month);
             var $year = $(params.year);

             var month = parseInt($month.val(), 10);
             var year = parseInt($year.val(), 10);

             if ((year > minYear) || ((year === minYear) && (month >= minMonth))) {
               return true;
             } else {
               return false;
             }
           },
               "Credit Card Expiration date is invalid"
           );


function handleError(request, status, error) {
    var message = "There was an error with the AJAX request.\n";
    switch (status) {
        case 'timeout':
            message += "The request timed out.";
            break;
        case 'notmodified':
            message += "The request was not modified but was not retrieved from the cache.";
            break;
        case 'parsererror':
            message += "XML/Json format is bad.";
            break;
        default:
            message += "HTTP Error (" + request.status + " " + request.statusText + ").";
    }
    message += "\n";
    alert(message);
}

function SendFeedback(url) {
    var destination = url;
    var mywindow = window.open(destination, 'surveywindow', 'width=1010,height=630,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=yes,left=50,top=50');
}

ko.bindingHandlers.isolatedOptions = {
    init: function (element, valueAccessor) {
        var args = arguments;
        ko.computed({
            read: function () {
                ko.utils.unwrapObservable(valueAccessor());
                ko.bindingHandlers.options.update.apply(this, args);
            },
            owner: this,
            disposeWhenNodeIsRemoved: element
        });
    }
};

ko.bindingHandlers.anchorenable = {
    update: function (element, valueAccessor) {
        var value = ko.utils.unwrapObservable(valueAccessor());
        if (value && element.disabled) {
            element.disabled = false;
            element.removeAttribute('disabled');
            var hrefBackObject = element.getAttribute('href_back');
            if (hrefBackObject && hrefBackObject != '') {
                element.setAttribute('href', hrefBackObject);
                element.removeAttribute('href_back');
            }
        }
        else if ((!value) && (!element.disabled)) {
            element.disabled = true;
            element.setAttribute("disabled", true);
            var hrefObject = element.getAttribute('href');
            if (hrefObject && hrefObject != '') {
                element.setAttribute('href_back', hrefObject);
            }
            element.removeAttribute("href");
        }
    }
};

function IsDOBValid(mm, dd, yyyy) {
   if (yyyy == "0" && mm == "0" && dd == "0") {
        return true;
    }
    else {
        var dob = mm + "/" + dd + "/" + yyyy;
        if (isDate(dob)) {
            var dtDob = new Date(dob);
            var _now = new Date();
            if (dtDob > _now) {
                return false;
            }
            return true;
        }
        else {
            return false;
        }
    }
}
/*---------------------------- DATE VALIDATION -------------------------*/
var dtCh = "/";
var minYear = 1900;
var maxYear = 2100;

function isInteger(s) {
    var i;
    for (i = 0; i < s.length; i++) {
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}

function stripCharsInBag(s, bag) {
    var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not in bag, append to returnString.
    for (i = 0; i < s.length; i++) {
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function daysInFebruary(year) {
    // February has 29 days in any year evenly divisible by four,
    // EXCEPT for centurial years which are not also divisible by 400.
    return (((year % 4 == 0) && ((!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28);
}
function DaysArray(n) {
    for (var i = 1; i <= n; i++) {
        this[i] = 31
        if (i == 4 || i == 6 || i == 9 || i == 11) { this[i] = 30 }
        if (i == 2) { this[i] = 29 }
    }
    return this
}

function isDate(dtStr) {
    var daysInMonth = DaysArray(12);
    var pos1 = dtStr.indexOf(dtCh);
    var pos2 = dtStr.indexOf(dtCh, pos1 + 1);
    var strMonth = dtStr.substring(0, pos1);
    var strDay = dtStr.substring(pos1 + 1, pos2);
    var strYear = dtStr.substring(pos2 + 1);
    strYr = strYear
    if (strDay.charAt(0) == "0" && strDay.length > 1) strDay = strDay.substring(1);
    if (strMonth.charAt(0) == "0" && strMonth.length > 1) strMonth = strMonth.substring(1);
    for (var i = 1; i <= 3; i++) {
        if (strYr.charAt(0) == "0" && strYr.length > 1) strYr = strYr.substring(1);
    }
    month = parseInt(strMonth);
    day = parseInt(strDay);;
    year = parseInt(strYr);
    if (pos1 == -1 || pos2 == -1) {
        //alert("The date format should be : mm/dd/yyyy")
        return false;
    }
    if (strMonth.length < 1 || month < 1 || month > 12) {
        //alert("Please enter a valid month")
        return false;
    }
    if (strDay.length < 1 || day < 1 || day > 31 || (month == 2 && day > daysInFebruary(year)) || day > daysInMonth[month]) {
        //alert("Please enter a valid day")
        return false;
    }
    if (strYear.length != 4 || year == 0 || year < minYear || year > maxYear) {
        //alert("Please enter a valid 4 digit year between " + minYear + " and " + maxYear)
        return false;
    }
    if (dtStr.indexOf(dtCh, pos2 + 1) != -1 || isInteger(stripCharsInBag(dtStr, dtCh)) == false) {
        //alert("Please enter a valid date")
        return false;
    }
    return true;
}

function SiteSeal(img, type) {
    if (window.location.protocol.toLowerCase() == "https:") { var mode = "https:"; } else { var mode = "http:"; }
    var host = location.host;
    var baseURL = mode + "//seals.networksolutions.com/siteseal_seek/siteseal?v_shortname=" + type + "&v_querytype=W&v_search=" + host + "&x=5&y=5";
    document.write('<a href="#" onClick=\'window.open("' + baseURL + '","' + type + '","width=450,height=500,toolbar=no,location=no,directories=no,\
status=no,menubar=no,scrollbars=no,copyhistory=no,resizable=no");return false;\'>\
<img src="' + img + '" style="border:none;" oncontextmenu="alert(\'This SiteSeal is protected\');return false;"></a>');
}

function SiteSealCheckOut(type) {
    if (window.location.protocol.toLowerCase() == "https:") { var mode = "https:"; } else { var mode = "http:"; }
    var host = location.host;
    var baseURL = mode + "//seals.networksolutions.com/siteseal_seek/siteseal?v_shortname=" + type + "&v_querytype=W&v_search=" + host + "&x=5&y=5";
    window.open(baseURL, type, "width=450,height=500,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,copyhistory=no,resizable=no");
    return false;

}

function SiteSealCheckOutMessage() {
    alert('This SiteSeal is protected'); return false;
}

$(document).ready(function () {
    $("body").on("show", ".modal", function () {
        $(this).css({
            'top': '50%',
            'margin-top': function () {
                return -($(this).height() / 2);
            }
        });
    });

    jQuery.fn.ForceNumericOnly =
        function () {
            return this.each(function() {
                $(this).keydown(function(e) {
                    var key = e.charCode || e.keyCode || 0;
                    // allow backspace, tab, delete, arrows, numbers and keypad numbers ONLY
                    // home, end, period, and numpad decimal
                    return (
                        key == 8 ||
                            key == 9 ||
                            key == 46 ||
                            key == 110 ||
                            key == 190 ||
                            (key >= 35 && key <= 40) ||
                            (key >= 48 && key <= 57) ||
                            (key >= 96 && key <= 105));
                });
            });
        };
});


$(document).ready(function () {
  // Keep dropdown open when input is clicked that resides in dropdown
  $('.dropdown-menu input#emailAddress, .dropdown-menu label').click(function (e) {
    e.stopPropagation();
  });

  // Premier details disclaimer
  $('#premierDetailsTrigger').on('click', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $('#premierDetails').slideToggle(200);
  });    
  //setTimeout(function () {    
  //     LEFCheckTLS();
  //}, 4000);

});


function LEFCheckTLS() {
    tlsCompatible = LEFReadCookieValue("LE", "TLS");
    if (tlsCompatible) {
        if (tlsCompatible == 'N') {
            var displayModal = LEFReadCookieValue("LE", "D");
            if (displayModal && displayModal == 'N') {
                showTLSModal();
            }
        }
    } else {
        verifyTLSVar();
    }
}
function addDays(theDate, days) {
    return new Date(theDate.getTime() + days * 24 * 60 * 60 * 1000);
}

function verifyTLSVar() {
    if (typeof LE_TLSLoaded !== 'undefined') {
        writeCookie("Y");
    } else {
        writeCookie("N");
        showTLSModal();
    }
}
function LogTLSNonCompliant() {
   
    $.ajax({
        type: "POST",
        url:  baseCartUrl + "TLS/LogTLS",
        data: {},
        dataType: "json",
        async: true,
        cache: false
    })
    .done(function (data) {
            var dbug = '';
        })
    .fail(function (data) {
        var dbugFailed = '';

    });
}

function writeCookie(val) {
    var dt = addDays(new Date(), 1);
    document.cookie = 'LE=TLS=' + val + '&D=Y;expires=' + dt + ';domain=.lifeextension.com;path=/;';
}
function showTLSModal() {
    $('#tlsModalContainer').css('display', '');
    $('#tlsModal').modal('show');
    LogTLSNonCompliant();
}

 
function LEFReadCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i].trim();
        if (c.indexOf(name) == 0)
            return c.substring(name.length, c.length);
    }
    return "";
}
function LEFReadCookieValue(cookieName, cookieKey) {

    var cookie = LEFReadCookie(cookieName).split('&');
    for (var i = 0; i < cookie.length; i++) {
        var cookieVal = cookie[i].split('=');
        for (j = 0; j < cookieVal.length; j++) {
            if (cookieVal[0] == cookieKey) {
                return cookieVal[1];
            }
        }
    }
}
