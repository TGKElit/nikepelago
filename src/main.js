let budgetScrollerPosition = 0;


document.getElementById("budget-right").addEventListener("click", function() {
    imageScroller('right');
});

document.getElementById("budget-left").addEventListener("click", function() {
    imageScroller('left');    
});

function imageScroller(direction) {
    switch (direction) {
        case 'right':
            budgetScrollerPosition -= 1;
            break;
        case 'left':
            budgetScrollerPosition += 1;
            break;
    }
    if (budgetScrollerPosition <= -3) {
        budgetScrollerPosition = 0;
    }
    if (budgetScrollerPosition >= 1) {
        budgetScrollerPosition = -2;
    }
    document.getElementById("budget-scroller").style.transform = "translate(" + budgetScrollerPosition * scrollerStep + "px)";
}

for (let i = 0; i < 31; i++) {
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

document.getElementById("confirm-button").addEventListener("mousedown", function(){
    document.getElementById("selected-dates").value = getSelected();
});