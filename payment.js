$("document").ready(function() {
    // check if the name is valid
    function name_validator() {
        var name = document.querySelector('[name="name"]').value;
        var pattern = /^[a-z\s]+$/i;
        return pattern.test(name);
    }

    // check if the email is valid
    function email_validator() {
        var email = document.querySelector('[name="email"]').value;
        var pattern = /^[a-z0-9]+@[a-z0-9]+\.[a-z]+$/i;
        return pattern.test(email);
    }

    // check if the zip is valid
    function zip_validator() {
        var zip = document.querySelector('[name="zip"]').value;
        var pattern = /^[0-9]{5}$/i;
        return pattern.test(zip);

    }

    // check if the card number, expire date is valid
    function card_validator() {
        var card = document.querySelector('[name="card-number"]').value;
        var card_type = $("#card-type").find(":selected").text();
        switch (card_type) {
            case "American Express":
                var pattern_card = /^3[47][0-9]{13}$/;
                return pattern.test(card);
                break;

            case "Discover":
                var pattern_card = /^6(?:011|5[0-9]{2})[0-9]{12}$/;
                return pattern.test(card);
                break;

            case "MasterCard":
                var pattern_card = /^5[1-5][0-9]{14}$/;
                return pattern.test(card);
                break;

            case "Visa":
                var pattern_card = /^4[0-9]{12}(?:[0-9]{3})?$/;
                return pattern.test(card);
                break;
        }
    }

    function expire_date_validator() {
        var mm = document.querySelector('[name="mm"]').value;
        var yy = document.querySelector('[name="yy"]').value;
        if (parseInt(mm) < 1 || parseInt(mm) > 12 || parseInt(yy) < 15 || parseInt(yy) > 99) {
            return false;
        }
        return true;
    }


    $("#pay-form").submit(function() {
        if (!name_validator()) {
            alert("The name is incorrect!");
            event.preventDefault();
            return;
        }

        if (!email_validator()) {
            alert("The Email is incorrect!");
            event.preventDefault();
            return;
        }

        if (!zip_validator()) {
            alert("The zip code is incorrect!");
            event.preventDefault();
            return;
        }

        if (!card_validator()) {
            alert("The card number is incorrect!");
            event.preventDefault();
            return;
        }

        if (!expire_date_validator()) {
            alert("The expire date is incorrect!");
            event.preventDefault();
            return;
        }
    });


});