//for contact us / Careers page submit
// var recaptcha1;
// var onloadCallback = function () {

    //Render the recaptcha2 on the element with ID "recaptcha2"
    // recaptcha1 = grecaptcha.render('recaptcha1', {
    //     'sitekey': '6LfXKfYUAAAAAPFhiySQxSELRlUlcjVHXBDFj9wS', //Replace this with your Site key
    //     'theme': 'light'
    // });

// };

(function() {
    // get all data in form and return object
    function getFormData(form) {
        var elements = form.elements;
        var honeypot;

        var fields = Object.keys(elements).filter(function(k) {
            if (elements[k].name === "honeypot") {
                honeypot = elements[k].value;
                return false;
            }
            return true;
        }).map(function(k) {
            if(elements[k].name !== undefined) {
                return elements[k].name;
                // special case for Edge's html collection
            }else if(elements[k].length > 0){
                return elements[k].item(0).name;
            }
        }).filter(function(item, pos, self) {
            return self.indexOf(item) == pos && item;
        });

        var formData = {};
        fields.forEach(function(name){
            var element = elements[name];

            // singular form elements just have one value
            formData[name] = element.value;

            // when our element has multiple items, get their values
            if (element.length) {
                var data = [];
                for (var i = 0; i < element.length; i++) {
                    var item = element.item(i);
                    if (item.checked || item.selected) {
                        data.push(item.value);
                    }
                }
                formData[name] = data.join(', ');
            }
        });

        // add form-specific values into the data
        formData.formDataNameOrder = JSON.stringify(fields);
        formData.formGoogleSheetName = form.dataset.sheet || "responses"; // default sheet name
        formData.formGoogleSendEmail
            = form.dataset.email || ""; // no email by default

        return {data: formData, honeypot: honeypot};
    }

    function handleFormSubmit(event) {  // handles form submit without any jquery
        event.preventDefault();           // we are submitting via xhr below

        // var response = grecaptcha.getResponse(recaptcha1);
        //  if (response.length  ==  0) {
        //         alert("Captcha required.");
        //         return false;
        //     }


        var form = event.target;
        var formData = getFormData(form);
        var data = formData.data;

        // If a honeypot field is filled, assume it was done so by a spam bot.
        if (formData.honeypot) {
            return false;
        }

        disableAllButtons(form);
        var url = form.action;
        var xhr = new XMLHttpRequest();
        xhr.open('POST', url);
        // xhr.withCredentials = true;
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                form.reset();
                var formElements = form.querySelector(".form-elements")
                // if (formElements) {
                //     formElements.style.display = "none"; // hide form
                // }
                // var thankYouMessage = form.querySelector(".thankyou_message");
                // if (thankYouMessage) {
                //     thankYouMessage.style.display = "block";
                // }
                window.location.href = "thankyou.html";
            }
        };
        // url encode form data for sending as post data
        var encoded = Object.keys(data).map(function(k) {
            return encodeURIComponent(k) + "=" + encodeURIComponent(data[k]);
        }).join('&');
        xhr.send(encoded);
    }

    function loaded() {
        // bind to the submit event of our form
        var formsContact = document.querySelectorAll("form.gformContactUs");//Get all the forms having class="gform" in the form tag
        for (var i = 0; i < formsContact.length; i++) {
            formsContact[i].addEventListener("submit", handleFormSubmit, false);
        }
        var formsCareers = document.querySelectorAll("form.gformCareers");//Get all the forms having class="gform" in the form tag
        for (var i = 0; i < formsCareers.length; i++) {
            formsCareers[i].addEventListener("submit", handleFormSubmit, false);
        }
    };
    document.addEventListener("DOMContentLoaded", loaded, false);

    function disableAllButtons(form) {
        var buttons = form.querySelectorAll("button");
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].disabled = true;
        }
    }
})();
