let scrollerPosition = {
    'budget': 0,
    'standard': 0,
    'luxury': 0,
};

document.getElementById("budget-right")?.addEventListener("click", function() {
    imageScroller('right', 'budget');
});

document.getElementById("budget-left")?.addEventListener("click", function() {
    imageScroller('left', 'budget');    
});

document.getElementById("standard-right")?.addEventListener("click", function() {
    imageScroller('right', 'standard');
});

document.getElementById("standard-left")?.addEventListener("click", function() {
    imageScroller('left', 'standard');    
});

document.getElementById("luxury-right")?.addEventListener("click", function() {
    imageScroller('right', 'luxury');
});

document.getElementById("luxury-left")?.addEventListener("click", function() {
    imageScroller('left', 'luxury');    
});



function imageScroller(direction, roomType) {
    console.log(scrollerPosition[roomType]);
    switch (direction) {
        case 'right':
            scrollerPosition[roomType] -= 1;
            break;
        case 'left':
            scrollerPosition[roomType] += 1;
            break;
    }
    if (scrollerPosition[roomType] <= -3) {
        scrollerPosition[roomType] = 0;
    }
    if (scrollerPosition[roomType] >= 1) {
        scrollerPosition[roomType] = -2;
    }
    document.getElementById(roomType + "-scroller").style.transform = "translate(" + scrollerPosition[roomType] * scrollerStep + "px)";
}

for (let i = 0; i < Array.from(document.getElementsByClassName("day-of-month")).length; i++) {
    let date = document.getElementsByClassName("day-of-month").item(i);
    date.addEventListener("click", function() {
        date.classList.toggle("selected");
    });
}

function getSelected() {
    let selectedDates = Array.from(document.getElementsByClassName("selected"));
    let booking = [];
    selectedDates.forEach(date => {
        booking.push(date.innerHTML);
    });
    return booking;
}

document.getElementById("confirm-button")?.addEventListener("mousedown", function(){
    document.getElementById("selected-dates").value = getSelected();
});

function updatePrice() {
    let daysBooked = Array.from(document.getElementsByClassName("selected")).length;
    let basePrice = daysBooked * document.getElementById("room-price").innerHTML.match(/\d/g);;
    let featurePrice = 0;
    let discount = (0.05 * Math.floor(daysBooked/3));
    let price = Math.floor((basePrice + featurePrice) * (1-discount) * 100)/100;

    document.getElementById("form-price").value = price;
    document.getElementById("display-price").innerHTML = price;
    console.log(price);
}

document.addEventListener("click", function(){
    updatePrice();
});