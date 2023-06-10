document.getElementById("reminderForm").addEventListener("submit", function(event) {
  event.preventDefault();
  var reminderText = document.getElementById("reminderText").value;
  var reminderDateTime = document.getElementById("reminderDateTime").value;

  // You can perform additional validation or formatting of the input values here

  // Send the reminder details to the server using AJAX or fetch API
  // and handle the server-side logic to send the reminder at the specified time
});








// document.getElementById('reminderForm').addEventListener('submit', function(event) {
//   event.preventDefault();

//   var reminderText = document.getElementById('reminderText').value;
//   var reminderDate = document.getElementById('reminderDate').value;

//   // Retrieve existing reminders from localStorage
//   var reminders = JSON.parse(localStorage.getItem('reminders')) || [];

//   // Add the new reminder to the array
//   reminders.push({ text: reminderText, date: reminderDate });

//   // Store the updated reminders array in localStorage
//   localStorage.setItem('reminders', JSON.stringify(reminders));

//   alert('Reminder set successfully!');
//   // You can replace the alert with a more elegant UI notification
// });

// // Check for reminders when the page loads
// window.addEventListener('load', function() {
//   var reminders = JSON.parse(localStorage.getItem('reminders'));

//   if (reminders && reminders.length > 0) {
//     var currentDate = new Date().toISOString().split('T')[0];

//     reminders.forEach(function(reminder) {
//       if (reminder.date === currentDate) {
//         alert('Reminder: ' + reminder.text);
//         // You can replace the alert with a more elegant UI notification

//         // Remove the reminder from the array
//         var index = reminders.indexOf(reminder);
//         reminders.splice(index, 1);

//         // Store the updated reminders array in localStorage
//         localStorage.setItem('reminders', JSON.stringify(reminders));
//       }
//     });
//   }
// });