const date = new Date();

const renderCalendar = () => {
  date.setDate(1);

  const monthDays = document.querySelector(".days");

  const lastDay = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDate();

  const prevLastDay = new Date(
    date.getFullYear(),
    date.getMonth(),
    0
  ).getDate();

  const firstDayIndex = date.getDay();

  const lastDayIndex = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDay();

  const nextDays = 7 - lastDayIndex - 1;

  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];

  document.querySelector(".date h1").innerHTML = months[date.getMonth()];

  document.querySelector(".date p").innerHTML = new Date().toDateString();

  let days = "";

  for (let x = firstDayIndex; x > 0; x--) {
    days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
  }

  for (let i = 1; i <= lastDay; i++) {
    if (
      i === new Date().getDate() &&
      date.getMonth() === new Date().getMonth()
    ) {
      days += `<div class="today">${i}</div>`;
    } else {
      days += `<div>${i}</div>`;
    }
  }

  for (let j = 1; j <= nextDays; j++) {
    days += `<div class="next-date">${j}</div>`;
    monthDays.innerHTML = days;
  }
};

document.querySelector(".prev").addEventListener("click", () => {
  date.setMonth(date.getMonth() - 1);
  renderCalendar();
});

document.querySelector(".next").addEventListener("click", () => {
  date.setMonth(date.getMonth() + 1);
  renderCalendar();
});

renderCalendar();

function loadPage(name){
  if(name == "btn1"){
    window.location = "file:///C:/Users/ASUS/Desktop/IWT%20final%20project~/Templete/librarySearch.html"
  }
  else if(name == "btn2"){
    window.location = "file:///C:/Users/ASUS/Desktop/IWT%20final%20project~/Templete/libraryPolicies.html"
  }
  else if(name == "btn3"){
    window.location = "file:///C:/Users/ASUS/Desktop/IWT%20final%20project~/Templete/Borrowing.html"
  }
  else if(name == "btn4"){
    window.location = "file:///D:/XAMPP/htdocs/IWT%20final%20project~/Templete/form.html"
  }
  else if(name == "btn5"){
    window.location = "file:///C:/Users/ASUS/Desktop/IWT%20final%20project~/Templete/reading.html"
  }
}
