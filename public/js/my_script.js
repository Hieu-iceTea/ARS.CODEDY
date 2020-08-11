/* Preloader */
$(window).on('load', function () {
    $('#preloader-active').delay(450).fadeOut('slow');
    $('body').delay(450).css({
        'overflow': 'visible'
    });
});
/* end Preloader */

$('#notificationModal').modal('show');
$('#errorModal').modal('show');

var proQty = $('.pro-qty');
proQty.on('click', '.number', function () {
    var max = 3;
    var min = 0;

    var $button = $(this);
    var oldValue = $button.parent().find('input').val();
    if (oldValue == max) {
        var newVal = parseFloat(oldValue);
        $button.parent().find('input').val(newVal);
    }
    if (oldValue < max) {
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
        change(newVal);
    } else {
        oldValue = min;
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);

    }

});

function sumPeople() {
    let value1 = makeValue("value1");
    let value2 = makeValue("value2");
    let value3 = makeValue("value3");
    let sumValue = value1 + value2 + value3;
    change(sumValue);
}

function makeValue($id) {
    let value = document.getElementById($id).value;
    return value;
}

function change($value) {
    if ($value > 9) {
        document.getElementsByName('number-of-passenger').innerHTML = 0;
    } else {
        document.getElementsByName('number-of-passenger').innerHTML = $value;
    }
}

