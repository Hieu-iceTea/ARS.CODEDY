/* Preloader */
$(window).on('load', function () {
    $('#preloader-active').delay(4500).fadeOut('slow');
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

function preloaderActive() {
    $('#preloader-active').delay(0).fadeIn(10);
    $('#preloader-active').delay(300).fadeOut('slow');
}

function setValue(flight_schedule_id, seat_type, seat_price, adults, children, infant) {
    preloaderActive();

    //set value to hidden-field input
    document.getElementById('flight_schedule_id').value = flight_schedule_id;
    document.getElementById('seat_type').value = seat_type;
    document.getElementById('seat_price').value = seat_price;
    document.getElementById('adults').value = adults;
    document.getElementById('children').value = children;
    document.getElementById('infant').value = infant;
    document.getElementById('total_passenger').value = adults + children + infant;

    //set value to label info
    // document.getElementById('sub_total').innerText = seat_price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
    const sub_totals = document.getElementsByClassName('sub_total');
    for (const sub_total of sub_totals) {
        sub_total.innerText = seat_price.toLocaleString("vi-vn");
    }

    const total_price_adults = adults * seat_price;
    const total_price_children = children * seat_price;
    const total_price_infant = infant * seat_price;
    const total_price = total_price_adults + total_price_children + total_price_infant;
    document.getElementById('total_price_adults').innerText = total_price_adults.toLocaleString("vi-vn");
    document.getElementById('total_price_children').innerText = total_price_children.toLocaleString("vi-vn");
    document.getElementById('total_price_infant').innerText = total_price_infant.toLocaleString("vi-vn");
    document.getElementById('total_price').innerText = total_price.toLocaleString("vi-vn");
}
