const jsonSource = new Request('logbook.json');
const myList = document.querySelector('.card-wrapper');

function createListItem(
  island,
  hotel,
  stars,
  arrival,
  departure,
  totalCost,
  features,
  addInfo
) {
  const listItem = document.createElement('div');
  listItem.classList.add('card');
  listItem.innerHTML = `
    <h2 class="logbook-trigger">${hotel}</h2>
    <hr>
    <div class="booking-content hidden">
    <p>You visited the <span>${stars}</span> star hotel <span>${hotel}</span> located on <span>${island}</span>.</p>
    <p>You stayed between <span>${arrival}</span> and <span>${departure}</span>. You spent a total of <span>$${totalCost}</span> during your stay.</p>
    <p> ${features} </p>
    <p class="add-info">${addInfo}</p>
    </div>
    `;
  myList.appendChild(listItem);
}

fetch(jsonSource, {
  method: 'GET',
  headers: {
    Accept: 'application/json',
  },
})
  .then((response) => response.json())
  // .then((response) => console.log(response));
  .then((response) => {
    response.forEach((booking) => {
      createListItem(
        booking.island,
        booking.hotel,
        booking.stars,
        booking.arrival_date,
        booking.departure_date,
        booking.total_cost,
        getFeatures(booking.features),
        additionalInfoIsSet(booking.additional_info)
      );
    });
  });

function additionalInfoIsSet(addInfo) {
  if (addInfo.length > 0) {
    return 'Greetings: ' + addInfo;
  } else {
    return 'Greetings: ' + addInfo.message + ' ' + addInfo.musicVideo;
  }
}

function getFeatures(featuresArray) {
  function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
  }

  if (featuresArray.length > 0) {
    return (
      capitalizeFirstLetter(featuresArray[0].name) +
      ' for <span>$' +
      featuresArray[0].cost +
      '</span>'
    );
  } else {
    return 'No features enjoyed';
  }
}
