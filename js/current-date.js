let dt = new Date();
let dayOfMonth = dt.getDate();
let month = dt.toLocaleString('default', { month: 'long' });
let year = dt.getFullYear();
let time = dt.toLocaleTimeString('en-US', { hour12: false });
let timeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;

dt = `${dayOfMonth} ${month} ${year} - ${time} (${timeZone})`;
document.getElementById('date-time').innerHTML = dt;